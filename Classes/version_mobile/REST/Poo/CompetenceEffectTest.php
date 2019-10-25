<?php

class CompetenceEffectTest
{
	public $_idCompetenceEffect,
			$_idCompetence,
            $_effectOrder,
            $_actionType,
            $_effectType,
			$_niveau,
            $_niveauRequis,
			$_typeCalcul,
			$_calcul1A,
			$_calcul1B,
			$_calcul2A,
			$_calcul2B,
			$_amplitude,
			$_nombreAmplitude,
			$_statistique1,
			$_statistique2,
			$_impact,
			$_pourcentage;

    public $_Personnage;

	public function __construct(array $donnees, PersonnageTest $Personnage)
	{
	$this->hydrate($donnees);
	$this->setPersonnage($Personnage);
	}

	public function setIdCompetenceEffect($idCompetenceEffect)
	{
		$idCompetenceEffect = (int) $idCompetenceEffect;

		if ($idCompetenceEffect > 0)
		{
			$this->_idCompetenceEffect = $idCompetenceEffect;
		}
	}

	public function setIdCompetence($idCompetence)
	{
		$idCompetence = (int) $idCompetence;

		if ($idCompetence > 0)
		{
		  $this->_idCompetence = $idCompetence;
		}
	}

    public function setEffectOrder($effectOrder)
    {
        $effectOrder = (int) $effectOrder;

        if ($effectOrder > 0)
        {
            $this->_effectOrder = $effectOrder;
        }
    }

    public function setActionType($Action_Type)
    {
        $Action_Type = (int) $Action_Type;

        if ($Action_Type > 0)
        {
            $this->_actionType = $Action_Type;
        }
    }

    public function setEffectType($Effect_Type)
    {
        $Effect_Type = (int) $Effect_Type;

        if ($Effect_Type > 0)
        {
            $this->_effectType = $Effect_Type;
        }
    }

	public function setNiveau($Niveau)
	{
		$Niveau = (int) $Niveau;

		if ($Niveau > 0)
		{
			$this->_niveau = $Niveau;
		}
	}

    public function setNiveauRequis($Niveau_Requis)
    {
        $Niveau_Requis = (int) $Niveau_Requis;

        if ($Niveau_Requis > 0)
        {
            $this->_niveauRequis = $Niveau_Requis;
        }
    }

	public function setTypeCalcul($Type_calcul1)
	{
	$Type_calcul1 = (int) $Type_calcul1;

		if ($Type_calcul1 > 0)
		{
		  $this->_typeCalcul = $Type_calcul1;
		}
	}

	public function setCalcul1A($Calcul1a)
	{
	$Calcul1a = (int) $Calcul1a;

		if ($Calcul1a > 0)
		{
		  $this->_calcul1A = $Calcul1a;
		}
	}

	public function setCalcul1B($Calcul1b)
	{
	$Calcul1b = (float) $Calcul1b;
	$this->_calcul1B = $Calcul1b;
	}

	public function setCalcul2A($Calcul2a)
	{
		$Calcul2a = (int) $Calcul2a;

		if ($Calcul2a > 0)
		{
			$this->_calcul2A = $Calcul2a;
		}
	}

	public function setCalcul2B($Calcul2b)
	{
		$Calcul2b = (float) $Calcul2b;
		$this->_calcul2B = $Calcul2b;
	}

	public function setAmplitude($Amplitude1)
	{
	$Amplitude1 = (int) $Amplitude1;

		if ($Amplitude1 > 0)
		{
		  $this->_amplitude = $Amplitude1;
		}
	}

	public function setNombreAmplitude($Nombre_Amplitude1)
	{
	$Nombre_Amplitude1 = (int) $Nombre_Amplitude1;

		if ($Nombre_Amplitude1 > 0)
		{
		  $this->_nombreAmplitude = $Nombre_Amplitude1;
		}
	}

	public function setStatistique1($Statistique1)
	{
		if (is_string($Statistique1))
		{
		  $this->_statistique1 = $Statistique1;
		}
	}

	public function setStatistique2($Statistique2)
	{
		if (is_string($Statistique2))
		{
			$this->_statistique2 = $Statistique2;
		}
	}

	public function setImpact($Impact1)
	{
		if (is_string($Impact1))
		{
		  $this->_impact = $Impact1;
		}
	}

	public function setPourcentage($Pourcentage1)
	{
		$this->_pourcentage = (boolean) $Pourcentage1;
	}

