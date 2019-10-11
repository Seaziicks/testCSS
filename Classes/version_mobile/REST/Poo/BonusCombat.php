<?php

class BonusCombat
{
    public
        $_DegatsPhysiqueFlat,
        $_DegatsPhysiquePourcentage,
        $_DegatsMagiqueFlat,
        $_DegatsMagiquePourcentage,
        $_Force,
        $_Agilite,
        $_Intelligence,
        $_Vitalite,
        $_PA,
        $_PM,
        $_SortFlat,
        $_SortPourcentage,
        $_ArmureFlat,
        $_ArmurePourcentage,
        $_ArmureMagiqueFlat,
        $_ArmureMagiquePourcentage,
        $_DegatsFlat,
        $_DegatsPourcentage,
        $_SoinFlat,
        $_SoinPourcentage,
        $_Portee,
        $_Degat,
        $_Soin,
        $_Shield;

	public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

	public function setDegatsPhysiqueFlat($DegatsPhysiqueFlat)
    {
        $this->_DegatsPhysiqueFlat = (int)$DegatsPhysiqueFlat;
    }

	public function setDegatsPhysiquePourcentage($DegatsPhysiquePourcentage)
    {
        $this->_DegatsPhysiquePourcentage = (float)$DegatsPhysiquePourcentage;
    }

	public function setDegatsMagiqueFlat($DegatsMagiqueFlat)
    {
        $this->_DegatsMagiqueFlat = (int)$DegatsMagiqueFlat;
    }

	public function setDegatsMagiquePourcentage($DegatsMagiquePourcentage)
    {
        $this->_DegatsMagiquePourcentage = (float)$DegatsMagiquePourcentage;
    }

	public function setForce($Force)
    {
        $this->_Force = (int)$Force;
    }

	public function setAgilite($Agilite)
    {
        $this->_Agilite = (int)$Agilite;
    }

	public function setIntelligence($Intelligence)
    {
        $this->_Intelligence = (int)$Intelligence;
    }

	public function setVitalite($Vitalite)
    {
        $this->_Vitalite = (int)$Vitalite;
    }

	public function setPA($PA)
    {
        $this->_PA = (int)$PA;
    }

	public function setPM($PM)
    {
        $this->_PM = (int)$PM;
    }

	public function setSortFlat($SortFlat)
    {
        $this->_SortFlat = (int)$SortFlat;
    }

	public function setSortPourcentage($SortPourcentage)
    {
        $this->_SortPourcentage = (float)$SortPourcentage;
    }

	public function setArmureFlat($ArmureFlat)
    {
        $this->_ArmureFlat = (int)$ArmureFlat;
    }

	public function setArmurePourcentage($ArmurePourcentage)
    {
        $this->_ArmurePourcentage = (float)$ArmurePourcentage;
    }

	public function setArmureMagiqueFlat($ArmureMagiqueFlat)
    {
        $this->_ArmureMagiqueFlat = (int)$ArmureMagiqueFlat;
    }

	public function setArmureMagiquePourcentage($ArmureMagiquePourcentage)
    {
        $this->_ArmureMagiquePourcentage = (float)$ArmureMagiquePourcentage;
    }

	public function setDegatsFlat($DegatsFlat)
    {
        $this->_DegatsFlat = (int)$DegatsFlat;
    }

	public function setDegatsPourcentage($DegatsPourcentage)
    {
        $this->_DegatsPourcentage = (float)$DegatsPourcentage;
    }

	public function setSoinFlat($SoinFlat)
    {
        $this->_SoinFlat = (int)$SoinFlat;
    }

	public function setSoinPourcentage($SoinPourcentage)
    {
        $this->_SoinPourcentage = (float)$SoinPourcentage;
    }

	public function setPortee($Portee)
    {
        $this->_Portee = (int)$Portee;
    }

	public function setDegat($Degat)
    {
        $this->_Degat = (int)$Degat;
    }

	public function setSoin($Soin)
    {
        $this->_Soin = (int)$Soin;
    }

	public function setShield($Shield)
    {
        $this->_Shield = (int)$Shield;
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