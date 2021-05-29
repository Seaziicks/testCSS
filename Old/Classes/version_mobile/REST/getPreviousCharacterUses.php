<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
    if (is_file('Poo/Poo/'.$classname.'.php'))
        require 'Poo/Poo/'.$classname.'.php';
    elseif (is_file('Poo/Poo/Manager/'.$classname.'.php'))
        require 'Poo/Poo/Manager/'.$classname.'.php';
    elseif (is_file('Poo/Poo/Classes/'.$classname.'.php'))
        require 'Poo/Poo/Classes/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

/// Paramétrage de l'entête HTTP (pour la réponse au Client)
header("Content-Type:application/json ; Access-Control-Allow-Origin:*");

include('../BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$manager = new CompetenceManager($bdd);

$previousTargets = $manager->getPreviousCharacterUses($_GET['idLauncher']);

deliver_response(200, "Liste des précédentes cibles pour une personnage donné", $previousTargets);

/// Envoi de la réponse au Client
function deliver_response($status, $status_message, $data){
    /// Paramétrage de l'entête HTTP, suite
    header("HTTP/1.1 $status $status_message");
    /// Paramétrage de la réponse retournée
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
    /// Mapping de la réponse au format JSON
    $json_response = json_encode($response);

    echo json_encode($data);



}