    public function getStatistique(int $index){
        if($this->getElement('statistique'.$index) == 'ressource')
            return $this->getElement('Type_Ressource');
        else
            return $this->getElement('statistique'.$index);
    }

    public function getStatistiqueValue(int $index){
        switch (strtolower($this->getElement('statistique'.$index))) {
            case "force":
                return $this->_Personnage->getTotalForce();
                break;
            case "intelligence":
                return $this->_Personnage->getTotalIntelligence();
                break;
			case "agilité":
            case "agilite":
                return $this->_Personnage->getTotalAgilité();
                break;
            case "pdv":
                return $this->_Personnage->getTotalVitalité();
                break;
            case "niveau":
                return $this->_niveau;
                break;
            case "ressource":
                return $this->_Personnage->getTotalRessource();
                break;
        }
    }

    public function getCalcul(){
		return ($this->getCalculElement('A')+(floor((float)$this->getStatistiqueValue('1')/$this->getCalculElement('B'))));
    }

    public function getElement($elementName){
        $retour = '_'.$elementName;
        return $this->$retour;
    }

    public function getCalculElement($secondPartElement){
        $retour = '_calcul1'.$secondPartElement;
        return $this->$retour;
    }

    public function getImpact(){
        $impact = null;

        if($this->getElement('pourcentage')){$impact='';}
        elseif($this->getElement('impact')== "vie"){$impact=' points de vie';}
        elseif($this->getElement('impact')== "bouclier" ){$impact=' points de bouclier';}
        elseif($this->getElement('impact')!= "red" && $this->getCalculElement('a')+(floor((float)$this->getStatistiqueValue()/$this->getCalculElement('B')))>2){$impact=' '.$this->getElement('impact').'s';}
        elseif($this->getElement('impact') != "red"){$impact=' '.$this->getElement('impact');}
        elseif($this->getElement('impact') == "red" && !$this->getElement('pourcentage')){$impact=' points de dégâts';}

        return $impact;
    }

    public function getEffectWithBonusCombatStatistique(BonusCombat $bonusCombat) {
		return$this->_calcul1A + floor(($this->getStatistiqueValue(1) + $this->getBonusCombatStatistique($this->getStatistique(1), $bonusCombat)) / $this->_calcul1B);
	}

	public function dealDamagesWithBonusCombat(BonusCombat $bonusCombat, int $actionType) {
		$damagesInitialWithBonusStatistique = $this->getEffectWithBonusCombatStatistique($bonusCombat);
		if($actionType == 1) {
			 $degatBonusCombatFlat = ($damagesInitialWithBonusStatistique + $bonusCombat->_DegatsFlat + $bonusCombat->_DegatsPhysiqueFlat + $bonusCombat->_SortFlat);
			 $degatBonusCombatPourcentage = $degatBonusCombatFlat *(1 + $bonusCombat->_DegatsPourcentage)*(1 + $bonusCombat->_DegatsPhysiquePourcentage)*(1 + $bonusCombat->_SortPourcentage);
		} elseif ($actionType == 2){
			$degatBonusCombatFlat = ($damagesInitialWithBonusStatistique + $bonusCombat->_DegatsFlat + $bonusCombat->_DegatsMagiqueFlat + $bonusCombat->_SortFlat);
			$degatBonusCombatPourcentage = $degatBonusCombatFlat *(1 + $bonusCombat->_DegatsPourcentage)*(1 + $bonusCombat->_DegatsMagiquePourcentage)*(1 + $bonusCombat->_SortPourcentage);
		}
		return $degatBonusCombatPourcentage;
	}

	public function dealHealWithBonusCombat(BonusCombat $bonusCombat) {
		$healInitialWithBonusStatistique = $this->getEffectWithBonusCombatStatistique($bonusCombat);
		$healBonusCombatFlat = ($healInitialWithBonusStatistique + $bonusCombat->_SoinFlat + $bonusCombat->_SortFlat);
		$healBonusCombatPourcentage = $healBonusCombatFlat *(1 + $bonusCombat->_SoinPourcentage)*(1 + $bonusCombat->_SortPourcentage);
		return $healBonusCombatPourcentage;
	}

	public function getBonusCombatStatistique(string $statistique, BonusCombat $bonusCombat){
		switch (strtolower($statistique)){
			case "force":
				return $bonusCombat->_Force;
				break;
			case "agilité":
			case "agilite":
				return $bonusCombat->_Agilite;
				break;
			case "intelligence":
				return $bonusCombat->_Intelligence;
				break;
		}
	}





    public function setPersonnage(PersonnageTest $Personnage)
    {
        $this->_Personnage = $Personnage;
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

