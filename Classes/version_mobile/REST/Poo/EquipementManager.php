<?php

class EquipementManager
{
    /* @var $_db PDO */
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(Equipement $perso)
    {

    }

    public function delete(Equipement $perso)
    {

    }

    public function get($id)
    {
        $id = (int)$id;
        $q = $this->_db->query('SELECT * FROM equipement WHERE Id_Objet = ' . $id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Equipement($donnees);
    }


    public function getListForCharacter($id)
    {
        $listEquipements = [];

        $equipements = $this->_db->query('SELECT o.*
								FROM equiper AS e, personnage AS p, equipement as o 
								WHERE e.Id_Personnage = p.Id_Personnage
								AND p.Id_Personnage = ' . $id . '
								and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambières,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
								');                                    // Je récupère tous les équipements d'un personnage.

        while ($donnees = $equipements->fetch(PDO::FETCH_ASSOC)) {
            $listEquipements[] = new Equipement($donnees);
        }

        return $listEquipements;
    }

    public function update(Equipement $perso)
    {
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}