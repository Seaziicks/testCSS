<?php
if(!is_null($competence['Statistique1'])){
	switch ($competence['Statistique1']) {
		case "force":
			$stat1=$force;
			break;
		case "intelligence":
			$stat1=$intelligence;
			break;
		case "agilite":
			$stat1=$agilité;
			break;
		case "niveau":
			$stat1=$competence['Niveau'];
			break;
	}
}

if(!is_null($competence['Statistique2'])){
	switch ($competence['Statistique2']) {
		case "force":
			$stat2=$force;
			break;
		case "intelligence":
			$stat2=$intelligence;
			break;
		case "agilite":
			$stat2=$agilité;
			break;
		case "niveau":
			$stat2=$competence['Niveau'];
			break;
	}
}

if(!is_null($competence['Statistique3'])){
	switch ($competence['Statistique3']) {
		case "force":
			$stat3=$force;
			break;
		case "intelligence":
			$stat3=$intelligence;
			break;
		case "agilite":
			$stat3=$agilité;
			break;
		case "niveau":
			$stat3=$competence['Niveau'];
			break;
	}
}

if(!is_null($competence['Statistique4'])){
	switch ($competence['Statistique4']) {
		case "force":
			$stat4=$force;
			break;
		case "intelligence":
			$stat4=$intelligence;
			break;
		case "agilite":
			$stat4=$agilité;
			break;
		case "niveau":
			$stat4=$competence['Niveau'];
			break;
	}
}

if(!is_null($competence['Statistique5'])){
	switch ($competence['Statistique5']) {
		case "force":
			$stat5=$force;
			break;
		case "intelligence":
			$stat5=$intelligence;
			break;
		case "agilite":
			$stat5=$agilité;
			break;
		case "niveau":
			$stat5=$competence['Niveau'];
			break;
	}
}

?>