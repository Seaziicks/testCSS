<?php


include('../BDD.php');


$idCompetence = $_GET['id'];
$competenceInfos = $bdd->query('SELECT *
					from competence 
					where ID_Competence =\''.$idCompetence.'\' ');
$competence=$competenceInfos->fetch();				

	
	$personnage=$_GET['perso'];
	
	include("statistiques.php");
	
	include("stat.php");
	
	

	$f=1;
	
	
	for($g=2;$g<=6;$g++){
		
		
		
		$impact="";
		
		
		
			if($competence['Type_calcul'.$f]==1){
				
				
				if($competence['Pourcentage'.$f.'']){$impact='%';}
				elseif($competence['Impact'.$f.''] == "vie"){$impact=' points de vie';}
				elseif($competence['Impact'.$f.''] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['Impact'.$f.''] != "red" && $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b'])).''.$impact>2){$impact=' '.$competence['Impact'.$f.''].'s';}
				elseif($competence['Impact'.$f.''] != "red"){$impact=' '.$competence['Impact'.$f.''];}
				elseif($competence['Impact'.$f.''] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}
				
				if($competence['Statistique'.$f.'']=='ressource'){$competence['Statistique'.$f.'']=$statistique['Type_Ressource'];}
				

				$resultat[$f] = $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b'])).''.$impact;
				
				$detail[$f] = $competence['Calcul'.$f.'a'].'+ ('.(float)${'stat'.$f}.'/'.$competence['Calcul'.$f.'b'].')';
								
				
				
				$f++;
			}elseif($competence['Type_calcul'.$f]==2){
				
				
				//Affiche ce que fait la compétence (pdv, damages, case, tour, etc ...) et met un "s" si il y en a plusieurs.
				if($competence['Pourcentage'.$f.'']){$impact=' %';}
				elseif($competence['Impact'.$f.''] == "vie"){$impact=' points de vie';}
				elseif($competence['Impact'.$f.''] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['Impact'.$f.''] != "red" and $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(floor((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b'])).''.$impact>2)
				{$impact=' '.$competence['Impact'.$f.''].'s';}
				elseif($competence['Impact'.$f.''] != "red"){$impact=' '.$competence['Impact'.$f.''];}
				elseif($competence['Impact'.$f.''] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}
				
				
				$resultat[$f] =$competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(floor((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b'])).' '.$impact;
				
				$detail[$f] =$competence['Calcul'.$f.'a'].'+('.(float)${'stat'.$f}.'/'.$competence['Calcul'.$f.'b'].')+'.$competence['Calcul'.($f+1).'a'].'+('.(float)${'stat'.($f+1)}.'/'.$competence['Calcul'.($f+1).'b'].') ';

				
				$f+=2;
			}
		
}



				if($competence['PourcentageBis']){$impact='%';}
				elseif($competence['ImpactBis'] == "vie"){$impact=' points de vie';}
				elseif($competence['ImpactBis'] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['ImpactBis'] != "red" && isset($statBis1) && $competence['CalculBis1b']!=0 && $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b']))>2){$impact=' '.$competence['ImpactBis'].'s';}
				elseif($competence['ImpactBis'] != "red"){$impact=' '.$competence['ImpactBis'];}
				elseif($competence['ImpactBis'] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}


				if($competence['Type_calculBis1']==1){
				
				if($competence['Statistique'.$f.'']=='ressource'){$competence['Statistique'.$f.'']=$statistique['Type_Ressource'];}
				

				$resultatBis = $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b'])).' '.$impact;
								
				$detailBis = $competence['CalculBis1a'].'+('.(float)$statBis1.'/'.$competence['CalculBis1b'].') ';
				
				$f++;
			}elseif($competence['Type_calculBis1']==2){
				
				
				$resultatBis = $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b']))+$competence['CalculBis2a']+(floor((float)$statBis2/$competence['CalculBis2b'])).' '.$impact;
				
				$detailBis = $competence['CalculBis1a'].'+('.(float)$statBis1.'/'.$competence['CalculBis1b'].')+'.$competence['CalculBis2a'].'+('.(float)$statBis2.'/'.$competence['CalculBis2b'].') ';

				
				$f+=2;
			}
	// for ($k=1;$k<=6;$k++){
		// if(isset($competence['Description'.$k.''])){echo $competence['Description'.$k.''];}
		// if(isset($resultat[$k])){echo ' '.$resultat[$k];}
		// if(isset($competence['Amplitude'.$k.''])){echo ' +'.$competence['Nombre_Amplitude'.$k.''].'D'.$competence['Amplitude'.$k.''];}
	// }
	
	$réponse=array();
	
	$réponse['Nom_Competence'] = $competence['Libellé'];
	
	for ($k=1;$k<=6;$k++){
		if(isset($competence['Description'.$k.'']) && !is_null($competence['Description'.$k.''])){$réponse['Description'.$k.''] = $competence['Description'.$k.''];}else{$réponse['Description'.$k.''] = NULL;}
		if(isset($resultat[$k]) && !is_null($resultat[$k])){$réponse['Resultat'.$k.''] = $resultat[$k];}else{$réponse['Resultat'.$k.''] = NULL;}
		if(isset($detail[$k]) && !is_null($detail[$k])){$réponse['Detail'.$k.''] = '('.$detail[$k].')';}else{$réponse['Detail'.$k.''] = NULL;}
		if(isset($competence['Amplitude'.$k.'']) && !is_null($competence['Amplitude'.$k.''])){$réponse['Des'.$k.''] = ' +'.$competence['Nombre_Amplitude'.$k.''].'D'.$competence['Amplitude'.$k.''];}else{$réponse['Des'.$k.''] = NULL;}
		if(isset($competence['Impact'.$k.'']) && !is_null($competence['Impact'.$k.''])){$réponse['Impact'.$k.''] = $competence['Impact'.$k.''];}else{$réponse['Impact'.$k.''] = NULL;}
		if(isset($competence['Statistique'.$k.'']) && !is_null($competence['Statistique'.$k.''])){$réponse['CouleurDe'.$k.''] = $competence['Statistique'.$k.''];}else{$réponse['CouleurDe'.$k.''] = NULL;}
	}
	
	for ($k=1;$k<=3;$k++){
		if(isset($competence['Effet'.$k.'']) && !is_null($competence['Effet'.$k.'']) && $competence['Niveau']>=3*$k){$réponse['Effet'.$k.''] = $competence['Effet'.$k.''];}else{$réponse['Effet'.$k.''] = NULL;}
		if(isset($competence['Effet'.$k.'Bis']) && !is_null($competence['Effet'.$k.'Bis'])&& $competence['Niveau']>=3*$k){$réponse['Effet'.$k.'Bis'] = $competence['Effet'.$k.'Bis'];}else{$réponse['Effet'.$k.'Bis'] = NULL;}
	}
	if(isset($resultatBis) && !is_null($resultatBis)){$réponse['ResultatBis'] = $resultatBis;}else{$réponse['ResultatBis'] = NULL;}
	if(isset($detailBis) && !is_null($detailBis)){$réponse['DetailBis'] = '('.$detailBis.')';}else{$réponse['DetailBis'] = NULL;}
	if(isset($competence['NumEffet']) && !is_null($competence['NumEffet'])){$réponse['NumEffet'] = $competence['NumEffet'];}else{$réponse['NumEffet'] = NULL;}
	if(isset($competence['ImpactBis']) && !is_null($competence['ImpactBis'])){$réponse['ImpactBis'] = $competence['ImpactBis'];}else{$réponse['ImpactBis'] = NULL;}
	if(isset($competence['Type_calculBis1']) && !is_null($competence['Type_calculBis1'])){$réponse['Type_calculBis1'] = $competence['Type_calculBis1'];}else{$réponse['Type_calculBis1'] = NULL;}
	
	
	

function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
    return json_encode($arr,448);
    }else{
    return json_encode($arr);  
    }
}
echo json_encode($réponse);
echo '<br><br><br><br><br><br><br><br><br><br><br>';

print_r(json_decode(json_encode($réponse)));






















































































?>