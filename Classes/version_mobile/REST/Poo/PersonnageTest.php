<?php
class PersonnageTest
{


	public $_Id_Personnage,
			$_Libellé,
			$_Niveau,
			$_PA,
			$_PA_Actuel,
			$_PM,
			$_PM_Actuel,
			$_Force,
			$_Agilité,
			$_Intelligence,
			$_Vitalité,
			$_PDV_Actuel,
            $_Bouclier,
			$_Ressource,
			$_Ressource_Actuelle,
			$_Type_Ressource,
			$_Réussite,
			$_Charisme,
			$_Marchandage,
			$_Intimidation,
			$_Chance,
			$_Inventaire,
			$_Image,
			$_Ordre_Colorimetrique;

	public $_Bonus_Force = 0,
            $_Bonus_Agilité = 0,
            $_Bonus_Intelligence = 0,
            $_Bonus_Vitalité = 0,
            $_Bonus_Ressource = 0,
            $_Bonus_Réussite = 0,
            $_Bonus_Armure = 0,
            $_Bonus_ArmureMagique = 0;


	public function __construct(array $donnees)
	  {
		$this->hydrate($donnees);
	  }

	public function setId_Personnage($Id_Personnage)
	{
        $Id_Personnage = (int) $Id_Personnage;

		if ($Id_Personnage > 0)
		{
		  $this->_Id_Personnage = $Id_Personnage;
		}
	}

	public function setLibellé($nom)
	{
		if (is_string($nom))
		{
		  $this->_Libellé = $nom;
		}
	}

	public function setNiveau($Niveau)
	{
	$Niveau = (int) $Niveau;

		if ($Niveau > 0)
		{
		  $this->_Niveau = $Niveau;
		}
	}

	public function setPA($PA)
	{
	$PA = (int) $PA;

		if ($PA > 0)
		{
		  $this->_PA = $PA;
		}
	}

	public function setPA_Actuel($PA_Actuel)
	{
	$PA_Actuel = (int) $PA_Actuel;

		if ($PA_Actuel > 0)
		{
		  $this->_PA_Actuel = $PA_Actuel;
		}
	}

	public function setPM($PM)
	{
	$PM = (int) $PM;

		if ($PM > 0)
		{
		  $this->_PM = $PM;
		}
	}

	public function setPM_Actuel($PM_Actuel)
	{
	$PM_Actuel = (int) $PM_Actuel;

		if ($PM_Actuel > 0)
		{
		  $this->_PM_Actuel = $PM_Actuel;
		}
	}

	public function setForce($Force)
	{
	$Force = (int) $Force;

		if ($Force > 0)
		{
		  $this->_Force = $Force;
		}
	}

	public function setAgilité($Agilité)
	{
	$Agilité = (int) $Agilité;

		if ($Agilité > 0)
		{
		  $this->_Agilité = $Agilité;
		}
	}

	public function setIntelligence($Intelligence)
	{
	$Intelligence = (int) $Intelligence;

		if ($Intelligence > 0)
		{
		  $this->_Intelligence = $Intelligence;
		}
	}

	public function setVitalité($Vitalité)
	{
	$Vitalité = (int) $Vitalité;

		if ($Vitalité > 0)
		{
		  $this->_Vitalité = $Vitalité;
		}
	}

	public function setPDV_Actuel($PDV_Actuel)
	{
	$PDV_Actuel = (int) $PDV_Actuel;

		if ($PDV_Actuel > 0)
		{
		  $this->_PDV_Actuel = $PDV_Actuel;
		}
	}

    public function setBouclier($Bouclier)
    {
        $Bouclier = (int) $Bouclier;

        if ($Bouclier > 0)
        {
            $this->_Bouclier = $Bouclier;
        }
    }

	public function setRessource($Ressource)
	{
	$Ressource = (int) $Ressource;

		if ($Ressource > 0)
		{
		  $this->_Ressource = $Ressource;
		}
	}

