<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
    require 'Poo/' . $classname . '.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$http_method = $_SERVER['REQUEST_METHOD'];

switch ($http_method) {
    case "POST" :
        try {
            $sql;
            $effects = json_decode($_GET['EffectCompetence']);

            if ($effects->idCompetenceEffect == -1) {
                $sql = "INSERT INTO competenceeffect (effectOrder, idCompetence, actionType, effectType, niveauRequis, 
                              typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude,
                              statistique1, statistique2, impact, pourcentage, numberOfUse, numberOfTurn, numberOfFight)
            VALUES (" . $effects->effectOrder . "," . $effects->idCompetence . "," . $effects->actionType . ",
                    " . $effects->effectType . "," . $effects->niveauRequis . "," . $effects->typeCalcul . ",
                    " . $effects->calcul1A . ", " . $effects->calcul1B . "," . $effects->calcul2A . "
                    ," . $effects->calcul2B . "," . $effects->amplitude . "," . $effects->nombreAmplitude . "
                    ," . $effects->statistique1 . "," . $effects->statistique2 . "," . $effects->impact . "
                    ," . $effects->pourcentage . "," . $effects->numberOfUse . "," . $effects->numberOfTurn . "
                    ," . $effects->numberOfFight . ")";
                // use exec() because no results are returned
                $bdd->exec($sql);

                $bdd = null;
                http_response_code(201);
                deliver_responseRest(201, "New competence effect created successfully", $policy);
            } else {
                $sql = "UPDATE competenceeffect 
                SET effectOrder = " . $effects->effectOrder . ", idCompetence = " . $effects->idCompetence . " 
                actionType = " . $effects->actionType . ", effectType = " . $effects->effectType . " 
                niveauRequis = " . $effects->niveauRequis . ", typeCalcul = " . $effects->typeCalcul . " 
                calcul1A = " . $effects->calcul1A . ", calcul1B = " . $effects->calcul1B . " 
                calcul2A = " . $effects->calcul2A . ", calcul2B = " . $effects->calcul2B . " 
                amplitude = " . $effects->amplitude . ", nombreAmplitude = " . $effects->nombreAmplitude . " 
                statistique1 = " . $effects->statistique1 . ", statistique2 = " . $effects->statistique2 . " 
                impact = " . $effects->impact . ", pourcentage = " . $effects->pourcentage . " 
                numberOfUse = " . $effects->numberOfUse . ", numberOfTurn = " . $effects->numberOfTurn . " 
                numberOfFight = " . $effects->numberOfFight . " 
                WHERE idCompetenceEffect = " . $effects->idCompetenceEffect;
                $bdd->exec($sql);
                $bdd = null;
                http_response_code(200);
                deliver_responseRest(200, "EffectCompetence modified", NULL);
            }
        } catch
        (PDOException $e) {
            echo $effects->ActionType . '' . $sql . "<br>" . $e->getMessage();
        }
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