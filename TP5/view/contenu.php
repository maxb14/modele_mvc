<!DOCTYPE html>
<html lang="fr">
	<head>
		<title><?php echo $title ?></title>
		<meta charset="UTF-8" />
<style>
			.cssform p{
			width: 300px;
			clear: left;
			margin: 0;
			padding: 5px 0 8px 0;
			padding-left: 155px; /*width of left column containing the label elements*/
			border-top: 1px dashed gray;
			height: 1%;
			}

			.cssform label{
			font-weight: bold;
			float: left;
			margin-left: -155px; /*width of left column*/
			width: 150px; /*width of labels. Should be smaller than left column (155px) to create some right margin*/
			}

			.cssform input[type=&quot;text&quot;]{ /*width of text boxes. IE6 does not understand this attribute*/
			width: 180px;
			}

			.cssform textarea{
			width: 250px;
			height: 150px;
			}

			/*.threepxfix class below:
			Targets IE6- ONLY. Adds 3 pixel indent for multi-line form contents.
			to account for 3 pixel bug: http://www.positioniseverything.net/explorer/threepxtest.html
			*/

			* html .threepxfix{
			margin-left: 3px;
			} 
			
			.warning {
				color: red;
				margin: auto;
			}
		</style>
	</head>
	<body>
		<main>
			<a href="index.php">Accueil</a>
			<h1><?php echo $title; ?></h1>
			<hr />
			<br />
			<div id="content"><?php echo $content; ?></div>
		</main>
		<br />
		<hr />
		<footer>
			<p>&copy; TP M1DNR2i | Maxime Blaszka</p>
		</footer>
	</body>
</html>