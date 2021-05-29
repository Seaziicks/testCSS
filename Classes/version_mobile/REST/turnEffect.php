<?php

// On enregistre notre autoload.
include('autoLoad.php');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$personnageManager = new PersonnageManager($bdd);
$receiver = $personnageManager->get($_GET['id']);
$turnStart = $personnageManager->get($_GET['turnStart']);

$bonusCombatManager = new BonusCombatManager($bdd);
$bonusCombatReceiver = $bonusCombatManager->get($personnage->_Id_Personnage);

$effectTestManager = new EffectTestManager($bdd);
if($turnStart)
    $effectsTurn = $effectTestManager->getTurnStartEffectList($personnage->_Id_Personnage);
else
    $effectsTurn = $effectTestManager->getTurnEndEffectList($personnage->_Id_Personnage);

foreach ($effectsTurn as $effect) {
    $effect->useEffect($bdd, $receiver, $bonusCombatReceiver);
}