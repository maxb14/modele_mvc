<?php

require_once("view/Vue.php");
require_once("control/ControllerForm.php");

class Router {
	private $view;


	/* Fonction principale */
	public function main() {

		/* Vue du site */
		$this->view = new Vue($this);
		
		$action = isset($_GET['action'])? $_GET['action']: null;
		
		if ($action == null) {
			/* Pas d'action demandée : par défaut on affiche
	 	 	 * la page d'accueil */
			$this->view->makeHomePage();
		}
		else {
			$ctlForm = new ControllerForm($this, $this->view);				
			
			switch($action) {
				case "genere":
					$this->view->makeGenereForm();
					break;
				case "valid": //site
					$ctlForm->verifFormOk();
					break;
				default:
					$this->view->makeHomePage();
					break;
				}
		}
		/* Enfin, on affiche la page  */
		$this->view->render();
	}

	
	/******************************************************************************/
	/* Création des différents URL 		                                          */
	/******************************************************************************/
	
	/* URL de la page d'accueil */
	public function getHomeURL() {
		return ".";
	}

	/* URL de la page informations */	
	public function getForm() {
		return "?action=genere";
	}
	
	/* URL de la page informations */	
	public function getValid() {
		return "?action=valid";
	}
	
}
?>