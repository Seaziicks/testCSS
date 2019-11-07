<?php
class CompetenceManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(CompetenceTest $competence)
  {
    
  }

  public function delete(CompetenceTest $competence)
  {
	  
  }

  public function get($id, PersonnageTest $Personnage)
  {
    $id = (int) $id;
	$q = $this->_db->query('SELECT * FROM competence WHERE Id_Competence = '.$id);
    // $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new CompetenceTest($donnees, $Personnage, $this->_db);
  }
  
  public function getListForCharacter($id, PersonnageTest $Personnage)
  {
    $listCompetences = [];
	
	$competences = $this->_db->query('SELECT DISTINCT Spécialité, Rang, c.*
								FROM arbres a, competence c
								WHERE ID_Personnage = ' . $id . ' 
								AND c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
								Colonne6,Colonne7,Colonne8,Colonne9)
								ORDER BY Spécialité, Rang DESC');									// Je récupère toutes les compétences dd'un personnage, triées par Spécialité, puis Rang, puis Ordre.


    while ($donnees = $competences->fetch(PDO::FETCH_ASSOC))
    {
      $listCompetences[] = new CompetenceTest($donnees, $Personnage, $this->_db);
    }

    return $listCompetences;
  }

  public function update(CompetenceTest $competence)
  {
	  
  }

  public function getPreviousCompetenceUses(int $idCompetence, int $idPersonnage) {
      $competenceUses = $this->_db->query('SELECT DISTINCT *
								FROM competenceeffectuse
								WHERE idCompetence = ' . $idCompetence . '
								AND idPersonnage = ' . $idPersonnage . '
								ORDER BY turnUse, idCompetenceUse');									// Je récupère toutes les utilisations de compétence, ordonnées par ordre d'arrivée.

  }

    public function getPreviousCharacterUses(int $idCompetence, int $idPersonnage) {
        $competenceUses = $this->_db->query('SELECT DISTINCT *
								FROM competenceeffectuse
								WHERE idPersonnage = ' . $idPersonnage . '
								ORDER BY turnUse, idCompetenceUse');									// Je récupère toutes les utilisations de compétence, ordonnées par ordre d'arrivée.

    }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}