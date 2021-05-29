<?php


include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT *
					from personnage
					where Id_Personnage='.$_GET['id'].'');
					
					
					
					
	$réponseWitoutCamelCase=$personnagesInfos->fetch(PDO::FETCH_ASSOC);
	
	$personnage=$réponseWitoutCamelCase['Libellé'];
					
	include("statistiques.php");
	
	

	$réponse['Id_Personnage']=$réponseWitoutCamelCase['Id_Personnage'];
	$réponse['Libelle']=$réponseWitoutCamelCase['Libellé'];
	$réponse['Niveau']=$réponseWitoutCamelCase['Niveau'];
	$réponse['PA']=$réponseWitoutCamelCase['PA'];
	$réponse['PA_Actuel']=$réponseWitoutCamelCase['PA_Actuel'];
	$réponse['PM']=$réponseWitoutCamelCase['PM'];
	$réponse['PM_Actuel']=$réponseWitoutCamelCase['PM_Actuel'];
	$réponse['Force']=$réponseWitoutCamelCase['Force'];
	$réponse['Agilite']=$réponseWitoutCamelCase['Agilité'];
	$réponse['Intelligence']=$réponseWitoutCamelCase['Intelligence'];
	$réponse['Vitalite']=$réponseWitoutCamelCase['Vitalité'];
	$réponse['PDV_Actuel']=$réponseWitoutCamelCase['PDV_Actuel'];
    $réponse['Bouclier']=$réponseWitoutCamelCase['Bouclier'];
	$réponse['Ressource']=$réponseWitoutCamelCase['Ressource'];
	$réponse['Ressource_Actuelle']=$réponseWitoutCamelCase['Ressource_Actuelle'];
	$réponse['Type_Ressource']=$réponseWitoutCamelCase['Type_Ressource'];
	$réponse['Reussite']=$réponseWitoutCamelCase['Réussite'];
	$réponse['Charisme']=$réponseWitoutCamelCase['Charisme'];
	$réponse['Marchandage']=$réponseWitoutCamelCase['Marchandage'];
	$réponse['Intimidation']=$réponseWitoutCamelCase['Intimidation'];
	$réponse['Chance']=$réponseWitoutCamelCase['Chance'];
	$réponse['Inventaire']=$réponseWitoutCamelCase['Inventaire'];
	$réponse['Image']=$réponseWitoutCamelCase['Image'];
	$réponse['Ordre_Colorimetrique']=$réponseWitoutCamelCase['Ordre_Colorimetrique'];
	
	
	
	$réponse['BonusForce']=$bonusforce;
	$réponse['BonusAgilite']=$bonusagilité;
	$réponse['BonusIntelligence']=$bonusintelligence;
	$réponse['BonusVitalite']=$bonusvitalité;
	$réponse['BonusRessource']=$bonusressource;
	$réponse['BonusArmure']=$bonusarmure;
	$réponse['BonusReussite']=$bonusréussite;




















?>