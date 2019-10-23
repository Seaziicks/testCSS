<?php
class PersonnageManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(Personnage $perso)
  {
    $q = $this->_db->prepare('INSERT INTO personnage(Libellé, Niveau, PA, PA_Actuel, PM, PM_Actuel, Force, Agilité, Intelligence, Vitalité, PDV_Actuel, Ressource, Ressource_Actuelle, Type_Ressource, Réussite, Charisme, Marchandage, Intimidation, Chance, Inventaire, Image, Ordre_Colorimetrique) VALUES(:Libellé, :Niveau, :PA, :PA_Actuel, :PM, :PM_Actuel, :Force, :Agilité, :Intelligence, :Vitalité, :PDV_Actuel, :Ressource, :Ressource_Actuelle, :Type_Ressource, :Réussite, :Charisme, :Charisme, :Marchandage, :Intimidation, :Chance, :Inventaire, :Image, :Ordre_Colorimetrique)');

    $q->bindValue(':Libellé', $perso->Libellé());
    $q->bindValue(':Niveau', $perso->Niveau(), PDO::PARAM_INT);
    $q->bindValue(':PA', $perso->PA(), PDO::PARAM_INT);
    $q->bindValue(':PA_Actuel', $perso->PA_Actuel(), PDO::PARAM_INT);
	$q->bindValue(':PM', $perso->PM(), PDO::PARAM_INT);
	$q->bindValue(':PM_Actuel', $perso->PM_Actuel(), PDO::PARAM_INT);
	$q->bindValue(':Force', $perso->Force(), PDO::PARAM_INT);
	$q->bindValue(':Agilité', $perso->Agilité(), PDO::PARAM_INT);
	$q->bindValue(':Intelligence', $perso->Intelligence(), PDO::PARAM_INT);
	$q->bindValue(':Vitalité', $perso->Vitalité(), PDO::PARAM_INT);
	$q->bindValue(':PDV_Actuel', $perso->PDV_Actuel(), PDO::PARAM_INT);
	$q->bindValue(':Ressource', $perso->Ressource(), PDO::PARAM_INT);
	$q->bindValue(':Ressource_Actuelle', $perso->Ressource_Actuelle(), PDO::PARAM_INT);
	$q->bindValue(':Type_Ressource', $perso->Type_Ressource());
	$q->bindValue(':Réussite', $perso->Réussite(), PDO::PARAM_INT);
	$q->bindValue(':Charisme', $perso->Charisme(), PDO::PARAM_INT);
	$q->bindValue(':Marchandage', $perso->Marchandage(), PDO::PARAM_INT);
	$q->bindValue(':Intimidation', $perso->Intimidation(), PDO::PARAM_INT);
	$q->bindValue(':Chance', $perso->Chance(), PDO::PARAM_INT);
	$q->bindValue(':Inventaire', $perso->Inventaire());
	$q->bindValue(':Image', $perso->Image());
	$q->bindValue(':Ordre_Colorimetrique', $perso->Ordre_Colorimetrique(), PDO::PARAM_INT);
	

    $q->execute();
  }

  public function delete(Personnage $perso)
  {
    $this->_db->exec('DELETE FROM personnage WHERE Id_Personnage = '.$perso->id());
  }

  public function get($id)
  {
    $id = (int) $id;
	$q = $this->_db->query('SELECT * FROM personnage WHERE Id_Personnage = '.$id);
    // $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    $EquipementManager = new EquipementPortesManager($this->_db);
    $panoplie = $EquipementManager->getListForCharacter($id);

    $donnees['Bonus_Force'] = $panoplie-> getBonus('Force');
    $donnees['Bonus_Agilité'] = $panoplie-> getBonus('Agilité');
    $donnees['Bonus_Intelligence'] = $panoplie-> getBonusIntelligence();
    $donnees['Bonus_Vitalité'] = $panoplie-> getBonusVitalité();
    $donnees['Bonus_Ressource'] = $panoplie-> getBonusRessource();
    $donnees['Bonus_Réussite'] =$panoplie->  getBonusRéussite();
    $donnees['Bonus_Armure'] =$panoplie->  getBonusArmure();

    return new PersonnageTest($donnees);
  }

  public function getList()
  {
    $persos = [];

    $q = $this->_db->query('SELECT Id_Personnage, Libellé, Niveau, PA, PA_Actuel, PM, PM_Actuel, Force, Agilité, Intelligence, Vitalité, PDV_Actuel, Ressource, Ressource_Actuelle, Type_Ressource, Réussite, Charisme, Marchandage, Intimidation, Chance, Inventaire, Image, Ordre_Colorimetrique FROM personnage ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $persos[] = new PersonnageTest($donnees);
    }

    return $persos;
  }

  public function update(Personnage $perso)
  {
	  
	  
	$q = $this->_db->prepare('UPDATE personnage SET Niveau = :Niveau, PA = :PA, PM = :PM, Force = :Force, Agilité = :Agilité, Intelligence = :Intelligence, Vitalité = :Vitalité, Ressource = :Ressource, Réussite = :Réussite, Charisme = :Charisme, Marchandage = :Marchandage, Intimidation = :Intimidation, Chance = :Chance WHERE Id_Personnage = :id');

    $q->bindValue(':Niveau', $perso->Niveau(), PDO::PARAM_INT);
	$q->bindValue(':PA', $perso->PA(), PDO::PARAM_INT);
	$q->bindValue(':PM', $perso->PM(), PDO::PARAM_INT);
	$q->bindValue(':Force', $perso->Force(), PDO::PARAM_INT);
	$q->bindValue(':Agilité', $perso->Agilité(), PDO::PARAM_INT);
	$q->bindValue(':Intelligence', $perso->Intelligence(), PDO::PARAM_INT);
	$q->bindValue(':Vitalité', $perso->Vitalité(), PDO::PARAM_INT);
	$q->bindValue(':Ressource', $perso->Ressource(), PDO::PARAM_INT);
	$q->bindValue(':Réussite', $perso->Réussite(), PDO::PARAM_INT);
	$q->bindValue(':Charisme', $perso->Charisme(), PDO::PARAM_INT);
	$q->bindValue(':Marchandage', $perso->Marchandage(), PDO::PARAM_INT);
	$q->bindValue(':Intimidation', $perso->Intimidation(), PDO::PARAM_INT);
	$q->bindValue(':Chance', $perso->Chance(), PDO::PARAM_INT);
    $q->bindValue(':id', $perso->Id_Personnage(), PDO::PARAM_INT);

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}