<?php

class FormBuilder {

	protected $error;
	
	/* Accesseur qui renvoi l'erreur */
	public function getError() {
		return $this->error;
	}
	
	
	/* fonction permettant de valider si les champs rentrés sont conformes */
	public function isValidForm($data) {
		$errorok = 0;
		if (isset($data['prenom'])) {
			if (empty($data['prenom'])) {
				$this->error = 'Veuillez remplir le champ !';
				$errorok = 1;
			}
			if (strlen($data['prenom']) > 15) {
				$this->error = '15 caractères maximum !';
				$errorok = 1;
			}
			if (!preg_match("/^[a-zA-Z]*$/", $data['prenom'])) {
				$this->error = 'Caractères invalides !';
				$errorok = 1;
			}
		}
		
		if (isset($data['nom'])) {
			if (empty($data['nom'])) {
				$this->error = 'Veuillez remplir le champ !';
				$errorok = 1;
			}
			if (strlen($data['nom']) > 15) {
				$this->error = '15 caractères maximum !';
				$errorok = 1;
			}
			if (!preg_match("/^[a-zA-Z]*$/", $data['nom'])) {
				$this->error = 'Caractères invalides !';
				$errorok = 1;
			}
		}
		if (isset($data['emailaddress'])) {
			if (empty($data['emailaddress'])) {
				$this->error = 'Veuillez remplir le champ !';
				$errorok = 1;
			}
			if (!filter_var($data['emailaddress'], FILTER_VALIDATE_EMAIL)) {
				$this->error = 'Adresse email invalide !';
				$errorok = 1;
			}
		}
		if (isset($data['couleurs'])) {
			if (sizeof($data['couleurs']) == 0) {
				$this->error = 'Selectionnez au moins 1 couleure !';
				$errorok = 1;
			}
		}
		
		if ($errorok == 1) {
			return false;
		}
		else {
			return true;
		}
	}
}

?>
