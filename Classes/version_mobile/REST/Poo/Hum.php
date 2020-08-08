<?php
spl_autoload_register('chargerClasse');
session_start();

function chargerClasse($classname)
{
    if (is_file('Poo/' . $classname . '.php'))
        require 'Poo/' . $classname . '.php';
    elseif (is_file('Poo/Manager/' . $classname . '.php'))
        require 'Poo/Manager/' . $classname . '.php';
    elseif (is_file('Poo/Classes/' . $classname . '.php'))
        require 'Poo/Classes/' . $classname . '.php';
}

?>

<html lang="fr">

<head>
    <!-- ===================    CSS    =================== -->
    <?php include('css/BootstrapCSSImport.php'); ?>
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/test.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/creation_item.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/navbar.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/createObject.css" type="text/css" media="screen"/>

    <!-- ===================    Js    =================== -->

    <!-- ===================    Page    =================== -->
    <title>Uncommitted Quest - Item creation</title>
    <!-- https://game-icons.net/1x1/delapouite/scroll-quill.html -->
    <link rel="icon" href="css/images/scroll-quill.png"/>

</head>
<body>
<div class="background-image"></div>
<div class="global-wrapper">
<?php include('navbar.php');?>
    <div class="wrapper">

<div class="limite">

    <form method="post" action="">
        <input type="radio" name="radio-choice" id="radio-choice-1"
               value="2" <?php if (isset($_POST['radio-choice']) and $_POST['radio-choice'] == 2) {
            echo 'checked';
        } ?>/>
        <label for="radio-choice-1"><img src="Characters/Paladin/Paladin.png" alt=""/></label>


        <input type="radio" name="radio-choice" id="radio-choice-2"
               value="1" <?php if (isset($_POST['radio-choice']) and $_POST['radio-choice'] == 1) {
            echo 'checked';
        } ?>/>
        <label for="radio-choice-2"><img src="Characters/Voleur/Voleur.png" alt=""/></label>

        <input type="radio" name="radio-choice" id="radio-choice-3"
               value="3" <?php if (isset($_POST['radio-choice']) and $_POST['radio-choice'] == 3) {
            echo 'checked';
        } ?>/>
        <label for="radio-choice-3"><img src="Characters/Demoniste/Demoniste.png" alt=""/></label>

        <input type="radio" name="radio-choice" id="radio-choice-4"
               value="4" <?php if (isset($_POST['radio-choice']) and $_POST['radio-choice'] == 4) {
            echo 'checked';
        } ?>/>
        <label for="radio-choice-4"><img src="Characters/Nain/Nain.png" alt=""/></label>

        <input type="radio" name="radio-choice" id="radio-choice-5"
               value="5" <?php if (isset($_POST['radio-choice']) and $_POST['radio-choice'] == 5) {
            echo 'checked';
        } ?>/>
        <label for="radio-choice-5"><img src="Characters/Manipulateur_de_Sang/Manipulateur_de_Sang.png" alt=""/>
        </label>
        <div class="personnages">
            <div>Paladin</div>
            <div>Voleur</div>
            <div>Démoniste</div>
            <div>Nain</div>
            <div>Manipulateur de Sang</div>
        </div>
        <br><br><br>
        <div class="limite">
                <div class="multipleInputs">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Qualités des objets</span>
                    </div>
                    <input type="number" name="Nombre_Gris" class="form-control"  min="0" max="20" placeholder="Mauvaises factures"
                    value="<?php if (isset($_POST['Nombre_Gris'])) {
                        echo $_POST['Nombre_Gris'];
                    } ?>"">
                    <input type="number" name="Nombre_Blanc" class="form-control"  min="0" max="20" placeholder="Normaux"
                    value="<?php if (isset($_POST['Nombre_Blanc'])) {
                        echo $_POST['Nombre_Blanc'];
                    } ?>"">
                    <input type="number" name="Nombre_Bleu" class="form-control"  min="0" max="20" placeholder="Magiques"
                    value="<?php if (isset($_POST['Nombre_Bleu'])) {
                        echo $_POST['Nombre_Bleu'];
                    } ?>"">
                    <input type="number" name="Nombre_Jaune" class="form-control"  min="0" max="20" placeholder="Rares"
                    value="<?php if (isset($_POST['Nombre_Jaune'])) {
                        echo $_POST['Nombre_Jaune'];
                    } ?>"">
                    <input type="number" name="Nombre_Orange" class="form-control"  min="0" max="20" placeholder="Légendaires"
                    value="<?php if (isset($_POST['Nombre_Orange'])) {
                        echo $_POST['Nombre_Orange'];
                    } ?>"">

                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Equipement</label>
                    </div>
                    <select class="custom-select" name="équipement" size="1" id="caracteristique">
                    <option disabled <?php if (empty($_POST['équipement'])) {
                        echo 'selected';
                    } ?>> Item selectionnable
                    <option>

                    <option class="optionGroup"
                            label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Equipements') {
                        echo 'selected';
                    } ?>>Equipements
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Bottes') {
                        echo 'selected';
                    } ?>> Bottes
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Brassard') {
                        echo 'selected';
                    } ?>>Brassard
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Ceinture') {
                        echo 'selected';
                    } ?>>Ceinture
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Coiffe') {
                        echo 'selected';
                    } ?>>Coiffe
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Epaules') {
                        echo 'selected';
                    } ?>>Epaules
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Gants') {
                        echo 'selected';
                    } ?>>Gants
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Jambieres') {
                        echo 'selected';
                    } ?>>Jambieres
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Torse') {
                        echo 'selected';
                    } ?>>Torse
                    <option disabled>
                    <option class="optionGroup"
                            label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Bijoux') {
                        echo 'selected';
                    } ?>>Bijoux
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Amulette') {
                        echo 'selected';
                    } ?>>Amulette
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Anneau') {
                        echo 'selected';
                    } ?>>Anneau
                    <option disabled>
                    <option class="optionGroup"
                            label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Armes') {
                        echo 'selected';
                    } ?>>Armes
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Baguette') {
                        echo 'selected';
                    } ?>>Baguette
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Dague') {
                        echo 'selected';
                    } ?>>Dague
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Epée') {
                        echo 'selected';
                    } ?>>Epée
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Epée courte') {
                        echo 'selected';
                    } ?>>Epée courte
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Faux') {
                        echo 'selected';
                    } ?>>Faux
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Fléau') {
                        echo 'selected';
                    } ?>>Fléau
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Hache') {
                        echo 'selected';
                    } ?>>Hache
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Lance') {
                        echo 'selected';
                    } ?>>Lance
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Massue') {
                        echo 'selected';
                    } ?>>Massue
                    <option disabled>
                    <option class="optionGroup"
                            label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Main gauche') {
                        echo 'selected';
                    } ?>>Main gauche
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Bouclier') {
                        echo 'selected';
                    } ?>>Bouclier
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Ciboire') {
                        echo 'selected';
                    } ?>>Ciboire
                    <option class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Talisman démoniaque') {
                        echo 'selected';
                    } ?>>Talisman démoniaque
                </select>

                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Niveau</span>
                </div>
                <input name="Niveau" type="number" class="form-control" min="0" placeholder="Niveau" value="<?php if (isset($_POST['Niveau'])) {
                    echo $_POST['Niveau'];
                } ?>">
            </div>
        </div>
    </div>
        <br>
        <div>
            <input type="submit" class="btn btn-outline-success" value="Valider"/>
        </div>
    </form>

