<?php


include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT *
					from competence
					where Id_Competence = '.$_GET['id'].'');		
					
	$réponseWitoutCamelCase=$personnagesInfos->fetch(PDO::FETCH_ASSOC);

	
	$réponse['Id_Competence']=$réponseWitoutCamelCase['Id_Competence'];
	$réponse['Libelle']=$réponseWitoutCamelCase['Libellé'];
	$réponse['Image']=$réponseWitoutCamelCase['Image'];
	$réponse['Niveau']=$réponseWitoutCamelCase['Niveau'];
	$réponse['Portee']=$réponseWitoutCamelCase['Portée'];
	$réponse['Cout_En_PA']=$réponseWitoutCamelCase['Cout_En_PA'];
	$réponse['Cout_En_Ressource']=$réponseWitoutCamelCase['Cout_En_Ressource'];
	$réponse['Ressource']=$réponseWitoutCamelCase['Ressource'];
	$réponse['Description1']=$réponseWitoutCamelCase['Description1'];
	$réponse['Description2']=$réponseWitoutCamelCase['Description2'];
	$réponse['Description3']=$réponseWitoutCamelCase['Description3'];
	$réponse['Description4']=$réponseWitoutCamelCase['Description4'];
	$réponse['Description5']=$réponseWitoutCamelCase['Description5'];
	$réponse['Description6']=$réponseWitoutCamelCase['Description6'];
	$réponse['Effet1']=$réponseWitoutCamelCase['Effet1'];
	$réponse['Effet1Bis']=$réponseWitoutCamelCase['Effet1Bis'];
	$réponse['Effet2']=$réponseWitoutCamelCase['Effet2'];
	$réponse['Effet2Bis']=$réponseWitoutCamelCase['Effet2Bis'];
	$réponse['Effet3']=$réponseWitoutCamelCase['Effet3'];
	$réponse['Effet3Bis']=$réponseWitoutCamelCase['Effet3Bis'];
	$réponse['Fin']=$réponseWitoutCamelCase['Fin'];
	$réponse['Type_calcul1']=$réponseWitoutCamelCase['Type_calcul1'];
	$réponse['Calcul1a']=$réponseWitoutCamelCase['Calcul1a'];
	$réponse['Calcul1b']=$réponseWitoutCamelCase['Calcul1b'];
	$réponse['Amplitude1']=$réponseWitoutCamelCase['Amplitude1'];
	$réponse['Nombre_Amplitude1']=$réponseWitoutCamelCase['Nombre_Amplitude1'];
	$réponse['Statistique1']=$réponseWitoutCamelCase['Statistique1'];
	$réponse['Impact1']=$réponseWitoutCamelCase['Impact1'];
	$réponse['Pourcentage1']=$réponseWitoutCamelCase['Pourcentage1'];
	$réponse['Type_calcul2']=$réponseWitoutCamelCase['Type_calcul2'];
	$réponse['Calcul2a']=$réponseWitoutCamelCase['Calcul2a'];
	$réponse['Calcul2b']=$réponseWitoutCamelCase['Calcul2b'];
	$réponse['Amplitude2']=$réponseWitoutCamelCase['Amplitude2'];
	$réponse['Nombre_Amplitude2']=$réponseWitoutCamelCase['Nombre_Amplitude2'];
	$réponse['Statistique2']=$réponseWitoutCamelCase['Statistique2'];
	$réponse['Impact2']=$réponseWitoutCamelCase['Impact2'];
	$réponse['Pourcentage2']=$réponseWitoutCamelCase['Pourcentage2'];
	$réponse['Type_calcul3']=$réponseWitoutCamelCase['Type_calcul3'];
	$réponse['Calcul3a']=$réponseWitoutCamelCase['Calcul3a'];
	$réponse['Calcul3b']=$réponseWitoutCamelCase['Calcul3b'];
	$réponse['Amplitude3']=$réponseWitoutCamelCase['Amplitude3'];
	$réponse['Nombre_Amplitude3']=$réponseWitoutCamelCase['Nombre_Amplitude3'];
	$réponse['Statistique3']=$réponseWitoutCamelCase['Statistique3'];
	$réponse['Impact3']=$réponseWitoutCamelCase['Impact3'];
	$réponse['Pourcentage3']=$réponseWitoutCamelCase['Pourcentage3'];
	$réponse['Type_calcul4']=$réponseWitoutCamelCase['Type_calcul4'];
	$réponse['Calcul4a']=$réponseWitoutCamelCase['Calcul4a'];
	$réponse['Calcul4b']=$réponseWitoutCamelCase['Calcul4b'];
	$réponse['Amplitude4']=$réponseWitoutCamelCase['Amplitude4'];
	$réponse['Nombre_Amplitude4']=$réponseWitoutCamelCase['Nombre_Amplitude4'];
	$réponse['Statistique4']=$réponseWitoutCamelCase['Statistique4'];
	$réponse['Impact4']=$réponseWitoutCamelCase['Impact4'];
	$réponse['Pourcentage4']=$réponseWitoutCamelCase['Pourcentage4'];
	$réponse['Type_calcul5']=$réponseWitoutCamelCase['Type_calcul5'];
	$réponse['Calcul5a']=$réponseWitoutCamelCase['Calcul5a'];
	$réponse['Calcul5b']=$réponseWitoutCamelCase['Calcul5b'];
	$réponse['Amplitude5']=$réponseWitoutCamelCase['Amplitude5'];
	$réponse['Nombre_Amplitude5']=$réponseWitoutCamelCase['Nombre_Amplitude5'];
	$réponse['Statistique5']=$réponseWitoutCamelCase['Statistique5'];
	$réponse['Impact5']=$réponseWitoutCamelCase['Impact5'];
	$réponse['Pourcentage5']=$réponseWitoutCamelCase['Pourcentage5'];
	$réponse['NumEffet']=$réponseWitoutCamelCase['NumEffet'];
	$réponse['Type_calculBis1']=$réponseWitoutCamelCase['Type_calculBis1'];
	$réponse['CalculBis1a']=$réponseWitoutCamelCase['CalculBis1a'];
	$réponse['CalculBis1b']=$réponseWitoutCamelCase['CalculBis1b'];
	$réponse['StatistiqueBis1']=$réponseWitoutCamelCase['StatistiqueBis1'];
	$réponse['Type_calculBis2']=$réponseWitoutCamelCase['Type_calculBis2'];
	$réponse['CalculBis2a']=$réponseWitoutCamelCase['CalculBis2a'];
	$réponse['CalculBis2b']=$réponseWitoutCamelCase['CalculBis2b'];
	$réponse['StatistiqueBis2']=$réponseWitoutCamelCase['StatistiqueBis2'];
	$réponse['ImpactBis']=$réponseWitoutCamelCase['ImpactBis'];
	$réponse['PourcentageBis']=$réponseWitoutCamelCase['PourcentageBis'];
	$réponse['Entete']=$réponseWitoutCamelCase['Entete'];
	$réponse['Exemple']=$réponseWitoutCamelCase['Exemple'];
	$réponse['Niveau_Requis']=$réponseWitoutCamelCase['Niveau_Requis'];
	$réponse['Competence_Requise_1']=$réponseWitoutCamelCase['Compétence_Requise_1'];
	$réponse['Competence_Requise_2']=$réponseWitoutCamelCase['Compétence_Requise_2'];
	$réponse['Competence_Requise_3']=$réponseWitoutCamelCase['Compétence_Requise_3'];
	$réponse['TempsRechargement']=$réponseWitoutCamelCase['TempsRechargement'];
	$réponse['Duree']=$réponseWitoutCamelCase['Durée'];
	$réponse['Cooldown']=$réponseWitoutCamelCase['Cooldown'];
	$réponse['Bonus_Temporaire']=$réponseWitoutCamelCase['Bonus_Temporaire'];
	$réponse['Type_Calcul_Temporaire']=$réponseWitoutCamelCase['Type_Calcul_Temporaire'];
	$réponse['Valeur_Temporaire1']=$réponseWitoutCamelCase['Valeur_Temporaire1'];
	$réponse['Valeur_Temporaire2']=$réponseWitoutCamelCase['Valeur_Temporaire2'];
	$réponse['Statistique_Temporaire1']=$réponseWitoutCamelCase['Statistique_Temporaire1'];


?>