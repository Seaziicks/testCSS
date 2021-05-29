<?php

class CompetenceEffectManager
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(CompetenceEffect $competence)
    {

    }

    public function delete(CompetenceEffect $competence)
    {

    }

    public function get($id, Personnage $Personnage)
    {
        $id = (int)$id;
        $q = $this->_db->query('SELECT ce.*, c.Niveau 
                            FROM competenceeffect ce, competence c
                            WHERE ce.idCompetenceEffect = ' . $id . '
                            AND ce.idCompetence = c.Id_Competence');
        // $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = '.$id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new CompetenceEffect($donnees, $Personnage);
    }

    public function getEffectListForCompetence(int $idCompetence, Personnage $Personnage)
    {
        $listCompetenceEffects = [];
        $competences = $this->_db->query('SELECT ce.*, c.Niveau 
                                        FROM competenceeffect ce, competence c
                                        WHERE ce.idCompetence = ' . $idCompetence . '
                                        AND ce.idCompetence = c.Id_Competence
                                        AND ce.niveauRequis = 1
                                        ORDER BY effectOrder');                                    // Je récupère toutes les effets d'une competence, triées par ordre d'effet.


        while ($donnees = $competences->fetch(PDO::FETCH_ASSOC)) {
            $listCompetenceEffects[] = new CompetenceEffect($donnees, $Personnage);
        }

        return $listCompetenceEffects;
    }

    public function getLeveledEffectListForCompetence(int $idCompetence, Personnage $Personnage)
    {
        $listCompetenceLeveledEffects = [];
        $LeveledEffects = $this->_db->query('SELECT ce.*, c.Niveau 
                                        FROM competenceeffect ce, competence c
                                        WHERE ce.idCompetence = ' . $idCompetence . '
                                        AND ce.idCompetence = c.Id_Competence
                                        AND ce.niveauRequis > 1
                                        ORDER BY ce.niveauRequis, effectOrder');

        while ($donnees = $LeveledEffects->fetch(PDO::FETCH_ASSOC)) {
            $listCompetenceLeveledEffects[] = new CompetenceEffect($donnees, $Personnage);
        }

        return $listCompetenceLeveledEffects;
    }

    public function update(CompetenceEffect $competence)
    {

    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}