</div>
<br>
<?php

try {
    $bdd = null;
    include("BDD.php");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


if (!isset($_POST['radio-choice']) and isset($_POST['Nombre_Gris']) and isset($_POST['Nombre_Blanc']) and isset($_POST['Nombre_Bleu']) and isset($_POST['Nombre_Jaune']) and isset($_POST['Nombre_Orange'])) {
    ?><span style="color:white">Veuillez choisir un personnage !</span> <br> <?php

} else if ((empty($_POST['Nombre_Gris']) and empty($_POST['Nombre_Blanc']) and empty($_POST['Nombre_Bleu']) and empty($_POST['Nombre_Jaune']) and empty($_POST['Nombre_Orange'])) and isset($_POST['radio-choice'])) {
    $personnageID = $_POST['radio-choice'];
    $personnageManager = new PersonnageManager($bdd);
    $personnage = $personnageManager->get($personnageID);
    ?>
    <div style="width:100%;background-color : rgba(43,43,43,0.7);"><?php
        include('personnagebis.php');
        include('equipements.php');
        ?></div>
    Vous devez générer au moins 1 item. <br>
    <?php
} else if (isset($_POST['Nombre_Gris']) and isset($_POST['Nombre_Blanc']) and isset($_POST['Nombre_Bleu']) and isset($_POST['Nombre_Jaune']) and isset($_POST['Nombre_Orange']) and isset($_POST['radio-choice'])) {
    ?> <div style="display: flex; flex-flow: row wrap; margin-left: 150px; margin-right: 200px"><?php

    $personnageID = $_POST['radio-choice'];
    $personnageManager = new PersonnageManager($bdd);
    $personnage = $personnageManager->get($personnageID);
    $EquipementManager = new EquipementManager($bdd);
    include('personnagebis.php');
    include('equipements.php');


    $nbobjets = array($_POST['Nombre_Gris'], $_POST['Nombre_Blanc'], $_POST['Nombre_Bleu'], $_POST['Nombre_Jaune'], $_POST['Nombre_Orange']);


    $numeroanneau = 0;
    /* @var $objectListToDisplay Equipement[] */
    $objectListToDisplay = [];
// For every type of rarity
    for ($k = 0; $k < count($nbobjets); $k++) {
        $rarete = $k + 1;
        // For every equipment of that type
        for ($j = 1; $j <= $nbobjets[$k]; $j++) {

            if (!empty($_POST['Niveau']))
                $niveau = $_POST['Niveau'];
            else
                $niveau = $personnage->_Niveau;

            $niveau = rand($niveau - floor($niveau / 7), $niveau + floor($niveau / 10));

            $equipementToCreate = $EquipementManager->getEmpty();

            $couleursPossible = ['Gris', 'Blanc', 'Bleu', 'Jaune', 'Orange', 'Vert'];
            $couleur = $couleursPossible[$rarete - 1];


            if (!empty($_POST['équipement'])) {
                if (in_array($_POST['équipement'], ['Equipements', 'Armes', 'Bijoux', 'Main gauche'])) {
                    switch ($_POST['équipement']) {
                        case 'Equipements':
                            $provisoire = array('Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambieres', 'Bottes');
                            break;
                        case 'Armes':
                            $provisoire = array('Dague', 'Baguette', 'Faux', 'Epée courte', 'Massue', 'Epée', 'Lance', 'Fléau', 'Hache');
                            break;
                        case 'Bijoux':
                            $provisoire = array('Amulette', 'Anneau');
                            break;
                        case 'Main gauche':
                            $provisoire = array('Bouclier', 'Talisman démoniaque', 'Ciboire');
                            break;
                    }
                    $equipement = $provisoire[array_rand($provisoire)];
                } else
                    $equipement = $_POST['équipement'];
            } else {
                $equipements = array('Coiffe', 'Epaules', 'Gants', 'Torse', 'Brassard', 'Ceinture', 'Jambieres', 'Bottes', 'Amulette', 'Anneau', 'Arme', 'Offhand');
                $armes = array('Dague', 'Baguette', 'Faux', 'Epée courte', 'Massue', 'Epée', 'Lance', 'Fléau', 'Hache');
                $offhand = array('Bouclier', 'Talisman démoniaque', 'Ciboire');

                $equipement = $equipements[array_rand($equipements, 1)];

                if ($equipement == 'Arme')
                    $equipement = $armes[array_rand($armes, 1)];
                elseif ($equipement == 'Offhand')
                    $equipement = $offhand[array_rand($offhand, 1)];
            }

            switch ($personnageID) {
                case 1:
                    $proprietes_magiques_primaires = ['Agilité', 'Agilité', 'Agilité', 'Intelligence', 'Force'];
                    break;
                case 4:
                    $proprietes_magiques_primaires = ['Agilité', 'Force', 'Force', 'Force', 'Intelligence'];
                    break;
                case 2:
                    $proprietes_magiques_primaires = ['Agilité', 'Force', 'Force', 'Intelligence', 'Intelligence'];
                    break;
                case 5:
                case 3:
                    $proprietes_magiques_primaires = ['Agilité', 'Force', 'Intelligence', 'Intelligence', 'Intelligence'];
                    break;
                default:
                    $proprietes_magiques_primaires = ['Agilité', 'Force', 'Intelligence'];
            }

            $proprietes_magiques_secondaires = ['Agilité', 'Agilité', 'Force', 'Force', 'Intelligence', 'Intelligence', 'Vitalité', 'Vitalité', 'Mana', 'Canon de lumière', 'Critique'];

            array_push($objectListToDisplay, $equipementToCreate->getRandomItem($equipement, $rarete, $niveau, $proprietes_magiques_primaires, $proprietes_magiques_secondaires, $numeroanneau));
        }
    }

    /* @var $equipementsPortesList EquipementPortes[] */
    $equipementsPortesList = [];
    $equipementPortesManager = new EquipementPortesManager($bdd);

    $equipementsPortes = $equipementPortesManager->getEmpty();
    array_push($equipementsPortesList, $equipementsPortes);
    $needtobesaved = 0;
    $spotted = false;
    foreach ($objectListToDisplay as $equipementToPlace) {
        $indexEquipementsPortes = 0;
        while ($indexEquipementsPortes < count($equipementsPortesList) && !($equipementsPortesList[$indexEquipementsPortes]->isEmpty($equipementToPlace))) {
            $indexEquipementsPortes++;
        }
        if ($indexEquipementsPortes == count($equipementsPortesList)) {
            $equipementsPortes = $equipementPortesManager->getEmpty();
            $equipementsPortes->setFromEmpty($equipementToPlace);
            array_push($equipementsPortesList, $equipementsPortes);
        } else {
            $equipementsPortesList[$indexEquipementsPortes]->setFromEmpty($equipementToPlace);
        }
    }

    foreach ($equipementsPortesList as $inventaire) {
        ?><span class="alignement">
        <div class="mobile-item-wrapper d3-class-necromancer">
			<ul class="mobile-item-selection">	<?php
                foreach ($inventaire->getEquipementPortesAsArray() as $equipementToDisplay) {
                    /* @var $equipementToDisplay Equipement */
                    // print_r($inventaire->getEquipementPortesAsArray());
                    if (isset($equipementToDisplay)) {
                        ?>
                        <li class="d3-item item-slot-id-<?php echo $equipementToDisplay->_Type; ?> rarity-<?php echo $equipementToDisplay->_Rareté; ?>"> <!-- todo: two-handed weapon tag -->
				<a class="item-slot-container">
					<div class="tooltip-hover"
                         data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508"
                         data-item-id="5847">

                    </div>
					<span class="item-container"><span class="item-effect"></span></span>
					<span class="image"><img src="images/items/<?php echo $equipementToDisplay->_Image; ?>"
                                             alt="Image de l'objet">
                    </span>
					<?= $EquipementManager->getEquipementAsHTML($equipementToDisplay, $personnageID, $personnage->_Niveau, false, true)?>
				</a>
			</li>
                        <?php

                    }
                }
                ?>
            </ul>
        </div></span><?php
    }

}

?>
        </div>
    </div>
<?php include("./footer.php") ?>
<?php include("./css/BootstrapJSImport.php") ?>
</body>

</html>	