<?php
class CompetenceEffectManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function add(CompetenceEffectTest $competence)
  {
    
  }

  public function delete(CompetenceEffectTest $competence)
  {
	  
  }

  public function get($id, PersonnageTest $Personnage)
  {
    $id = (int) $id;
	$q = $this->_db->query('SELECT ce.*, c.Niveau 
                            FROM competenceeffect ce, competence c
                            WHERE ce.idCompetenceEffect = '.$id.'
                            AND ce.idCompetence = c.Id_Competence');
    // $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new CompetenceEffectTest($donnees, $Personnage);
  }
  
  public function getEffectListForCompetence(int $idCompetence, PersonnageTest $Personnage)
  {
    $listCompetenceEffects = [];
    $competences = $this->_db->query('SELECT ce.*, c.Niveau 
                                        FROM competenceeffect ce, competence c
                                        WHERE ce.idCompetence = '.$idCompetence.'
                                        AND ce.idCompetence = c.Id_Competence
                                        ORDER BY effectOrder');									// Je récupère toutes les effets d'une competence, triées par ordre d'effet.


    while ($donnees = $competences->fetch(PDO::FETCH_ASSOC))
    {
    $listCompetenceEffects[] = new CompetenceEffectTest($donnees, $Personnage);
    }

    return $listCompetenceEffects;
  }

  public function update(CompetenceEffectTest $competence)
  {
	  
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}