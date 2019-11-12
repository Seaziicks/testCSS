<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
    require $classname . '.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$turn = $_POST['turn'];

$personnageManager = new PersonnageManager($bdd);
$launcher = $personnageManager->get($_POST['idLauncher']);
$bonusCombatManager = new BonusCombatManager($bdd);
$bonusCombatLauncher = $bonusCombatManager->get($launcher->_Id_Personnage);
$receiversLists = [];
$bonusCombatReceiversLists = [];

foreach ($_POST['receivers'] as $receiversSelection) {
    $receiverList = array();
    $bonusCombatReceiversList = array();
    foreach ($receiversSelection as $receiverID) {
        array_push($receiverList, $personnageManager->get($receiverID));
        array_push($bonusCombatReceiversList, $bonusCombatManager->get($receiverID));
    }
    array_push($receiversLists, $receiverList);
    array_push($bonusCombatReceiversLists, $bonusCombatReceiversList);
}


$competenceManager = new CompetenceManager($bdd);
$competence = $competenceManager->get($_POST['idCompetence'], $launcher);
$competenceEffects = $competence->_Effects;

$beforeActionEffects = [];
$afterActionEffects = [];
$beforeCompetenceEffects = [];
$afterCompetenceEffects = [];
$beforeDamagesEffects = [];
$afterDamagesEffects = [];
$beforePhysicalDamagesEffects = [];
$afterPhysicalDamagesEffects = [];
$beforeMagicalDamagesEffects = [];
$afterMagicalDamagesEffects = [];
$beforeHealEffects = [];
$afterHealEffects = [];


$effectTestManager = new EffectTestManager($bdd);
$effects = $effectTestManager->getEffectListForReceiver($launcher->_Id_Personnage);

foreach ($effects as $effect) {
    Switch ($effect->ActionType) {
        case 7 :
            // Récupéré dans BonusCombat
            break;
        case 8 :
            array_push($beforeActionEffects, $effect);
            break;
        case 9 :
            array_push($afterActionEffects, $effect);
            break;
        case 12 :
            array_push($beforeCompetenceEffects, $effect);
            break;
        case 13 :
            array_push($afterCompetenceEffects, $effect);
            break;
        case 14 :
            array_push($beforeDamagesEffects, $effect);
            break;
        case 15 :
            array_push($afterDamagesEffects, $effect);
            break;
        case 16 :
            array_push($beforePhysicalDamagesEffects, $effect);
            break;
        case 17 :
            array_push($afterPhysicalDamagesEffects, $effect);
            break;
        case 18 :
            array_push($beforeMagicalDamagesEffects, $effect);
            break;
        case 19 :
            array_push($afterMagicalDamagesEffects, $effect);
            break;
        case 20 :
            array_push($beforeHealEffects, $effect);
            break;
        case 21 :
            array_push($afterHealEffects, $effect);
            break;

    }
}


