
<html>
<body>
<?php




$array_expression = [
    'DegatsFlat' => 5,
    'DegatsPourcentage' => 4,
    'DegatsPhysiqueFlat' => 5,
    'DegatsPhysiquePourcentage' => 4,
    'DegatsMagiqueFlat' => 5,
    'DegatsMagiquePourcentage' => 4,
    'Force' => 5,
    'Agilite' => 5,
    'Intelligence' => 5,
    'Vitalite' => 5,
    'PA' => 5,
    'PM' => 5,
    'SortFlat' => 5,
    'SortPourcentage' => 4,
    'ArmureFlat' => 5,
    'ArmurePourcentage' => 4,
    'ArmureMagiqueFlat' => 5,
    'ArmureMagiquePourcentage' => 4,
    'ReductionDegatsFlat' => 5,
    'ReductionDegatsPourcentage' => 4,
    'SoinFlat' => 5,
    'SoinPourcentage' => 4,
    'SoinRecuFlat' => 5,
    'SoinRecuPourcentage' => 4,
    'IgnoreArmureFlat' => 5,
    'IgnoreArmurePourcentage' => 4,
    'IgnoreArmureMagiqueFlat' => 5,
    'IgnoreArmureMagiquePourcentage' => 4,
    'AugmenteNombreAttaque' => 5,
    'RedirectionDegatFlat' => 5,
    'RedirectionDegatPourcentage' => 4,
    'Portee' => 5,
    'Degat' => 5,
    'DegatDiffere' => 5,
    'Soin' => 5,
    'Shield' => 5
];

?>
<textarea style="height : 100%; width : 100%">
<?php
?>
public
<?php
foreach ($array_expression as $key => $value){

	?> $_<?=$key?>,
	<?php
}

?>

	public function __construct(array $donnees)
	  {
		$this->hydrate($donnees);
	  }
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
	}elseif ($value == 1){
		?>

	public function set<?=$key?>($<?=$key?>)
	{
		if (is_string($<?=$key?>))
		{
			$this->_<?=$key?> = $<?=$key?>;
		}
	}
<?php
	}elseif($value == 2){
		?> 
	public function set<?=$key?>($<?=$key?>)
	{
	$<?=$key?> = (float) $<?=$key?>;

		if ($<?=$key?> > 0)
		{
			$this->_<?=$key?> = $<?=$key?>;
		}
	}
<?php
	}elseif ($value == 3){
		?>

	public function set<?=$key?>($ID_<?=$key?>)
	{
	$ID_<?=$key?> = (int) $ID_<?=$key?>;

		if ($ID_<?=$key?> > 0)
		{
			include('BDD.php');
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

			$manager = new EquipementManager($bdd);

			$equipement = $manager->get($ID_<?=$key?>);
			$this->_<?=$key?> = $equipement;
		}
	}
<?php
	}elseif($value == 4){
		?> 
	public function set<?=$key?>($<?=$key?>)
	{
	$this->_<?=$key?> = (float)$<?=$key?>;
	}
<?php
	}elseif($value == 5){
		?> 
	public function set<?=$key?>($<?=$key?>)
	{
	$this->_<?=$key?> = (int)$<?=$key?>;
	}
<?php
	}
}
foreach ($array_expression as $key => $value) {
    ?>
    $reponse['<?= $key ?>'] = 0;
    <?php
}
?>

	public function hydrate(array $donnees)
	{
	  foreach ($donnees as $key => $value)
	  {
		// On récupère le nom du setter correspondant à l'attribut.
		$method = 'set'.ucfirst($key);
			
		// Si le setter correspondant existe.
		if (method_exists($this, $method))
		{
		  // On appelle le setter.
		  $this->$method($value);
		}
	  }
	}
</textarea>
</body>
</html>