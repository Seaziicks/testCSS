<?php

//On sort en cas de paramètre manquant ou invalide

if(empty($_GET['id']) or !is_numeric($_GET['id']))
{
    exit;
}
try
{
    include("BDD.php");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
session_start();


		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		$data = $recherche->fetch(); //On les mets sous forme string

		$id_groupe= $data['id_groupe']; //On prend l'id qui vient d'être attribué

if (isset($id_groupe) && $id_groupe == 0) {

$id = $_GET['id'];
$CD = $bdd->query('SELECT c.TempsRechargement
					from competence c
					where c.id_competence ='.$id.' ');
$cd=$CD->fetch();				
echo $cd['TempsRechargement'];

$req = $bdd->prepare('UPDATE competence SET Cooldown = '.$cd['TempsRechargement'].' WHERE id_competence = :id');

	$req->execute(array('id' => $_GET['id']));
}
?>