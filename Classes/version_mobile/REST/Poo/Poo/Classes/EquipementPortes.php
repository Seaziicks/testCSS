<?php

class EquipementPortes
{

    public $_Id_Personnage,
        $_Coiffe,
        $_Epaules,
        $_Gants,
        $_Torse,
        $_Brassard,
        $_Ceinture,
        $_Jambières,
        $_Bottes,
        $_Amulette,
        $_Anneau1,
        $_Anneau2,
        $_Arme,
        $_Offhand;

    /* @var $_db PDO */
    private $_db;
    /* @var $_manager EquipementManager */
    private $_manager;

    public function __construct(array $donnees, $bd)
    {
        $this->_db = $bd;
        $this->_manager = new EquipementManager($this->_db);
        $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.
        $this->hydrate($donnees);
    }

    public function setId_Personnage($Id_Personnage)
    {
        $Id_Personnage = (int)$Id_Personnage;

        if ($Id_Personnage > 0) {
            $this->_Id_Personnage = $Id_Personnage;
        }
    }

    public function setCoiffe($ID_Coiffe)
    {
        $ID_Coiffe = (int)$ID_Coiffe;

        if ($ID_Coiffe > 0) {
            $equipement = $this->_manager->get($ID_Coiffe);
            $this->_Coiffe = $equipement;
        }
    }

    public function setEpaules($ID_Epaules)
    {
        $ID_Epaules = (int)$ID_Epaules;

        if ($ID_Epaules > 0) {
            $equipement = $this->_manager->get($ID_Epaules);
            $this->_Epaules = $equipement;
        }
    }

    public function setGants($ID_Gants)
    {
        $ID_Gants = (int)$ID_Gants;

        if ($ID_Gants > 0) {
            $equipement = $this->_manager->get($ID_Gants);
            $this->_Gants = $equipement;
        }
    }

    public function setTorse($ID_Torse)
    {
        $ID_Torse = (int)$ID_Torse;

        if ($ID_Torse > 0) {
            $equipement = $this->_manager->get($ID_Torse);
            $this->_Torse = $equipement;
        }
    }

    public function setBrassard($ID_Brassard)
    {
        $ID_Brassard = (int)$ID_Brassard;

        if ($ID_Brassard > 0) {
            $equipement = $this->_manager->get($ID_Brassard);
            $this->_Brassard = $equipement;
        }
    }

    public function setCeinture($ID_Ceinture)
    {
        $ID_Ceinture = (int)$ID_Ceinture;

        if ($ID_Ceinture > 0) {
            $equipement = $this->_manager->get($ID_Ceinture);
            $this->_Ceinture = $equipement;
        }
    }

    public function setJambières($ID_Jambières)
    {
        $ID_Jambières = (int)$ID_Jambières;

        if ($ID_Jambières > 0) {
            $equipement = $this->_manager->get($ID_Jambières);
            $this->_Jambières = $equipement;
        }
    }

    public function setBottes($ID_Bottes)
    {
        $ID_Bottes = (int)$ID_Bottes;

        if ($ID_Bottes > 0) {
            $equipement = $this->_manager->get($ID_Bottes);
            $this->_Bottes = $equipement;
        }
    }

    public function setAmulette($ID_Amulette)
    {
        $ID_Amulette = (int)$ID_Amulette;

        if ($ID_Amulette > 0) {
            $equipement = $this->_manager->get($ID_Amulette);
            $this->_Amulette = $equipement;
        }
    }

    public function setAnneau1($ID_Anneau1)
    {
        $ID_Anneau1 = (int)$ID_Anneau1;

        if ($ID_Anneau1 > 0) {
            $equipement = $this->_manager->get($ID_Anneau1);
            $this->_Anneau1 = $equipement;
        }
    }

    public function setAnneau2($ID_Anneau2)
    {
        $ID_Anneau2 = (int)$ID_Anneau2;

        if ($ID_Anneau2 > 0) {
            $equipement = $this->_manager->get($ID_Anneau2);
            $this->_Anneau2 = $equipement;
        }
    }

    public function setArme($ID_Arme)
    {
        $ID_Arme = (int)$ID_Arme;

        if ($ID_Arme > 0) {
            $equipement = $this->_manager->get($ID_Arme);
            $this->_Arme = $equipement;
        }
    }

    public function setOffhand($ID_Offhand)
    {
        $ID_Offhand = (int)$ID_Offhand;

        if ($ID_Offhand > 0) {
            $equipement = $this->_manager->get($ID_Offhand);
            $this->_Offhand = $equipement;
        }
    }

