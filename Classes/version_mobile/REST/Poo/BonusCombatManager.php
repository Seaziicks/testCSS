<?php

class BonusCombatManager
{
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function get($id)
    {
        $id = (int) $id;
        $q = $this->_db->query('SELECT * FROM personnage WHERE Id_Personnage = '.$id);
        // $q = $this->_db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages WHERE id = '.$id);
        $effects = $this->_db->query('SELECT effect_type.Name, effectapplied.*
					from effectapplied, effect_type
					where IDRecieiver='.$id.'
					and EffectType = ID_Effect');

        $reponse['DegatsPhysiqueFlat'] = 0;
        $reponse['DegatsPhysiquePourcentage'] = 0;
        $reponse['DegatsMagiqueFlat'] = 0;
        $reponse['DegatsMagiquePourcentage'] = 0;
        $reponse['Force'] = 0;
        $reponse['Agilite'] = 0;
        $reponse['Intelligence'] = 0;
        $reponse['Vitalite'] = 0;
        $reponse['PA'] = 0;
        $reponse['PM'] = 0;
        $reponse['SortFlat'] = 0;
        $reponse['SortPourcentage'] = 0;
        $reponse['ArmureFlat'] = 0;
        $reponse['ArmurePourcentage'] = 0;
        $reponse['ArmureMagiqueFlat'] = 0;
        $reponse['ArmureMagiquePourcentage'] = 0;
        $reponse['DegatsFlat'] = 0;
        $reponse['DegatsPourcentage'] = 0;
        $reponse['SoinFlat'] = 0;
        $reponse['SoinPourcentage'] = 0;
        $reponse['Portee'] = 0;
        $reponse['Degat'] = 0;
        $reponse['Soin'] = 0;
        $reponse['Shield'] = 0;

        while($effectWitoutCamelCase=$effects->fetch(PDO::FETCH_ASSOC)) {
            $reponse[''.$effectWitoutCamelCase['Name'].''] += floatval($effectWitoutCamelCase['EffectValueMin']);
        }
        $effects->closeCursor();
        return new BonusCombat($reponse);
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

}