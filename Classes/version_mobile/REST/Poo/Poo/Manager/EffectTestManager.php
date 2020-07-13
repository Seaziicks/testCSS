<?php




class EffectTestManager
{
    /* @var $_db PDO */
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(Effect $effects)
    {
        $sql= '';
        try {

            // set the PDO error mode to exception
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
            IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
            VALUES (" . $effects->_EffectType . "," . $effects->_EffectValueMin . "," . $effects->_EffectValueMax . ",
            " . $effects->_ID_Competence . "," . $effects->_IDLauncher . "," . $effects->_IDReceiver . ",
            " . $effects->_NumberOfUse . ", " . $effects->_NumberOfTurn . "," . $effects->_NumberOfFight . ")";
            // use exec() because no results are returned
            $this->_db->exec($sql);
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        $this->_db = null;
        /*
        $policy = [
            'EffectType' => $effects->_EffectType,
            'EffectValueMin' => $effects->_EffectValueMin,
            'EffectValueMax' => $effects->_EffectValueMax,
            'IDCompetence' => $effects->_ID_Competence,
            'IDLauncher' => $effects->_IDLauncher,
            'IDReceiver' => $effects->_IDReceiver,
            'NumberOfUse' => $effects->_NumberOfUse,
            'NumberOfTurn' => $effects->_NumberOfTurn,
            'NumberOfFight' => $effects->_NumberOfFight,
        ];
        */
    }

    public function get($id)
    {
        $id = (int)$id;
        $q = $this->_db->query('SELECT *
        FROM effectapplied
        WHERE IDEffectApplied = ' . $id . '');
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Effect($donnees);
    }

    public function getEffectListForLauncher(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
        FROM effectapplied
        WHERE IDLauncher = ' . $idPersonnage . '');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
        FROM effectapplied
        WHERE IDReceiver = ' . $idPersonnage . '');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getBeforeCompetenceEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (22,26))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getAfterCompetenceEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (23,27))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getBeforeDamagingCompetenceEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (22,26,28,30,32))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getAfterDamagingCompetenceEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (23,27,29,31,33))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getBeforeHealingCompetenceEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (22,26,34))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getAfterHealingCompetenceEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (23,27,35))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getBeforeDamagingAttackEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (22,24,28,30,32))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getAfterDamagingAttackEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (23,25,29,31,33))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getBeforeHealingAttackEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (22,24,34))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getAfterHealingAttackEffectListForReceiver(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND (ActionType in (23,25,35))');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getTurnStartEffectList(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND ActionType = 36');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function getTurnEndEffectList(int $idPersonnage)
    {
        $listEffects = [];
        $effects = $this->_db->query('SELECT * 
                                    FROM effectapplied 
                                    WHERE IDReceiver = '.$idPersonnage.' 
                                    AND ActionType = 37');

        while ($donnees = $effects->fetch(PDO::FETCH_ASSOC)) {
            $listEffects[] = new Effect($donnees);
        }

        return $listEffects;
    }

    public function delete(Effect $competence)
    {

    }

    public function update(Effect $competence)
    {

    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}