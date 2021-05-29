<?php

$stat='$stat'.$i;
if($stat=='$stat1'){$stat=$stat1;}

switch ($stat) {
		case "$stat1":
			$stata=$stat1;
			if(!is_null($competence['Statistique2'])){$statb=$stat2;}
			break;
		case '$stat2':
			if(!is_null($competence['Statistique2'])){$stata=$stat2;}
			if(!is_null($competence['Statistique3'])){$statb=$stat3;}
			break;
		case '$stat3':
			if(!is_null($competence['Statistique3'])){$stata=$stat3;}
			if(!is_null($competence['Statistique4'])){$statb=$stat4;}
			break;
		case '$stat4':
			if(!is_null($competence['Statistique4'])){$stata=$stat4;}
			if(!is_null($competence['Statistique5'])){$statb=$stat5;}
			break;
		case '$stat5':
			$stata=$stat5;
			break;
	}

?>