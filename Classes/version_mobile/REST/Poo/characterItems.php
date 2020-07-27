<!-- Sidebar  -->
<nav id="characterItems" class="active">
    <div class="mobile-item-wrapper d3-class-necromancer" id="mobile-item-wrapper">
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
                    $ObjectManager->get($currentObjectID[0]);
                    // $fetchedObject = $objet->fetch();
                    $fetchedObject = $ObjectManager->get($currentObjectID[0]);

                    ?>

                    <li class="d3-item item-slot-id-<?php echo $currentObjectType; ?> rarity-<?php echo $fetchedObject->_Rareté; ?>"
                        onclick="displayItemToDiv(<?=$fetchedObject->_Id_Objet.','.$personnage->_Id_Personnage.','.$personnage->_Niveau?>, 'divItemDisplay')">
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
    <div id="divItemDisplay">

    </div>
</nav>