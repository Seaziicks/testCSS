<?php
header("Content-Type:application/json");
include('../BDD.php');


$idCompetence = $_GET['id'];
$effectsApplied = $bdd->query('SELECT *
					from effectapplied
					where IDReceiver='.$_GET['id'].'');
								
	$réponse=array();
	while($resultat = $effectsApplied->fetch(PDO::FETCH_ASSOC)){

		array_push($réponse,$resultat);
					
	}					


?>