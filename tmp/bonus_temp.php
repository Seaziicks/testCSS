<?php




$competences = $bdd->query('SELECT *
					from arbres a, competence c
					where c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
					Colonne6,Colonne7,Colonne8,Colonne9)
					and a.Personnage=\'' . $personnage . '\'
					and c.niveau > 0
					and Bonus_Temporaire is not null');

$competencea=$competences->fetchAll();


$i=0;
$f=1;
$bonusforcetemporaire = 0 ;
$bonusagilitétemporaire = 0;
$bonusintelligencetemporaire = 0;
$bonusvitalitétemporaire = 0;
$bonusressourcetemporaire = 0;		
$bonusarmuretemporaire =0;
$bonusréussitetemporaire =0;
while(isset($competencea[$i])){
		$competence=$competencea[$i];
		include('statbis.php');
		if($competence['TempsRechargement']-$competence['Cooldown']<$competence['Durée']){
			if(!is_null($competence['Bonus_Temporaire'])){
				if($competence['Type_Calcul_Temporaire']==1){
					${'bonus'.$competence['Bonus_Temporaire'].'temporaire'} = $competence['Valeur_Temporaire1']+(round((float)${'stat'.$f}/$competence['Valeur_Temporaire2']));
				}elseif($competence['Type_Calcul_Temporaire']==2){
					${'bonus'.$competence['Bonus_Temporaire'].'temporaire'} = $competence['Valeur_Temporaire1']+(round((float)${'stat'.$f}/$competence['Valeur_Temporaire2']))+$competence['Valeur_Temporaire1']+(round((float)${'stat'.($f+1)}/$competence['Valeur_Temporaire2']));
				}
			}
		}
	$i++;

}
$competences->closeCursor();
$competencea=null;
$competence=null;


















?>