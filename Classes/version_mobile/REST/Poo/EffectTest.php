<?php

class EffectTest{

    public $_IDEffectApplied,
        $_ActionType,
        $_EffectType,
        $_EffectValueMin,
        $_EffectValueMax,
        $_ID_Competence,
        $_IDLauncher,
        $_IDReceiver,
        $_NumberOfUse,
        $_NumberOfTurn,
        $_NumberOfFight;

	public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

	public function setIDEffectApplied($IDEffectApplied)
    {
        $IDEffectApplied = (int) $IDEffectApplied;

        if ($IDEffectApplied > 0)
        {
            $this->_IDEffectApplied = $IDEffectApplied;
        }
    }

    public function setActionType($actionType)
    {
        $this->_IDEffectApplied = (int) $actionType;
    }

	public function setEffectType($EffectType)
    {
        $EffectType = (int) $EffectType;

        if ($EffectType > 0)
        {
            $this->_EffectType = $EffectType;
        }
    }

	public function setEffectValueMin($EffectValueMin)
    {
        $EffectValueMin = (float) $EffectValueMin;

        if ($EffectValueMin > 0)
        {
            $this->_EffectValueMin = $EffectValueMin;
        }
    }

    public function setEffectValueMax($EffectValueMax)
    {
        $EffectValueMax = (float) $EffectValueMax;

        if ($EffectValueMax > 0)
        {
            $this->_EffectValueMax = $EffectValueMax;
        }
    }

    public function setID_Competence($ID_Competence)
    {
        $ID_Competence = (int) $ID_Competence;

        if ($ID_Competence > 0)
        {
            $this->_ID_Competence = $ID_Competence;
        }
    }

	public function setIDLauncher($IDLauncher)
    {
        $IDLauncher = (int) $IDLauncher;

        if ($IDLauncher > 0)
        {
            $this->_IDLauncher = $IDLauncher;
        }
    }

	public function setIDReceiver($IDReceiver)
    {
        $IDReceiver = (int) $IDReceiver;

        if ($IDReceiver > 0)
        {
            $this->_IDReceiver = $IDReceiver;
        }
    }

    public function setNumberOfUse($NumberOfUse)
    {
        $NumberOfUse = (int) $NumberOfUse;

        if ($NumberOfUse > 0)
        {
            $this->_NumberOfUse = $NumberOfUse;
        }
    }

	public function setNumberOfTurn($NumberOfTurn)
    {
        $NumberOfTurn = (int) $NumberOfTurn;

        if ($NumberOfTurn > 0)
        {
            $this->_NumberOfTurn = $NumberOfTurn;
        }
    }

	public function setNumberOfFight($NumberOfFight)
    {
        $NumberOfFight = (int) $NumberOfFight;

        if ($NumberOfFight > 0)
        {
            $this->_NumberOfFight = $NumberOfFight;
        }
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

    public function useEffect($bdd, PersonnageTest $launcher, PersonnageTest $receiver, BonusCombat $bonusCombatLauncher, BonusCombat $bonusCombatReceiver)
    {
        if($this->_ActionType > 7)
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        switch (true) {
            case $this->_EffectType <= 30:
                $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                                    IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
                VALUES (" . $this->_EffectType . "," . $this->_EffectValueMin . "," . $this->_EffectValueMax . ",
                        " . $this->_ID_Competence . "," . $this->_IDLauncher . "," . $this->_IDReceiver . ",
                        " . $this->_NumberOfUse . ", " . $this->_NumberOfTurn . "," . $this->_NumberOfFight . ")";
                // use exec() because no results are returned
                $bdd->exec($sql);
            case $this->_EffectType == 33: // Damage
                $initialDamages = $this->_EffectValueMin;
                $effectiveDamages = $receiver->calculateReducedDamages($initialDamages, $bonusCombatReceiver);
                $remainingShield = max(0, $receiver->_Bouclier - $effectiveDamages);
                $remainingHP = max(0, $receiver->_PDV_Actuel - max(0, $effectiveDamages - $receiver->_Bouclier));
                $sql = "UPDATE personnage SET PDV_Actuel = " . $remainingHP . ", Bouclier = " . $remainingShield . " WHERE $this->Id_Personnage = " . $this->_IDReceiver;
                $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $this->_EffectValueMin . ") WHERE idPersonnage = " . $this->_IDReceiver;
                $bdd->exec($sql);
                $bdd->exec($sql2);
                break;
            case $this->_EffectType == 35: // Heal
                $initialHeal = $this->_EffectValueMin;
                $healBoostReceiver = ($initialHeal + $bonusCombatReceiver->_SoinRecuFlat) * (1 + $bonusCombatReceiver->_SoinRecuPourcentage);
                $lifePoint = min(($receiver->getTotalVitalité() + $bonusCombatReceiver->_Vitalite) * 2, $receiver->_PDV_Actuel + $healBoostReceiver);
                $idReceiver = $this->_IDReceiver != null ? $this->_IDReceiver : $receiver->_Id_Personnage;
                $sql = "UPDATE personnage SET PDV_Actuel = " . $lifePoint . " WHERE Id_Personnage = " . $this->$idReceiver;
                $bdd->exec($sql);
                break;
            case $this->_EffectType == 36: // Shield
                $totalShield = max(0, $receiver->_Bouclier - $this->_EffectValueMin);
                $sql = "UPDATE personnage SET Bouclier = " . $totalShield . " WHERE Id_Personnage = " . $this->_IDReceiver;
                $bdd->exec($sql);
                break;
        }
    }


}
?>
