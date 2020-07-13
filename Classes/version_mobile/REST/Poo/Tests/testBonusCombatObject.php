<?php
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

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$id = 9;

$personnageManager = new PersonnageManager($bdd);
$perso = $personnageManager->get($id);

$bonusCombatManager = new BonusCombatManager($bdd);
$bonusCombat = $bonusCombatManager->get($id);

$equipementPortesManager = new EquipementPortesManager($bdd);
$equipementsPortes = $equipementPortesManager->getListForCharacter($id);




echo 'PA : '.$bonusCombat->_PA.'<br/>';
echo 'DegatsPhysiqueFlat : '.$bonusCombat->_DegatsPhysiqueFlat.'<br/>';
echo 'Intelligence : '.$bonusCombat->_Intelligence.'<br/>';
echo 'Bonus Intelligence : '.$perso->_Bonus_Intelligence.'<br/>';
echo 'Bonus Force : '.$perso->_Bonus_Force.'<br/>';
echo 'BonusArmure : '.$perso->_Bonus_Armure.'<br/>';
echo 'BonusArmure : '.$equipementsPortes->getBonus('Armure');





?>