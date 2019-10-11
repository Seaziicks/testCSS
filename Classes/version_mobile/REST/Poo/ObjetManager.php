<?php
class EquipementManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(CompetenceTest $perso)
  {
    
  }

  public function delete(Personnage $perso)
  {
	  
  }

  public function get($id)
  {
    $id = (int) $id;
	$q = $this->_db->query('SELECT * FROM Equipement WHERE Id_Personnage = '.$id);
    // $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new CompetenceTest($donnees);
  }

  public function getList()
  {
    $persos = [];

    $q = $this->_db->query('SELECT Id_Personnage, Libellé, Niveau, PA, PA_Actuel, PM, PM_Actuel, Force, Agilité, Intelligence, Vitalité, PDV_Actuel, Ressource, Ressource_Actuelle, Type_Ressource, Réussite, Charisme, Marchandage, Intimidation, Chance, Inventaire, Image, Ordre_Colorimetrique FROM personnage ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $persos[] = new CompetenceTest($donnees);
    }

    return $persos;
  }
  
  public function getListForCharacter($id)
  {
    $listCompetences = [];
	
	$competences = $bdd->query('SELECT DISTINCT Spécialité, Rang, c.*
								FROM arbres a, competence c
								WHERE ID_Personnage = ' . $id . ' 
								AND c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
								Colonne6,Colonne7,Colonne8,Colonne9)
								ORDER BY Spécialité, Rang DESC');									// Je récupère toutes les compétences dd'un personnage, triées par Spécialité, puis Rang, puis Ordre.

    $q = $this->_db->query('SELECT Id_Personnage, Libellé, Niveau, PA, PA_Actuel, PM, PM_Actuel, Force, Agilité, Intelligence, Vitalité, PDV_Actuel, Ressource, Ressource_Actuelle, Type_Ressource, Réussite, Charisme, Marchandage, Intimidation, Chance, Inventaire, Image, Ordre_Colorimetrique FROM personnage ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $listCompetences[] = new CompetenceTest($donnees);
    }

    return $listCompetences;
  }

  public function update(Personnage $perso)
  {
	  
	  
	$q = $this->_db->prepare('UPDATE personnage SET Niveau = :Niveau, PA = :PA, PM = :PM, Force = :Force, Agilité = :Agilité, Intelligence = :Intelligence, Vitalité = :Vitalité, Ressource = :Ressource, Réussite = :Réussite, Charisme = :Charisme, Marchandage = :Marchandage, Intimidation = :Intimidation, Chance = :Chance WHERE id = :id');
    $q = $this->_db->prepare('UPDATE personnages SET forcePerso = :forcePerso, degats = :degats, niveau = :niveau, experience = :experience WHERE id = :id');

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