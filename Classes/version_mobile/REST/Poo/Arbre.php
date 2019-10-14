<?php


class Arbre
{

    public $_specialitesLibelles = [];
    public $_specialites = [];
    public $_personnage;

    public function __construct(PersonnageTest $personnage,  $db)
    {
        $this->_db = $db;
        $this->_personnage = $personnage;
        $this->getSpecialites();
    }

    public function getSpecialites() {
        $competences = $this->_db->query('SELECT DISTINCT Spécialité
								FROM arbres
								WHERE ID_Personnage = '.$this->_personnage->_Id_Personnage.'
								ORDER BY Spécialité');									// Je récupère toutes les compétences de voleur, triées par Spécialité, puis Rang, puis Ordre.
        $this->_specialitesLibelles = $competences->fetchAll(PDO::FETCH_NUM);

        foreach ($this->_specialitesLibelles as $libelle) {
            $specialite = new Specialite($this->_personnage, $libelle[0], $this->_db);
            array_push($this->_specialites, $specialite);
        }

    }

    public function displayArbre()
    {
        ?>
        <?php
            foreach ($this->_specialites as $specialite) {
                $specialite->displaySpecialite();
            }
            ?>

        <?php
    }

}