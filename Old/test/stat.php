<?php

for ($sta=1;$sta<=5;$sta++){
	if(!is_null($competence['Statistique'.$sta.''])){
		switch ($competence['Statistique'.$sta.'']) {
			case "force":
				${'stat'.$sta}=$force+$bonusforce;
				break;
			case "intelligence":
				${'stat'.$sta}=$intelligence+$bonusintelligence;
				break;
			case "agilite":
				${'stat'.$sta}=$agilité+$bonusagilité;
				break;
			case "PDV":
				${'stat'.$sta}=$vitalité+$bonusvitalité;
				break;
			case "niveau":
				${'stat'.$sta}=$competence['Niveau'];
				break;
			case "ressource":
				${'stat'.$sta}=$ressource+$bonusressource;
				break;
		}
	}
}


for ($stabis=1;$stabis<=2;$stabis++){
	if(!is_null($competence['StatistiqueBis'.$stabis.''])){
		switch ($competence['StatistiqueBis'.$stabis.'']) {
			case "force":
				${'statBis'.$stabis}=$force+$bonusforce;
				break;
			case "intelligence":
				${'statBis'.$stabis}=$intelligence+$bonusintelligence;
				break;
			case "agilite":
				${'statBis'.$stabis}=$agilité+$bonusagilité;
				break;
			case "PDV":
				${'statBis'.$stabis}=$vitalité+$bonusvitalité;
				break;
			case "niveau":
				${'statBis'.$stabis}=$competence['Niveau'];
				break;
			case "ressource":
				${'statBis'.$stabis}=$mana+$bonusressource;
				break;
		}
	}
}







?>