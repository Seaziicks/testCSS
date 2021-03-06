<?php
declare(strict_types=1);
include('autoLoad.php');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$http_method = $_SERVER['REQUEST_METHOD'];

switch ($http_method) {
    case "PUT" :
        try {
            $competence = (array) json_decode($_GET['Competence']);
            foreach($competence as $key => $value) {
                if(empty($value) || is_null($value)){
                    $competence[$key] = 'NULL';
                } else if (is_string($value)) {
                    $competence[$key] = '\''.$value.'\'';
                }
                if($key == 'pourcentage') {
                    $competence[$key] = $competence[$key] == 'NULL' ? '0' : '1';
                }
            }

            $sql = "INSERT INTO competence (Libellé, Niveau, Description1)
            VALUES (" . $competence['competenceName'] . ", 1, \" Description de " . $competence['competenceName'] . "\")";
            // use exec() because no results are returned
            $bdd->exec($sql);

            $lastInsertID = $bdd->lastInsertId();

            $sql = "INSERT INTO learnedcompetence (idPersonnage, idCompetence, niveau)
            VALUES (" . $competence['idPersonnage'] . ", " . $lastInsertID . ", 1)";
            // use exec() because no results are returned
            $bdd->exec($sql);

            $policy = [
                [
                    'Libellé' => $competence['competenceName'],
                    'Niveau' => 1,
                    'Description' => 'Description de ' . $competence['competenceName'] .'',
                ],[
                    'idPersonnage' => $competence['idPersonnage'],
                    'idCompetence' => $lastInsertID,
                    'niveau' => 1,
                ]
            ];

            $bdd = null;
            http_response_code(201);
            deliver_responseRest(201, "New competence created successfully", $policy);
        } catch
        (PDOException $e) {
            echo  $sql . "<br>" . $e->getMessage();
        }
        break;
    case "DELETE" :
        try {
            echo 'On est dans le DELETE ! <br/><br/>';
            $competence = (array)json_decode($_GET['Competence']);

            $sql = "DELETE FROM learnedcompetence
                WHERE idCompetence = " . $competence['idCompetence'] . "
                AND idPersonnage = " . $competence['idPersonnage'] . "";
            $bdd->exec($sql);

            $sql = "DELETE FROM competence
                WHERE Id_Competence = " . $competence['idCompetence'] . "";
            $bdd->exec($sql);
            $bdd = null;
            http_response_code(200);
            deliver_responseRest(200, "Competence deleted !", NULL);
        } catch
        (PDOException $e) {
            echo  $sql . "<br>" . $e->getMessage();
        }
        break;
}

/// Envoi de la réponse au Client
/**
 * @param $status
 * @param $status_message
 * @param $data
 */
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