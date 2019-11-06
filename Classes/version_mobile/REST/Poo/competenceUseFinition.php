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
foreach ($competenceEffects as $competenceEffect) {
    if ($competence->_Niveau >= $competenceEffect->_NiveauRequis && $competenceEffect->canBeUsed()) {
        if ($competenceEffect->_linkedEffect) {
            $receivers = $receiversLists[0];
            $bonusCombatReceivers = $bonusCombatReceiversLists[0];
        } else {
            $receivers = $receiversLists[$indexReceiversList];
            $bonusCombatReceivers = $bonusCombatReceiversLists[$indexReceiversList];
            $indexReceiversList++;
        }
        for ($indexCible = 0; $indexCible < count($receivers); $indexCible++) {

            $receiver = $receivers[$indexCible];
            $bonusCombatReceiver = $bonusCombatReceivers[$indexCible];

            if (!$competenceEffect->_linkedEffect ||
                ($competenceEffect->_linkedEffect && !linkedTargetDone($receiver->Id_Personnage, $linkedTargetsDone))) {

                foreach ($beforeActionEffects as $beforeActionEffect)
                    $beforeActionEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($beforeCompetenceEffects as $beforeCompetenceEffect)
                    $beforeCompetenceEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($beforeDamagesEffects as $beforeDamagesEffect)
                    $beforeDamagesEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($beforePhysicalDamagesEffects as $beforePhysicalDamagesEffect)
                    $beforePhysicalDamagesEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($beforeMagicalDamagesEffects as $beforeMagicalDamagesEffect)
                    $beforeMagicalDamagesEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($beforeHealEffects as $beforeHealEffect)
                    $beforeHealEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);
            }

            $receiver->triggerEffectReceivingAction($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, true);

            //-----------
            $competenceEffect->appliquerEffetCompetenceAvecBonusGeneraux($bdd, $competenceEffect, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $indexCible);


            $receiver->triggerEffectReceivingAction($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, false);

            if (!$competenceEffect->_linkedEffect ||
                ($competenceEffect->_linkedEffect && !linkedTargetDone($receiver->Id_Personnage, $linkedTargetsDone))) {

                foreach ($afterActionEffects as $beforeActionEffect)
                    $beforeActionEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($afterCompetenceEffects as $beforeCompetenceEffect)
                    $beforeCompetenceEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($afterDamagesEffects as $afterDamagesEffect)
                    $afterDamagesEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($afterPhysicalDamagesEffects as $afterPhysicalDamagesEffect)
                    $afterPhysicalDamagesEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($afterMagicalDamagesEffects as $afterMagicalDamagesEffect)
                    $afterMagicalDamagesEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);

                foreach ($afterHealEffects as $afterHealEffect)
                    $afterHealEffect->useEffect($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver);
            }

            if ($effect->_linkedEffect)
                array_pus($linkedTargetsDone, $receiver->_Id_Personnage);
        }
    }
}


function linkedTargetDone($linkedTargetList, $linkedTarget)
{
    return array_search($linkedTarget, $linkedTargetList);
}