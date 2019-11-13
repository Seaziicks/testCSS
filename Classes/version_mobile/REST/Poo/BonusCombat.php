<?php

class BonusCombat
{
    public
        $_DegatsFlat,
        $_DegatsPourcentage,
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
        $_ReductionDegatsFlat,
        $_ReductionDegatsPourcentage,
        $_SoinFlat,
        $_SoinPourcentage,
        $_SoinRecuFlat,
        $_SoinRecuPourcentage,
        $_IgnoreArmureFlat,
        $_IgnoreArmurePourcentage,
        $_IgnoreArmureMagiqueFlat,
        $_IgnoreArmureMagiquePourcentage,
        $_AugmenteNombreAttaque,
        $_RedirectionDegatFlat,
        $_RedirectionDegatPourcentage,
        $_Portee,
        $_Degat,
        $_DegatDiffere,
        $_Soin,
        $_Shield,
        $_DiffererDegatsFlatToTheEndOfEffect,
        $_DiffererDegatsPourcentageToTheEndOfEffect,
        $_DiffererDegatsFlat,
        $_DiffererDegatsPourcentage;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    public function setDegatsFlat($DegatsFlat)
    {
        $this->_DegatsFlat = (int)$DegatsFlat;
    }

    public function setDegatsPourcentage($DegatsPourcentage)
    {
        $this->_DegatsPourcentage = (float)$DegatsPourcentage;
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

    public function setReductionDegatsFlat($ReductionDegatsFlat)
    {
        $this->_ReductionDegatsFlat = (int)$ReductionDegatsFlat;
    }

    public function setReductionDegatsPourcentage($ReductionDegatsPourcentage)
    {
        $this->_ReductionDegatsPourcentage = (float)$ReductionDegatsPourcentage;
    }

    public function setSoinFlat($SoinFlat)
    {
        $this->_SoinFlat = (int)$SoinFlat;
    }

    public function setSoinPourcentage($SoinPourcentage)
    {
        $this->_SoinPourcentage = (float)$SoinPourcentage;
    }

    public function setSoinRecuFlat($SoinRecuFlat)
    {
        $this->_SoinRecuFlat = (int)$SoinRecuFlat;
    }

    public function setSoinRecuPourcentage($SoinRecuPourcentage)
    {
        $this->_SoinRecuPourcentage = (float)$SoinRecuPourcentage;
    }

    public function setIgnoreArmureFlat($IgnoreArmureFlat)
    {
        $this->_IgnoreArmureFlat = (int)$IgnoreArmureFlat;
    }

    public function setIgnoreArmurePourcentage($IgnoreArmurePourcentage)
    {
        $this->_IgnoreArmurePourcentage = (float)$IgnoreArmurePourcentage;
    }

    public function setIgnoreArmureMagiqueFlat($IgnoreArmureMagiqueFlat)
    {
        $this->_IgnoreArmureMagiqueFlat = (int)$IgnoreArmureMagiqueFlat;
    }

    public function setIgnoreArmureMagiquePourcentage($IgnoreArmureMagiquePourcentage)
    {
        $this->_IgnoreArmureMagiquePourcentage = (float)$IgnoreArmureMagiquePourcentage;
    }

    public function setAugmenteNombreAttaque($AugmenteNombreAttaque)
    {
        $this->_AugmenteNombreAttaque = (int)$AugmenteNombreAttaque;
    }

    public function setRedirectionDegatFlat($RedirectionDegatFlat)
    {
        $this->_RedirectionDegatFlat = (int)$RedirectionDegatFlat;
    }

    public function setRedirectionDegatPourcentage($RedirectionDegatPourcentage)
    {
        $this->_RedirectionDegatPourcentage = (float)$RedirectionDegatPourcentage;
    }

    public function setPortee($Portee)
    {
        $this->_Portee = (int)$Portee;
    }

    public function setDegat($Degat)
    {
        $this->_Degat = (int)$Degat;
    }

    public function setDegatDiffere($DegatDiffere)
    {
        $this->_DegatDiffere = (int)$DegatDiffere;
    }

    public function setSoin($Soin)
    {
        $this->_Soin = (int)$Soin;
    }

    public function setShield($Shield)
    {
        $this->_Shield = (int)$Shield;
    }

    public function setDiffererDegatsFlatToTheEndOfEffect($DiffererDegatsFlatToTheEndOfEffect)
    {
        $this->_DiffererDegatsFlatToTheEndOfEffect = (int)$DiffererDegatsFlatToTheEndOfEffect;
    }

    public function setDiffererDegatsPourcentageToTheEndOfEffect($DiffererDegatsPourcentageToTheEndOfEffect)
    {
        $this->_DiffererDegatsPourcentageToTheEndOfEffect = (float)$DiffererDegatsPourcentageToTheEndOfEffect;
    }

    public function setDiffererDegatsFlat($DiffererDegatsFlat)
    {
        $this->_DiffererDegatsFlat = (int)$DiffererDegatsFlat;
    }

    public function setDiffererDegatsPourcentage($DiffererDegatsPourcentage)
    {
        $this->_DiffererDegatsPourcentage = (float)$DiffererDegatsPourcentage;
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

}