<?php


include('../BDD.php');



$competenceInfos = $bdd->query('SELECT *
					from competence
					where Id_Competence = '.$_GET['id'].'');

$responseWitoutCamelCase=$competenceInfos->fetch(PDO::FETCH_ASSOC);


$response['Id_Competence']=$responseWitoutCamelCase['Id_Competence'];
$response['Libelle']=$responseWitoutCamelCase['Libellé'];
$response['Image']=$responseWitoutCamelCase['Image'];
$response['Niveau']=$responseWitoutCamelCase['Niveau'];
$response['Portee']=$responseWitoutCamelCase['Portée'];
$response['Cout_En_PA']=$responseWitoutCamelCase['Cout_En_PA'];
$response['Cout_En_Ressource']=$responseWitoutCamelCase['Cout_En_Ressource'];
$response['Ressource']=$responseWitoutCamelCase['Ressource'];
$response['Description1']=$responseWitoutCamelCase['Description1'];
$response['Entete']=$responseWitoutCamelCase['Entete'];
$response['Exemple']=$responseWitoutCamelCase['Exemple'];
$response['Niveau_Requis']=$responseWitoutCamelCase['Niveau_Requis'];
$response['Competence_Requise_1']=$responseWitoutCamelCase['Compétence_Requise_1'];
$response['Competence_Requise_2']=$responseWitoutCamelCase['Compétence_Requise_2'];
$response['Competence_Requise_3']=$responseWitoutCamelCase['Compétence_Requise_3'];
$response['TempsRechargement']=$responseWitoutCamelCase['TempsRechargement'];
$response['Duree']=$responseWitoutCamelCase['Durée'];
$response['Cooldown']=$responseWitoutCamelCase['Cooldown'];

$effectsInfos = $bdd->query('SELECT *
					from competenceeffect
					where idCompetence = '.$_GET['id'].'');
$effects = array();
$response['Effects'] = [];
while($effect = $effectsInfos->fetch(PDO::FETCH_ASSOC)) {
    array_push($effects, $effect);
}

array_push($response['Effects'], $effects);