	public function setRessource_Actuelle($Ressource_Actuelle)
	{
	$Ressource_Actuelle = (int) $Ressource_Actuelle;

		if ($Ressource_Actuelle > 0)
		{
		  $this->_Ressource_Actuelle = $Ressource_Actuelle;
		}
	}

	public function setType_Ressource($Type_Ressource)
	{
		if (is_string($Type_Ressource))
		{
		  $this->_Type_Ressource = $Type_Ressource;
		}
	}

	public function setRéussite($Réussite)
	{
	$Réussite = (int) $Réussite;

		if ($Réussite > 0)
		{
		  $this->_Réussite = $Réussite;
		}
	}

	public function setCharisme($Charisme)
	{
	$Charisme = (int) $Charisme;

		if ($Charisme > 0)
		{
		  $this->_Charisme = $Charisme;
		}
	}

	public function setMarchandage($Marchandage)
	{
	$Marchandage = (int) $Marchandage;

		if ($Marchandage > 0)
		{
		  $this->_Marchandage = $Marchandage;
		}
	}

	public function setIntimidation($Intimidation)
	{
	$Intimidation = (int) $Intimidation;

		if ($Intimidation > 0)
		{
		  $this->_Intimidation = $Intimidation;
		}
	}

	public function setChance($Chance)
	{
	$Chance = (int) $Chance;

		if ($Chance > 0)
		{
		  $this->_Chance = $Chance;
		}
	}

	public function setInventaire($Inventaire)
	{
		if (is_string($Inventaire))
		{
		  $this->_Inventaire = $Inventaire;
		}
	}

	public function setImage($Image)
	{
		if (is_string($Image))
		{
		  $this->_Image = $Image;
		}
	}

	public function setOrdre_Colorimetrique($Ordre_Colorimetrique)
	{
	$Ordre_Colorimetrique = (int) $Ordre_Colorimetrique;

		if ($Ordre_Colorimetrique > 0)
		{
		  $this->_Ordre_Colorimetrique = $Ordre_Colorimetrique;
		}
	}


    public function setBonus_Force($Bonus_Force)
    {
        $Bonus_Force = (int) $Bonus_Force;

        if ($Bonus_Force > 0)
        {
            $this->_Bonus_Force = $Bonus_Force;
        }
    }

    public function setBonus_Agilité($Bonus_Agilité)
    {
        $Bonus_Agilité = (int) $Bonus_Agilité;

        if ($Bonus_Agilité > 0)
        {
            $this->_Bonus_Agilité = $Bonus_Agilité;
        }
    }

    public function setBonus_Intelligence($Bonus_Intelligence)
    {
        $Bonus_Intelligence = (int) $Bonus_Intelligence;

        if ($Bonus_Intelligence > 0)
        {
            $this->_Bonus_Intelligence = $Bonus_Intelligence;
        }
    }

    public function setBonus_Vitalité($Bonus_Vitalité)
    {
        $Bonus_Vitalité = (int) $Bonus_Vitalité;

        if ($Bonus_Vitalité > 0)
        {
            $this->_Bonus_Vitalité = $Bonus_Vitalité;
        }
    }

    public function setBonus_Ressource($Bonus_Ressource)
    {
        $Bonus_Ressource = (int) $Bonus_Ressource;

        if ($Bonus_Ressource > 0)
        {
            $this->_Bonus_Ressource = $Bonus_Ressource;
        }
    }

    public function setBonus_Réussite($Bonus_Réussite)
    {
        $Bonus_Réussite = (int) $Bonus_Réussite;

        if ($Bonus_Réussite > 0)
        {
            $this->_Bonus_Réussite = $Bonus_Réussite;
        }
    }

    public function setBonus_Armure($Bonus_Armure)
    {
        $Bonus_Armure = (int) $Bonus_Armure;

        if ($Bonus_Armure > 0)
        {
            $this->_Bonus_Armure = $Bonus_Armure;
        }
    }

    public function getTotalForce(){
	    return ($this->_Force + $this->_Bonus_Force);
    }

    public function getTotalAgilité(){
	    return ($this->_Agilité + $this->_Bonus_Agilité);
    }

