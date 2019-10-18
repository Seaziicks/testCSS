<?php

// On enregistre notre autoload.
function chargerClasse($classname)
{
    require 'Poo/' . $classname . '.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');


//  $effects = json_decode($postedData, true);

// $effects = json_decode($_POST);
// print_r($effects);


$http_method = $_SERVER['REQUEST_METHOD'];
switch ($http_method) {
    /// Cas de la méthode GET
    case "GET" :
        try {
            $_GET['id'];
            // print_r(json_decode($_GET['Effect'])->EffectType);
            // set the PDO error mode to exception
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $personnagesInfos = $bdd->query('SELECT p.*
					from personnage p, combatSession cs
					where cs.idCombat ='.$_GET['id'].'
					and cs.idPersonnage = p.Id_personnage');

            $managerPersonnage = new PersonnageManager($bdd);
            while($personnageBDD = $personnagesInfos->fetch()) {
                $personnage = $managerPersonnage->get($personnageBDD['Id_Personnage']);
                $sql = "UPDATE personnage SET PDV_Actuel=".($personnage->getTotalVitalité()*2)." WHERE Id_Personnage=".$personnageBDD['Id_Personnage']."";
                // Prepare statement
                $stmt = $bdd->prepare($sql);
                // execute the query
                $stmt->execute();
            }

            $fightersInfo = $bdd->query('SELECT *
					from combatSession cs
					where cs.idCombat ='.$_GET['id'].'');

            while($fighters = $fightersInfo->fetch()) {
                $sql = "UPDATE combatSession SET DegatsRecus= 0 WHERE idPersonnage=".$fighters['idPersonnage']."";
                // Prepare statement
                $stmt = $bdd->prepare($sql);
                // execute the query
                $stmt->execute();
            }

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $bdd = null;

        deliver_responseRest(200, "Combat reseted", "Ok");
        break;
}

/// Envoi de la réponse au Client
function deliver_responseRest($status, $status_message, $data)
{
    /// Paramétrage de l'entête HTTP, suite
    // header("HTTP/1.1 $status $status_message");
/// Paramétrage de la réponse retournée
    $response['status'] = $status;
    $response['status_message'] = $status_message;
    $response['data'] = $data;
/// Mapping de la réponse au format JSON
    $json_response = json_encode($response);
    echo $json_response;
}



