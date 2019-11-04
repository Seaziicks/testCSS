<?php


include('../BDD.php');

$effects = $bdd->query('SELECT effect_type.Name, effectapplied.*
					from effectapplied, effect_type
					where IDReceiver='.$_GET['id'].'
					and EffectType = ID_Effect');


while($effectWitoutCamelCase=$effects->fetch(PDO::FETCH_ASSOC)) {
    $reponse[''.$effectWitoutCamelCase['Name'].''] = 0;
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