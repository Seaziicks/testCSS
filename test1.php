<?php

try
{
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$personnage='Paladin';
include("../site_competences/Classes/statistiques.php");
$competences = $bdd->query('SELECT * 
								FROM competence 
								WHERE Id_Competence = 57');
$competence = $competences->fetch();
?>

<html>

<head>

  		<link rel="stylesheet" href="../site_competences/Classes/Paladin/css.css" type="text/css" media="screen"/>

		<link rel="stylesheet" href="../site_competences/Classes/Police/Luminari/style.css">

</head>

<body>

<?php
$i=1;
$j=1;
echo $competence['Description'.$i];
include("stat.php");
if($competence['Type_calcul'.$i]==1){
	include('merde.php');
	echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']));echo $competence['Description'.($j+1)];
	$i++;$j++;
}elseif($competence['Type_calcul'.$i]==2){
	include('merde.php');
	echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']))+$competence['Calcul'.($i+1).'a']+(round((float)$statb/$competence['Calcul'.($i+1).'b']));echo $competence['Description'.($j+1)];
	$i+=2;$j++;
}
if(!is_null($competence['Description3'])){
	if($competence['Type_calcul'.$i]==1){
		include('merde.php');
		echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']));echo $competence['Description'.($j+1)];
		$i++;$j++;
	}elseif($competence['Type_calcul'.$i]==2){
		include('merde.php');
		echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']))+$competence['Calcul'.($i+1).'a']+(round((float)$statb/$competence['Calcul'.($i+1).'b']));echo $competence['Description'.($j+1)];
		$i+=2;$j++;
	}
	if(!is_null($competence['Description4'])){
		if($competence['Type_calcul'.$i]==1){
			include('merde.php');
			echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']));echo $competence['Description'.($j+1)];
			$i++;$j++;
		}elseif($competence['Type_calcul'.$i]==2){
			include('merde.php');
			echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']))+$competence['Calcul'.($i+1).'a']+(round((float)$statb/$competence['Calcul'.($i+1).'b']));echo $competence['Description'.($j+1)];
			$i+=2;$j++;
		}
		if(!is_null($competence['Description5'])){
			if($competence['Type_calcul'.$i]==1){
				include('merde.php');
				echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']));echo $competence['Description'.($j+1)];
				$i++;$j++;
			}elseif($competence['Type_calcul'.$i]==2){
				include('merde.php');
				echo $competence['Calcul'.$i.'a']+(round((float)$stata/$competence['Calcul'.$i.'b']))+$competence['Calcul'.($i+1).'a']+(round((float)$statb/$competence['Calcul'.($i+1).'b']));echo $competence['Description'.($j+1)];
				$i+=2;$j++;
			}
			if(!is_null($competence['Description6'])){
				if($competence['Type_calcul'.$i]==1){
					include('merde.php');
					echo $competence['Calcul'.$i.'a']+(round((float)$stat1/$competence['Calcul'.$i.'b']));echo $competence['Description'.($j+1)];
					$i++;$j++;
				}elseif($competence['Type_calcul'.$i]==2){
					include('merde.php');
					echo $competence['Calcul'.$i.'a']+(round((float)$stat1/$competence['Calcul'.$i.'b']))+$competence['Calcul'.($i+1).'a']+(round((float)$stat1/$competence['Calcul'.($i+1).'b']));echo $competence['Description'.($j+1)];
					$i+=2;$j++;
				}
				}
			}
		}
	}
?>

</body>

</html>