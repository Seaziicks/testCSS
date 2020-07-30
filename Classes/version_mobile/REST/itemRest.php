<?php

function chargerClasse($classname)
{
    if (is_file('Poo/Poo/' . $classname . '.php'))
        require 'Poo/Poo/' . $classname . '.php';
    elseif (is_file('Poo/Poo/Manager/' . $classname . '.php'))
        require 'Poo/Poo/Manager/' . $classname . '.php';
    elseif (is_file('Poo/Poo/Classes/' . $classname . '.php'))
        require 'Poo/Poo/Classes/' . $classname . '.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');

/// Paramétrage de l'entête HTTP (pour la réponse au Client)
header("Content-Type:application/json");

/// Identification du type de méthode HTTP envoyée par le client
$http_method = $_SERVER['REQUEST_METHOD'];
switch ($http_method) {
    /// Cas de la méthode GET
    case "GET" :
        $objet = $bdd->query('SELECT o.*
											FROM equipement AS o 
											AND o.Id_Objet=' . $_GET['idItem'] . '
											');
        $ObjectManager = new EquipementManager($bdd);
        $autoDisplay = isset($_GET['autoDisplayItem']) ? filter_var($_GET['autoDisplayItem'],FILTER_VALIDATE_BOOLEAN) : false;
// $fetchedObject = $objet->fetch();
        if (strtolower($_GET['asHTML']) == "true") {
            $fetchedObject = $ObjectManager->getEquipementAsHTMLByID($_GET['idItem'], $_GET['characterID'], $_GET['characterLevel'], $autoDisplay);
            $matchingData['itemAsHTML'] = $fetchedObject;
        } else {
            $fetchedObject = $ObjectManager->get($_GET['idItem']);
            $matchingData = (array)$fetchedObject;
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
