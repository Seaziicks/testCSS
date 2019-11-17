<?php

class CompetenceTest
{
	public $_Id_Competence,
			$_Spécialité,
			$_Rang,
			$_Libellé,
			$_Image,
			$_Niveau,
			$_Portée,
			$_Cout_En_PA,
			$_Cout_En_Ressource,
			$_Ressource,
			$_Description1,
			$_Description2,
			$_Description3,
			$_Description4,
			$_Description5,
			$_Description6,
			$_Effet1,
			$_Effet1Bis,
			$_Effet2,
			$_Effet2Bis,
			$_Effet3,
			$_Effet3Bis,
			$_Fin,
			$_Type_calcul1,
			$_Calcul1a,
			$_Calcul1b,
			$_Amplitude1,
			$_Nombre_Amplitude1,
			$_Statistique1,
			$_Impact1,
			$_Pourcentage1,
			$_Type_calcul2,
			$_Calcul2a,
			$_Calcul2b,
			$_Amplitude2,
			$_Nombre_Amplitude2,
			$_Statistique2,
			$_Impact2,
			$_Pourcentage2,
			$_Type_calcul3,
			$_Calcul3a,
			$_Calcul3b,
			$_Amplitude3,
			$_Nombre_Amplitude3,
			$_Statistique3,
			$_Impact3,
			$_Pourcentage3,
			$_Type_calcul4,
			$_Calcul4a,
			$_Calcul4b,
			$_Amplitude4,
			$_Nombre_Amplitude4,
			$_Statistique4,
			$_Impact4,
			$_Pourcentage4,
			$_Type_calcul5,
			$_Calcul5a,
			$_Calcul5b,
			$_Amplitude5,
			$_Nombre_Amplitude5,
			$_Statistique5,
			$_Impact5,
			$_Pourcentage5,
			$_NumEffet,
			$_Type_calculBis1,
			$_CalculBis1a,
			$_CalculBis1b,
			$_StatistiqueBis1,
			$_Type_calculBis2,
			$_CalculBis2a,
			$_CalculBis2b,
			$_StatistiqueBis2,
			$_ImpactBis,
			$_PourcentageBis,
			$_Entete,
			$_Exemple,
			$_Niveau_Requis,
			$_Compétence_Requise_1,
			$_Compétence_Requise_2,
			$_Compétence_Requise_3,
			$_TempsRechargement,
			$_Durée,
			$_Cooldown,
			$_Bonus_Temporaire,
			$_Type_Calcul_Temporaire,
			$_Valeur_Temporaire1,
			$_Valeur_Temporaire2,
			$_Statistique_Temporaire1;

	/* @var $_Personnage PersonnageTest */
    public $_Personnage;
    /* @var $_Effects CompetenceEffectTest[] */
    public $_Effects = [];
    /* @var $_db PDO */
    public $_db;

	public function __construct(array $donnees, PersonnageTest $Personnage, $db)
	{
	    $this->_db = $db;
        $this->hydrate($donnees);
        $this->setPersonnage($Personnage);
        $this->getEffects();
	}

	public function setId_Competence($Id_Competence)
	{
        $Id_Competence = (int) $Id_Competence;

		if ($Id_Competence > 0)
		{
		  $this->_Id_Competence = $Id_Competence;
		}
	}

	public function setSpécialité($Spécialité)
	{
		if (is_string($Spécialité))
		{
		  $this->_Spécialité = $Spécialité;
		}
	}

	public function setRang($Rang)
	{
	$Rang = (int) $Rang;

		if ($Rang > 0)
		{
		  $this->_Rang = $Rang;
		}
	}

	public function setLibellé($Libellé)
	{
		if (is_string($Libellé))
		{
		  $this->_Libellé = $Libellé;
		}
	}

