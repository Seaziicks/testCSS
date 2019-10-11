
<?php
include('BDD.php');

$Equipement1='Coiffe';
$Equipement2='Epaules';
$Equipement3='Gants';
$Equipement4='Torse';
$Equipement5='Brassard';
$Equipement6='Ceinture';
$Equipement7='Jambières';
$Equipement8='Bottes';
$Equipement9='Amulette';
$Equipement10='Anneau1';
$Equipement11='Anneau2';
$Equipement12='Arme';
$Equipement13='Offhand';


for($j=1;$j<=13;$j++){
	$actuel=${'Equipement'.$j};
	echo $actuel;
}$merde=$actuel;echo $merde;
?>