<?php


include('../BDD.php');


$personnagesInfos = $bdd->query('SELECT *
					from competence
					where Id_Competence = ' . $_GET['id'] . '');

$responseWitoutCamelCase = $personnagesInfos->fetch(PDO::FETCH_ASSOC);


$response['Id_Competence'] = $responseWitoutCamelCase['Id_Competence'];
$response['Libelle'] = $responseWitoutCamelCase['Libellé'];
$response['Image'] = $responseWitoutCamelCase['Image'];
$response['Niveau'] = $responseWitoutCamelCase['Niveau'];
$response['Portee'] = $responseWitoutCamelCase['Portée'];
$response['Cout_En_PA'] = $responseWitoutCamelCase['Cout_En_PA'];
$response['Cout_En_Ressource'] = $responseWitoutCamelCase['Cout_En_Ressource'];
$response['Ressource'] = $responseWitoutCamelCase['Ressource'];
$response['Description1'] = $responseWitoutCamelCase['Description1'];
$response['Description2'] = $responseWitoutCamelCase['Description2'];
$response['Description3'] = $responseWitoutCamelCase['Description3'];
$response['Description4'] = $responseWitoutCamelCase['Description4'];
$response['Description5'] = $responseWitoutCamelCase['Description5'];
$response['Description6'] = $responseWitoutCamelCase['Description6'];
$response['Effet1'] = $responseWitoutCamelCase['Effet1'];
$response['Effet1Bis'] = $responseWitoutCamelCase['Effet1Bis'];
$response['Effet2'] = $responseWitoutCamelCase['Effet2'];
$response['Effet2Bis'] = $responseWitoutCamelCase['Effet2Bis'];
$response['Effet3'] = $responseWitoutCamelCase['Effet3'];
$response['Effet3Bis'] = $responseWitoutCamelCase['Effet3Bis'];
$response['Fin'] = $responseWitoutCamelCase['Fin'];
$response['Type_calcul1'] = $responseWitoutCamelCase['Type_calcul1'];
$response['Calcul1a'] = $responseWitoutCamelCase['Calcul1a'];
$response['Calcul1b'] = $responseWitoutCamelCase['Calcul1b'];
$response['Amplitude1'] = $responseWitoutCamelCase['Amplitude1'];
$response['Nombre_Amplitude1'] = $responseWitoutCamelCase['Nombre_Amplitude1'];
$response['Statistique1'] = $responseWitoutCamelCase['Statistique1'];
$response['Impact1'] = $responseWitoutCamelCase['Impact1'];
$response['Pourcentage1'] = $responseWitoutCamelCase['Pourcentage1'];
$response['Type_calcul2'] = $responseWitoutCamelCase['Type_calcul2'];
$response['Calcul2a'] = $responseWitoutCamelCase['Calcul2a'];
$response['Calcul2b'] = $responseWitoutCamelCase['Calcul2b'];
$response['Amplitude2'] = $responseWitoutCamelCase['Amplitude2'];
$response['Nombre_Amplitude2'] = $responseWitoutCamelCase['Nombre_Amplitude2'];
$response['Statistique2'] = $responseWitoutCamelCase['Statistique2'];
$response['Impact2'] = $responseWitoutCamelCase['Impact2'];
$response['Pourcentage2'] = $responseWitoutCamelCase['Pourcentage2'];
$response['Type_calcul3'] = $responseWitoutCamelCase['Type_calcul3'];
$response['Calcul3a'] = $responseWitoutCamelCase['Calcul3a'];
$response['Calcul3b'] = $responseWitoutCamelCase['Calcul3b'];
$response['Amplitude3'] = $responseWitoutCamelCase['Amplitude3'];
$response['Nombre_Amplitude3'] = $responseWitoutCamelCase['Nombre_Amplitude3'];
$response['Statistique3'] = $responseWitoutCamelCase['Statistique3'];
$response['Impact3'] = $responseWitoutCamelCase['Impact3'];
$response['Pourcentage3'] = $responseWitoutCamelCase['Pourcentage3'];
$response['Type_calcul4'] = $responseWitoutCamelCase['Type_calcul4'];
$response['Calcul4a'] = $responseWitoutCamelCase['Calcul4a'];
$response['Calcul4b'] = $responseWitoutCamelCase['Calcul4b'];
$response['Amplitude4'] = $responseWitoutCamelCase['Amplitude4'];
$response['Nombre_Amplitude4'] = $responseWitoutCamelCase['Nombre_Amplitude4'];
$response['Statistique4'] = $responseWitoutCamelCase['Statistique4'];
$response['Impact4'] = $responseWitoutCamelCase['Impact4'];
$response['Pourcentage4'] = $responseWitoutCamelCase['Pourcentage4'];
$response['Type_calcul5'] = $responseWitoutCamelCase['Type_calcul5'];
$response['Calcul5a'] = $responseWitoutCamelCase['Calcul5a'];
$response['Calcul5b'] = $responseWitoutCamelCase['Calcul5b'];
$response['Amplitude5'] = $responseWitoutCamelCase['Amplitude5'];
$response['Nombre_Amplitude5'] = $responseWitoutCamelCase['Nombre_Amplitude5'];
$response['Statistique5'] = $responseWitoutCamelCase['Statistique5'];
$response['Impact5'] = $responseWitoutCamelCase['Impact5'];
$response['Pourcentage5'] = $responseWitoutCamelCase['Pourcentage5'];
$response['NumEffet'] = $responseWitoutCamelCase['NumEffet'];
$response['Type_calculBis1'] = $responseWitoutCamelCase['Type_calculBis1'];
$response['CalculBis1a'] = $responseWitoutCamelCase['CalculBis1a'];
$response['CalculBis1b'] = $responseWitoutCamelCase['CalculBis1b'];
$response['StatistiqueBis1'] = $responseWitoutCamelCase['StatistiqueBis1'];
$response['Type_calculBis2'] = $responseWitoutCamelCase['Type_calculBis2'];
$response['CalculBis2a'] = $responseWitoutCamelCase['CalculBis2a'];
$response['CalculBis2b'] = $responseWitoutCamelCase['CalculBis2b'];
$response['StatistiqueBis2'] = $responseWitoutCamelCase['StatistiqueBis2'];
$response['ImpactBis'] = $responseWitoutCamelCase['ImpactBis'];
$response['PourcentageBis'] = $responseWitoutCamelCase['PourcentageBis'];
$response['Entete'] = $responseWitoutCamelCase['Entete'];
$response['Exemple'] = $responseWitoutCamelCase['Exemple'];
$response['Niveau_Requis'] = $responseWitoutCamelCase['Niveau_Requis'];
$response['Competence_Requise_1'] = $responseWitoutCamelCase['Compétence_Requise_1'];
$response['Competence_Requise_2'] = $responseWitoutCamelCase['Compétence_Requise_2'];
$response['Competence_Requise_3'] = $responseWitoutCamelCase['Compétence_Requise_3'];
$response['TempsRechargement'] = $responseWitoutCamelCase['TempsRechargement'];
$response['Duree'] = $responseWitoutCamelCase['Durée'];
$response['Cooldown'] = $responseWitoutCamelCase['Cooldown'];
$response['Bonus_Temporaire'] = $responseWitoutCamelCase['Bonus_Temporaire'];
$response['Type_Calcul_Temporaire'] = $responseWitoutCamelCase['Type_Calcul_Temporaire'];
$response['Valeur_Temporaire1'] = $responseWitoutCamelCase['Valeur_Temporaire1'];
$response['Valeur_Temporaire2'] = $responseWitoutCamelCase['Valeur_Temporaire2'];
$response['Statistique_Temporaire1'] = $responseWitoutCamelCase['Statistique_Temporaire1'];
