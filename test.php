<?php 

$personnage = 'Paladin';

include("../site_competences/Classes/BDD.php");


include("../site_competences/Classes/statistiques.php");


$competences = $bdd->query('SELECT * FROM competence WHERE Id_Competence = 39 ');
$competence =$competences->fetch();

echo 5*4;
echo ' ';
echo 5+($intelligence/3);

echo $competence['Description'];

echo 'Je suis un test';

echo 'Je suis un test 2';
?>