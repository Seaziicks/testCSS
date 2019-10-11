<?php

class EffectTest{

    public $_IDEffectApplied,
        $_EffectType,
        $_EffectValue,
        $_IDLauncher,
        $_IDRecieiver,
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

	public function setEffectValue($EffectValue)
    {
        $EffectValue = (float) 0;

        if ($EffectValue > 0)
        {
            $this->_EffectValue = $EffectValue;
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

	public function setIDRecieiver($IDRecieiver)
    {
        $IDRecieiver = (int) 0;

        if ($IDRecieiver > 0)
        {
            $this->_IDRecieiver = $IDRecieiver;
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
