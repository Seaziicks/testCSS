<?php

// Sous WAMP (Windows)

try
{
$bdd = new PDO('mysql:host=localhost;dbname=u418341279_rp;charset=utf8', 'u418341279_root', 'banane00002');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}

?>