	public function setImage($Image)
	{
		if (is_string($Image))
		{
		  $this->_Image = $Image;
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

	public function setPortée($Portée)
	{
	$Portée = (int) $Portée;

		if ($Portée > 0)
		{
		  $this->_Portée = $Portée;
		}
	}

	public function setCout_En_PA($Cout_En_PA)
	{
	$Cout_En_PA = (int) $Cout_En_PA;

		if ($Cout_En_PA > 0)
		{
		  $this->_Cout_En_PA = $Cout_En_PA;
		}
	}

	public function setCout_En_Ressource($Cout_En_Ressource)
	{
	$Cout_En_Ressource = (int) $Cout_En_Ressource;

		if ($Cout_En_Ressource > 0)
		{
		  $this->_Cout_En_Ressource = $Cout_En_Ressource;
		}
	}

	public function setRessource($Ressource)
	{
		if (is_string($Ressource))
		{
		  $this->_Ressource = $Ressource;
		}
	}

	public function setDescription1($Description1)
	{
		if (is_string($Description1))
		{
		  $this->_Description1 = $Description1;
		}
	}

	public function setDescription2($Description2)
	{
		if (is_string($Description2))
		{
		  $this->_Description2 = $Description2;
		}
	}

	public function setDescription3($Description3)
	{
		if (is_string($Description3))
		{
		  $this->_Description3 = $Description3;
		}
	}

	public function setDescription4($Description4)
	{
		if (is_string($Description4))
		{
		  $this->_Description4 = $Description4;
		}
	}

	public function setDescription5($Description5)
	{
		if (is_string($Description5))
		{
		  $this->_Description5 = $Description5;
		}
	}

	public function setDescription6($Description6)
	{
		if (is_string($Description6))
		{
		  $this->_Description6 = $Description6;
		}
	}

	public function setEffet1($Effet1)
	{
		if (is_string($Effet1))
		{
		  $this->_Effet1 = $Effet1;
		}
	}

	public function setEffet1Bis($Effet1Bis)
	{
		if (is_string($Effet1Bis))
		{
		  $this->_Effet1Bis = $Effet1Bis;
		}
	}

	public function setEffet2($Effet2)
	{
		if (is_string($Effet2))
		{
		  $this->_Effet2 = $Effet2;
		}
	}

	public function setEffet2Bis($Effet2Bis)
	{
		if (is_string($Effet2Bis))
		{
		  $this->_Effet2Bis = $Effet2Bis;
		}
	}

	public function setEffet3($Effet3)
	{
		if (is_string($Effet3))
		{
		  $this->_Effet3 = $Effet3;
		}
	}

	public function setEffet3Bis($Effet3Bis)
	{
		if (is_string($Effet3Bis))
		{
		  $this->_Effet3Bis = $Effet3Bis;
		}
	}

	public function setFin($Fin)
	{
		if (is_string($Fin))
		{
		  $this->_Fin = $Fin;
		}
	}

	public function setType_calcul1($Type_calcul1)
	{
	$Type_calcul1 = (int) $Type_calcul1;

		if ($Type_calcul1 > 0)
		{
		  $this->_Type_calcul1 = $Type_calcul1;
		}
	}

	public function setCalcul1a($Calcul1a)
	{
	$Calcul1a = (int) $Calcul1a;

		if ($Calcul1a > 0)
		{
		  $this->_Calcul1a = $Calcul1a;
		}
	}

	public function setCalcul1b($Calcul1b)
	{
	$Calcul1b = (float) $Calcul1b;
	$this->_Calcul1b = $Calcul1b;
	}

	public function setAmplitude1($Amplitude1)
	{
	$Amplitude1 = (int) $Amplitude1;

		if ($Amplitude1 > 0)
		{
		  $this->_Amplitude1 = $Amplitude1;
		}
	}

	public function setNombre_Amplitude1($Nombre_Amplitude1)
	{
	$Nombre_Amplitude1 = (int) $Nombre_Amplitude1;

		if ($Nombre_Amplitude1 > 0)
		{
		  $this->_Nombre_Amplitude1 = $Nombre_Amplitude1;
		}
	}

	public function setStatistique1($Statistique1)
	{
		if (is_string($Statistique1))
		{
		  $this->_Statistique1 = $Statistique1;
		}
	}

	public function setImpact1($Impact1)
	{
		if (is_string($Impact1))
		{
		  $this->_Impact1 = $Impact1;
		}
	}

	public function setPourcentage1($Pourcentage1)
	{
	$Pourcentage1 = (int) $Pourcentage1;

		if ($Pourcentage1 > 0)
		{
		  $this->_Pourcentage1 = $Pourcentage1;
		}
	}

	public function setType_calcul2($Type_calcul2)
	{
	$Type_calcul2 = (int) $Type_calcul2;

		if ($Type_calcul2 > 0)
		{
		  $this->_Type_calcul2 = $Type_calcul2;
		}
	}

	public function setCalcul2a($Calcul2a)
	{
	$Calcul2a = (int) $Calcul2a;

		if ($Calcul2a > 0)
		{
		  $this->_Calcul2a = $Calcul2a;
		}
	}

	public function setCalcul2b($Calcul2b)
	{
        $Calcul2b = (float) $Calcul2b;
        $this->_Calcul2b = $Calcul2b;
	}

	public function setAmplitude2($Amplitude2)
	{
	$Amplitude2 = (int) $Amplitude2;

		if ($Amplitude2 > 0)
		{
		  $this->_Amplitude2 = $Amplitude2;
		}
	}

	public function setNombre_Amplitude2($Nombre_Amplitude2)
	{
	$Nombre_Amplitude2 = (int) $Nombre_Amplitude2;

		if ($Nombre_Amplitude2 > 0)
		{
		  $this->_Nombre_Amplitude2 = $Nombre_Amplitude2;
		}
	}

	public function setStatistique2($Statistique2)
	{
		if (is_string($Statistique2))
		{
			$this->_Statistique2 = $Statistique2;
		}
	}

	public function setImpact2($Impact2)
	{
		if (is_string($Impact2))
		{
			$this->_Impact2 = $Impact2;
		}
	}

	public function setPourcentage2($Pourcentage2)
	{
		if (is_string($Pourcentage2))
		{
			$this->_Pourcentage2 = $Pourcentage2;
		}
	}

	public function setType_calcul3($Type_calcul3)
	{
		$Type_calcul3 = (int) $Type_calcul3;

		if ($Type_calcul3 > 0)
		{
			$this->_Type_calcul3 = $Type_calcul3;
		}
	}

	public function setCalcul3a($Calcul3a)
	{
	$Calcul3a = (int) $Calcul3a;

		if ($Calcul3a > 0)
		{
			$this->_Calcul3a = $Calcul3a;
		}
	}

	public function setCalcul3b($Calcul3b)
	{
	    $Calcul3b = (float) $Calcul3b;
	    $this->_Calcul3b = $Calcul3b;
	}

	public function setAmplitude3($Amplitude3)
	{
	$Amplitude3 = (int) $Amplitude3;

		if ($Amplitude3 > 0)
		{
			$this->_Amplitude3 = $Amplitude3;
		}
	}

	public function setNombre_Amplitude3($Nombre_Amplitude3)
	{
	$Nombre_Amplitude3 = (int) $Nombre_Amplitude3;

		if ($Nombre_Amplitude3 > 0)
		{
			$this->_Nombre_Amplitude3 = $Nombre_Amplitude3;
		}
	}

	public function setStatistique3($Statistique3)
	{
		if (is_string($Statistique3))
		{
			$this->_Statistique3 = $Statistique3;
		}
	}

	public function setImpact3($Impact3)
	{
		if (is_string($Impact3))
		{
			$this->_Impact3 = $Impact3;
		}
	}

	public function setPourcentage3($Pourcentage3)
	{
	$Pourcentage3 = (int) $Pourcentage3;

		if ($Pourcentage3 > 0)
		{
			$this->_Pourcentage3 = $Pourcentage3;
		}
	}

	public function setType_calcul4($Type_calcul4)
	{
	$Type_calcul4 = (int) $Type_calcul4;

		if ($Type_calcul4 > 0)
		{
			$this->_Type_calcul4 = $Type_calcul4;
		}
	}

	public function setCalcul4a($Calcul4a)
	{
	$Calcul4a = (int) $Calcul4a;

		if ($Calcul4a > 0)
		{
			$this->_Calcul4a = $Calcul4a;
		}
	}

	public function setCalcul4b($Calcul4b)
	{
	$Calcul4b = (float) $Calcul4b;
	$this->_Calcul4b = $Calcul4b;
	}

	public function setAmplitude4($Amplitude4)
	{
	$Amplitude4 = (int) $Amplitude4;

		if ($Amplitude4 > 0)
		{
			$this->_Amplitude4 = $Amplitude4;
		}
	}

	public function setNombre_Amplitude4($Nombre_Amplitude4)
	{
	$Nombre_Amplitude4 = (int) $Nombre_Amplitude4;

		if ($Nombre_Amplitude4 > 0)
		{
			$this->_Nombre_Amplitude4 = $Nombre_Amplitude4;
		}
	}

	public function setStatistique4($Statistique4)
	{
		if (is_string($Statistique4))
		{
			$this->_Statistique4 = $Statistique4;
		}
	}

	public function setImpact4($Impact4)
	{
		if (is_string($Impact4))
		{
			$this->_Impact4 = $Impact4;
		}
	}

	public function setPourcentage4($Pourcentage4)
	{
	$Pourcentage4 = (int) $Pourcentage4;

		if ($Pourcentage4 > 0)
		{
			$this->_Pourcentage4 = $Pourcentage4;
		}
	}

	public function setType_calcul5($Type_calcul5)
	{
	$Type_calcul5 = (int) $Type_calcul5;

		if ($Type_calcul5 > 0)
		{
			$this->_Type_calcul5 = $Type_calcul5;
		}
	}

	public function setCalcul5a($Calcul5a)
	{
	$Calcul5a = (int) $Calcul5a;

		if ($Calcul5a > 0)
		{
			$this->_Calcul5a = $Calcul5a;
		}
	}

	public function setCalcul5b($Calcul5b)
	{
	$Calcul5b = (float) $Calcul5b;
	$this->_Calcul5b = $Calcul5b;
	}

	public function setAmplitude5($Amplitude5)
	{
	$Amplitude5 = (int) $Amplitude5;

		if ($Amplitude5 > 0)
		{
			$this->_Amplitude5 = $Amplitude5;
		}
	}

	public function setNombre_Amplitude5($Nombre_Amplitude5)
	{
	$Nombre_Amplitude5 = (int) $Nombre_Amplitude5;

		if ($Nombre_Amplitude5 > 0)
		{
			$this->_Nombre_Amplitude5 = $Nombre_Amplitude5;
		}
	}

	public function setStatistique5($Statistique5)
	{
		if (is_string($Statistique5))
		{
			$this->_Statistique5 = $Statistique5;
		}
	}

	public function setImpact5($Impact5)
	{
		if (is_string($Impact5))
		{
			$this->_Impact5 = $Impact5;
		}
	}

	public function setPourcentage5($Pourcentage5)
	{
	$Pourcentage5 = (int) $Pourcentage5;

		if ($Pourcentage5 > 0)
		{
			$this->_Pourcentage5 = $Pourcentage5;
		}
	}

	public function setNumEffet($NumEffet)
	{
	$NumEffet = (int) $NumEffet;

		if ($NumEffet > 0)
		{
			$this->_NumEffet = $NumEffet;
		}
	}

	public function setType_calculBis1($Type_calculBis1)
	{
	$Type_calculBis1 = (int) $Type_calculBis1;

		if ($Type_calculBis1 > 0)
		{
			$this->_Type_calculBis1 = $Type_calculBis1;
		}
	}

	public function setCalculBis1a($CalculBis1a)
	{
	$CalculBis1a = (int) $CalculBis1a;

		if ($CalculBis1a > 0)
		{
			$this->_CalculBis1a = $CalculBis1a;
		}
	}

	public function setCalculBis1b($CalculBis1b)
	{
	$CalculBis1b = (int) $CalculBis1b;

		if ($CalculBis1b > 0)
		{
			$this->_CalculBis1b = $CalculBis1b;
		}
	}

	public function setStatistiqueBis1($StatistiqueBis1)
	{
		if (is_string($StatistiqueBis1))
		{
			$this->_StatistiqueBis1 = $StatistiqueBis1;
		}
	}

	public function setType_calculBis2($Type_calculBis2)
	{
	$Type_calculBis2 = (int) $Type_calculBis2;

		if ($Type_calculBis2 > 0)
		{
			$this->_Type_calculBis2 = $Type_calculBis2;
		}
	}

	public function setCalculBis2a($CalculBis2a)
	{
	$CalculBis2a = (int) $CalculBis2a;

		if ($CalculBis2a > 0)
		{
			$this->_CalculBis2a = $CalculBis2a;
		}
	}

	public function setCalculBis2b($CalculBis2b)
	{
	$CalculBis2b = (int) $CalculBis2b;

		if ($CalculBis2b > 0)
		{
			$this->_CalculBis2b = $CalculBis2b;
		}
	}

	public function setStatistiqueBis2($StatistiqueBis2)
	{
		if (is_string($StatistiqueBis2))
		{
			$this->_StatistiqueBis2 = $StatistiqueBis2;
		}
	}

	public function setImpactBis($ImpactBis)
	{
		if (is_string($ImpactBis))
		{
			$this->_ImpactBis = $ImpactBis;
		}
	}

	public function setPourcentageBis($PourcentageBis)
	{
	$PourcentageBis = (int) $PourcentageBis;

		if ($PourcentageBis > 0)
		{
			$this->_PourcentageBis = $PourcentageBis;
		}
	}

	public function setEntete($Entete)
	{
		if (is_string($Entete))
		{
			$this->_Entete = $Entete;
		}
	}

	public function setExemple($Exemple)
	{
		if (is_string($Exemple))
		{
			$this->_Exemple = $Exemple;
		}
	}

	public function setNiveau_Requis($Niveau_Requis)
	{
	$Niveau_Requis = (int) $Niveau_Requis;

		if ($Niveau_Requis > 0)
		{
			$this->_Niveau_Requis = $Niveau_Requis;
		}
	}

	public function setCompétence_Requise_1($Compétence_Requise_1)
	{
		if (is_string($Compétence_Requise_1))
		{
			$this->_Compétence_Requise_1 = $Compétence_Requise_1;
		}
	}

	public function setCompétence_Requise_2($Compétence_Requise_2)
	{
		if (is_string($Compétence_Requise_2))
		{
			$this->_Compétence_Requise_2 = $Compétence_Requise_2;
		}
	}

	public function setCompétence_Requise_3($Compétence_Requise_3)
	{
		if (is_string($Compétence_Requise_3))
		{
			$this->_Compétence_Requise_3 = $Compétence_Requise_3;
		}
	}

	public function setTempsRechargement($TempsRechargement)
	{
	$TempsRechargement = (int) $TempsRechargement;

		if ($TempsRechargement > 0)
		{
			$this->_TempsRechargement = $TempsRechargement;
		}
	}

	public function setDurée($Durée)
	{
	$Durée = (int) $Durée;

		if ($Durée > 0)
		{
			$this->_Durée = $Durée;
		}
	}

	public function setCooldown($Cooldown)
	{
	$Cooldown = (int) $Cooldown;

		if ($Cooldown > 0)
		{
			$this->_Cooldown = $Cooldown;
		}
	}

	public function setBonus_Temporaire($Bonus_Temporaire)
	{
		if (is_string($Bonus_Temporaire))
		{
			$this->_Bonus_Temporaire = $Bonus_Temporaire;
		}
	}

	public function setType_Calcul_Temporaire($Type_Calcul_Temporaire)
	{
	$Type_Calcul_Temporaire = (int) $Type_Calcul_Temporaire;

		if ($Type_Calcul_Temporaire > 0)
		{
			$this->_Type_Calcul_Temporaire = $Type_Calcul_Temporaire;
		}
	}

	public function setValeur_Temporaire1($Valeur_Temporaire1)
	{
	$Valeur_Temporaire1 = (int) $Valeur_Temporaire1;

		if ($Valeur_Temporaire1 > 0)
		{
			$this->_Valeur_Temporaire1 = $Valeur_Temporaire1;
		}
	}

	public function setValeur_Temporaire2($Valeur_Temporaire2)
	{
	$Valeur_Temporaire2 = (int) $Valeur_Temporaire2;

		if ($Valeur_Temporaire2 > 0)
		{
			$this->_Valeur_Temporaire2 = $Valeur_Temporaire2;
		}
	}

	public function setStatistique_Temporaire1($Statistique_Temporaire1)
	{
		if (is_string($Statistique_Temporaire1))
		{
			$this->_Statistique_Temporaire1 = $Statistique_Temporaire1;
		}
	}

    public function setPersonnage(PersonnageTest $Personnage)
    {
        $this->_Personnage = $Personnage;
    }











	public function getDescriptionComplete(){

        $f=1;
        $g=1;
		echo $this->getElement('Description',$g);

		for($g=2;$g<=6;$g++){

			if(!is_null($this->getElement('Description', $g))){

				if($this->getElement('Type_calcul', $f) == 1){

                    ?><span class="voir"><span class="<?= $this->getImpact($f);?>"> <?= $this->getCalcul($f); ?>
				</span><span class="formule"><span class="<?= $this->getImpact($f);?>"><?php if($this->getElement('Pourcentage',$f)){echo '%';} ?></span>
				<?php
                    if($this->getCalculElement('b', $f)>1){
                        if($this->getElement('Pourcentage', $f)){
                            ?>(<span class="<?php echo $this->getImpact($f);?>">+1%</span>/<?php echo ''.$this->getCalculElement('b',$f);?><span class="<?php echo $this->getElement('Statistique',$f);?>"><?php echo $this->getElement('Statistique',$f); ?></span>)</span></span>
                            <?php
                        }else{
                            ?>(<span class="<?php echo $this->getImpact($f);?>">+1</span>/<?php echo ''.$this->getCalculElement('b',$f);?><span class="<?php echo $this->getElement('Statistique',$f);?>"><?php echo $this->getElement('Statistique',$f); ?></span></span></span>
                            <?php
                        }
                    }else{
                        if($this->getElement('Pourcentage',$f)){
                            ?>(<span class="<?php echo $this->getImpact($f);?>"><?php echo '+'.round(1/$this->getCalculElement('b',$f)).'%'; ?></span>/<?php echo $this->getElement('Statistique',$f); ?>)</span></span>
                            <?php
                        }else{
                            ?>(<span class="<?php echo $this->getImpact($f);?>"><?php echo '+'.round(1/$this->getCalculElement('b',$f)); ?></span>/<?php echo $this->getElement('Statistique',$f); ?>)</span></span>
                            <?php
                        }
                    }

                    if(!is_null($this->getElement('Amplitude',$f))){
                        ?>
                        <span class="<?php echo $this->getElement('Statistique',$f);?>">+<span id="NombreAmplitude<?php echo $f;?>" class=""><?php echo $this->getElement('Nombre_Amplitude',$f);?></span>D<span id="Amplitude<?php echo $f;?>" ><?php echo $this->getElement('Amplitude',$f);?></span></span>
                    <?php }
                    echo $this->getElement('Description',$g);

                    $f++;

				}
			}

		}

    }


    public function getElement($elementName, $index){
	    $retour = '_'.ucfirst($elementName).''.$index;
        return $this->$retour;
    }

    public function getCalculElement($secondPartElement,$index){
        $retour = '_Calcul'.$index.''.$secondPartElement;
        return $this->$retour;
    }

    public function getImpact($index){
		$impact = null;

        if($this->getElement('Pourcentage',$index)){$impact='';}
        elseif($this->getElement('Impact', $index)== "vie"){$impact=' points de vie';}
        elseif($this->getElement('Impact', $index)== "bouclier" ){$impact=' points de bouclier';}
        elseif($this->getElement('Impact', $index)!= "red" && $this->getCalculElement('a',$index)+(floor((float)$this->getStatistiqueValue($index)/$this->getCalculElement('Calcul','b')))>2){$impact=' '.$this->getElement('Impact', $index).'s';}
        elseif($this->getElement('Impact', $index) != "red"){$impact=' '.$this->getElement('Impact', $index);}
        elseif($this->getElement('Impact', $index) == "red" && !$this->getElement('Pourcentage', $index)){$impact=' points de dégâts';}

        return $impact;
    }

    public function getStatistique($index){
        if($this->getElement('Statistique',$index) == 'ressource')
        	return $this->getElement('Type_Ressource',$index);
        else
        	return $this->getElement('Statistique',$index);
    }

    public function getStatistiqueValue($index){
        switch ($this->getElement('Statistique',$index)) {
            case "force":
                return $this->_Personnage->getTotalForce();
                break;
            case "intelligence":
                return $this->_Personnage->getTotalIntelligence();
                break;
            case "agilite":
                return $this->_Personnage->getTotalAgilité();
                break;
            case "PDV":
                return $this->_Personnage->getTotalVitalité();
                break;
            case "niveau":
                return $this->_Niveau;
                break;
            case "ressource":
                return $this->_Personnage->getTotalRessource();
                break;
        }
	}

    public function getFormule($index){

    }

    public function getCalcul($index){
		if($this->getElement('Type_calcul', $index) == 1){
		    return ($this->getCalculElement('a',$index)+(floor((float)$this->getStatistiqueValue($index)/$this->getCalculElement('b',$index))));
		}
		elseif ($this->getElement('Type_calcul', $index) == 2){
			return $this->getCalculElement('a', $index)+(floor((float)$this->getStatistiqueValue($index)/$this->getCalculElement('b', $index))) + $this->getCalculElement('a', ($index+1))+(floor((float)$this->getStatistiqueValue(($index+1)/$this->getCalculElement('b',($index+1)))));
		}
	}

	public function getDescription($index) {
	    return $this->{'_Description'.$index};
    }


    private function getEffects()
    {
        $competenceEffectsManager = new CompetenceEffectManager($this->_db);

        $this->_Effects = $competenceEffectsManager->getEffectListForCompetence(intval($this->_Id_Competence), $this->_Personnage);
    }

    public function getNewDescriptionComplete(){

        echo $this->getElement('Description',1);
        foreach($this->_Effects as $effect){
            if($effect->getElement('typeCalcul') == 1) {
                $this->getDescriptionOfType1($effect);
            }
        }

    }

    public function getDescriptionOfType1(CompetenceEffectTest $effect){

        ?><span class="voir"><span class="<?= $effect->getImpact();?>"> <?= $effect->getCalcul(); ?>
            </span><span class="formule"><span class="<?= $effect->getImpact();?>"><?= $effect->getCalculElement('A'); if($effect->getElement('pourcentage')){echo '%';} ?></span>
        <?php
        if($effect->getCalculElement('B')>1){
            if($effect->getElement('pourcentage')){
                ?>(<span class="<?= $effect->getImpact();?>">+1%</span>/<?= ''.$effect->getCalculElement('B');?><span class="<?= $effect->getElement('statistique1');?>"><?= $effect->getElement('statistique1'); ?></span>)</span></span>
                <?php
            }else{
                ?>(<span class="<?= $effect->getImpact();?>">+1</span>/<?= ''.$effect->getCalculElement('B');?><span class="<?= $effect->getElement('statistique1');?>"><?= $effect->getElement('statistique1'); ?></span>)</span></span>
                <?php
            }
        }else{
            if($effect->getElement('pourcentage')){
                ?>(<span class="<?= $effect->getImpact();?>"><?= $effect->getCalculElement('A').'+'.round(1/$effect->getCalculElement('B')).'%'; ?></span>/<?= $effect->getElement('statistique1'); ?>)</span></span>
                <?php
            }else{
                ?>(<span class="<?= $effect->getImpact();?>"><?= $effect->getCalculElement('A').'+'.round(1/$effect->getCalculElement('B')); ?></span>/<?= $effect->getElement('statistique1'); ?>)</span></span>
                <?php
            }
        }

        if(!is_null($effect->getElement('amplitude'))){
            ?>
            <span class="<?= $effect->getElement('statistique1');?>">+<span id="NombreAmplitude<?= $effect->_effectOrder;?>" class=""><?= $effect->getElement('nombreAmplitude');?></span>D<span id="Amplitude<?= $effect->_effectOrder;?>" ><?= $effect->getElement('amplitude');?></span></span>
        <?php }
        echo $this->getElement('Description',($effect->_effectOrder + 1));
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

