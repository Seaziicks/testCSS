<?php


class Specialite
{
    public $_rangsIndex = [4, 3, 2, 1, 0];
    /* @var $_rangs Rang[] */
    public $_rangs = [];
    /* @var $_personnage Personnage */
    public $_personnage;
    public $_libelle;
    /* @var $_db PDO */
    public $_db;

    public function __construct(Personnage $personnage, $libelle, $db)
    {
        $this->_db = $db;
        $this->_personnage = $personnage;
        $this->_libelle = $libelle;
        $this->getRangs();
    }

    public function getRangs()
    {
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
                <td colspan=100 style="text-align : center">
                    <div class="titre"> <?= $this->_libelle; ?> </div>
                </td>
                <?php
                foreach ($this->_rangs as $rang) {
                    $rang->displayRang();
                }
                ?>
            </table>
        </div>

        <?php
    }

    public function displaySimpleSpecialite()
    {
        ?>

        <div class="aligner">
            <table>
                <td colspan=100 style="text-align : center">
                    <div class="titre"> <?= $this->_libelle; ?> </div>
                </td>
                <?php
                foreach ($this->_rangs as $rang) {
                    $rang->displaySimpleRang();
                }
                ?>
            </table>
        </div>

        <?php
    }

    public function getSimpleSpecialiteAsHTML($characterID, $componentToDisplay = ''): string
    {
        $simpleSpecialiteAsHTML = "<div class=\"aligner\">
            <table>
                <td colspan=100 style=\"text-align : center\">
                    <div class=\"titre\">$this->_libelle</div>
                </td>";
                foreach ($this->_rangs as $rang) {
                    $simpleSpecialiteAsHTML .= $rang->getSimpleRangAsHTML($characterID, $componentToDisplay);
                }
            $simpleSpecialiteAsHTML .="</table>
        </div>";
        return $simpleSpecialiteAsHTML;
    }

}