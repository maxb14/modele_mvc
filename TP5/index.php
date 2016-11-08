<?php

require_once("Router.php");

try
{
	$router = new Router();
	$router->main();	
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

?>
