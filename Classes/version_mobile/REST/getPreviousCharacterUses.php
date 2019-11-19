<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
    require 'Poo/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.


$db = new PDO('mysql:host=localhost;dbname=modifications(zone tampon);charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$manager = new CompetenceManager($db);

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