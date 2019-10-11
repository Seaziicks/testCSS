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
		$competenceb=$competencea[$i];
		include('statbis.php');
		if($competenceb['TempsRechargement']-$competenceb['Cooldown']<$competenceb['Durée']){
			if(!is_null($competenceb['Bonus_Temporaire'])){
				if($competenceb['Type_Calcul_Temporaire']==1){
					${'bonus'.$competenceb['Bonus_Temporaire'].'temporaire'} = $competenceb['Valeur_Temporaire1']+(round((float)${'stat'.$f}/$competenceb['Valeur_Temporaire2']));
				}elseif($competenceb['Type_Calcul_Temporaire']==2){
					${'bonus'.$competenceb['Bonus_Temporaire'].'temporaire'} = $competenceb['Valeur_Temporaire1']+(round((float)${'stat'.$f}/$competenceb['Valeur_Temporaire2']))+$competenceb['Valeur_Temporaire1']+(round((float)${'stat'.($f+1)}/$competenceb['Valeur_Temporaire2']));
				}
			}
		}
	$i++;

}
$competences->closeCursor();
$competencea=null;
$competenceb=null;


















?>