$indexReceiversList = 1; // Commence à 1 car le 0 est réservé à la list de cibles des effets liés.
$linkedTargetsDone = array(); // Liste des cibles effets liés déjà affectées par les effets avant/après
$effectWithSpecialApplicationTypeHasBeenLaunched = false;
foreach ($competenceEffects as $competenceEffect) {
    if ($competenceEffect->_linkedEffect) {
        $receivers = $receiversLists[0];
        $bonusCombatReceivers = $bonusCombatReceiversLists[0];
    } else {
        $receivers = $receiversLists[$indexReceiversList];
        $bonusCombatReceivers = $bonusCombatReceiversLists[$indexReceiversList];
        $indexReceiversList++;
    }
    if($competenceEffect->_applicationType == 1)
        $receivers = [$launcher->_Id_Personnage]; // Cas de ldu cible sois-même
    if ($competence->_Niveau >= $competenceEffect->_NiveauRequis && $competenceEffect->canBeUsed($launcher->_Id_Personnage, $competenceManager, $receivers)) {
        for ($indexCible = 0; $indexCible < count($receivers); $indexCible++) {
            if ((isCibleUnique($competenceEffect) && $indexCible == 0)
                || (!isCibleUnique($competenceEffect) && $indexCible < $competenceEffect->_numberOfTarget)) {
                $receiver = $receivers[$indexCible];
                $bonusCombatReceiver = $bonusCombatReceivers[$indexCible];

                if (!$competenceEffect->_linkedEffect ||
                    ($competenceEffect->_linkedEffect && !linkedTargetDone($receiver->Id_Personnage, $linkedTargetsDone))) {

                    foreach ($beforeActionEffects as $beforeActionEffect)
                        $beforeActionEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($beforeCompetenceEffects as $beforeCompetenceEffect)
                        $beforeCompetenceEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($beforeDamagesEffects as $beforeDamagesEffect)
                        $beforeDamagesEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($beforePhysicalDamagesEffects as $beforePhysicalDamagesEffect)
                        $beforePhysicalDamagesEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($beforeMagicalDamagesEffects as $beforeMagicalDamagesEffect)
                        $beforeMagicalDamagesEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($beforeHealEffects as $beforeHealEffect)
                        $beforeHealEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);
                }

                $receiver->triggerEffectReceivingCompetence($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, true);

                //-----------
                $competenceEffect->appliquerEffetCompetenceAvecBonusGeneraux($bdd, $competenceEffect, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $indexCible);


                $receiver->triggerEffectReceivingCompetence($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, false);

                if (!$competenceEffect->_linkedEffect ||
                    ($competenceEffect->_linkedEffect && !linkedTargetDone($receiver->Id_Personnage, $linkedTargetsDone))) {

                    foreach ($afterActionEffects as $beforeActionEffect)
                        $beforeActionEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($afterCompetenceEffects as $beforeCompetenceEffect)
                        $beforeCompetenceEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($afterDamagesEffects as $afterDamagesEffect)
                        $afterDamagesEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($afterPhysicalDamagesEffects as $afterPhysicalDamagesEffect)
                        $afterPhysicalDamagesEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($afterMagicalDamagesEffects as $afterMagicalDamagesEffect)
                        $afterMagicalDamagesEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);

                    foreach ($afterHealEffects as $afterHealEffect)
                        $afterHealEffect->useEffect($bdd, $receiver, $bonusCombatReceiver);
                }

                if ($competenceEffect->_linkedEffect)
                    array_push($linkedTargetsDone, $receiver->_Id_Personnage);

                if (!$effectWithSpecialApplicationTypeHasBeenLaunched)
                    addTargetToCompetenceUse($bdd, $competence, $launcher, $receiver, $turn);
            }
        }
        if($competenceEffect->_applicationType > 6)
            $effectWithSpecialApplicationTypeHasBeenLaunched = true;
    }
}
if($effectWithSpecialApplicationTypeHasBeenLaunched)
    clearTargets($bdd, $competence);


function linkedTargetDone($linkedTargetList, $linkedTarget)
{
    return array_search($linkedTarget, $linkedTargetList);
}

function addTargetToCompetenceUse($bdd, CompetenceTest $competence, PersonnageTest $launcher, PersonnageTest $receiver, int $turnUse) {
    $sql = "INSERT INTO competenceeffectuse (idCompetence, idLauncher, idReceiver, turnUse)
            VALUES (" . $competence->_Id_Competence. ", " . $launcher->_Id_Personnage. ",
            " . $receiver->_Id_Personnage. ",".$turnUse.")";
    // use exec() because no results are returned
    $bdd->exec($sql);
}

function clearTargets($bdd, CompetenceTest $competence){
    $sql = "DELETE FROM competenceeffectuse
                WHERE idCompetence = " . $competence->_Id_Competence . "";
    $bdd->exec($sql);
}

function isCibleUnique(CompetenceEffectTest $competenceEffect): boolean {
    return $competenceEffect->_applicationType == 2 || ($competenceEffect->_applicationType > 6
        & $competenceEffect->_applicationType < 13);
}