<?php
require_once("Router.php");

/* Classe qui gère l'affichage */
class Vue {

	protected $router;
	protected $title;
	protected $content;

	public function __construct(Router $router) {
		$this->router = $router;
		$this->title = null;
		$this->content = null;
	}

	
	/* Affiche la page créée. */
	public function render() {
		if ($this->title === null || $this->content === null) {
			$this->makeUnexpectedErrorPage();
		}
		$title = $this->title;
		$content = $this->content;
		include("contenu.php");
	}
	
	public function makeHomePage() {
		$this->title = "Bonjour";
		$this->content = "Bienvenue sur le TP de création d'un formulaire en POO avec PHP.";
		$this->content .= '<br /><a href="'.$this->router->getForm().'">Générer le formulaire !</a>';		
	}
	
	
	/* vue de la page de modification d'un téléphone */
	public function makeGenereForm() {
		$this->title = "Formulaire";
		$s = '<form id="myform" action="'.$this->router->getValid().'" method="POST" class="cssform">';	
		#champ 1
		$s .= '<p><label for="sex">Qualité :</label>';
		$s .= '<input type="radio" name="sex" id="sex" value="madame" checked="checked" />Madame<br />';
		$s .= '<input type="radio" name="sex" id="sex" value="monsieur" />Monsieur</p>';
		#champ 2
		$s .= '<p><label for="prenom">Prénom :</label>';
		$s .= '<input type="text" name="prenom" id="prenom" /></p>';
		#champ 3
		$s .= '<p><label for="nom">Nom :</label>';
		$s .= '<input type="text" id="nom" name="nom" /></p>';
		#champ 4
		$s .= '<p><label for="emailaddress">Email :</label>';
		$s .= '<input type="text" id="emailaddress" name="emailaddress" /></p>';
		#champ 5
		$s .= '<p><label>Vous aimez :</label>
				<select name="couleurs[]" size="4" multiple>
					<option>rouge</option>
					<option>jaune</option>
					<option>vert</option>
					<option>bleu</option>
				</select></p>';
		$s .= '<p><label for="comments">Vous aimez le pain :</label>
				<input type="checkbox" name="hobby" /> Complet<br />
				<input type="checkbox" name="hobby" class="threepxfix" /> blanc<br />
				<input type="checkbox" name="hobby" class="threepxfix" /> seigle</p>

				<p><label for="comment">Que faites-vous dans la vie ?</label>
				<textarea id="comment" name="comment" rows="5" cols="25"></textarea></p>
			<br /><br />';
		$s .= "<input type=\"submit\" value=\"Envoyer\" />";
		$s .= "</form>";
		$this->content = $s;
	}
	
	/* Vue de la page sur laquelle on affiche divers messages ! */
	public function makePersonnalisedPage($titre, $contenu) {
		$this->title = $titre;
		$this->content = $contenu;
	}

	
	/* Vue de la page d'erreur fatale */
	public function makeUnexpectedErrorPage() {
		$this->title = "Erreur";
		$this->content = "Une erreur inattendue s'est produite.";
	}
	
}

?>
