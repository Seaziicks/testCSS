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

$manager = new EquipementManager($db);

 $equipements = $manager->getListForCharacter(4);
 

$EquipementManager = new EquipementPortesManager($db);

$panoplie = $EquipementManager->getListForCharacter(4);

echo $panoplie-> getBonus('Intelligence');
echo $panoplie-> getBonus('Agilité');
echo $panoplie-> getBonus('Force');
echo $panoplie-> getBonus('Armure');

?>