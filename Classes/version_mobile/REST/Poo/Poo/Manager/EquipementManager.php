<?php

class EquipementManager
{
    /* @var $_db PDO */
    private $_db; // Instance de PDO

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function add(Equipement $perso)
    {

    }

    public function delete(Equipement $perso)
    {

    }

    public function get($id) : Equipement
    {
        $id = (int)$id;
        $q = $this->_db->query('SELECT * FROM equipement WHERE Id_Objet = ' . $id);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Equipement($donnees);
    }


    public function getListForCharacter($id)
    {
        $listEquipements = [];

        $equipements = $this->_db->query('SELECT o.*
								FROM equiper AS e, personnage AS p, equipement as o 
								WHERE e.Id_Personnage = p.Id_Personnage
								AND p.Id_Personnage = ' . $id . '
								and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambieres,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
								');                                    // Je récupère tous les équipements d'un personnage.

        while ($donnees = $equipements->fetch(PDO::FETCH_ASSOC)) {
            $listEquipements[] = new Equipement($donnees);
        }

        return $listEquipements;
    }

    public function update(Equipement $perso)
    {
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }

    public function getEquipementAsHTML($id, $personnageID, $personnageLevel)
    {
        $fetchedObject = $this->get($id);
        if($fetchedObject->_Emplacement =="Bijou") $fetchedObject->_Emplacement = $fetchedObject->_Type;
        $returnedHTMLItem = "<div class=\"touch-tip\" style=\"display:block\">

                                <div class=\"diablo-fans-tooltip item-tooltip\">
                                    <div class=\"db-tooltip\">
                                        <ul class=\"db-summary\">
                                            <li class=\"db-title rarity-$fetchedObject->_Rareté db-header\">
                                                <span>$fetchedObject->_Nom</span>
                                            </li>
                                        </ul>
                                        <div class=\"db-image rarity-$fetchedObject->_Rareté \">
                                            <img src=\"images/items/$fetchedObject->_Image \"
                                                 alt=\"Image de l'objet\">
                                        </div>
                                        <div class=\"db-description\" style=\"width : 100%;\">
                                            <small class=\"rarity-$fetchedObject->_Rareté \">$fetchedObject->_Type";
                                                if ($fetchedObject->_Emplacement == 'Arme')
                                                    $returnedHTMLItem .= " à $fetchedObject->_NombreMain mains";

                                                $returnedHTMLItem .= "<span
                                                        class=\"niveauObj\"";
                                                if ($fetchedObject->_Niveau > $personnageLevel) {
                                                    $returnedHTMLItem .= "style=\"color : red;\"";
                                                } $returnedHTMLItem .= "> Niveau :  $fetchedObject->_Niveau</span></small>
                                            <ul class=\"db-summary\">
                                                <li class=\"primary-stat\">";
                                                    if ($fetchedObject->_Statistique_Principale == 'Armure'
                                                        || $fetchedObject->_Statistique_Principale == 'Armor') {
                                                        $returnedHTMLItem .="<span>$fetchedObject->_Val</span>
                                                        <small>$fetchedObject->_Statistique_Principale</small>";
                                                        } else {
                                                        $returnedHTMLItem .= "<span>$fetchedObject->_Val - $fetchedObject->_Val2</span>
                                                        <small>$fetchedObject->_Statistique_Principale</small>";
                                                    }
                                                $returnedHTMLItem .= "</li>";

                                                if (!isset($fetchedObject->_NombreMain) or $fetchedObject->_NombreMain == 1 or $fetchedObject->_Emplacement != 'Offhand') {
                                                    if ($fetchedObject->_Rareté > 1) {
                                                        $returnedHTMLItem .= "<li class=\"primary-stat\">Primary Stats</li>

                                                        <li class=\"grouped-stats\">
                                                            <ul>
                                                                <li class=\"stat \">";
                                                                    if ($fetchedObject->_PropriétéMagique1 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique1 == 'Critical Hit Damages Increased by') {
                                                                        $returnedHTMLItem .= "$fetchedObject->_PropriétéMagique1
                                                                        <span class=\"value\">
                                                                        + $fetchedObject->_Valeur1%</span>";
                                                                    } else {
                                                                        $returnedHTMLItem .= "<span class=\"value\">
                                                                        + $fetchedObject->_Valeur1</span> $fetchedObject->_PropriétéMagique1";
                                                                    }
                                                                $returnedHTMLItem .= "</li>
                                                                <li class=\"stat \">";
                                                                    if (isset ($fetchedObject->_PropriétéMagique2)) {
                                                                        if ($fetchedObject->_PropriétéMagique2 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique2 == 'Critical Hit Damages Increased by') {
                                                                            $returnedHTMLItem .= "$fetchedObject->_PropriétéMagique2
                                                                            <span class=\"value\">
                                                                            + $fetchedObject->_Valeur2%</span>";
                                                                        } else {
                                                                            $returnedHTMLItem .= "<span class=\"value\">
                                                                            + $fetchedObject->_Valeur2</span>$fetchedObject->_PropriétéMagique2";
                                                                        }
                                                                    }
                                                                $returnedHTMLItem .= "</li>
                                                                <li class=\"stat \">";
                                                                    if ($fetchedObject->_Rareté > 3){

                                                                    if ($fetchedObject->_PropriétéMagique3 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique3 == 'Critical Hit Damages Increased by') {
                                                                        $returnedHTMLItem .= "$fetchedObject->_PropriétéMagique3
                                                                        <span class=\"value\">
                                                                        + $fetchedObject->_Valeur3%</span>";
                                                                    } else {
                                                                        $returnedHTMLItem .= "<span class=\"value\">
                                                                        + $fetchedObject->_Valeur3</span>$fetchedObject->_PropriétéMagique3";
                                                                    }
                                                                    $returnedHTMLItem .= "</li>
                                                                <li class=\"stat \">";
                                                                    if (isset($fetchedObject->_PropriétéMagique4)) {
                                                                        if ($fetchedObject->_PropriétéMagique4 == 'Sockets') {
                                                                            $returnedHTMLItem .= "<span>Sockets (<span
                                                                                    class=\"value\"> $fetchedObject->_Valeur4</span>)
                                                                            </span>";
                                                                        } elseif ($fetchedObject->_PropriétéMagique4 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique4 == 'Critical Hit Damages Increased by') {
                                                                            $returnedHTMLItem .= "$fetchedObject->_PropriétéMagique4
                                                                            <span class=\"value\">
                                                                            + $fetchedObject->_Valeur4%</span>";
                                                                        } else {
                                                                            $returnedHTMLItem .= "<span class=\"value\">
                                                                            + $fetchedObject->_Valeur4</span> $fetchedObject->_PropriétéMagique4";
                                                                        }
                                                                    }
                                                                    $returnedHTMLItem .= "</li>";

                                                                if ($fetchedObject->_Rareté == 5) {
                                                                    $returnedHTMLItem .= "<li class=\"primary-stat\">Secondary Stats</li>
                                                                    <li class=\"passive \">
                                                                         $fetchedObject->_Pouvoir_Spécial1
                                                                        <span class=\"value\"> $fetchedObject->_Valeur_Pouvoir_Special</span> $fetchedObject->_Pouvoir_Spécial2
                                                                    </li>";
                                                                }
                                                                }

                                                        $returnedHTMLItem .= "</ul>
                                                        </li>";
                                                        if ($fetchedObject->_Rareté == 6) {

                                                            // echo $fetchedObject->_Id_Panoplie;
                                                            $set = $this->_db->query('SELECT p.*
																	FROM `panoplie` AS p
																	WHERE p.Id_Panoplie=' . $fetchedObject->_Id_Panoplie . '
																	');
                                                            $panoplie = $set->fetch();

                                                            $nombre = $this->_db->query('SELECT count(*)
																	FROM equiper AS e, personnage AS p, equipement as o 
																	WHERE e.Id_Personnage = p.Id_Personnage
																	AND p.Id_Personnage = ' . $personnageID. '
																	AND o.id_panoplie=' . $fetchedObject->_Id_Panoplie . '
																	and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambieres,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
																	');
                                                            $nb = $nombre->fetch();


                                                            $nomsobjets = $this->_db->query('SELECT o.Nom
																	FROM panoplie AS p, equipement as o 
																	WHERE o.Id_Objet in(p.Objet1,p.Objet2,p.Objet3,p.Objet4,p.Objet5,p.Objet6)
                                                                    AND p.Id_Panoplie = ' . $fetchedObject->_Id_Panoplie . '
																	');
                                                            $nomobjet = $nomsobjets->fetchAll(PDO::FETCH_ASSOC);
                                                            $returnedHTMLItem .= "<li class=\"grouped-stats\">
                                                                <ul>
                                                                    <li class=\"set\">".$panoplie['Nom']."</li>";


                                                                        foreach ($nomobjet as $nom) {
                                                                            $returnedHTMLItem .= "</li>
                                                                    <li class=\"set set-item"; if ($fetchedObject->_Nom == $nom['Nom']) {
                                                                                $returnedHTMLItem .= " item-name";
                                                                    } $returnedHTMLItem .= "\">
                                                                         ".$nom['Nom']."
                                                                    </li>
                                                                    <li class=\"set\">";
                                                                        }

                                                            $returnedHTMLItem .= "<li class=\"set\">
                                                                                (<span class=\"set-num\">2</span>) Set: <span
                                                                                class=\""; if ($nb['count(*)'] > 1) {
                                                                $returnedHTMLItem .= "value ".$nb['count(*)'];
                                                                                } $returnedHTMLItem .= "\">". $panoplie['Effet1']." </span>
                                                                    </li>
                                                                    <li class=\"set\">
                                                                        (<span class=\"set-num\">4</span>) Set: <span
                                                                                class=\""; if ($nb['count(*)'] > 3) {
                                                                $returnedHTMLItem .= "value";
                                                                                } $returnedHTMLItem .= "\">". $panoplie['Effet2']." </span>
                                                                    </li>
                                                                    <li class=\"set\">
                                                                        (<span class=\"set-num\">6</span>) Set: <span
                                                                                class=\""; if ($nb['count(*)'] > 5) {
                                                                $returnedHTMLItem .= "value";
                                                                                } $returnedHTMLItem .= "\">". $panoplie['Effet3']." </span>
                                                                    </li>
                                                                </ul>
                                                            </li>";
                                                            $nombre->closeCursor();
                                                            $set->closeCursor();
                                                            $nomsobjets->closeCursor();
                                                        }
                                                    }
                                                }
                                        $returnedHTMLItem .= "</ul>
                                        </div>
                                    </div>
                                </div>
                            </div>";
        return $returnedHTMLItem;
    }
}