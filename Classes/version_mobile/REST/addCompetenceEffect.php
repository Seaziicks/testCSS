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
            echo '<br/><br/><br/>$preInitializeTest<br/>';
            $preInitializeTest = $_GET['EffectCompetence'];
            echo $preInitializeTest;
            echo '<br/><br/><br/>json_decode : <br/>';
            $jsonDecodeTest = json_decode($preInitializeTest);
            print_r($jsonDecodeTest);
            echo '<br/><br/><br/>Changing with foreach<br/>';

            foreach($jsonDecodeTest as $key => $value) {
                if(empty($value)){
                    $jsonDecodeTest->$key = null;
                }
            }
            echo '$jsonDecodeTest->effectType : '.$jsonDecodeTest->effectType.'<br/>';
            echo 'empty : '.empty($jsonDecodeTest->effectType).'<br/>';
            echo 'is_null : '.is_null($jsonDecodeTest->effectType).'<br/>';
            $jsonDecodeTestArray = (array) $jsonDecodeTest;
            echo '<br/>';
            echo '<br/>';
            echo '<br/>';
            foreach($jsonDecodeTestArray as $key => $value) {
                if(empty($value) || is_null($value)){
                    $jsonDecodeTestArray[$key] = NULL;
                }
                echo $key.' : '.$jsonDecodeTestArray[$key].'<br/>';
            }
            echo '<br/>';
            echo '<br/>';
            echo 'empty : '.empty($jsonDecodeTestArray['effectType']).'<br/>';
            echo 'is_null : '.is_null($jsonDecodeTestArray['effectType']).'<br/>';
            echo '<br/>';
            echo '<br/>';
            echo '<br/>';
            // $competenceEffect = json_decode($_GET['EffectCompetence']);
            $competenceEffect = $_GET['EffectCompetence'];
            echo '<br/><br/><br/><br/>';
            echo 'print_r($_GET[\'EffectCompetence\']) : <br/>';
            print_r($_GET['EffectCompetence']);
            echo '<br/><br/><br/>print_r($competenceEffect)<br/>';
            print_r($competenceEffect);
            echo '<br/>';
            echo gettype($competenceEffect);
            echo '<br/><br/><br/><br/>';
            $test['okok'] = 1;
            $test['okokBis'] = 12;
            echo '<br/><br/><br/><br/>';
            print_r($test);
            echo '<br/><br/><br/><br/>';

            if ($competenceEffect['idCompetenceEffect'] == -1) {
                /*
                $sql = "INSERT INTO competenceeffect (effectOrder, idCompetence, actionType, effectType, niveauRequis, 
                              typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude,
                              statistique1, statistique2, impact, pourcentage, numberOfUse, numberOfTurn, numberOfFight)
            VALUES (" . $competenceEffect->effectOrder . "," . $competenceEffect->idCompetence . ",
            " . $competenceEffect->actionType . ", " . $competenceEffect->effectType . ",
            " . $competenceEffect->niveauRequis . ", " . $competenceEffect->typeCalcul . ",
                    " . $competenceEffect->calcul1A . ", " . $competenceEffect->calcul1B . ",
                    " . $competenceEffect->calcul2A . ", " . $competenceEffect->calcul2B . ",
                    " . $competenceEffect->amplitude . ", " . $competenceEffect->nombreAmplitude . "
                    ," . $competenceEffect->statistique1 . ", " . $competenceEffect->statistique2 . ",
                    " . $competenceEffect->impact . ", " . $competenceEffect->pourcentage . ",
                    " . $competenceEffect->numberOfUse . "," . $competenceEffect->numberOfTurn . "
                    ," . $competenceEffect->numberOfFight . ")";
                */

                $sql = "INSERT INTO competenceeffect (effectOrder, idCompetence, actionType, effectType, niveauRequis, 
                              typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude,
                              statistique1, statistique2, impact, pourcentage, numberOfUse, numberOfTurn, numberOfFight)
            VALUES (" . $competenceEffect['effectOrder'] . "," . $competenceEffect['idCompetence'] . ",
            " . $competenceEffect['actionType'] . ", " . $competenceEffect['effectType'] . ",
            " . $competenceEffect['niveauRequis'] . ", " . $competenceEffect['typeCalcul'] . ",
                    " . $competenceEffect['calcul1A'] . ", " . $competenceEffect['calcul1B'] . ",
                    " . $competenceEffect['calcul2A']. ", " . $competenceEffect['calcul2B'] . ",
                    " . $competenceEffect['amplitude'] . ", " . $competenceEffect['nombreAmplitude'] . "
                    ," . $competenceEffect['statistique1'] . ", " . $competenceEffect['statistique2'] . ",
                    " . $competenceEffect['impact'] . ", " . $competenceEffect['pourcentage'] . ",
                    " . $competenceEffect['numberOfUse'] . "," . $competenceEffect['numberOfTurn'] . "
                    ," . $competenceEffect['numberOfFight'] . ")";
                // use exec() because no results are returned
                $bdd->exec($sql);

                $bdd = null;
                http_response_code(201);
                deliver_responseRest(201, "New competence effect created successfully", $policy);
            } else {
                /*
                $sql = "UPDATE competenceeffect 
                SET effectOrder = " . $competenceEffect->effectOrder . ", idCompetence = " . $competenceEffect->idCompetence . "
                actionType = " . $competenceEffect->actionType . ", effectType = " . $competenceEffect->effectType . " 
                niveauRequis = " . $competenceEffect->niveauRequis . ", typeCalcul = " . $competenceEffect->typeCalcul . " 
                calcul1A = " . $competenceEffect->calcul1A . ", calcul1B = " . $competenceEffect->calcul1B . " 
                calcul2A = " . $competenceEffect->calcul2A . ", calcul2B = " . $competenceEffect->calcul2B . " 
                amplitude = " . $competenceEffect->amplitude . ", nombreAmplitude = " . $competenceEffect->nombreAmplitude . " 
                statistique1 = " . $competenceEffect->statistique1 . ", statistique2 = " . $competenceEffect->statistique2 . " 
                impact = " . $competenceEffect->impact . ", pourcentage = " . $competenceEffect->pourcentage . " 
                numberOfUse = " . $competenceEffect->numberOfUse . ", numberOfTurn = " . $competenceEffect->numberOfTurn . " 
                numberOfFight = " . $competenceEffect->numberOfFight . " 
                WHERE idCompetenceEffect = " . $competenceEffect->idCompetenceEffect;
                */


                $sql = "UPDATE competenceeffect 
                SET effectOrder = " . $competenceEffect['effectOrder'] . ", idCompetence = " . $competenceEffect['idCompetence'] . " 
                actionType = " . $competenceEffect['actionType'] . ", effectType = " . $competenceEffect['effectType'] . " 
                niveauRequis = " . $competenceEffect['niveauRequis'] . ", typeCalcul = " . $competenceEffect['typeCalcul'] . " 
                calcul1A = " . $competenceEffect['calcul1A'] . ", calcul1B = " . $competenceEffect['calcul1B'] . " 
                calcul2A = " . $competenceEffect['calcul2A'] . ", calcul2B = " . $competenceEffect['calcul2B'] . " 
                amplitude = " . $competenceEffect['amplitude'] . ", nombreAmplitude = " . $competenceEffect['nombreAmplitude'] . " 
                statistique1 = " . $competenceEffect['statistique1'] . ", statistique2 = " . $competenceEffect['statistique2'] . " 
                impact = " . $competenceEffect['impact'] . ", pourcentage = " . $competenceEffect['pourcentage'] . " 
                numberOfUse = " . $competenceEffect['numberOfUse'] . ", numberOfTurn = " . $competenceEffect['numberOfTurn'] . " 
                numberOfFight = " . $competenceEffect['numberOfFight'] . " 
                WHERE idCompetenceEffect = " . $competenceEffect['idCompetenceEffect'];



                $bdd->exec($sql);
                $bdd = null;
                http_response_code(200);
                deliver_responseRest(200, "EffectCompetence modified", NULL);
            }
        } catch
        (PDOException $e) {
            echo $competenceEffect['idCompetenceEffect']. '' . $sql . "<br>" . $e->getMessage();
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