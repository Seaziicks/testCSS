<?php


include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT Id_Competence, Libellé, Image, Niveau
					from competence
					where Id_Competence = '.$_GET['id'].'');		
					
	$réponseWitoutCamelCase=$personnagesInfos->fetch(PDO::FETCH_ASSOC);
	
	$réponse['Id_Competence']=$réponseWitoutCamelCase['Id_Competence'];
	$réponse['Libelle']=$réponseWitoutCamelCase['Libellé'];
	$réponse['Image']=$réponseWitoutCamelCase['Image'];
	$réponse['Niveau']=$réponseWitoutCamelCase['Niveau'];
	
	// print_r($réponse);
?>