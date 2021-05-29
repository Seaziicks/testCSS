<?php

function chargerClasse($classname)
{
    if (is_file('../Poo/' . $classname . '.php'))
        require '../Poo/' . $classname . '.php';
    elseif (is_file('../Poo/Manager/' . $classname . '.php'))
        require '../Poo/Manager/' . $classname . '.php';
    elseif (is_file('../Poo/Classes/' . $classname . '.php'))
        require '../Poo/Classes/' . $classname . '.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('../BDD.php');

/// Paramétrage de l'entête HTTP (pour la réponse au Client)
header("Content-Type:application/json");

/// Identification du type de méthode HTTP envoyée par le client
$http_method = $_SERVER['REQUEST_METHOD'];
switch ($http_method) {
    /// Cas de la méthode GET
    case "GET" :
        if (strtolower($_GET['asHTML']) == "true") {
            $PersonnageManager = new PersonnageManager($bdd);
            $personnage = $PersonnageManager->get($_GET['characterID']);
            $arbre = new Arbre($personnage, $bdd);
            $fetchedObject = $arbre->getSimpleArbreAsHTML($_GET['treeName'], $personnage->_Id_Personnage, $_GET['componentToUpdateForCompetences']);
            $matchingData['simpleCompetenceTree'] = $fetchedObject;
            deliver_response(200, "Please, accept this tree", $matchingData);
        } else {
            deliver_response(400, "This interface only accept asHTML=true", '');
        }
        /// Envoi de la réponse au Client

        break;
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
