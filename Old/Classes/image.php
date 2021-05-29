<?php 

include("BDD.php");

$competences = $bdd->query('SELECT * FROM competence WHERE Id_Competence = 175 ');

$competence =$competences->fetch();
$competences->closeCursor();

echo $competence['Image'].'<br><br><br>';


echo str_replace("'", "\'",$competence['Image']);


//if(!isset($_POST['newImage'])  || empty($_POST['newImage'])){$_POST['newImage']='NULL';}else{$_POST['newImage']='\''.str_replace("'", "\'",$_POST['newImage']).'\'';}




?>