<?php
if(!is_null($competenceb['Statistique_Temporaire1'])){
	switch ($competenceb['Statistique_Temporaire1']) {
		case "force":
			$stat1=$force;
			break;
		case "intelligence":
			$stat1=$intelligence;
			break;
		case "agilite":
			$stat1=$agilité;
			break;
		case "PDV":
			$stat1=$vitalité;
			break;
		case "niveau":
			$stat1=$competenceb['Niveau'];
			break;
		case "Ressource":
			$stat1=$ressource;
			break;
	}
}



?>