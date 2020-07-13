<?php

$statistiques = $bdd->query('SELECT * FROM personnage WHERE Libellé = \'' . $personnage . '\' ');

$statistique = $statistiques->fetch();

$niveau = $statistique['Niveau'];
$force = $statistique['Force'];
$agilité = $statistique['Agilité'];
$intelligence = $statistique['Intelligence'];
$vitalité = $statistique['Vitalité']; 
$ressource = $statistique['Ressource'];
$réussite = $statistique['Réussite'];
$charisme = $statistique['Charisme'];
$marchandage = $statistique['Marchandage'];
$intimidation = $statistique['Intimidation'];
$chance = $statistique['Chance'];
$pdvactuel=$statistique['PDV_Actuel'];
$ressourceactuelle=$statistique['Ressource_Actuelle'];
$pointsCompétenceUtilisés=0;
$paactuel=$statistique['PA_Actuel'];
$pmactuel=$statistique['PM_Actuel'];

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/* Statistiques bonus dues aux équipements*/
$BonusStats =$bdd->query('SELECT o.*
								FROM equiper AS e, personnage AS p, objets as o 
								WHERE e.Id_Personnage = p.Id_Personnage
								AND p.Libellé = \'' . $personnage . '\'
								and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambières,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
								');
	$stats=$BonusStats->fetchAll();
	
	include('bonus_temp.php');
	
	$bonusforce = 0 + $bonusforcetemporaire;
	$bonusagilité = 0 + $bonusagilitétemporaire;
	$bonusintelligence = 0 + $bonusintelligencetemporaire;
	$bonusvitalité = 0 + $bonusvitalitétemporaire;
	$bonusressource = 0 + $bonusressourcetemporaire;
	$bonusarmure= 0 + $bonusarmuretemporaire;
	$bonusréussite= 0 + $bonusréussitetemporaire;
	
	
	
	
	
	
	

	for($j=1;$j<=4;$j++){
		$PropriétéMagique='PropriétéMagique'.$j;
		$ValeurBonus='Valeur'.$j;
		for($i=0;$i<count($stats);$i++){
			 switch($stats[$i][''.$PropriétéMagique.'']){
				 case 'Force':
					 $bonusforce+=$stats[$i][''.$ValeurBonus.''];
					 break;
				 case 'Agilité':
					 $bonusagilité+=$stats[$i][''.$ValeurBonus.''];
					 break;
				 case 'Intelligence':
					 $bonusintelligence+=$stats[$i][''.$ValeurBonus.''];
					 break;
				 case 'Vitalité':
					 $bonusvitalité+=$stats[$i][''.$ValeurBonus.''];
					 break;
				 case $statistique['Type_Ressource']:
					 $bonusressource+=$stats[$i][''.$ValeurBonus.''];
					 break;
			 }
		}
	}
	
	for($i=0;$i<count($stats);$i++){
			 switch($stats[$i]['Statistique_Principale']){
				 case 'Force':
					 $bonusforce+=$stats[$i]['Val'];
					 break;
				 case 'Agilité':
					 $bonusagilité+=$stats[$i]['Val'];
					 break;
				 case 'Intelligence':
					 $bonusintelligence+=$stats[$i]['Val'];
					 break;
				 case 'Vitalité':
					 $bonusvitalité+=$stats[$i]['Val'];
					 break;
				 case $statistique['Type_Ressource']:
					 $bonusressource+=$stats[$i]['Val'];
					 break;
				 case 'Armure':
					 $bonusarmure+=$stats[$i]['Val'];
					 break;
			 }
		}
	$bonusarmure=floor($bonusarmure);
	$BonusStats->closeCursor();



	
	
	
	
	
	
	
	
/*																			//Tests infructueux pour faire faire le calcul des points de compétences utilisés directement par le serveur.//
																					
																					
$testcompetence = $bdd->query('select sum(Niveau) AS merde
								from competence
								where Id_Competence in (select Colonne1 from arbres where Personnage=\'Paladin\')');                          //Se trouve dans personnage.php (ligne 41).

					
					
$testcompetence2 = $bdd->query('select Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,Colonne6,Colonne7,Colonne8,Colonne9
								from arbres 
								where Personnage = \'' . $personnage . '\'');
$nbpointstest=$testcompetence2->fetch();
$nbpointstestretourn=1;
while($nbpointstest){
	$nbpointstestretourn+=1;
	foreach($nbpointstest as $nbpointstest2){
		$testcompetence3 = $bdd->query('select Niveau 
									from competence where 
									'.$nbpointstest2.'=Id_Competence )');
		$nbpointstestretourn+=$testcompetence3;
	}
	$nbpointstest=$testcompetence2->fetch();
}
*/


?>
