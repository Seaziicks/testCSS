<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
  require $classname.'.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$manager = new EquipementManager($bdd);

$equipements = $manager->getListForCharacter(4);
 

$EquipementManager = new EquipementPortesManager($bdd);

$panoplie = $EquipementManager->getListForCharacter(4);

echo 'Intelligence : '.$panoplie-> getBonus('Intelligence').'<br/>';
echo 'Agilité : '.$panoplie-> getBonus('Agilité').'<br/>';
echo 'Armure : '.$panoplie-> getBonus('Force').'<br/>';
echo 'Intelligence : '.$panoplie-> getBonus('Armure').'<br/>';

echo '<br/><br/><br/><br/>';

$array = [];
$array = $panoplie->insertAllBonusesIntoArray($array);

foreach ($array as $key => $value) {
    echo $key.' : '.$value.'<br/>';

}

?>