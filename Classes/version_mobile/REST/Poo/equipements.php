<div class="Equipement">

    <div class="mobile-item-wrapper d3-class-necromancer">
        <ul class="mobile-item-selection">

            <?php
            include('BDD.php');

            $objectType = array('Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambieres', 'Bottes', 'Amulette', 'Anneau1', 'Anneau2', 'Arme', 'Offhand');


            for ($j = 0; $j < 13; $j++) {
                $currentObjectType = $objectType[$j];
                $currentObjectIDQuery = $bdd->query('SELECT ' . $currentObjectType . '
									FROM equiper AS e, personnage AS p
									WHERE e.Id_Personnage = p.Id_Personnage
									AND p.Id_Personnage = ' . $personnage->_Id_Personnage . '
								');

                $currentObjectID = $currentObjectIDQuery->fetch();

                if (!is_null($currentObjectID['' . $currentObjectType . ''])) {


                    $objet = $bdd->query('SELECT o.*
											FROM equiper AS e, personnage AS p, equipement AS o 
											WHERE e.Id_Personnage = p.Id_Personnage
											AND p.Id_Personnage = ' . $personnage->_Id_Personnage . '
											AND o.Id_Objet=' . $currentObjectID['' . $currentObjectType . ''] . '
											');
                    $ObjectManager = new EquipementManager($bdd);
                    // $fetchedObject = $objet->fetch();
                    $fetchedObject = $ObjectManager->get($currentObjectID[0]);

                    ?>

                    <li class="d3-item item-slot-id-<?php echo $currentObjectType; ?> rarity-<?php echo $fetchedObject->_Rareté; ?>">
                        <!-- TODO: two-handed weapon tag -->
                        <a class="item-slot-container">
                            <div class="tooltip-hover"
                                 data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508"
                                 data-item-id="5847"></div>
                            <span class="item-container"><span class="item-effect"></span></span>
                            <span class="image"><img src="images/items/<?php echo $fetchedObject->_Image; ?>"
                                                     alt="Image de l'objet" <?php if ($fetchedObject->_NombreMain == 2 and $currentObjectType == 'Offhand') {
                                    echo 'style="opacity : 0.4;"';
                                } ?>></span>
                            <div class="touch-tip">

                                <div class="diablo-fans-tooltip item-tooltip">
                                    <div class="db-tooltip">
                                        <ul class="db-summary">
                                            <li class="db-title rarity-<?php echo $fetchedObject->_Rareté; ?> db-header">
                                                <span><?php echo $fetchedObject->_Nom; ?></span>
                                            </li>
                                        </ul>
                                        <div class="db-image rarity-<?php echo $fetchedObject->_Rareté; ?>">
                                            <img src="images/items/<?php echo $fetchedObject->_Image; ?>"
                                                 alt="Image de l'objet">
                                        </div>
                                        <div class="db-description" style="width : 100%;">
                                            <small class="rarity-<?php echo $fetchedObject->_Rareté; ?>"><?php echo $fetchedObject->_Type;
                                                if ($fetchedObject->_Emplacement == 'Arme') {
                                                    echo ' à ' . $fetchedObject->_NombreMain . ' mains';
                                                } ?><span
                                                        class="niveauObj" <?php if ($fetchedObject->_Niveau > $personnage->_Niveau) {
                                                    echo 'style="color : red;"';
                                                } ?>> Niveau : <?php echo $fetchedObject->_Niveau; ?></span></small>
                                            <ul class="db-summary">
                                                <li class="primary-stat">
                                                    <?php
                                                    if ($fetchedObject->_Statistique_Principale == 'Armure') {
                                                        ?>
                                                        <span><?php echo $fetchedObject->_Val; ?></span>
                                                        <small><?php echo $fetchedObject->_Statistique_Principale; ?></small>

                                                        <?php
                                                    } else {
                                                        ?>
                                                        <span><?php echo $fetchedObject->_Val; ?> - <?php echo $fetchedObject->_Val2; ?></span>
                                                        <small><?php echo $fetchedObject->_Statistique_Principale; ?></small>
                                                        <?php
                                                    }

                                                    ?>

                                                </li>


                                                <?php
                                                if (!isset($fetchedObject->_NombreMain) or $fetchedObject->_NombreMain == 1 or $currentObjectType != 'Offhand') {
                                                    if ($fetchedObject->_Rareté > 1) {

                                                        ?>
                                                        <li class="primary-stat">Primary Stats</li>

                                                        <li class="grouped-stats">
                                                            <ul>
                                                                <li class="stat ">
                                                                    <?php if ($fetchedObject->_PropriétéMagique1 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique1 == 'Critical Hit Damages Increased by') {
                                                                        echo $fetchedObject->_PropriétéMagique1; ?>
                                                                        <span class="value">
                                                                        +<?php echo $fetchedObject->_Valeur1; ?>%</span><?php
                                                                    } else {
                                                                        ?><span class="value">
                                                                        +<?php echo $fetchedObject->_Valeur1; ?></span> <?php echo $fetchedObject->_PropriétéMagique1;
                                                                    }
                                                                    ?>
                                                                </li>
                                                                <li class="stat ">
                                                                    <?php
                                                                    if (isset ($fetchedObject->_PropriétéMagique2)) {
                                                                        if ($fetchedObject->_PropriétéMagique2 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique2 == 'Critical Hit Damages Increased by') {
                                                                            echo $fetchedObject->_PropriétéMagique2; ?>
                                                                            <span class="value">
                                                                            +<?php echo $fetchedObject->_Valeur2; ?>%</span><?php
                                                                        } else {
                                                                            ?><span class="value">
                                                                            +<?php echo $fetchedObject->_Valeur2; ?></span> <?php echo $fetchedObject->_PropriétéMagique2;
                                                                        }
                                                                    }
                                                                    ?>
                                                                </li>
                                                                <li class="stat ">
                                                                    <?php
                                                                    if ($fetchedObject->_Rareté > 3){

                                                                    if ($fetchedObject->_PropriétéMagique3 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique3 == 'Critical Hit Damages Increased by') {
                                                                        echo $fetchedObject->_PropriétéMagique3; ?>
                                                                        <span class="value">
                                                                        +<?php echo $fetchedObject->_Valeur3; ?>%</span><?php
                                                                    } else {
                                                                        ?><span class="value">
                                                                        +<?php echo $fetchedObject->_Valeur3; ?></span> <?php echo $fetchedObject->_PropriétéMagique3;
                                                                    }
                                                                    ?>
                                                                </li>
                                                                <li class="stat ">
                                                                    <?php
                                                                    if (isset($fetchedObject->_PropriétéMagique4)) {
                                                                        if ($fetchedObject->_PropriétéMagique4 == 'Sockets') {
                                                                            ?> <span>Sockets (<span
                                                                                    class="value"><?php echo $fetchedObject->_Valeur4; ?></span>)
                                                                            </span><?php
                                                                        } elseif ($fetchedObject->_PropriétéMagique4 == 'Critical Hit Chance Increased by' or $fetchedObject->_PropriétéMagique4 == 'Critical Hit Damages Increased by') {
                                                                            echo $fetchedObject->_PropriétéMagique4; ?>
                                                                            <span class="value">
                                                                            +<?php echo $fetchedObject->_Valeur4; ?>%</span><?php
                                                                        } else {
                                                                            ?><span class="value">
                                                                            +<?php echo $fetchedObject->_Valeur4; ?></span> <?php echo $fetchedObject->_PropriétéMagique4;
                                                                        }
                                                                    }
                                                                    ?>
                                                                </li>

                                                                <?php
                                                                if ($fetchedObject->_Rareté == 5) {
                                                                    ?>
                                                                    <li class="primary-stat">Secondary Stats</li>
                                                                    <li class="passive ">
                                                                        <?php echo $fetchedObject->_Pouvoir_Spécial1; ?>
                                                                        <span class="value"><?php echo $fetchedObject->_Valeur_Pouvoir_Special; ?></span> <?php echo $fetchedObject->_Pouvoir_Spécial2; ?>
                                                                    </li>

                                                                    <?php
                                                                }
                                                                }
                                                                ?>
                                                            </ul>
                                                        </li>

                                                        <?php

                                                        if ($fetchedObject->_Rareté == 6) {


                                                            $set = $bdd->query('SELECT p.*
																	FROM panoplie AS p
																	WHERE p.Id_Panoplie=' . $fetchedObject->_Id_Panoplie . '
																	');
                                                            $panoplie = $set->fetch();

                                                            $nombre = $bdd->query('SELECT count(*)
																	FROM equiper AS e, personnage AS p, equipement as o 
																	WHERE e.Id_Personnage = p.Id_Personnage
																	AND p.Id_Personnage = ' . $personnage->_Id_Personnage . '
																	AND o.id_panoplie=' . $fetchedObject->_Id_Panoplie . '
																	and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambieres,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
																	');
                                                            $nb = $nombre->fetch();


                                                            $nomsobjets = $bdd->query('SELECT o.Nom
																	FROM panoplie AS p, equipement as o 
																	WHERE o.Id_Objet in(p.Objet1,p.Objet2,p.Objet3,p.Objet4,p.Objet5,p.Objet6)
																	');
                                                            $nomobjet = $nomsobjets->fetchAll();
                                                            ?>
                                                            <li class="grouped-stats">
                                                                <ul>
                                                                    <li class="set">
                                                                        <?php echo $panoplie['Nom'];


                                                                        for ($i = 0;
                                                                        $i < $nb['count(*)'];
                                                                        $i++){
                                                                        ?>
                                                                    </li>
                                                                    <li class="set set-item <?php if ($fetchedObject->_Nom == $nomobjet[$i][0]) {
                                                                        echo 'item-name';
                                                                    } ?>">
                                                                        <?php echo $nomobjet[$i][0]; ?>
                                                                    </li>
                                                                    <li class="set">
                                                                        <?php } ?>

                                                                        (<span class="set-num">2</span>) Set: <span
                                                                                class="<?php if ($nb['count(*)'] > 1) {
                                                                                    echo 'value';
                                                                                } ?>"><?php echo $panoplie['Effet1']; ?></span>
                                                                    </li>
                                                                    <li class="set">
                                                                        (<span class="set-num">4</span>) Set: <span
                                                                                class="<?php if ($nb['count(*)'] > 3) {
                                                                                    echo 'value';
                                                                                } ?>"><?php echo $panoplie['Effet2']; ?></span>
                                                                    </li>
                                                                    <li class="set">
                                                                        (<span class="set-num">6</span>) Set: <span
                                                                                class="<?php if ($nb['count(*)'] > 5) {
                                                                                    echo 'value';
                                                                                } ?>"><?php echo $panoplie['Effet3']; ?></span>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <?php
                                                            $nombre->closeCursor();
                                                            $set->closeCursor();
                                                            $nomsobjets->closeCursor();
                                                        }
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>


                    <?php
                    $objet->closeCursor();


                    $fetchedObject = null;
                }
                $currentObjectIDQuery->closeCursor();
            }

            ?>
        </ul>
    </div>
</div>