    /*
     * Specific function made to insert all data of getAllBonuses into an existing array.
     * For the existing array $reponse, the added result looks like :
     *          - $reponse['BonusForce'] = $value;
     *          - $reponse['BonusAgilite'] = $value;
     *          - $reponse['BonusIntelligence'] = $value;
     *          - $reponse['BonusVitalite'] = $value;
     *          - $reponse['BonusRessource'] = $value;
     *          - $reponse['BonusArmure'] = $value;
     *          - $reponse['BonusReussite'] = $value;
     */
    public function insertAllBonusesIntoArray($initialArray)
    {
        foreach ($this->getAllBonuses() as $key => $value) {
            $initialArray['' . $key] = $value;
        }
        return $initialArray;
    }


    /*
     * Return an array of all wanted stat.
     * The wanted stats must be an array of strings, available in :
     *          - Force
     *          - Agilite / Agilité
     *          - Intelligence
     *          - Vitalite / Vitalité
     *          - Ressource
     *          - Armure
     *          - Reussite / Réussite
     * @return Return an array of all wanted stats, as $bonuses['Bonus'.$stat] = $value;
     */
    public function getBonuses($wantedStats)
    {
        $bonuses = [];
        foreach ($wantedStats as $stat) {
            $bonuses['Bonus' . $stat] = $this->getBonus($stat);
        }
        return $bonuses;
    }

    /*
     * Get all bonuses from equipments.
     * Use the function getBonus to process all bonuses and return an array composed of :
     *          - BonusForce
     *          - BonusAgilite
     *          - BonusIntelligence
     *          - BonusVitalite
     *          - BonusRessource
     *          - BonusArmure
     *          - BonusReussite
     */
    public function getAllBonuses()
    {
        return $this->getBonuses(['Force', 'Agilite', 'Intelligence', 'Vitalite', 'Ressource', 'Armure', 'Reussite']);
    }

    /*
     * Permet de rechercher parmis tous les equipements les bonus pour le valeurs suivantes :
     *          - Agilite / Agilité
     *          - Force
     *          - Intelligence
     *          - Vitalite / Vitalité
     *          - Armure
     *          - Mana
     *          - Ressource
     *          - Reussite / Réussite
     */
    public function getBonus($stat)
    {
        $stat = ucfirst (strtolower($stat));
        switch ($stat) {
            case'Agilite':
                $stat = 'Agilité';
                break;
            case 'Reussite':
                $stat = 'Réussite';
                break;
            case 'Vitalite':
                $stat = 'Vitalité';

        }

        $bonus = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom de l'attribut correspondant : _Coiffe pour Coiffe, etc.
            $param = '_' . $equipement;

            // On vérifie que ce paramètre existe, et on gère le cas d'une arme à deux mains.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    // On fait en sorte de mette seulement la première lettre de la caracteristique en majuscule.
                    // $stat = ucfirst(strtolower($stat));
                    $bonus += $this->$param->getBonus($stat);
                }
            }
        }
        return $bonus;
    }

    public function getBonusForce()
    {
        $bonusForce = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusForce += $this->$param->getBonusForce();
                }
            }
        }
        return $bonusForce;
    }

    public function getBonusAgilite()
    {
        return $this->getBonusAgilité();
    }

    public function getBonusAgilité()
    {
        $bonusAgilité = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusAgilité += $this->$param->getBonusAgilité();
                }
            }
        }

        return $bonusAgilité;
    }

    public function getBonusIntelligence()
    {
        $bonusIntelligence = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusIntelligence += $this->$param->getBonusIntelligence();
                }
            }
        }

        return $bonusIntelligence;
    }

    public function getBonusVitalite()
    {
        return $this->getBonusVitalité();
    }

    public function getBonusVitalité()
    {
        $bonusVitalité = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusVitalité += $this->$param->getBonusVitalité();
                }
            }
        }

        return $bonusVitalité;
    }

    public function getBonusArmure()
    {
        $bonusArmure = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusArmure += $this->$param->getBonusArmure();
                }
            }
        }

        return $bonusArmure;
    }

    public function getBonusMana()
    {
        $bonusMana = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusMana += $this->$param->getBonusMana();
                }
            }
        }

        return $bonusMana;
    }

    public function getBonusRessource()
    {
        $bonusRessource = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusRessource += $this->$param->getBonusRessource();
                }
            }
        }

        return $bonusRessource;
    }

    public function getBonusReussite()
    {
        return $this->getBonusRéussite();
    }

    public function getBonusRéussite()
    {
        $bonusRéussite = 0;
        $equipements = ['Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambières', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand'];
        foreach ($equipements as $equipement) {
            // On récupère le nom du setter correspondant à l'attribut.
            $param = '_' . $equipement;

            // On appelle le setter.
            if (isset($this->$param)) {
                if ($param != "_Offhand" || ($param == "_Offhand" && !$this->_Arme->_NombreMain == 2)) {
                    $bonusRéussite += $this->$param->getBonusRéussite();
                }
            }
        }

        return $bonusRéussite;
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