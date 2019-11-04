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
$receivers = [];
$bonusCombatReceivers = [];

foreach ($_POST['receivers'] as $receiverID) {
    array_push($receivers, $personnageManager->get($receiverID));
    array_push($bonusCombatReceivers, $bonusCombatManager->get($receiverID));
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


for ($indexCible = 0; $indexCible < count($receivers); $indexCible++) {

    $receiver = $receivers[$indexCible];
    $bonusCombatReceiver = $bonusCombatReceivers[$indexCible];

    foreach ($beforeActionEffects as $beforeActionEffect)
        $beforeActionEffect->useEffect($bdd, $beforeActionEffect, $receiver, $bonusCombatReceiver);

    foreach ($beforeCompetenceEffects as $beforeCompetenceEffect)
        $beforeCompetenceEffect->useEffect($bdd, $beforeCompetenceEffect, $receiver, $bonusCombatReceiver);

    foreach ($beforeDamagesEffects as $beforeDamagesEffect)
        $beforeDamagesEffect->useEffect($bdd, $beforeDamagesEffect, $receiver, $bonusCombatReceiver);

    foreach ($beforePhysicalDamagesEffects as $beforePhysicalDamagesEffect)
        $beforePhysicalDamagesEffect->useEffect($bdd, $beforePhysicalDamagesEffect, $receiver, $bonusCombatReceiver);

    foreach ($beforeMagicalDamagesEffects as $beforeMagicalDamagesEffect)
        $beforeMagicalDamagesEffect->useEffect($bdd, $beforeMagicalDamagesEffect, $receiver, $bonusCombatReceiver);

    foreach ($beforeHealEffects as $beforeHealEffect)
        $beforeHealEffect->useEffect($bdd, $beforeHealEffect, $receiver, $bonusCombatReceiver);

    $receiver->triggerEffectReceivingAction($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, true);

    foreach ($competenceEffects as $competenceEffect)
        if ($competence->_Niveau >= $competenceEffect->_NiveauRequis)
            $competenceEffect->appliquerEffetCompetenceAvecBonusGeneraux($bdd, $competenceEffect, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $indexCible);


    $receiver->triggerEffectReceivingAction($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, false);

    foreach ($afterActionEffects as $beforeActionEffect)
        $beforeActionEffect->useEffect($bdd, $beforeActionEffect, $receiver, $bonusCombatReceiver);

    foreach ($afterCompetenceEffects as $beforeCompetenceEffect)
        $beforeCompetenceEffect->useEffect($bdd, $beforeCompetenceEffect, $receiver, $bonusCombatReceiver);

    foreach ($afterDamagesEffects as $afterDamagesEffect)
        $afterDamagesEffect->useEffect($bdd, $afterDamagesEffect, $receiver, $bonusCombatReceiver);

    foreach ($afterPhysicalDamagesEffects as $afterPhysicalDamagesEffect)
        $afterPhysicalDamagesEffect->useEffect($bdd, $afterPhysicalDamagesEffect, $receiver, $bonusCombatReceiver);

    foreach ($afterMagicalDamagesEffects as $afterMagicalDamagesEffect)
        $afterMagicalDamagesEffect->useEffect($bdd, $afterMagicalDamagesEffect, $receiver, $bonusCombatReceiver);

    foreach ($afterHealEffects as $afterHealEffect)
        $afterHealEffect->useEffect($bdd, $afterHealEffect, $receiver, $bonusCombatReceiver);
}