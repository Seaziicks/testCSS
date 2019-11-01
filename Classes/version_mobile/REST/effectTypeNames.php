<?php

include('BDD.php');
$typeInfo = $bdd->query('SELECT *
					from effect_type  ');

$réponse=array();

while($type=$typeInfo->fetch()){
    $object['idType']= $type['ID_Effect'];
    $object['name']= $type['Name'];
    array_push($réponse,$object);
}

deliver_response(200, "Votre message", $réponse);

/// Envoi de la réponse au Client
function deliver_response($status, $status_message, $data){
    /// Paramétrage de l'entête HTTP, suite
    header("HTTP/1.1 $status $status_message");
    /// Paramétrage de la réponse retournée
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
    /// Mapping de la réponse au format JSON
    $json_response = json_encode($data);

    echo $json_response;
}