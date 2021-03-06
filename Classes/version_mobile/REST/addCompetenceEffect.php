<?php
// On enregistre notre autoload.
include('autoLoad.php');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$http_method = $_SERVER['REQUEST_METHOD'];
$sql;
$competenceEffect = (array)json_decode($_GET['EffectCompetence']);
foreach ($competenceEffect as $key => $value) {
    if (empty($value) || is_null($value)) {
        $competenceEffect[$key] = 'NULL';
    } else if (is_string($value)) {
        $competenceEffect[$key] = '\'' . $value . '\'';
    }
    if ($key == 'pourcentage') {
        $competenceEffect[$key] = $competenceEffect[$key] == 'NULL' ? '0' : '1';
    }
}

switch ($http_method) {
    case "POST" :

        if ($competenceEffect['idCompetenceEffect'] == -1) {
            try {
                $sql = "INSERT INTO competenceeffect (effectOrder, idCompetence, actionType, effectType, niveauRequis, 
                              typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude,
                              statistique1, statistique2, impact, pourcentage, numberOfUse, numberOfTurn, numberOfFight)
            VALUES (" . $competenceEffect['effectOrder'] . "," . $competenceEffect['idCompetence'] . ",
            " . $competenceEffect['actionType'] . ", " . $competenceEffect['effectType'] . ",
            " . $competenceEffect['niveauRequis'] . ", " . $competenceEffect['typeCalcul'] . ",
                    " . $competenceEffect['calcul1A'] . ", " . $competenceEffect['calcul1B'] . ",
                    " . $competenceEffect['calcul2A'] . ", " . $competenceEffect['calcul2B'] . ",
                    " . $competenceEffect['amplitude'] . ", " . $competenceEffect['nombreAmplitude'] . "
                    ," . $competenceEffect['statistique1'] . ", " . $competenceEffect['statistique2'] . ",
                    NULL, " . $competenceEffect['pourcentage'] . ",
                    " . $competenceEffect['numberOfUse'] . "," . $competenceEffect['numberOfTurn'] . "
                    ," . $competenceEffect['numberOfFight'] . ")";
                // use exec() because no results are returned
                $bdd->exec($sql);

                $policy = [
                    'effectOrder' => $competenceEffect['effectOrder'],
                    'idCompetence' => $competenceEffect['idCompetence'],
                    'actionType' => $competenceEffect['actionType'],
                    'effectType' => $competenceEffect['effectType'],
                    'niveauRequis' => $competenceEffect['niveauRequis'],
                    'typeCalcul' => $competenceEffect['typeCalcul'],
                    'calcul1A' => $competenceEffect['calcul1A'],
                    'calcul1B' => $competenceEffect['calcul1B'],
                    'calcul2A' => $competenceEffect['calcul2A'],
                    'calcul2B' => $competenceEffect['calcul2B'],
                    'amplitude' => $competenceEffect['amplitude'],
                    'nombreAmplitude' => $competenceEffect['nombreAmplitude'],
                    'statistique1' => $competenceEffect['statistique1'],
                    'statistique2' => $competenceEffect['statistique2'],
                    'impact' => $competenceEffect['impact'],
                    'pourcentage' => $competenceEffect['pourcentage'],
                    'numberOfUse' => $competenceEffect['numberOfUse'],
                    'numberOfTurn' => $competenceEffect['numberOfTurn'],
                    'numberOfFight' => $competenceEffect['numberOfFight'],
                ];

                $bdd = null;
                http_response_code(201);
                deliver_responseRest(201, "New competence effect created successfully", $policy);
            } catch (PDOException $e) {
                deliver_responseRest(400, "EffectCompetence modification error", $sql . "<br>" . $e->getMessage());
            }
        } else {
            try {
                $sql = "UPDATE competenceeffect 
                SET effectOrder = " . $competenceEffect['effectOrder'] . ", idCompetence = " . $competenceEffect['idCompetence'] . ",
                actionType = " . $competenceEffect['actionType'] . ", effectType = " . $competenceEffect['effectType'] . ",
                niveauRequis = " . $competenceEffect['niveauRequis'] . ", typeCalcul = " . $competenceEffect['typeCalcul'] . ",
                calcul1A = " . $competenceEffect['calcul1A'] . ", calcul1B = " . $competenceEffect['calcul1B'] . ",
                calcul2A = " . $competenceEffect['calcul2A'] . ", calcul2B = " . $competenceEffect['calcul2B'] . ",
                amplitude = " . $competenceEffect['amplitude'] . ", nombreAmplitude = " . $competenceEffect['nombreAmplitude'] . ",
                statistique1 = " . $competenceEffect['statistique1'] . ", statistique2 = " . $competenceEffect['statistique2'] . ",
                impact = NULL, pourcentage = " . $competenceEffect['pourcentage'] . ",
                numberOfUse = " . $competenceEffect['numberOfUse'] . ", numberOfTurn = " . $competenceEffect['numberOfTurn'] . ",
                numberOfFight = " . $competenceEffect['numberOfFight'] . " 
                WHERE idCompetenceEffect = " . $competenceEffect['idCompetenceEffect'];


                $bdd->exec($sql);
                $result = $bdd->query('SELECT * FROM competenceeffect WHERE idCompetenceEffect = ' . $competenceEffect['idCompetenceEffect'].'');
                $fetchedResult = $result->fetch(PDO::FETCH_ASSOC);
                $result->closeCursor();
                $bdd = null;
                http_response_code(200);
                deliver_responseRest(200, "EffectCompetence modified", $fetchedResult);
            } catch (PDOException $e) {
                deliver_responseRest(400, "EffectCompetence modification error", $sql . "<br>" . $e->getMessage());
            }
        }
        break;
    case "DELETE" :
        try {
            $sql = "DELETE FROM competenceeffect
                WHERE idCompetenceEffect = " . $competenceEffect['idCompetenceEffect'] . "";
            $bdd->exec($sql);
            $bdd = null;
            http_response_code(200);
            deliver_responseRest(200, "EffectCompetence modified", NULL);
        } catch
        (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
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