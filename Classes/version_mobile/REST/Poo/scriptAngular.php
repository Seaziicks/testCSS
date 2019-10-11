
<html>
<body>
<?php




$array_expression = [
'Id_Competence' => 0,
'Libelle' => 1,
'Image' => 1,
'Niveau' => 0,
'Portee' => 0,
'Cout_En_PA' => 0,
'Cout_En_Ressource' => 0,
'Ressource' => 1,
'Description1' => 1,
'Description2' => 1,
'Description3' => 1,
'Description4' => 1,
'Description5' => 1,
'Description6' => 1,
'Effet1' => 1,
'Effet1Bis' => 1,
'Effet2' => 1,
'Effet2Bis' => 1,
'Effet3' => 1,
'Effet3Bis' => 1,
'Fin' => 1,
'Type_calcul1' => 0,
'Calcul1a' => 0,
'Calcul1b' => 0,
'Amplitude1' => 0,
'Nombre_Amplitude1' => 0,
'Statistique1' => 1,
'Impact1' => 1,
'Pourcentage1' => 0,
'Type_calcul2' => 0,
'Calcul2a' => 0,
'Calcul2b' => 0,
'Amplitude2' => 0,
'Nombre_Amplitude2' => 0,
'Statistique2' => 1,
'Impact2' => 1,
'Pourcentage2' => 0,
'Type_calcul3' => 0,
'Calcul3a' => 0,
'Calcul3b' => 0,
'Amplitude3' => 0,
'Nombre_Amplitude3' => 0,
'Statistique3' => 1,
'Impact3' => 1,
'Pourcentage3' => 0,
'Type_calcul4' => 0,
'Calcul4a' => 0,
'Calcul4b' => 0,
'Amplitude4' => 0,
'Nombre_Amplitude4' => 0,
'Statistique4' => 1,
'Impact4' => 1,
'Pourcentage4' => 0,
'Type_calcul5' => 0,
'Calcul5a' => 0,
'Calcul5b' => 0,
'Amplitude5' => 0,
'Nombre_Amplitude5' => 0,
'Statistique5' => 1,
'Impact5' => 1,
'Pourcentage5' => 0,
'NumEffet' => 0,
'Type_calculBis1' => 0,
'CalculBis1a' => 0,
'CalculBis1b' => 0,
'StatistiqueBis1' => 1,
'Type_calculBis2' => 0,
'CalculBis2a' => 0,
'CalculBis2b' => 0,
'StatistiqueBis2' => 1,
'ImpactBis' => 1,
'PourcentageBis' => 0,
'Entete' => 1,
'Exemple' => 1,
'Niveau_Requis' => 0,
'Competence_Requise_1' => 1,
'Competence_Requise_2' => 1,
'Competence_Requise_3' => 1,
'TempsRechargement' => 0,
'Duree' => 0,
'Cooldown' => 0,
'Bonus_Temporaire' => 1,
'Type_Calcul_Temporaire' => 0,
'Valeur_Temporaire1' => 0,
'Valeur_Temporaire2' => 0,
'Statistique_Temporaire1' => 1
];

?>
<textarea style="height : 100%; width : 100%">
<?php

foreach ($array_expression as $key => $value){
    if ($value == 0){
	?>public <?=$key?>: number;
<?php
	}else{
		?>public <?=$key?>: string;
<?php
	}
}

?>
</textarea>

<textarea style="height : 100%; width : 100%">
<?php

foreach ($array_expression as $key => $value){
    if ($value == 0){
	?>this.<?=$key?> = item.<?=$key?>;
<?php
	}else{
		?>this.<?=$key?> = item.<?=$key?>;
<?php
	}
}

?>
</textarea>

<textarea style="height : 100%; width : 100%">
<?php

foreach ($array_expression as $key => $value){
    if ($value == 0){
	?>$réponse['<?=$key?>']=$réponseWitoutCamelCase['<?=$key?>'];
<?php
	}else{
		?>$réponse['<?=$key?>']=$réponseWitoutCamelCase['<?=$key?>'];
<?php
	}
}

?>
</textarea>
</body>
</html>