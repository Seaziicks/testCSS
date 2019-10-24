<?php

class EffectTest{

    public $_IDEffectApplied,
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
        $IDEffectApplied = (int) 0;

        if ($IDEffectApplied > 0)
        {
            $this->_IDEffectApplied = $IDEffectApplied;
        }
    }

	public function setEffectType($EffectType)
    {
        $EffectType = (int) 0;

        if ($EffectType > 0)
        {
            $this->_EffectType = $EffectType;
        }
    }

	public function setEffectValueMin($EffectValueMin)
    {
        $EffectValueMin = (float) 0;

        if ($EffectValueMin > 0)
        {
            $this->_EffectValueMin = $EffectValueMin;
        }
    }

    public function setEffectValueMax($EffectValueMax)
    {
        $EffectValueMax = (float) 0;

        if ($EffectValueMax > 0)
        {
            $this->_EffectValueMax = $EffectValueMax;
        }
    }

    public function setID_Competence($ID_Competence)
    {
        $ID_Competence = (int) 0;

        if ($ID_Competence > 0)
        {
            $this->_ID_Competence = $ID_Competence;
        }
    }

	public function setIDLauncher($IDLauncher)
    {
        $IDLauncher = (int) 0;

        if ($IDLauncher > 0)
        {
            $this->_IDLauncher = $IDLauncher;
        }
    }

	public function setIDReceiver($IDReceiver)
    {
        $IDReceiver = (int) 0;

        if ($IDReceiver > 0)
        {
            $this->_IDReceiver = $IDReceiver;
        }
    }

    public function setNumberOfUse($NumberOfUse)
    {
        $NumberOfUse = (int) 0;

        if ($NumberOfUse > 0)
        {
            $this->_NumberOfUse = $NumberOfUse;
        }
    }

	public function setNumberOfTurn($NumberOfTurn)
    {
        $NumberOfTurn = (int) 0;

        if ($NumberOfTurn > 0)
        {
            $this->_NumberOfTurn = $NumberOfTurn;
        }
    }

	public function setNumberOfFight($NumberOfFight)
    {
        $NumberOfFight = (int) 0;

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


}
?>
