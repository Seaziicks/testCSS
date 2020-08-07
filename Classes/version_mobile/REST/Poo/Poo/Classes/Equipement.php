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

    public function constructEmpty() {
        $this->_Id_Objet = null;
        $this->_Rareté = null;
        $this->_Couleur = null;
        $this->_Nom = null;
        $this->_Type = null;
        $this->_Image = null;
        $this->_Emplacement = null;
        $this->_NombreMain = null;
        $this->_Statistique_Principale = null;
        $this->_Val = null;
        $this->_Val2 = null;
        $this->_Niveau = null;
        $this->_PropriétéMagique1 = null;
        $this->_Valeur1 = null;
        $this->_PropriétéMagique2 = null;
        $this->_Valeur2 = null;
        $this->_PropriétéMagique3 = null;
        $this->_Valeur3 = null;
        $this->_PropriétéMagique4 = null;
        $this->_Valeur4 = null;
        $this->_Pouvoir_Spécial1 = null;
        $this->_Pouvoir_Spécial2 = null;
        $this->_Valeur_Pouvoir_Special = null;
        $this->_Id_Panoplie = null;
        $this->_Validé = null;
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
        if($stat == 'Armure' || $stat == 'Armor') {
            if($this->_Statistique_Principale == 'Armor' || $this->_Statistique_Principale == 'Armure') {
                $bonus += $this->_Val;
            }
        }
        return $bonus;
    }

    public function getRandomItem(string $equipement, int $rarete, int $niveau, array $proprietes_magiques_primaires, array $proprietes_magiques_secondaires, int $numeroanneau) : Equipement
    {
        $couleursPossible = ['Gris', 'Blanc', 'Bleu', 'Jaune', 'Orange', 'Vert'];
        $couleur = $couleursPossible[$rarete - 1];

        switch ($equipement) {
            case 'Dague':
                $this->_Statistique_Principale = 'Dégâts par coup';
                $this->_Val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 7);
                $this->_Val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 4);
                $this->_Type = 'Arme';
                $emplacement = 'Arme';
                $nbimage = 7;
                break;
            case 'Baguette':
                $this->_Statistique_Principale = 'Dégâts par coup';
                $this->_Val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 7);
                $this->_Val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 5);
                $this->_Type = 'Arme';
                $this->_Emplacement = 'Arme';
                $nbimage = 6;
                break;
            case 'Faux':
                $this->_Statistique_Principale = 'Dégâts par coup';
                $this->_Val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 7);
                $this->_Val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 4.5);
                $this->_Type = 'Arme';
                $this->_Emplacement = 'Arme';
                $nbimage = 2;
                break;
            case 'Epée courte':
                $this->_Statistique_Principale = 'Dégâts par coup';
                $this->_Val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 3.25);
                $this->_Val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 2.75);
                $this->_Type = 'Arme';
                $this->_Emplacement = 'Arme';
                $nbimage = 4;
                break;

            case 'Epée':
            case 'Lance':
            case 'Fléau':
            case 'Hache':
                $this->_Statistique_Principale = 'Dégâts par coup';
                $this->_Val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 4);
                $this->_Val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 2);
                $this->_Type = 'Arme';
                $this->_Emplacement = 'Arme';
                $nbimage = 6;
                break;

            case 'Massue':
                $this->_Statistique_Principale = 'Dégâts par coup';
                $this->_Val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 5);
                $this->_Val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 1.5);
                $this->_Type = 'Arme';
                $this->_Emplacement = 'Arme';
                $nbimage = 6;
                break;

            case 'Amulette':
                $this->_Type = 'Amulette';
                $this->_Emplacement = 'Bijou';
                $nbimage = 10;
                break;
            case 'Anneau':
                $this->_Type = 'Anneau' . (($numeroanneau % 2) + 1) . '';
                $this->_Emplacement = 'Bijou';
                $nbimage = 11;
                $numeroanneau += 1;
                break;


            case 'Coiffe':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.5);
                $this->_Type = 'Coiffe';
                $this->_Emplacement = 'Armure';
                $nbimage = 7;
                break;
            case 'Epaules':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.4);
                $this->_Type = 'Epaules';
                $this->_Emplacement = 'Armure';
                $nbimage = 6;
                break;
            case 'Gants':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.4);
                $this->_Type = 'Gants';
                $this->_Emplacement = 'Armure';
                $nbimage = 6;
                break;
            case 'Torse' :
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.7);
                $this->_Type = 'Torse';
                $this->_Emplacement = 'Armure';
                $nbimage = 7;
                break;
            case 'Brassard':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                $this->_Type = 'Brassard';
                $this->_Emplacement = 'Armure';
                $nbimage = 7;
                break;
            case 'Ceinture':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                $this->_Type = 'Ceinture';
                $this->_Emplacement = 'Armure';
                $nbimage = 11;
                break;
            case 'Jambieres':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                $this->_Type = 'Jambieres';
                $this->_Emplacement = 'Armure';
                $nbimage = 6;
                break;
            case 'Bottes':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                $this->_Type = 'Bottes';
                $this->_Emplacement = 'Armure';
                $nbimage = 6;
                break;


            case 'Bouclier':
                $this->_Statistique_Principale = 'Armure';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 19, 1), 0.5);
                $this->_Type = 'Offhand';
                $this->_Emplacement = 'Offhand';
                $nbimage = 8;
                break;
            case 'Talisman démoniaque':
            case 'Ciboire':
                $this->_Statistique_Principale = 'Dégâts des sorts';
                $this->_Val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 10), 1);
                $this->_Type = 'Offhand';
                $this->_Emplacement = 'Offhand';
                $nbimage = 5;
                break;
        }


        switch ($equipement) {
            case 'Massue':
                $nbimage = 5;
                break;
            case 'Lance':
                $nbimage = 3;
                break;
            case 'Epée':
            case 'Fléau':
                $nbimage = 4;
                break;
        }


        $image = '' . $this->_Emplacement . '/' . $equipement . '/' . $couleur . '/' . rand(1, $nbimage) . '.png';


        if ($rarete == 1) {
            $this->_Nom = $equipement . ' de mauvaise facture';
        } else if ($rarete == 2) {
            if (in_array($equipement, ['Coiffe', 'Epaules', 'Ceinture', 'Amulette']) or ($this->_Type == 'Arme' and $equipement != 'Fléau')) {
                $this->_Nom = $equipement . ' normale';
            } else if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                $this->_Nom = $equipement . ' normales';
            } else {
                $this->_Nom = $equipement . ' normal';
            }
            $this->_Valeur1 = round($niveau * $niveau / 17);
        } else if ($rarete >= 2) {

            if ($equipement == 'Dague') {
                if (rand(0, 100) > 75) {
                    $this->_PropriétéMagique1 = 'Intelligence';
                } else {
                    $this->_PropriétéMagique1 = 'Agilité';
                }
                $this->_Emplacement = 'Arme';
            } else if ($equipement == 'Baguette') {
                $this->_PropriétéMagique1 = 'Intelligence';
                $this->_Emplacement = 'Arme';
            } else if ($equipement == 'Faux') {
                $this->_PropriétéMagique1 = 'Intelligence';
                $this->_Emplacement = 'Arme';
            } else if ($equipement == 'Epée courte') {
                if (rand(0, 100) > 51) {
                    $this->_PropriétéMagique1 = 'Agilité';
                } else {
                    $this->_PropriétéMagique1 = 'Force';
                }
                $this->_Emplacement = 'Arme';
            } else if ($equipement == 'Massue' or $equipement == 'Epée' or $equipement == 'Lance' or $equipement == 'Fléau' or $equipement == 'Hache') {
                $this->_PropriétéMagique1 = 'Force';
                $this->_Emplacement = 'Arme';
            } else if ($equipement == 'Amulette' or $equipement == 'Anneau') {
                $this->_PropriétéMagique1 = $proprietes_magiques_primaires[rand(0, count($proprietes_magiques_primaires) - 1)];
                $this->_Emplacement = 'Bijou';
            } else {
                $this->_PropriétéMagique1 = $proprietes_magiques_primaires[rand(0, count($proprietes_magiques_primaires) - 1)];
                $this->_Emplacement = 'Armure';
            }

            if ($rarete == 3) {
                $this->_Valeur1 = round($niveau * $niveau / 12);

                if (rand(0, 100) <= intval($niveau * $niveau / 2.25)) {
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    while ($proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique1) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    }
                    $this->_PropriétéMagique2 = $proprietes_magiques_secondaires[$i];
                    $this->_Valeur2 = round($niveau * $niveau / 16);

                }
                if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                    $this->_Nom = $equipement . ' magiques';
                } else {
                    $this->_Nom = $equipement . ' magique';
                }
            }else if ($rarete == 4) {
                $this->_Valeur1 = round($niveau * $niveau / 10);
                $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                while ($proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique1) {
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                }
                $this->_PropriétéMagique2 = $proprietes_magiques_secondaires[$i];
                $this->_Valeur2 = round($niveau * $niveau / 11);

                if (rand(0, 100) <= intval($niveau * $niveau / 2.25)) {
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    while ($proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique1 or $proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique2) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    }
                    $this->_PropriétéMagique3 = $proprietes_magiques_secondaires[$i];
                    $this->_Valeur3 = round($niveau * $niveau / 11);
                }
                if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                    $this->_Nom = $equipement . ' rares';
                } else {
                    $this->_Nom = $equipement . ' rare';
                }
            }else if ($rarete == 5) {
                //Valeur 1
                $this->_Valeur1 = round($niveau * $niveau / 7);

                // Propriété et valeur 2
                $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                while ($proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique1) {
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                }
                $this->_PropriétéMagique2 = $proprietes_magiques_secondaires[$i];
                $this->_Valeur2 = round($niveau * $niveau / 8);

                //Propriété et valeur 3
                $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                while ($proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique1 or $proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique2) {
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                }
                $this->_PropriétéMagique3 = $proprietes_magiques_secondaires[$i];
                $this->_Valeur3 = round($niveau * $niveau / 8);

                //Propriété et valeur 4

                $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                while ($proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique1 or $proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique2 or $proprietes_magiques_secondaires[$i] == $this->_PropriétéMagique3) {
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                }
                $this->_PropriétéMagique4 = $proprietes_magiques_secondaires[$i];
                $this->_Valeur4 = round($niveau * $niveau / 8);
                if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                    $this->_Nom = $equipement . ' légendaires';
                } else {
                    $this->_Nom = $equipement . ' légendaire';
                }
            }
        }

        for ($c = 1; $c <= 4; $c++) {
            // echo $this->getProprieteMagique(1);
            $methodGetPM = 'getProprieteMagique';
            $methodGetV = 'getValeur';
            // echo $this->$methodGet($c);
            $methodSet = 'setValeur'.$c;
            if ($this->$methodGetPM($c) == 'Vitalité') {
                $this->$methodSet(round($this->$methodGetV($c) / 5));
            } else if ($this->$methodGetPM($c) == 'Canon de lumière') {
                $this->$methodSet(floor($this->$methodGetV($c) / 15));
            } else if ($this->$methodGetPM($c) == 'Critique') {
                $this->$methodSet(floor($this->$methodGetV($c) / 10));
            } else if ($this->$methodGetPM($c) == 'Mana') {
                $this->$methodSet(round($this->$methodGetV($c) / 3));
            }
        }
        if($rarete == 5)
            $pouvoir_special1 = "Pouvoir Spécial à insérer";
        // On met un numéro aux anneaux. Ce numéro oscille entre 0 et 1 pour pouvoir en placer 2 par inventaire.
        if ($this->_Type == 'Anneau')
            $this->_Type = 'Anneau' . $numeroanneau;

        // Reorganising magic property to always have same order.
        $displayOrder = ['Intelligence', 'Force', 'Agilité', 'Vitalité', 'Mana', 'Critique', 'Canon de lumière'];
        $changed = true;
        while($changed) {
            $changed = false;
            for ($x = 2; $x <= 4; $x++) {
                $y = $x;
                $z = $y + 1;
                while ($z < 5 && array_search(${'this->_PropriétéMagique' . $y}, $displayOrder) > array_search(${'this->_PropriétéMagique' . $z}, $displayOrder)) {
                    $tmp = ${'this->_PropriétéMagique' . $z};
                    ${'this->_PropriétéMagique' . $z} = ${'this->_PropriétéMagique' . $y};
                    ${'this->_PropriétéMagique' . $y} = $tmp;

                    $tmp = ${'valeur' . $z};
                    ${'valeur' . $z} = ${'valeur' . $y};
                    ${'valeur' . $y} = $tmp;
                    $y++;
                    $z = $y + 1;
                    $changed = true;
                }

            }
        }

        $this->setRareté($rarete);
        $this->setCouleur($couleur);
        $this->setNom($this->_Nom);
        $this->setType($this->_Type);
        $this->setImage($image);
        $this->setEmplacement($this->_Emplacement);
        $this->setStatistique_Principale($this->_Statistique_Principale);
        $this->setVal($this->_Val);
        $this->setVal2($this->_Val2);
        $this->setNiveau($niveau);
        $this->setPropriétéMagique1($this->_PropriétéMagique1);
        $this->setValeur1($this->_Valeur1);
        $this->setPropriétéMagique2($this->_PropriétéMagique2);
        $this->setVal2($this->_Valeur2);
        $this->setPropriétéMagique3($this->_PropriétéMagique3);
        $this->setValeur3($this->_Valeur3);
        $this->setPropriétéMagique4($this->_PropriétéMagique4);
        $this->setValeur4($this->_Valeur4);
        $this->setPouvoir_Spécial1(null);
        $this->setPouvoir_Spécial2('');
        $this->setValeur_Pouvoir_Special(null);

        return $this;
    }

    public function getProprieteMagique(int $number) : string
    {
        switch ($number) {
            case 1:
                return $this->_PropriétéMagique1;
                break;
            case 2:
                return $this->_PropriétéMagique2;
                break;
            case 3:
                return $this->_PropriétéMagique3;
                break;
            case 4:
                return $this->_PropriétéMagique4;
                break;
        }
    }

    public function getValeur(int $number) : string
    {
        switch ($number) {
            case 1:
                return $this->_Valeur1;
                break;
            case 2:
                return $this->_Valeur2;
                break;
            case 3:
                return $this->_Valeur3;
                break;
            case 4:
                return $this->_Valeur4;
                break;
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