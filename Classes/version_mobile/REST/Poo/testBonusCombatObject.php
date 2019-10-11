<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
    require $classname.'.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.


$db = new PDO('mysql:host=localhost;dbname=modifications(zone tampon);charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$id = 9;

$personnageManager = new PersonnageManager($db);
$perso = $personnageManager->get($id);

$bonusCombatManager = new BonusCombatManager($db);
$bonusCombat = $bonusCombatManager->get($id);

$equipementPortesManager = new EquipementPortesManager($db);
$equipementsPortes = $equipementPortesManager->getListForCharacter($id);




echo $bonusCombat->_PA.'<br/>';
echo $bonusCombat->_DegatsPhysiqueFlat.'<br/>';
echo $bonusCombat->_Intelligence.'<br/>';
echo $perso->_Bonus_Armure.'<br/>';
echo $perso->_Bonus_Intelligence.'<br/>';
echo $perso->_Bonus_Force.'<br/>';
echo $equipementsPortes->getBonus('Armure');





?>