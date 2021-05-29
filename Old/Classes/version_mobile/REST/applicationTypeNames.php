<?php

include('BDD.php');
try {
    $typeInfo = $bdd->query('SELECT *
					from applicationType  ');

    $reponse = array();

    while ($type = $typeInfo->fetch()) {
        $object['idType'] = $type['idApplicationType'];
        $object['name'] = $type['name'];
        array_push($reponse, $object);
    }

    deliver_response(200, "Votre message", $reponse);
} catch
(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

/// Envoi de la réponse au Client
function deliver_response($status, $status_message, $data)
{
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