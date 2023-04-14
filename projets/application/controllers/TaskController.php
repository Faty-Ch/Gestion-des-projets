<?php
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/ProjetDAO.php');
require_once(realpath(dirname(__FILE__)) . '/../../application/dao/TaskDAO.php');
require_once('labrary/View.php');
require_once('labrary/BaseController.php');

/**
 * @access public
 * @author pc
 * @package application.controllers
 */
class TaskController extends BaseController{
	private $view;
	private $projetDAO;
	/**
	 * @access public
	 */
	public function __construct() {
		parent::__construct();
		$this->taskDAO = new TaskDAO();
	}
	/**
	 * @access public
	 */
	public function index() {
		$this->view = new View('TaskController','index');
		$this->view->render();
	}
	/**
	 * @access public
	 */
	public function add($projetId) {
		if(isset($_POST['projetID'])){
			$projet = new Projet();
			$projet->setId($_POST['projetID']);
			$task = new Task($projet,$_POST['nom'],$_POST['debut'], $_POST['fin']);
			
			$this->taskDAO->insert($task);
			header("location:../projetController/liste");
			exit();
		}
		$this->view= new View('TaskController','add');
		$this->view->projetId =$projetId;
		$this->view->render();
		
	}
	/**
	 * @access public
	 */
	public function details() {
		$this->view= new View('TaskController','liste');
		$result = $this->taskDAO->getDetails();
		$this->view->details=$result;
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