<?php

include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT Id_Personnage, Libellé, Niveau, Image, iconImage, team, initiative, PDV_Actuel, Bouclier
					from personnage, combatSession
					where Id_Personnage ='.$_GET['id'].'
					and Id_Personnage = idPersonnage');
					
					
					
					
	$réponseWitoutCamelCase=$personnagesInfos->fetch(PDO::FETCH_ASSOC);

    $réponse['Id_Personnage']=$réponseWitoutCamelCase['Id_Personnage'];
	$réponse['Libelle']=$réponseWitoutCamelCase['Libellé'];
    $réponse['Niveau']=$réponseWitoutCamelCase['Niveau'];
	$réponse['Image']=$réponseWitoutCamelCase['Image'];
	$réponse['iconImage']=$réponseWitoutCamelCase['iconImage'];
	$réponse['team']=$réponseWitoutCamelCase['team'];
    $réponse['initiative']=$réponseWitoutCamelCase['initiative'];
    $réponse['PDV_Actuel']=$réponseWitoutCamelCase['PDV_Actuel'];
    $réponse['Bouclier']=$réponseWitoutCamelCase['Bouclier'];
?>