<?php


include('../BDD.php');



$competenceInfos = $bdd->query('SELECT *
					from competence
					where Id_Competence = '.$_GET['id'].'');

$réponseWitoutCamelCase=$competenceInfos->fetch(PDO::FETCH_ASSOC);


$réponse['Id_Competence']=$réponseWitoutCamelCase['Id_Competence'];
$réponse['Libelle']=$réponseWitoutCamelCase['Libellé'];
$réponse['Image']=$réponseWitoutCamelCase['Image'];
$réponse['Niveau']=$réponseWitoutCamelCase['Niveau'];
$réponse['Portee']=$réponseWitoutCamelCase['Portée'];
$réponse['Cout_En_PA']=$réponseWitoutCamelCase['Cout_En_PA'];
$réponse['Cout_En_Ressource']=$réponseWitoutCamelCase['Cout_En_Ressource'];
$réponse['Ressource']=$réponseWitoutCamelCase['Ressource'];
$réponse['Description1']=$réponseWitoutCamelCase['Description1'];
$réponse['Entete']=$réponseWitoutCamelCase['Entete'];
$réponse['Exemple']=$réponseWitoutCamelCase['Exemple'];
$réponse['Niveau_Requis']=$réponseWitoutCamelCase['Niveau_Requis'];
$réponse['Competence_Requise_1']=$réponseWitoutCamelCase['Compétence_Requise_1'];
$réponse['Competence_Requise_2']=$réponseWitoutCamelCase['Compétence_Requise_2'];
$réponse['Competence_Requise_3']=$réponseWitoutCamelCase['Compétence_Requise_3'];
$réponse['TempsRechargement']=$réponseWitoutCamelCase['TempsRechargement'];
$réponse['Duree']=$réponseWitoutCamelCase['Durée'];
$réponse['Cooldown']=$réponseWitoutCamelCase['Cooldown'];

$effectsInfos = $bdd->query('SELECT *
					from competenceeffect
					where idCompetence = '.$_GET['id'].'');
$effects = array();

while($effect = $effectsInfos->fetch()) {
    array_push($effects, $effect);
}

array_push($réponse, $effects);

?>