    public function getTotalIntelligence(){
	    return ($this->_Intelligence + $this->_Bonus_Intelligence);
    }

    public function getTotalVitalité(){
	    return ($this->_Vitalité + $this->_Bonus_Vitalité);
    }

    public function getTotalRessource(){
	    return ($this->_Ressource + $this->_Bonus_Ressource);
    }

    public function getNiveau(){
	    return $this->_Niveau;
    }

    public function getBouclier(){
        return $this->_Bouclier;
    }

    public function calculateDamagesReducedByArmor(int $value, BonusCombat $bonusCombatLauncher, BonusCombat $bonusCombatReceiver) {
        $armorWithFlatBonus = $this->_Bonus_Armure + $bonusCombatReceiver->_ArmureFlat;
        $armorWithPourcentageAndFlatBonus = $armorWithFlatBonus * (1 + $bonusCombatReceiver->_ArmurePourcentage);
        $armorWithIgnoredArmor = ($armorWithPourcentageAndFlatBonus * ( 1 - $bonusCombatLauncher->_IgnoreArmurePourcentage)) - $bonusCombatLauncher->_IgnoreArmureFlat;
        $damagesWithFlatAndPourcentageReduction = ($value * (1 - $bonusCombatReceiver->_ReductionDegatPourcentage)) - $bonusCombatReceiver->_ReductionDegatFlat;
        return floor($damagesWithFlatAndPourcentageReduction - $armorWithIgnoredArmor);
	}

    public function calculatePhysicalDamagesReducedByArmor(int $value, BonusCombat $bonusCombatLauncher, BonusCombat $bonusCombatReceiver) {
        $armorWithFlatBonus = $this->_Bonus_Armure + $bonusCombatReceiver->_ArmureFlat;
        $armorWithPourcentageAndFlatBonus = $armorWithFlatBonus * (1 + $bonusCombatReceiver->_ArmurePourcentage);
        $armorWithIgnoredArmor = ($armorWithPourcentageAndFlatBonus * ( 1 - $bonusCombatLauncher->_IgnoreArmurePourcentage)) - $bonusCombatLauncher->_IgnoreArmureFlat;
        $damagesWithFlatAndPourcentageReduction = ($value * (1 - $bonusCombatReceiver->_ReductionDegatPourcentage)) - $bonusCombatReceiver->_ReductionDegatFlat;
        return floor($damagesWithFlatAndPourcentageReduction - $armorWithIgnoredArmor);
    }

    public function calculateMagicalDamagesReducedByArmor(int $value, BonusCombat $bonusCombatLauncher, BonusCombat $bonusCombatReceiver) {
        $armorWithFlatBonus = $this->_Bonus_ArmureMagique + $bonusCombatReceiver->_ArmureMagiqueFlat;
        $armorWithPourcentageAndFlatBonus = $armorWithFlatBonus * (1 + $bonusCombatReceiver->_ArmureMagiquePourcentage);
        $armorWithIgnoredArmor = ($armorWithPourcentageAndFlatBonus * ( 1 - $bonusCombatLauncher->_IgnoreArmureMagiquePourcentage)) - $bonusCombatLauncher->_IgnoreArmureMagiqueFlat;
        $damagesWithFlatAndPourcentageReduction = ($value * (1 - $bonusCombatReceiver->_ReductionDegatPourcentage)) - $bonusCombatReceiver->_ReductionDegatFlat;
        return floor($damagesWithFlatAndPourcentageReduction - $armorWithIgnoredArmor);
    }

    public function calculateReducedDamages(int $value, BonusCombat $bonusCombatReceiver) {
        return ($value * (1 - $bonusCombatReceiver->_ReductionDegatPourcentage)) - $bonusCombatReceiver->_ReductionDegatFlat;
    }

    public function calculateHealWithBonusCombat(int $value, BonusCombat $bonusCombatReceiver) {
	    return ($value + $bonusCombatReceiver->_SoinRecuFlat) * (1 + $bonusCombatReceiver->_SoinRecuPourcentage);;
    }






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
}
?>