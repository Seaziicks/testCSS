<?php
// On enregistre notre autoload.
include('autoLoad.php');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');


//  $effects = json_decode($postedData, true);

// $effects = json_decode($_POST);
// print_r($effects);
$personnageManager = new PersonnageManager($bdd);

$http_method = $_SERVER['REQUEST_METHOD'];
switch ($http_method) {
    /// Cas de la méthode GET
    case "GET" :
        try {


            /*
            print_r($_GET);
            print_r($_POST);
            print_r($_REQUEST);
            print_r(file_get_contents('php://input'));
            echo '<br>'.file_get_contents('php://input').'<br>';
            echo json_decode(file_get_contents('php://input'), true);
            */


            $effects = json_decode($_GET['Effect']);

            // print_r(json_decode($_GET['Effect'])->EffectType);
            // set the PDO error mode to exception
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                                IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
            VALUES (" . $effects->EffectType . "," . $effects->EffectValueMin . "," . $effects->EffectValueMax . ",
                    " . $effects->ID_Competence . "," . $effects->IDLauncher . "," . $effects->IDReceiver . ",
                    " . $effects->NumberOfUse . ", " . $effects->NumberOfTurn . "," . $effects->NumberOfFight . ")";
            // use exec() because no results are returned
            $bdd->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $bdd = null;
        $policy = [
            'EffectType' => $effects->EffectType,
            'EffectValueMin' => $effects->EffectValueMin,
            'EffectValueMax' => $effects->EffectValueMax,
            'IDCompetence' => $effects->ID_Competence,
            'IDLauncher' => $effects->IDLauncher,
            'IDReceiver' => $effects->IDReceiver,
            'NumberOfUse' => $effects->NumberOfUse,
            'NumberOfTurn' => $effects->NumberOfTurn,
            'NumberOfFight' => $effects->NumberOfFight,
        ];
        // deliver_responseRest(200, "New effect created successfully", $policy);
        break;
    /// Cas de la méthode POST
    case "POST" :
        try {
            $effects = json_decode($_GET['Effect']);
            // print_r(json_decode($_GET['Effect'])->EffectType);
            // set the PDO error mode to exception
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($effects->ActionType == 5) {
                $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                                IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
            VALUES (" . $effects->EffectType . "," . $effects->EffectValueMin . "," . $effects->EffectValueMax . ",
                    " . $effects->ID_Competence . "," . $effects->IDLauncher . "," . $effects->IDReceiver . ",
                    " . $effects->NumberOfUse . ", " . $effects->NumberOfTurn . "," . $effects->NumberOfFight . ")";
                // use exec() because no results are returned
                $bdd->exec($sql);

                $policy = [
                    'EffectType' => $effects->EffectType,
                    'EffectValueMin' => $effects->EffectValueMin,
                    'EffectValueMax' => $effects->EffectValueMax,
                    'IDCompetence' => $effects->ID_Competence,
                    'IDLauncher' => $effects->IDLauncher,
                    'IDReceiver' => $effects->IDReceiver,
                    'NumberOfUse' => $effects->NumberOfUse,
                    'NumberOfTurn' => $effects->NumberOfTurn,
                    'NumberOfFight' => $effects->NumberOfFight,
                ];
                // echo json_encode($policy);
                // echo "New record created successfully";

                $bdd = null;
                http_response_code(201);
                deliver_responseRest(201, "New effect created successfully", $policy);
            } else {
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $effects = json_decode($_GET['Effect']);

                $personnageManager = new PersonnageManager($bdd);
                $perso = $personnageManager->get($effects->IDReceiver);

                $bonusCombatManager = new BonusCombatManager($bdd);
                $bonusCombat = $bonusCombatManager->get($effects->IDReceiver);
                echo $effects->ActionType;
                switch ($effects->ActionType) {
                    case 1:
                    case 2:
                        $DegatsSubits = calculerReductionDegats($perso, $bonusCombat, $effects->EffectValueMin);
                        $BouclierRestant = max(0, $perso->_Bouclier - $DegatsSubits);
                        $PDVRestant = max(0, $perso->_PDV_Actuel - max(0, $DegatsSubits - $perso->_Bouclier));
                        echo '$DegatsEnvoyés => ' . $effects->EffectValueMin . '<br>';
                        echo '$DegatsSubits => ' . $DegatsSubits . '<br>';
                        echo '$BouclierRestant => ' . $BouclierRestant . '<br>';
                        echo '$PDVRestant => ' . $PDVRestant . '<br>';
                        $sql = "UPDATE personnage SET PDV_Actuel = " . $PDVRestant . ", Bouclier = " . $BouclierRestant . " WHERE Id_Personnage = " . $effects->IDReceiver;
                        $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $effects->EffectValueMin . ") WHERE idPersonnage = " . $effects->IDReceiver;
                        $bdd->exec($sql2);
                        break;
                    case 3:
                        $PDVSoignes = min($perso->getTotalVitalité() * 2, $perso->_PDV_Actuel + $effects->EffectValueMin);
                        $sql = "UPDATE personnage SET PDV_Actuel = " . $PDVSoignes . " WHERE Id_Personnage = " . $effects->IDReceiver;
                        break;
                    case 4:
                        $BouclierTotal = max(0, $perso->_Bouclier - $effects->EffectValueMin);
                        $sql = "UPDATE personnage SET Bouclier = " . $BouclierTotal . " WHERE Id_Personnage = " . $effects->IDReceiver;
                        break;
                }

                // use exec() because no results are returned
                $bdd->exec($sql);

                $bdd = null;
                http_response_code(200);
                deliver_responseRest(200, "Effect applied", NULL);

            }
        } catch (PDOException $e) {
            echo $effects->ActionType . '' . $sql . "<br>" . $e->getMessage();
        }

        break;
    case "PUT" :
        try {
            $effects = json_decode($_GET['Effect']);
            // print_r(json_decode($_GET['Effect'])->EffectType);
            // set the PDO error mode to exception
            $personnageManager = new PersonnageManager($bdd);
            $perso = $personnageManager->get($effects->IDReceiver);
            $perso->_Bonus_Armure;

            $bonusCombatManager = new BonusCombatManager($bdd);
            $bonusCombat = $bonusCombatManager->get($effects->IDReceiver);

            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            switch ($effects->ActionType) {
                case 1:
                case 2:
                    $DegatsSubits = $this->calculerReductionDegats($perso, $bonusCombat, $effects->EffectValueMin);
                    $BouclierRestant = max(0, $perso->_Bouclier - $DegatsSubits);
                    $PDVRestant = max(0, $perso->_PDV_Actuel - max(0, $DegatsSubits - $perso->_Bouclier));
                    $sql = "UPDATE personnage SET PDV_Actuel = " . $PDVRestant . ", Bouclier = " . $BouclierRestant . " WHERE $effects->Id_Personnage = " . $effects->IDReceiver;
                    $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $effects->EffectValueMin . ") WHERE idPersonnage = " . $effects->IDReceiver;
                    $bdd->exec($sql2);
                    break;
                case 3:
                    $PDVSoignes = min($perso->getTotalVitalité() * 2, $perso->_PDV_Actuel + $effects->EffectValueMin);
                    $sql = "UPDATE personnage SET PDV_Actuel = " . $PDVSoignes . " WHERE Id_Personnage = " . $effects->IDReceiver;
                    break;
                case 4:
                    $BouclierTotal = max(0, $perso->_Bouclier - $effects->EffectValueMin);
                    $sql = "UPDATE personnage SET Bouclier = " . $BouclierTotal . " WHERE Id_Personnage = " . $effects->IDReceiver;
                    break;
            }

            // use exec() because no results are returned
            $bdd->exec($sql);

            $policy = [
                'EffectType' => $effects->EffectType,
                'EffectValueMin' => $effects->EffectValueMin,
                'EffectValueMax' => $effects->EffectValueMax,
                'IDCompetence' => $effects->ID_Competence,
                'IDLauncher' => $effects->IDLauncher,
                'IDReceiver' => $effects->IDReceiver,
                'NumberOfUse' => $effects->NumberOfUse,
                'NumberOfTurn' => $effects->NumberOfTurn,
                'NumberOfFight' => $effects->NumberOfFight,
            ];
            // echo json_encode($policy);
            // echo "New record created successfully";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage()."<br><br><br>";
            echo $sql2 . "<br>" . $e->getMessage();
        }
        $bdd = null;
        http_response_code(200);
        deliver_responseRest(200, "Effect applied", NULL);
        break;
}

function calculerReductionDegats(Personnage $perso, BonusCombat $bonusCombat, int $EffectValueMin): int
{
    return $EffectValueMin - floor(($perso->_Bonus_Armure + $bonusCombat->_ArmureFlat) * $bonusCombat->_ArmurePourcentage);
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

/*
UPDATE `effect_type` SET `Name` = 'DegatsFlat' WHERE `effect_type`.`ID_Effect` = 1;
UPDATE `effect_type` SET `Name` = 'DegatsPourcentage' WHERE `effect_type`.`ID_Effect` = 2;
UPDATE `effect_type` SET `Name` = 'DegatsPhysiqueFlat' WHERE `effect_type`.`ID_Effect` = 3;
UPDATE `effect_type` SET `Name` = 'DegatsPhysiquePourcentage' WHERE `effect_type`.`ID_Effect` = 4;
UPDATE `effect_type` SET `Name` = 'DegatsMagiqueFlat' WHERE `effect_type`.`ID_Effect` = 5;
UPDATE `effect_type` SET `Name` = 'DegatsMagiquePourcentage' WHERE `effect_type`.`ID_Effect` = 6;
UPDATE `effect_type` SET `Name` = 'Force' WHERE `effect_type`.`ID_Effect` = 7;
UPDATE `effect_type` SET `Name` = 'Agilite' WHERE `effect_type`.`ID_Effect` = 8;
UPDATE `effect_type` SET `Name` = 'Intelligence' WHERE `effect_type`.`ID_Effect` = 9;
UPDATE `effect_type` SET `Name` = 'Vitalite' WHERE `effect_type`.`ID_Effect` = 10;
UPDATE `effect_type` SET `Name` = 'PA' WHERE `effect_type`.`ID_Effect` = 11;
UPDATE `effect_type` SET `Name` = 'PM"' WHERE `effect_type`.`ID_Effect` = 12;
UPDATE `effect_type` SET `Name` = 'SortFlat' WHERE `effect_type`.`ID_Effect` = 13;
UPDATE `effect_type` SET `Name` = 'SortPourcentage' WHERE `effect_type`.`ID_Effect` = 14;
UPDATE `effect_type` SET `Name` = 'ArmureFlat' WHERE `effect_type`.`ID_Effect` = 15;
UPDATE `effect_type` SET `Name` = 'ArmurePourcentage' WHERE `effect_type`.`ID_Effect` = 16;
UPDATE `effect_type` SET `Name` = 'ArmureMagiqueFlat' WHERE `effect_type`.`ID_Effect` = 17;
UPDATE `effect_type` SET `Name` = 'ArmureMagiquePourcentage' WHERE `effect_type`.`ID_Effect` = 18;
UPDATE `effect_type` SET `Name` = 'ReductionDegatsFlat' WHERE `effect_type`.`ID_Effect` = 19;
UPDATE `effect_type` SET `Name` = 'ReductionDegatsPourcentage' WHERE `effect_type`.`ID_Effect` = 20;
UPDATE `effect_type` SET `Name` = 'SoinFlat' WHERE `effect_type`.`ID_Effect` = 21;
UPDATE `effect_type` SET `Name` = 'SoinPourcentage' WHERE `effect_type`.`ID_Effect` = 22;
UPDATE `effect_type` SET `Name` = 'SoinRecuFlat' WHERE `effect_type`.`ID_Effect` = 23;
UPDATE `effect_type` SET `Name` = 'SoinRecuPourcentage' WHERE `effect_type`.`ID_Effect` = 24;
UPDATE `effect_type` SET `Name` = 'IgnoreArmureFlat' WHERE `effect_type`.`ID_Effect` = 25;
UPDATE `effect_type` SET `Name` = 'IgnoreArmurePourcentage' WHERE `effect_type`.`ID_Effect` = 26;
UPDATE `effect_type` SET `Name` = 'IgnoreArmureMagiqueFlat' WHERE `effect_type`.`ID_Effect` = 27;
UPDATE `effect_type` SET `Name` = 'IgnoreArmureMagiquePourcentage' WHERE `effect_type`.`ID_Effect` = 28;
UPDATE `effect_type` SET `Name` = 'AugmenteNombreAttaque' WHERE `effect_type`.`ID_Effect` = 29;
UPDATE `effect_type` SET `Name` = 'RedirectionDegatFlat' WHERE `effect_type`.`ID_Effect` = 30;
UPDATE `effect_type` SET `Name` = 'RedirectionDegatPourcentage' WHERE `effect_type`.`ID_Effect` = 31;
UPDATE `effect_type` SET `Name` = 'RenvoieDegatFlat' WHERE `effect_type`.`ID_Effect` = 32;
UPDATE `effect_type` SET `Name` = 'RenvoieDegatPourcentage' WHERE `effect_type`.`ID_Effect` = 33;
UPDATE `effect_type` SET `Name` = 'Portee' WHERE `effect_type`.`ID_Effect` = 34;
UPDATE `effect_type` SET `Name` = 'Degat' WHERE `effect_type`.`ID_Effect` = 35;
UPDATE `effect_type` SET `Name` = 'DegatDiffere' WHERE `effect_type`.`ID_Effect` = 36;
UPDATE `effect_type` SET `Name` = 'Soin' WHERE `effect_type`.`ID_Effect` = 37;
UPDATE `effect_type` SET `Name` = 'Shield' WHERE `effect_type`.`ID_Effect` = 38;





























UPDATE `action_type` SET `Name` = 'Dommage physique' WHERE `action_type`.`ID_Action_Type` = 1;
UPDATE `action_type` SET `Name` = 'Dommage Magique' WHERE `action_type`.`ID_Action_Type` = 2;
UPDATE `action_type` SET `Name` = 'VoleDeViePhysique' WHERE `action_type`.`ID_Action_Type` = 3;
UPDATE `action_type` SET `Name` = 'VoleDeVieMagique' WHERE `action_type`.`ID_Action_Type` = 4;
UPDATE `action_type` SET `Name` = 'Soin' WHERE `action_type`.`ID_Action_Type` = 5;
UPDATE `action_type` SET `Name` = 'Bouclier' WHERE `action_type`.`ID_Action_Type` = 6;
UPDATE `action_type` SET `Name` = 'Effet' WHERE `action_type`.`ID_Action_Type` = 7;
UPDATE `action_type` SET `Name` = 'Effet avant action' WHERE `action_type`.`ID_Action_Type` = 8;
UPDATE `action_type` SET `Name` = 'Effet après action' WHERE `action_type`.`ID_Action_Type` = 9;
UPDATE `action_type` SET `Name` = 'Effet avant attaque' WHERE `action_type`.`ID_Action_Type` = 10;
UPDATE `action_type` SET `Name` = 'Effet après attaque' WHERE `action_type`.`ID_Action_Type` = 11;
UPDATE `action_type` SET `Name` = 'Effet avant competence' WHERE `action_type`.`ID_Action_Type` = 12;
UPDATE `action_type` SET `Name` = 'Effet après competence' WHERE `action_type`.`ID_Action_Type` = 13;
UPDATE `action_type` SET `Name` = 'Effet avant dégâts' WHERE `action_type`.`ID_Action_Type` = 14;
UPDATE `action_type` SET `Name` = 'Effet après dégâts' WHERE `action_type`.`ID_Action_Type` = 15;
UPDATE `action_type` SET `Name` = 'Effet avant dégâts physique' WHERE `action_type`.`ID_Action_Type` = 16;
UPDATE `action_type` SET `Name` = 'Effet après dégâts physique' WHERE `action_type`.`ID_Action_Type` = 17;
UPDATE `action_type` SET `Name` = 'Effet avant dégâts magique' WHERE `action_type`.`ID_Action_Type` = 18;
UPDATE `action_type` SET `Name` = 'Effet après dégâts magique' WHERE `action_type`.`ID_Action_Type` = 19;
UPDATE `action_type` SET `Name` = 'Effet avant soin' WHERE `action_type`.`ID_Action_Type` = 20;
UPDATE `action_type` SET `Name` = 'Effet après soin' WHERE `action_type`.`ID_Action_Type` = 21;
UPDATE `action_type` SET `Name` = 'Effet avant action reçu' WHERE `action_type`.`ID_Action_Type` = 22;
UPDATE `action_type` SET `Name` = 'Effet après action reçu' WHERE `action_type`.`ID_Action_Type` = 23;
UPDATE `action_type` SET `Name` = 'Effet avant attaque reçu' WHERE `action_type`.`ID_Action_Type` = 24;
UPDATE `action_type` SET `Name` = 'Effet après attaque reçu' WHERE `action_type`.`ID_Action_Type` = 25;
UPDATE `action_type` SET `Name` = 'Effet avant competence reçu' WHERE `action_type`.`ID_Action_Type` = 26;
UPDATE `action_type` SET `Name` = 'Effet après competence reçu' WHERE `action_type`.`ID_Action_Type` = 27;
UPDATE `action_type` SET `Name` = 'Effet avant dégâts reçu' WHERE `action_type`.`ID_Action_Type` = 28;
UPDATE `action_type` SET `Name` = 'Effet après dégâts reçu' WHERE `action_type`.`ID_Action_Type` = 29;
UPDATE `action_type` SET `Name` = 'Effet avant dégâts physique reçu' WHERE `action_type`.`ID_Action_Type` = 30;
UPDATE `action_type` SET `Name` = 'Effet après dégâts physique reçu' WHERE `action_type`.`ID_Action_Type` = 31;
UPDATE `action_type` SET `Name` = 'Effet avant dégâts magique reçu' WHERE `action_type`.`ID_Action_Type` = 32;
UPDATE `action_type` SET `Name` = 'Effet après dégâts magique reçu' WHERE `action_type`.`ID_Action_Type` = 33;
UPDATE `action_type` SET `Name` = 'Effet avant soin reçu' WHERE `action_type`.`ID_Action_Type` = 34;
UPDATE `action_type` SET `Name` = 'Effet après soin reçu' WHERE `action_type`.`ID_Action_Type` = 35;
UPDATE `action_type` SET `Name` = 'EffetDebutTour' WHERE `action_type`.`ID_Action_Type` = 36;
UPDATE `action_type` SET `Name` = 'EffetFinTour' WHERE `action_type`.`ID_Action_Type` = 37;
*/










?>