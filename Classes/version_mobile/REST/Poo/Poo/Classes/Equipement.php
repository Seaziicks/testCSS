<?php

class Equipement{
	
	public $_Id_Objet,
			$_Rareté,
			$_Couleur,
			$_Nom,
			$_Type,
			$_Image,
			$_Emplacement,
			$_NombreMain,
			$_Statistique_Principale,
			$_Val,
			$_Val2,
			$_Niveau,
			$_PropriétéMagique1,
			$_Valeur1,
			$_PropriétéMagique2,
			$_Valeur2,
			$_PropriétéMagique3,
			$_Valeur3,
			$_PropriétéMagique4,
			$_Valeur4,
			$_Pouvoir_Spécial1,
			$_Pouvoir_Spécial2,
			$_Valeur_Pouvoir_Special,
			$_Id_Panoplie,
			$_Validé;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
			
			 
	public function setId_Objet($Id_Objet)
	{
	$Id_Objet = (int) $Id_Objet;

		if ($Id_Objet > 0)
		{
			$this->_Id_Objet = $Id_Objet;
		}
	}
 
	public function setRareté($Rareté)
	{
	$Rareté = (int) $Rareté;

		if ($Rareté > 0)
		{
			$this->_Rareté = $Rareté;
		}
	}

	public function setCouleur($Couleur)
	{
		if (is_string($Couleur))
		{
			$this->_Couleur = $Couleur;
		}
	}

	public function setNom($Nom)
	{
		if (is_string($Nom))
		{
			$this->_Nom = $Nom;
		}
	}

	public function setType($Type)
	{
		if (is_string($Type))
		{
			$this->_Type = $Type;
		}
	}

	public function setImage($Image)
	{
		if (is_string($Image))
		{
			$this->_Image = $Image;
		}
	}

	public function setEmplacement($Emplacement)
	{
		if (is_string($Emplacement))
		{
			$this->_Emplacement = $Emplacement;
		}
	}
 
	public function setNombreMain($NombreMain)
	{
	$NombreMain = (int) $NombreMain;

		if ($NombreMain > 0)
		{
			$this->_NombreMain = $NombreMain;
		}
	}

	public function setStatistique_Principale($Statistique_Principale)
	{
		if (is_string($Statistique_Principale))
		{
			$this->_Statistique_Principale = $Statistique_Principale;
		}
	}
 
	public function setVal($Val)
	{
	$Val = (float) $Val;

		if ($Val > 0)
		{
			$this->_Val = $Val;
		}
	}
 
