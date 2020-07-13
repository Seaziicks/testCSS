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

$managerCompetence = new CompetenceManager($bdd);

$managerPersonnage = new PersonnageManager($bdd);

$personnage = $managerPersonnage->get(6);

$competence = $managerCompetence->get(175, $personnage);

echo ''.$competence->getNewDescriptionComplete();
echo '<br/><br/><br/>'.$competence->getDescription(1);

?>