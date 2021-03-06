<?php
spl_autoload_register('chargerClasse');
session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

// On enregistre notre autoload.
function chargerClasse($classname)
{
    if (is_file('Poo/'.$classname.'.php'))
        require 'Poo/'.$classname.'.php';
    elseif (is_file('Poo/Manager/'.$classname.'.php'))
        require 'Poo/Manager/'.$classname.'.php';
    elseif (is_file('Poo/Classes/'.$classname.'.php'))
        require 'Poo/Classes/'.$classname.'.php';
}

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