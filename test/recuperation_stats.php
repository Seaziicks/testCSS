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
$NIVEAU = $bdd->query('SELECT niveau
					from competence c
					where c.id_competence ='.$id.' ');
$niv=$NIVEAU->fetch();				
$personnage=$_GET['personnage'];
include('statistiques.php');

//Je mets $niv['niveau'] car $niveau['niveau'] fait planter ...
$réponse=array('Niveau'=>intval($niv['niveau']),'Force'=>intval($bonusforce+$force),'intelligence'=>intval($bonusintelligence+$intelligence),'Agilite'=>intval($bonusagilité+$agilité),'PA'=>intval($paactuel),'PM'=>intval($pmactuel),'Vitalite'=>intval($bonusvitalité+$vitalité),'Ressource'=>intval($ressource+$bonusressource));





function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
    return json_encode($arr,448);
    }else{
    return json_encode($arr);  
    }
}
$recherche->closeCursor();
echo json_encode($réponse);
}