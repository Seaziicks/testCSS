<?php


include('../BDD.php');

$effects = $bdd->query('SELECT effect_type.Name, effectapplied.*
					from effectapplied, effect_type
					where IDRecieiver='.$_GET['id'].'
					and EffectType = ID_Effect');


$reponse['DegatsPhysiqueFlat'] = 0;
$reponse['DegatsPhysiquePourcentage'] = 0;
$reponse['DegatsMagiqueFlat'] = 0;
$reponse['DegatsMagiquePourcentage'] = 0;
$reponse['Force'] = 0;
$reponse['Agilite'] = 0;
$reponse['Intelligence'] = 0;
$reponse['Vitalite'] = 0;
$reponse['PA'] = 0;
$reponse['PM'] = 0;
$reponse['SortFlat'] = 0;
$reponse['SortPourcentage'] = 0;
$reponse['ArmureFlat'] = 0;
$reponse['ArmurePourcentage'] = 0;
$reponse['ArmureMagiqueFlat'] = 0;
$reponse['ArmureMagiquePourcentage'] = 0;
$reponse['DegatsFlat'] = 0;
$reponse['DegatsPourcentage'] = 0;
$reponse['SoinFlat'] = 0;
$reponse['SoinPourcentage'] = 0;
$reponse['Portee'] = 0;
$reponse['Degat'] = 0;
$reponse['Soin'] = 0;
$reponse['Shield'] = 0;

while($effectWitoutCamelCase=$effects->fetch(PDO::FETCH_ASSOC)) {
    $reponse[''.$effectWitoutCamelCase['Name'].''] += floatval($effectWitoutCamelCase['EffectValueMin']);
}
$effects->closeCursor();

deliver_response(200, "Getting all fight bonuses", $reponse);

http_response_code(200);
/// Envoi de la réponse au Client
function deliver_response($status, $status_message, $data){
    /// Paramétrage de l'entête HTTP, suite
    header("HTTP/1.1 $status $status_message");
    /// Paramétrage de la réponse retournée
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
    /// Mapping de la réponse au format JSON
    echo json_encode($data);
}





?>