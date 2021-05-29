
<html>
<body>
<?php




$array_expression = [
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
'Compétence_Requise_1' => 1,
'Compétence_Requise_2' => 1,
'Compétence_Requise_3' => 1,
'TempsRechargement' => 0,
'Durée' => 0,
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
	?> 
	public function set<?=$key?>($<?=$key?>)
	{
	$<?=$key?> = (int) $<?=$key?>;

		if ($<?=$key?> > 0)
		{
			$this->_<?=$key?> = $<?=$key?>;
		}
	}
<?php
	}else{
		?>

	public function set<?=$key?>($<?=$key?>)
	{
		if (is_string($<?=$key?>))
		{
			$this->_<?=$key?> = $<?=$key?>;
		}
	}
<?php
	}
}

?>
</textarea>
</body>
</html>