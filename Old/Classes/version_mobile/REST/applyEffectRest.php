<?php
/// Librairies éventuelles (pour la connexion à la BDD, etc.)
// include('mylib.php');

/// Paramétrage de l'entête HTTP (pour la réponse au Client)
header("Content-Type:application/json");

/// Identification du type de méthode HTTP envoyée par le client
$http_method = $_SERVER['REQUEST_METHOD'];
switch ($http_method) {
    /// Cas de la méthode GET
    case "GET" :
        /// Récupération des critères de recherche envoyés par le Client
        if (!empty($_GET['id'])) {
            include('applyEffectGet.php');
            $matchingData=$réponse;
        }
        /// Envoi de la réponse au Client
        deliver_responseRest(200, "Votre message", $matchingData);
        break;
    /// Cas de la méthode POST
    case "POST" :
        /// Récupération des données envoyées par le Client
        $postedData = file_get_contents('php://input');

        include('applyEffectPost.php');
        // $matchingData=$réponse;
        /// Envoi de la réponse au Client
        // deliver_responseRest(201, "Effect has been created!", NULL);
        break;
    /// Cas de la méthode PUT
    case "PUT" :
        /// Récupération des données envoyées par le Client
        $postedData = file_get_contents('php://input');

        include('applyEffectPut.php');
        $matchingData=$réponse;
        /// Envoi de la réponse au Client
        deliver_responseRest(200, "Votre message", NULL);
        break;
    /// Cas de la méthode DELETE
    default :
        /// Récupération de l'identifiant de la ressource envoyé par le Client
        if (!empty($_GET['id'])) {
            include('applyEffectDelete.php');
            $matchingData=$réponse;
        }
        /// Envoi de la réponse au Client
        deliver_responseRest(200, "Votre message", NULL);

        break;
}
/// Envoi de la réponse au Client
function deliver_responseRest($status, $status_message, $data){
    /// Paramétrage de l'entête HTTP, suite
    header("HTTP/1.1 $status $status_message");
/// Paramétrage de la réponse retournée
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
/// Mapping de la réponse au format JSON
    $json_response = json_encode($response);
    echo $json_response;
}
?>


