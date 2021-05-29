<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
    if (is_file('../Poo/'.$classname.'.php'))
        require '../Poo/'.$classname.'.php';
    elseif (is_file('../Poo/Manager/'.$classname.'.php'))
        require '../Poo/Manager/'.$classname.'.php';
    elseif (is_file('../Poo/Classes/'.$classname.'.php'))
        require '../Poo/Classes/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

include('BDD.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$manager = new EquipementManager($bdd);

$character = 2;

$equipements = $manager->getListForCharacter($character);
 

$EquipementManager = new EquipementPortesManager($bdd);

$panoplie = $EquipementManager->getListForCharacter($character);

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