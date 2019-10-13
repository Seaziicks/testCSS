<?php


class Specialite
{
    public $_rangsIndex = [4,3,2,1,0];
    public $_rangs = [];
    public $_personnage;
    public $_libelle;

    public function __construct(PersonnageTest $personnage, $libelle,  $db)
    {
        $this->_db = $db;
        $this->_personnage = $personnage;
        $this->_libelle = $libelle;
        $this->getRangs();
    }

    public function getRangs() {
        foreach ($this->_rangsIndex as $rangIndex) {
            $rang = new Rang($this->_personnage, $this->_libelle, $rangIndex, $this->_db);
            array_push($this->_rangs, $rang);
        }
    }

    public function displaySpecialite()
    {
        ?>

        <div class="aligner">
        <table>
		<td colspan=100 style="text-align : center"> <div class="titre"> <?= $this->_libelle; ?> </div> </td>
        <?php
        foreach ($this->_rangs as $rang) {
            $rang->displayRang();
        }
        ?>
        </table>
        </div>

        <?php
    }

}