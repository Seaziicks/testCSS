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
        $PersonnageManager = new PersonnageManager($bdd);
        $CompetenceManager = new CompetenceManager($bdd);

        $personnage = $PersonnageManager->get($_GET['characterID']);
// $fetchedObject = $objet->fetch();
        if (strtolower($_GET['asHTML']) == "true") {
            $fetchedCompetence = $CompetenceManager->getCompetenceAsHTML($_GET['idCompetence'], $personnage);
            $matchingData['competenceAsHTML'] = $fetchedCompetence;
        } else {
            $fetchedCompetence = $CompetenceManager->get($_GET['idCompetence'], $personnage);
            $matchingData = (array)$fetchedCompetence;
        }
        /// Envoi de la réponse au Client
        deliver_response(200, "Votre message", $matchingData);
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
