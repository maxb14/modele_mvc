<?php
/* Inclusion des classes nécessaires */
require_once("view/Vue.php");
require_once("model/FormBuilder.php");


class ControllerForm {

	protected $view;
	protected $router;

	public function __construct(Router $router, Vue $view) {
		$this->router = $router;
		$this->view = $view;
	}
	
	
	/******************************************************************************/
	/* Gestion des formulaires !                                                  */
	/******************************************************************************/

	public function verifFormOk() {	
		$builder = new FormBuilder();
		if ($builder->isValidForm($_POST)) {
			if ($_POST['sex'] == "monsieur") {
				$qualite = "M.";
			}
			else {
				$qualite = "Mme.";
			}
			$message = 'Bonjour '.$qualite.' '.$_POST['prenom'].' '.$_POST['nom'].'.<br />';
			$message .= 'Votre email est '.$_POST['emailaddress'].'.<br /><br />';
			$message .= 'Vous aimez les couleurs suivantes: <br /><br />';
			foreach ($_POST['couleurs'] as $coul) {
				$message .= '- '.$coul.'<br />';
			}
			$this->view->makePersonnalisedPage("Félicitation !", $message);
		}
		else {
			// On renvoi sur une page d'erreur avec un message personnalisé décrivant l'erreur
			$this->view->makePersonnalisedPage("Error", $builder->getError());
			header('Refresh:3 ;url='.$this->router->getForm());
		}
	}
}

?>
