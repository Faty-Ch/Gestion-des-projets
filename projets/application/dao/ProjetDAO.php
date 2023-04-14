<?php
require_once(realpath(dirname(__FILE__)) . '/../../application/models/Projet.php');
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/DB.php');

/**
 * @access public
 * @author pc
 * @package application.dao
 */
class ProjetDAO {
	private  $cn;

	public function __construct(){
		$this->cn = DB::getInstance();
	}
	/**
	 * @access public
	 */
	public function insert(Projet $projet) {
		$sql = "INSERT INTO `projet` 
				(`Id`, `Titre`, `DateDebut`, `DateFin`, `Description`) 
				VALUES 
				(NULL, ?, ?, ?, ?)";
		$stmt = mysqli_prepare($this->cn, $sql);
		$titre = $projet->getTitre();
		$dateDebut = $projet->getDateDebut();
		$dateFin = $projet->getDateFin();
		$description = $projet->getDescription();
		mysqli_stmt_bind_param($stmt, "ssss", $titre, $dateDebut, $dateFin, $description);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		mysqli_close($this->cn);
	}

	public function getAll(){
		$sql = "SELECT * FROM `projet`;";
		$rs = mysqli_query($this->cn,$sql);
		$result = array();
		while( $data=mysqli_fetch_assoc($rs)){
			$result[]=$data;
		}
		mysqli_close($this->cn);
		return $result;
	}
	public function getDetails($projetId){
		$sql = "SELECT * FROM `projet` WHERE `Id`='$projetId'  ";
		$rs1 = mysqli_query($this->cn,$sql);
		$result = mysqli_fetch_assoc($rs1);
		$sql2 = "SELECT * FROM `task` WHERE  `ProjetId`='$projetId';";
		$rs2 = mysqli_query($this->cn,$sql2);
		while($data= mysqli_fetch_assoc($rs2) ){
			$result['tasks'][]=$data;
		}
		
		mysqli_close($this->cn);
		return $result;
	}
	public function getById($id){
		$sql = "SELECT * FROM `projet` WHERE `ID`=$id ;";
		$rs = mysqli_query($this->cn,$sql);
		$result=mysqli_fetch_assoc($rs);
		mysqli_close($this->cn);
		return $result;
	
	}
	public function delete($id){
		$sql = "DELETE FROM `projet` WHERE `Id`=$id ;";
		$result = mysqli_query($this->cn,$sql);
		return $result;
	}
	
}
?>