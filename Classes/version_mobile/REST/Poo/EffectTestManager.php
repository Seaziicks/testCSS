<?php




class EffectTestManager
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(EffectTest $effects)
    {
        try {

            // set the PDO error mode to exception
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
            IDRecieiver,NumberOfUse,NumberOfTurn,NumberOfFight)
            VALUES (" . $effects->_EffectType . "," . $effects->_EffectValueMin . "," . $effects->_EffectValueMax . ",
            " . $effects->_ID_Competence . "," . $effects->_IDLauncher . "," . $effects->_IDRecieiver . ",
            " . $effects->_NumberOfUse . ", " . $effects->_NumberOfTurn . "," . $effects->_NumberOfFight . ")";
            // use exec() because no results are returned
            $this->_db->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->_db = null;
        $policy = [
            'EffectType' => $effects->EffectType,
            'EffectValueMin' => $effects->EffectValueMin,
            'EffectValueMax' => $effects->EffectValueMax,
            'IDCompetence' => $effects->ID_Competence,
            'IDLauncher' => $effects->IDLauncher,
            'IDRecieiver' => $effects->IDRecieiver,
            'NumberOfUse' => $effects->NumberOfUse,
            'NumberOfTurn' => $effects->NumberOfTurn,
            'NumberOfFight' => $effects->NumberOfFight,
        ];
    }

    public function get($id)
    {
        $id = (int)$id;
        $q = $this->_db->query('SELECT *
        FROM effectapplied
        WHERE IDEffectApplied = ' . $id . '');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new EffectTest($donnees);
    }

    public function getEffectListForLauncher(int $idPersonnage)
    {
        $listCompetenceEffects = [];
        $competences = $this->_db->query('SELECT * 
        FROM effectapplied
        WHERE IDLauncher = ' . $idPersonnage . '
        ORDER BY effectOrder');

        while ($donnees = $competences->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new EffectTest($donnees);
        }

        return $listEffects;
    }

    public function getEffectListForReciever(int $idPersonnage)
    {
        $listCompetenceEffects = [];
        $competences = $this->_db->query('SELECT * 
        FROM effectapplied
        WHERE IDReciever = ' . $idPersonnage . '
        ORDER BY effectOrder');

        while ($donnees = $competences->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new EffectTest($donnees);
        }

        return $listEffects;
    }

    public function delete(CompetenceEffectTest $competence)
    {

    }

    public function update(CompetenceEffectTest $competence)
    {

    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}