<?php

class PersonnageManager
{
    /* @var $_db PDO */
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(PersonnageTest $perso)
    {
        $q = $this->_db->prepare('INSERT INTO personnage(Libellé, Niveau, PA, PA_Actuel, PM, PM_Actuel, Force, Agilité, Intelligence, Vitalité, PDV_Actuel, Ressource, Ressource_Actuelle, Type_Ressource, Réussite, Charisme, Marchandage, Intimidation, Chance, Inventaire, Image, Ordre_Colorimetrique) VALUES(:Libellé, :Niveau, :PA, :PA_Actuel, :PM, :PM_Actuel, :Force, :Agilité, :Intelligence, :Vitalité, :PDV_Actuel, :Ressource, :Ressource_Actuelle, :Type_Ressource, :Réussite, :Charisme, :Charisme, :Marchandage, :Intimidation, :Chance, :Inventaire, :Image, :Ordre_Colorimetrique)');

        $q->bindValue(':Libellé', $perso->_Libellé);
        $q->bindValue(':Niveau', $perso->_Niveau, PDO::PARAM_INT);
        $q->bindValue(':PA', $perso->_PA, PDO::PARAM_INT);
        $q->bindValue(':PA_Actuel', $perso->_PA_Actuel, PDO::PARAM_INT);
        $q->bindValue(':PM', $perso->_PM, PDO::PARAM_INT);
        $q->bindValue(':PM_Actuel', $perso->_PM_Actuel, PDO::PARAM_INT);
        $q->bindValue(':Force', $perso->_Force, PDO::PARAM_INT);
        $q->bindValue(':Agilité', $perso->_Agilité, PDO::PARAM_INT);
        $q->bindValue(':Intelligence', $perso->_Intelligence, PDO::PARAM_INT);
        $q->bindValue(':Vitalité', $perso->_Vitalité, PDO::PARAM_INT);
        $q->bindValue(':PDV_Actuel', $perso->_PDV_Actuel, PDO::PARAM_INT);
        $q->bindValue(':Ressource', $perso->_Ressource, PDO::PARAM_INT);
        $q->bindValue(':Ressource_Actuelle', $perso->_Ressource_Actuelle, PDO::PARAM_INT);
        $q->bindValue(':Type_Ressource', $perso->_Type_Ressource);
        $q->bindValue(':Réussite', $perso->_Réussite, PDO::PARAM_INT);
        $q->bindValue(':Charisme', $perso->_Charisme, PDO::PARAM_INT);
        $q->bindValue(':Marchandage', $perso->_Marchandage, PDO::PARAM_INT);
        $q->bindValue(':Intimidation', $perso->_Intimidation, PDO::PARAM_INT);
        $q->bindValue(':Chance', $perso->_Chance, PDO::PARAM_INT);
        $q->bindValue(':Inventaire', $perso->_Inventaire);
        $q->bindValue(':Image', $perso->_Image);
        $q->bindValue(':Ordre_Colorimetrique', $perso->_Ordre_Colorimetrique, PDO::PARAM_INT);


        $q->execute();
    }

    public function delete(PersonnageTest $perso)
    {
        $this->_db->exec('DELETE FROM personnage WHERE Id_Personnage = ' . $perso->_Id_Personnage);
    }

    public function get($id)
    {
        $id = (int)$id;
        $q = $this->_db->query('SELECT * FROM personnage WHERE Id_Personnage = ' . $id);
        // $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        $EquipementManager = new EquipementPortesManager($this->_db);
        $panoplie = $EquipementManager->getListForCharacter($id);

        $donnees['Bonus_Force'] = $panoplie->getBonus('Force');
        $donnees['Bonus_Agilité'] = $panoplie->getBonus('Agilité');
        $donnees['Bonus_Intelligence'] = $panoplie->getBonusIntelligence();
        $donnees['Bonus_Vitalité'] = $panoplie->getBonusVitalité();
        $donnees['Bonus_Ressource'] = $panoplie->getBonusRessource();
        $donnees['Bonus_Réussite'] = $panoplie->getBonusRéussite();
        $donnees['Bonus_Armure'] = $panoplie->getBonusArmure();

        return new PersonnageTest($donnees);
    }

    public function getList()
    {
        $persos = [];

        $q = $this->_db->query('SELECT * FROM personnage ORDER BY Libellé');

        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $persos[] = new PersonnageTest($donnees);
        }

        return $persos;
    }

    public function update(PersonnageTest $perso)
    {


        $q = $this->_db->prepare('UPDATE personnage SET Niveau = :Niveau, PA = :PA, PM = :PM, Force = :Force, Agilité = :Agilité, Intelligence = :Intelligence, Vitalité = :Vitalité, Ressource = :Ressource, Réussite = :Réussite, Charisme = :Charisme, Marchandage = :Marchandage, Intimidation = :Intimidation, Chance = :Chance WHERE Id_Personnage = :id');

        $q->bindValue(':Niveau', $perso->_Niveau, PDO::PARAM_INT);
        $q->bindValue(':PA', $perso->_PA, PDO::PARAM_INT);
        $q->bindValue(':PM', $perso->_PM, PDO::PARAM_INT);
        $q->bindValue(':Force', $perso->_Force, PDO::PARAM_INT);
        $q->bindValue(':Agilité', $perso->_Agilité, PDO::PARAM_INT);
        $q->bindValue(':Intelligence', $perso->_Intelligence, PDO::PARAM_INT);
        $q->bindValue(':Vitalité', $perso->_Vitalité, PDO::PARAM_INT);
        $q->bindValue(':Ressource', $perso->_Ressource, PDO::PARAM_INT);
        $q->bindValue(':Réussite', $perso->_Réussite, PDO::PARAM_INT);
        $q->bindValue(':Charisme', $perso->_Charisme, PDO::PARAM_INT);
        $q->bindValue(':Marchandage', $perso->_Marchandage, PDO::PARAM_INT);
        $q->bindValue(':Intimidation', $perso->_Intimidation, PDO::PARAM_INT);
        $q->bindValue(':Chance', $perso->_Chance, PDO::PARAM_INT);
        $q->bindValue(':id', $perso->_Id_Personnage, PDO::PARAM_INT);

        $q->execute();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}