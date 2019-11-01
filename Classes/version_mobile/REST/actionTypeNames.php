<?php

include('BDD.php');
$personnagesInfos = $bdd->query('SELECT *
					from action_type  ');

$reponse=array();

while($type=$typeInfo->fetch()){
    $object['idType']= $type['ID_Action_Type'];
    $object['name']= $type['Name'];
    array_push($reponse,$object);
}

deliver_response(200, "Votre message", $reponse);

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