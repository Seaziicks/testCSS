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

$managerCompetence = new CompetenceManager($db);

$managerPersonnage = new PersonnageManager($db);

$personnage = $managerPersonnage->get(6);

$competence = $managerCompetence->get(48, $personnage);

echo ''.$competence->getDescriptionComplete();
echo '<br/><br/><br/>'.$competence->getDescription(1);

?>