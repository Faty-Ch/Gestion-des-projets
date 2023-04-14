<?php
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/ProjetDAO.php');
require_once('labrary/View.php');
require_once('labrary/BaseController.php');

/**
 * @access public
 * @author pc
 * @package application.controllers
 */
class ProjetController extends BaseController{
	private $view;
	private $projetDAO;
	/**
	 * @access public
	 */
	public function __construct() {
		parent::__construct();
		$this->projetDAO = new ProjetDAO();
	}
	/**
	 * @access public
	 */
	public function index() {
		$this->view = new View('ProjetController','index');
		$this->view->render();
	}
	/**
	 * @access public
	 */
/*	public function add() {
		if(isset($_POST['submit'])){
			$projet = new Projet($_POST['titre'],$_POST['debut'], $_POST['fin'],$_POST['description']);
			$this->projetDAO->insert($projet);
			header("location:../projetController/liste");
			exit();
		}
		$this->view= new View('ProjetController','add');
		$this->view->title="Ajouter un projet";
		$this->view->render();
		
	}*/
	public function add() {
		$errors = array();
		$success = false;
	  
		// Vérifier si le formulaire a été soumis
		if(isset($_POST['titre'])){
		  // Récupérer les données du formulaire
		  $titre = trim($_POST['titre']);
		  $debut = trim($_POST['debut']);
		  $fin = trim($_POST['fin']);
		  $description = trim($_POST['description']);
	  
		  // Validation des données
		  if(empty($titre)){
			$errors[] = "Le titre du projet est obligatoire";
		  }
	  
		  if(empty($debut)){
			$errors[] = "La date de début du projet est obligatoire";
		  }
	  
		  if(empty($fin)){
			$errors[] = "La date de fin du projet est obligatoire";
		  }
	  
		  if(empty($description)){
			$errors[] = "La description du projet est obligatoire";
		  }
	  
		  // Si les données sont valides, insérer le projet en base de données
		  if(empty($errors)){
			$projet = new Projet($titre, $debut, $fin, $description);
			$inserted = $this->projetDAO->insert($projet);
	  
			if($inserted){
			  $success = true;
			} else {
			  $errors[] = "Erreur lors de l'insertion en base de données";
			}
		  }
		}
	  
		// Afficher la vue avec les erreurs éventuelles
		$this->view= new View('ProjetController','add');
		$this->view->title="Ajouter un projet";		
		$this->view->errors = $errors;
		$this->view->success = $success;
		$this->view->render();


	
	print_r($_POST);
	  }
	/**
	 * @access public
	 */
	public function liste() {
		$this->view= new View('ProjetController','liste');
		$result = $this->projetDAO->getAll();
		$this->view->projets=$result;
		$this->view->title="Liste des projets";
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function details($projetId) {
		$this->view= new View('ProjetController','details');
		$result = $this->projetDAO->getDetails($projetId);
		$this->view->details=$result;
		$this->view->title="Détails du projet";
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function delete($projetId) {
		$result = $this->projetDAO->delete($projetId);
		if($result){
			header("location:../liste");
		}else{
			$message = "impossible de supprimer de projet";
			header("location:../ErrorController/index/$message");
			exit();
		}
		
	}

}	
?>