	public function setVal2($Val2)
	{
	$Val2 = (int) $Val2;

		if ($Val2 > 0)
		{
			$this->_Val2 = $Val2;
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

	public function setPropriétéMagique1($PropriétéMagique1)
	{
		if (is_string($PropriétéMagique1))
		{
			$this->_PropriétéMagique1 = $PropriétéMagique1;
		}
	}
 
	public function setValeur1($Valeur1)
	{
	$Valeur1 = (int) $Valeur1;

		if ($Valeur1 > 0)
		{
			$this->_Valeur1 = $Valeur1;
		}
	}

	public function setPropriétéMagique2($PropriétéMagique2)
	{
		if (is_string($PropriétéMagique2))
		{
			$this->_PropriétéMagique2 = $PropriétéMagique2;
		}
	}
 
	public function setValeur2($Valeur2)
	{
	$Valeur2 = (int) $Valeur2;

		if ($Valeur2 > 0)
		{
			$this->_Valeur2 = $Valeur2;
		}
	}

	public function setPropriétéMagique3($PropriétéMagique3)
	{
		if (is_string($PropriétéMagique3))
		{
			$this->_PropriétéMagique3 = $PropriétéMagique3;
		}
	}
 
	public function setValeur3($Valeur3)
	{
	$Valeur3 = (int) $Valeur3;

		if ($Valeur3 > 0)
		{
			$this->_Valeur3 = $Valeur3;
		}
	}

	public function setPropriétéMagique4($PropriétéMagique4)
	{
		if (is_string($PropriétéMagique4))
		{
			$this->_PropriétéMagique4 = $PropriétéMagique4;
		}
	}
 
	public function setValeur4($Valeur4)
	{
	$Valeur4 = (int) $Valeur4;

		if ($Valeur4 > 0)
		{
			$this->_Valeur4 = $Valeur4;
		}
	}

	public function setPouvoir_Spécial1($Pouvoir_Spécial1)
	{
		if (is_string($Pouvoir_Spécial1))
		{
			$this->_Pouvoir_Spécial1 = $Pouvoir_Spécial1;
		}
	}

	public function setPouvoir_Spécial2($Pouvoir_Spécial2)
	{
		if (is_string($Pouvoir_Spécial2))
		{
			$this->_Pouvoir_Spécial2 = $Pouvoir_Spécial2;
		}
	}

	public function setValeur_Pouvoir_Special($Valeur_Pouvoir_Special)
	{
		if (is_string($Valeur_Pouvoir_Special))
		{
			$this->_Valeur_Pouvoir_Special = $Valeur_Pouvoir_Special;
		}
	}
 
	public function setId_Panoplie($Id_Panoplie)
	{
	$Id_Panoplie = (int) $Id_Panoplie;

		if ($Id_Panoplie > 0)
		{
			$this->_Id_Panoplie = $Id_Panoplie;
		}
	}
 
	public function setValidé($Validé)
	{
	$Validé = (int) $Validé;

		if ($Validé > 0)
		{
			$this->_Validé = $Validé;
		}
	}

    public function getBonus($stat)
    {
        $bonus = 0;
        if($this->_PropriétéMagique1 == $stat)
            $bonus+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == $stat)
            $bonus+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == $stat)
            $bonus+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == $stat)
            $bonus+=$this->_Valeur4;
        if($stat == 'Armure') {
            if($this->_Statistique_Principale == 'Armor' || $this->_Statistique_Principale == 'Armure') {
                $bonus += $this->_Val;
            }
        }
        return $bonus;
    }

    public function getBonusForce()
	{
        $bonusForce = 0;
		if($this->_PropriétéMagique1 == 'Force')
            $bonusForce+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Force')
            $bonusForce+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Force')
            $bonusForce+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Force')
            $bonusForce+=$this->_Valeur4;

        return $bonusForce;
	}

    public function getBonusAgilité()
    {
        $bonusAgilité = 0;
        if($this->_PropriétéMagique1 == 'Agilité')
            $bonusAgilité+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Agilité')
            $bonusAgilité+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Agilité')
            $bonusAgilité+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Agilité')
            $bonusAgilité+=$this->_Valeur4;

        return $bonusAgilité;
    }

    public function getBonusIntelligence()
    {
        $bonusIntelligence = 0;
        if($this->_PropriétéMagique1 == 'Intelligence')
            $bonusIntelligence+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Intelligence')
            $bonusIntelligence+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Intelligence')
            $bonusIntelligence+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Intelligence')
            $bonusIntelligence+=$this->_Valeur4;

        return $bonusIntelligence;
    }

    public function getBonusVitalité()
    {
        $bonusVitalité = 0;
        if($this->_PropriétéMagique1 == 'Vitalité')
            $bonusVitalité+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Vitalité')
            $bonusVitalité+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Vitalité')
            $bonusVitalité+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Vitalité')
            $bonusVitalité+=$this->_Valeur4;

        return $bonusVitalité;
    }

    public function getBonusArmure()
    {
        $bonusArmure = 0;
        if($this->_PropriétéMagique1 == 'Armure')
            $bonusArmure+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Armure')
            $bonusArmure+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Armure')
            $bonusArmure+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Armure')
            $bonusArmure+=$this->_Valeur4;
        if($this->_Statistique_Principale == 'Armor')
            $bonusArmure+=$this->_Val;


        return $bonusArmure;
    }

    public function getBonusMana()
    {
        $bonusMana = 0;
        if($this->_PropriétéMagique1 == 'Mana')
            $bonusMana+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Mana')
            $bonusMana+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Mana')
            $bonusMana+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Mana')
            $bonusMana+=$this->_Valeur4;

        return $bonusMana;
    }

    public function getBonusRessource()
    {
        $bonusRessource = 0;
        if($this->_PropriétéMagique1 == 'Ressource')
            $bonusRessource+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Ressource')
            $bonusRessource+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Ressource')
            $bonusRessource+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Ressource')
            $bonusRessource+=$this->_Valeur4;

        return $bonusRessource;
    }

    public function getBonusRéussite()
    {
        $bonusRéussite = 0;
        if($this->_PropriétéMagique1 == 'Réussite')
            $bonusRéussite+=$this->_Valeur1;
        if($this->_PropriétéMagique2 == 'Réussite')
            $bonusRéussite+=$this->_Valeur2;
        if($this->_PropriétéMagique3 == 'Réussite')
            $bonusRéussite+=$this->_Valeur3;
        if($this->_PropriétéMagique4 == 'Réussite')
            $bonusRéussite+=$this->_Valeur4;

        return $bonusRéussite;
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