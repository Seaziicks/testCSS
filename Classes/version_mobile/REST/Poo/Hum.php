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
    <title>RP - Créateur d'objets</title>
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/test.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/creation_item.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen"/>
    <script type="text/javascript" src="inlinemod.js"></script>
    <script type="text/javascript" src="inlinemod2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>

        .alignement {
            display: flex;
            flex-flow: row wrap;
            width: 365px;
        <!-- 19 % --> color: white;
            top: 0;
            float: left;
            margin-bottom: 50px;
            border: 0.5px blue dashed;
        }

        .mobile-item-wrapper {
            margin: 0;
        }

        .caca {
            width: 100%;
            height: 100px;;
            margin-left: 5px;
            color: white;
        }

        .db-description {
            width: 100%;
        }

        form {
            color: white;
        }


        input[type="radio"]:checked + label img {
            filter: saturate(250%);
        }

        input[type="radio"] {
            transform: scale(0, 0);

        }

        form img {
            width: 7%;
        }

        label {
            text-align: center;
        }

        label span {
            width: 20%;
        }

        .limite {
            width: 100%;
            text-align: center;
            background-color: white;
            margin-top: 35px;
        }

        .personnages {
            width: 43.5%;
            text-align: center;
            margin: auto;
            padding-left: 1.3%;
        }

        .personnages div {
            float: left;
            width: 20%;
        }

        input[type="number"] {
            width: 11%;
        }

        .valeur {
            color: #bda6db;
        }

        .personnagebis {
            margin: auto;
            color: white;
        }

        .Equipement {
            position: relative;
        }

        .mobile-item-wrapper {
            margin: auto;
        }


        .optionGroup {
            font-weight: bold;
            font-style: italic;
            padding-top: 5px
        }

        .optionChild {
            padding-left: 15px;
            font-size: 90%;
        }

        .button {
            border: none;
            color: white;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        .button:active {
            box-shadow: 1px 1px 10px black inset, 0 1px 0 rgba(255, 255, 255, 0.4);
        }

        .button1 {
            background-color: #555555;
        }

        .button1:hover {
            color: black;
            background-color: #e7e7e7;
        }

        .button1:active {
            background-color: #555555;
        }
    </style>
</head>
<body>
<?php include('menu.php');?>
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
            Qualités des objets :<br>
            <input name="Nombre_Gris" type="number" min="0" placeholder="Mauvaises factures"
                   value="<?php if (isset($_POST['Nombre_Gris'])) {
                       echo $_POST['Nombre_Gris'];
                   } ?>">
            <input name="Nombre_Blanc" type="number" min="0" placeholder="Normaux"
                   value="<?php if (isset($_POST['Nombre_Blanc'])) {
                       echo $_POST['Nombre_Blanc'];
                   } ?>">
            <input name="Nombre_Bleu" type="number" min="0" placeholder="Magiques"
                   value="<?php if (isset($_POST['Nombre_Bleu'])) {
                       echo $_POST['Nombre_Bleu'];
                   } ?>">
            <input name="Nombre_Jaune" type="number" min="0" placeholder="Rares"
                   value="<?php if (isset($_POST['Nombre_Jaune'])) {
                       echo $_POST['Nombre_Jaune'];
                   } ?>">
            <input name="Nombre_Orange" type="number" min="0" placeholder="Légendaires"
                   value="<?php if (isset($_POST['Nombre_Orange'])) {
                       echo $_POST['Nombre_Orange'];
                   } ?>">
            <script>function hide() {
                    document.getElementById('to_hide').style.display = 'none';
                }
            </script>
            <SELECT name="équipement" size="1" id="caracteristique">
                <OPTION disabled <?php if (empty($_POST['équipement'])) {
                    echo 'selected';
                } ?>> Item selectionnable
                <OPTION>
                <OPTION class="optionGroup"
                        label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Equipements') {
                    echo 'selected';
                } ?>>Equipements
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Bottes') {
                    echo 'selected';
                } ?>> Bottes
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Brassard') {
                    echo 'selected';
                } ?>>Brassard
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Ceinture') {
                    echo 'selected';
                } ?>>Ceinture
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Coiffe') {
                    echo 'selected';
                } ?>>Coiffe
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Epaules') {
                    echo 'selected';
                } ?>>Epaules
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Gants') {
                    echo 'selected';
                } ?>>Gants
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Jambieres') {
                    echo 'selected';
                } ?>>Jambieres
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Torse') {
                    echo 'selected';
                } ?>>Torse
                <OPTION disabled>
                <OPTION class="optionGroup"
                        label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Bijoux') {
                    echo 'selected';
                } ?>>Bijoux
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Amulette') {
                    echo 'selected';
                } ?>>Amulette
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Anneau') {
                    echo 'selected';
                } ?>>Anneau
                <OPTION disabled>
                <OPTION class="optionGroup"
                        label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Armes') {
                    echo 'selected';
                } ?>>Armes
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Baguette') {
                    echo 'selected';
                } ?>>Baguette
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Dague') {
                    echo 'selected';
                } ?>>Dague
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Epée') {
                    echo 'selected';
                } ?>>Epée
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Epée courte') {
                    echo 'selected';
                } ?>>Epée courte
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Faux') {
                    echo 'selected';
                } ?>>Faux
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Fléau') {
                    echo 'selected';
                } ?>>Fléau
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Hache') {
                    echo 'selected';
                } ?>>Hache
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Lance') {
                    echo 'selected';
                } ?>>Lance
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Massue') {
                    echo 'selected';
                } ?>>Massue
                <OPTION disabled>
                <OPTION class="optionGroup"
                        label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Main gauche') {
                    echo 'selected';
                } ?>>Main gauche
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Bouclier') {
                    echo 'selected';
                } ?>>Bouclier
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Ciboire') {
                    echo 'selected';
                } ?>>Ciboire
                <OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement'] == 'Talisman démoniaque') {
                    echo 'selected';
                } ?>>Talisman démoniaque
            </SELECT>

            <input name="Niveau" type="number" min="0" placeholder="Niveau" value="<?php if (isset($_POST['Niveau'])) {
                echo $_POST['Niveau'];
            } ?>">
        </div>
        <br>
        <div>
            <input type="submit" value="Valider"/>
        </div>
    </form>

</div>
<br>
<?php

try {
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


    $personnageID = $_POST['radio-choice'];
    $personnageManager = new PersonnageManager($bdd);
    $personnage = $personnageManager->get($personnageID);
    include('personnagebis.php');
    include('equipements.php');


    $nbobjets = array($_POST['Nombre_Gris'], $_POST['Nombre_Blanc'], $_POST['Nombre_Bleu'], $_POST['Nombre_Jaune'], $_POST['Nombre_Orange']);


    $numeroanneau = 0;
    $temoin = 0;
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

            $temoin += 1;

            $statistique_principale = null;
            $propriete_magique1 = null;
            $propriete_magique2 = null;
            $propriete_magique3 = null;
            $propriete_magique4 = null;
            $val = null;
            $val2 = null;
            $valeur1 = null;
            $valeur2 = null;
            $valeur3 = null;
            $valeur4 = null;

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


            switch ($equipement) {
                case 'Dague':
                    $statistique_principale = 'Dégâts par coup';
                    $val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 7);
                    $val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 4);
                    $type = 'Arme';
                    $emplacement = 'Arme';
                    $nbimage = 7;
                    break;
                case 'Baguette':
                    $statistique_principale = 'Dégâts par coup';
                    $val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 7);
                    $val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 5);
                    $type = 'Arme';
                    $emplacement = 'Arme';
                    $nbimage = 6;
                    break;
                case 'Faux':
                    $statistique_principale = 'Dégâts par coup';
                    $val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 7);
                    $val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 4.5);
                    $type = 'Arme';
                    $emplacement = 'Arme';
                    $nbimage = 2;
                    break;
                case 'Epée courte':
                    $statistique_principale = 'Dégâts par coup';
                    $val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 3.25);
                    $val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 2.75);
                    $type = 'Arme';
                    $emplacement = 'Arme';
                    $nbimage = 4;
                    break;

                case 'Epée':
                case 'Lance':
                case 'Fléau':
                case 'Hache':
                    $statistique_principale = 'Dégâts par coup';
                    $val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 4);
                    $val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 2);
                    $type = 'Arme';
                    $emplacement = 'Arme';
                    $nbimage = 6;
                    break;

                case 'Massue':
                    $statistique_principale = 'Dégâts par coup';
                    $val = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 5);
                    $val2 = floor(pow($niveau, 1.13) * pow($rarete, 1.02) / 1.5);
                    $type = 'Arme';
                    $emplacement = 'Arme';
                    $nbimage = 6;
                    break;

                case 'Amulette':
                    $type = 'Amulette';
                    $emplacement = 'Bijou';
                    $nbimage = 10;
                    break;
                case 'Anneau':
                    $type = 'Anneau' . (($numeroanneau % 2) + 1) . '';
                    $emplacement = 'Bijou';
                    $nbimage = 11;
                    $numeroanneau += 1;
                    break;


                case 'Coiffe':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.5);
                    $type = 'Coiffe';
                    $emplacement = 'Armure';
                    $nbimage = 7;
                    break;
                case 'Epaules':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.4);
                    $type = 'Epaules';
                    $emplacement = 'Armure';
                    $nbimage = 6;
                    break;
                case 'Gants':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.4);
                    $type = 'Gants';
                    $emplacement = 'Armure';
                    $nbimage = 6;
                    break;
                case 'Torse' :
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.7);
                    $type = 'Torse';
                    $emplacement = 'Armure';
                    $nbimage = 7;
                    break;
                case 'Brassard':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                    $type = 'Brassard';
                    $emplacement = 'Armure';
                    $nbimage = 7;
                    break;
                case 'Ceinture':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                    $type = 'Ceinture';
                    $emplacement = 'Armure';
                    $nbimage = 11;
                    break;
                case 'Jambieres':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                    $type = 'Jambieres';
                    $emplacement = 'Armure';
                    $nbimage = 6;
                    break;
                case 'Bottes':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 27, 1), 0.2);
                    $type = 'Bottes';
                    $emplacement = 'Armure';
                    $nbimage = 6;
                    break;


                case 'Bouclier':
                    $statistique_principale = 'Armure';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 19, 1), 0.5);
                    $type = 'Offhand';
                    $emplacement = 'Offhand';
                    $nbimage = 8;
                    break;
                case 'Talisman démoniaque':
                case 'Ciboire':
                    $statistique_principale = 'Dégâts des sorts';
                    $val = max(round(pow($niveau, 1.13) * pow($rarete, 1.02) / 10), 1);
                    $type = 'Offhand';
                    $emplacement = 'Offhand';
                    $nbimage = 5;
                    break;
            }


            switch ($equipement) {
                case 'Massue':
                    $nbimage = 5;
                    break;
                case 'Lance':
                    $nbimage = 3;
                    break;
                case 'Epée':
                case 'Fléau':
                    $nbimage = 4;
                    break;
            }


            $image = '' . $emplacement . '/' . $equipement . '/' . $couleur . '/' . rand(1, $nbimage) . '.png';


            if ($rarete == 1) {
                $nom = $equipement . ' de mauvaise facture';
            }

            if ($rarete == 2) {
                if (in_array($equipement, ['Coiffe', 'Epaules', 'Ceinture', 'Amulette']) or ($type == 'Arme' and $equipement != 'Fléau')) {
                    $nom = $equipement . ' normale';
                } else if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                    $nom = $equipement . ' normales';
                } else {
                    $nom = $equipement . ' normal';
                }
                $valeur1 = round($niveau * $niveau / 17);
            }

            if ($rarete >= 2) {


                if ($equipement == 'Dague') {
                    if (rand(0, 100) > 75) {
                        $propriete_magique1 = 'Intelligence';
                    } else {
                        $propriete_magique1 = 'Agilité';
                    }
                    $emplacement = 'Arme';
                } else if ($equipement == 'Baguette') {
                    $propriete_magique1 = 'Intelligence';
                    $emplacement = 'Arme';
                } else if ($equipement == 'Faux') {
                    $propriete_magique1 = 'Intelligence';
                    $emplacement = 'Arme';
                } else if ($equipement == 'Epée courte') {
                    if (rand(0, 100) > 51) {
                        $propriete_magique1 = 'Agilité';
                    } else {
                        $propriete_magique1 = 'Force';
                    }
                    $emplacement = 'Arme';
                } else if ($equipement == 'Massue' or $equipement == 'Epée' or $equipement == 'Lance' or $equipement == 'Fléau' or $equipement == 'Hache') {
                    $propriete_magique1 = 'Force';
                    $emplacement = 'Arme';
                } else if ($equipement == 'Amulette' or $equipement == 'Anneau') {
                    $propriete_magique1 = $proprietes_magiques_primaires[rand(0, count($proprietes_magiques_primaires) - 1)];
                    $emplacement = 'Bijou';
                } else {
                    $propriete_magique1 = $proprietes_magiques_primaires[rand(0, count($proprietes_magiques_primaires) - 1)];
                    $emplacement = 'Armure';
                }

                if ($rarete == 3) {
                    $valeur1 = round($niveau * $niveau / 12);

                    if (rand(0, 100) <= intval($niveau * $niveau / 2.25)) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                        while ($proprietes_magiques_secondaires[$i] == $propriete_magique1) {
                            $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                        }
                        $propriete_magique2 = $proprietes_magiques_secondaires[$i];
                        $valeur2 = round($niveau * $niveau / 16);

                    }
                    if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                        $nom = $equipement . ' magiques';
                    } else {
                        $nom = $equipement . ' magique';
                    }
                }

                if ($rarete == 4) {
                    $valeur1 = round($niveau * $niveau / 10);
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    while ($proprietes_magiques_secondaires[$i] == $propriete_magique1) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    }
                    $propriete_magique2 = $proprietes_magiques_secondaires[$i];
                    $valeur2 = round($niveau * $niveau / 11);

                    if (rand(0, 100) <= intval($niveau * $niveau / 2.25)) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                        while ($proprietes_magiques_secondaires[$i] == $propriete_magique1 or $proprietes_magiques_secondaires[$i] == $propriete_magique2) {
                            $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                        }
                        $propriete_magique3 = $proprietes_magiques_secondaires[$i];
                        $valeur3 = round($niveau * $niveau / 11);
                    }
                    if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                        $nom = $equipement . ' rares';
                    } else {
                        $nom = $equipement . ' rare';
                    }
                }

                if ($rarete == 5) {
                    //Valeur 1
                    $valeur1 = round($niveau * $niveau / 7);

                    // Propriété et valeur 2
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    while ($proprietes_magiques_secondaires[$i] == $propriete_magique1) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    }
                    $propriete_magique2 = $proprietes_magiques_secondaires[$i];
                    $valeur2 = round($niveau * $niveau / 8);

                    //Propriété et valeur 3
                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    while ($proprietes_magiques_secondaires[$i] == $propriete_magique1 or $proprietes_magiques_secondaires[$i] == $propriete_magique2) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    }
                    $propriete_magique3 = $proprietes_magiques_secondaires[$i];
                    $valeur3 = round($niveau * $niveau / 8);

                    //Propriété et valeur 4

                    $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    while ($proprietes_magiques_secondaires[$i] == $propriete_magique1 or $proprietes_magiques_secondaires[$i] == $propriete_magique2 or $proprietes_magiques_secondaires[$i] == $propriete_magique3) {
                        $i = rand(0, count($proprietes_magiques_secondaires) - 1);
                    }
                    $propriete_magique4 = $proprietes_magiques_secondaires[$i];
                    $valeur4 = round($niveau * $niveau / 8);
                    if (in_array($equipement, ['Jambieres', 'Bottes'])) {
                        $nom = $equipement . ' légendaires';
                    } else {
                        $nom = $equipement . ' légendaire';
                    }
                }
            }

            for ($c = 1; $c <= 4; $c++) {
                if (${'propriete_magique' . $c} == 'Vitalité') {
                    ${'valeur' . $c} = round(${'valeur' . $c} / 5);
                } else if (${'propriete_magique' . $c} == 'Canon de lumière') {
                    ${'valeur' . $c} = floor(${'valeur' . $c} / 15);
                } else if (${'propriete_magique' . $c} == 'Critique') {
                    ${'valeur' . $c} = floor(${'valeur' . $c} / 10);
                } else if (${'propriete_magique' . $c} == 'Mana') {
                    ${'valeur' . $c} = round(${'valeur' . $c} / 3);
                }
            }

            if ($type == 'Anneau')
                $type = 'Anneau' . $numeroanneau;

            $objectToPush = array(
                'Rareté' => $rarete,
                'Couleur' => $couleur,
                'Nom' => $nom,
                'Type' => $type,
                'Image' => $image,
                'Emplacement' => $emplacement,
                'Statistique_Principale' => $statistique_principale,
                'Val' => $val,
                'Val2' => $val2,
                'Niveau' => $niveau,
                'PropriétéMagique1' => $propriete_magique1,
                'Valeur1' => $valeur1,
                'PropriétéMagique2' => $propriete_magique2,
                'Valeur2' => $valeur2,
                'PropriétéMagique3' => $propriete_magique3,
                'Valeur3' => $valeur3,
                'PropriétéMagique4' => $propriete_magique4,
                'Valeur4' => $valeur4
            );

            array_push($objectListToDisplay, new Equipement($objectToPush));

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
                    // print_r($inventaire->getEquipementPortesAsArray());
                    if (isset($equipementToDisplay)) {
                        ?>
                        <li class="d3-item item-slot-id-<?php echo $equipementToDisplay->_Type; ?> rarity-<?php echo $equipementToDisplay->_Rareté; ?>"> <!-- todo: two-handed weapon tag -->
				<a class="item-slot-container">
					<div class="tooltip-hover"
                         data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508"
                         data-item-id="5847"></div>
					<span class="item-container"><span class="item-effect"></span></span>
					<span class="image"><img src="images/items/<?php echo $equipementToDisplay->_Image; ?>"
                                             alt="Image de l'objet"></span>
					<div class="touch-tip">

						<div class="diablo-fans-tooltip item-tooltip">
							<div class="db-tooltip">
								<ul class="db-summary">
									<li class="db-title rarity-<?php echo $equipementToDisplay->_Rareté; ?> db-header">
										<span><?php echo $equipementToDisplay->_Nom; ?></span>
									</li>
								</ul>
								<div class="db-image rarity-<?php echo $equipementToDisplay->_Rareté; ?>">
									<img src="images/items/<?php echo $equipementToDisplay->_Image; ?>"
                                         alt="Image de l'objet">
								</div>
								<div class="db-description" style="width : 100%;">
									<small class="rarity-<?php echo $equipementToDisplay->_Rareté; ?>"><?php echo $equipementToDisplay->_Type; ?> <span
                                                class="niveauObj"> Niveau : <?php echo $equipementToDisplay->_Niveau; ?></span></small>
									<ul class="db-summary">
										<li class="primary-stat">
											<?php
                                            if (isset($equipementToDisplay->_Statistique_Principale)) {
                                                if ($equipementToDisplay->_Statistique_Principale == 'Armure' or $equipementToDisplay->_Statistique_Principale == 'Dégâts des sorts') {
                                                    ?>
                                                    <span><?php echo $equipementToDisplay->_Val; ?></span>
                                                    <small><?php echo $equipementToDisplay->_Statistique_Principale; ?></small>

                                                    <?php
                                                } else {
                                                    ?>
                                                    <span><?php echo $equipementToDisplay->_Val; ?> - <?php echo $equipementToDisplay->_Val2; ?></span>
                                                    <small><?php echo $equipementToDisplay->_Statistique_Principale; ?></small>
                                                    <?php
                                                }
                                            }
                                            ?>

										</li>


											<?php

                                            if ($equipementToDisplay->_Rareté > 1) {

                                                ?>
                                                <li class="primary-stat">Primary Stats</li>

                                                <li class="grouped-stats">
												<ul>
													<li class="stat ">
													<?php
                                                    if (isset($equipementToDisplay->_PropriétéMagique1)) {
                                                        if ($equipementToDisplay->_PropriétéMagique1 == 'Critical Hit Chance Increased by' or $equipementToDisplay->_PropriétéMagique1 == 'Critical Hit Damages Increased by') {
                                                            echo $equipementToDisplay->_PropriétéMagique1; ?> <span
                                                                    class="value">
                                                            +<?php echo $equipementToDisplay->_Valeur1; ?>%</span><?php
                                                        } else {
                                                            ?><span class="value">
                                                            +<?php echo($equipementToDisplay->_Valeur1 - 1); ?></span>-



                                                            <span class="value"><?php echo ceil($equipementToDisplay->_Valeur1 * 1.25); ?></span> <?php echo $equipementToDisplay->_PropriétéMagique1;
                                                        }
                                                    }
                                                    ?>
													</li>
													<li class="stat ">
														<?php
                                                        if (isset($equipementToDisplay->_PropriétéMagique2)) {
                                                            if ($equipementToDisplay->_PropriétéMagique2 == 'Critical Hit Chance Increased by' or $equipementToDisplay->_PropriétéMagique2 == 'Critical Hit Damages Increased by') {
                                                                echo $equipementToDisplay->_PropriétéMagique2; ?> <span
                                                                        class="value">
                                                                +<?php echo $equipementToDisplay->_Valeur2; ?>%</span><?php
                                                            } else {
                                                                ?><span class="value">
                                                                +<?php echo max(0, $equipementToDisplay->_Valeur2 - 1); ?></span>-



                                                                <span class="value"><?php echo ceil($equipementToDisplay->_Valeur2 * 1.25); ?></span> <?php echo $equipementToDisplay->_PropriétéMagique2;
                                                            }
                                                        }
                                                        ?>
													</li>
													<li class="stat ">
														<?php
                                                        if ($equipementToDisplay->_Rareté > 3){
                                                        if (isset($equipementToDisplay->_PropriétéMagique3)) {
                                                            if ($equipementToDisplay->_PropriétéMagique3 == 'Critical Hit Chance Increased by' or $equipementToDisplay->_PropriétéMagique3 == 'Critical Hit Damages Increased by') {
                                                                echo $equipementToDisplay->_PropriétéMagique3; ?> <span
                                                                        class="value">
                                                                +<?php echo $equipementToDisplay->_Valeur3; ?>%</span><?php
                                                            } else {
                                                                ?><span class="value">
                                                                +<?php echo max(0, $equipementToDisplay->_Valeur3 - 1); ?></span>-



                                                                <span class="value"><?php echo ceil($equipementToDisplay->_Valeur3 * 1.25); ?></span> <?php echo $equipementToDisplay->_PropriétéMagique3;
                                                            }
                                                        }
                                                        ?>
															</li>
															<li class="stat ">
																<?php
                                                                if (isset($equipementToDisplay->_PropriétéMagique4)) {
                                                                    if ($equipementToDisplay->_PropriétéMagique4 == 'Sockets') {
                                                                        ?> <span>Sockets (<span
                                                                                class="value"><?php echo $equipementToDisplay->_Valeur4; ?></span>)
                                                                        </span><?php
                                                                    } elseif ($equipementToDisplay->_PropriétéMagique4 == 'Critical Hit Chance Increased by' or $equipementToDisplay->_PropriétéMagique4 == 'Critical Hit Damages Increased by') {
                                                                        echo $equipementToDisplay->_PropriétéMagique4; ?>
                                                                        <span class="value">
                                                                        +<?php echo $equipementToDisplay->_Valeur4; ?>%</span><?php
                                                                    } else {
                                                                        ?><span class="value">
                                                                        +<?php echo max(0, $equipementToDisplay->_Valeur4 - 1); ?></span>-



                                                                        <span class="value"><?php echo ceil($equipementToDisplay->_Valeur4 * 1.25); ?></span> <?php echo $equipementToDisplay->_PropriétéMagique4;
                                                                    }
                                                                }
                                                                ?>
															</li>

														<?php
                                                        if ($equipementToDisplay->_Rareté == 5) {
                                                            ?>
                                                            <li class="primary-stat">Secondary Stats</li>
                                                            <li class="passive ">
																		Pouvoir Spécial à insérer.
																</li>

                                                            <?php
                                                        }
                                                        }
                                                        ?>
												</ul>
											</li>

											<?php

                                                if ($equipementToDisplay->_Rareté == 6) {


                                                    $set = $bdd->query('SELECT p.*
																FROM panoplie AS p
																WHERE p.Id_Panoplie=' . $equipementToDisplay['Id_Panoplie'] . '
																');
                                                    $panoplie = $set->fetch();

                                                    $nombre = $bdd->query('SELECT count(*)
																FROM equiper AS e, personnage AS p, equipement as o 
																WHERE e.Id_Personnage = p.Id_Personnage
																AND p.Id_Personnage = ' . $personnageID . '
																AND o.id_panoplie=' . $equipementToDisplay['Id_Panoplie'] . '
																and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambieres,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
																');
                                                    $nb = $nombre->fetch();
                                                    ?>
                                                    <li class="grouped-stats">
													<ul>
													   <li class="set">
																	<?php echo $panoplie['Nom']; ?>
																 </li><li
                                                                class="set set-item <?php if ($equipementToDisplay->_Nom == 'Rathma\'s Skull Helm') {
                                                                    echo 'item-name';
                                                                } ?>">
																	Rathma's Skull Helm
																 </li><li
                                                                class="set set-item <?php if ($equipementToDisplay->_Nom == 'Rathma\'s Spikes') {
                                                                    echo 'item-name';
                                                                } ?>">
																	Rathma's Spikes
																 </li><li
                                                                class="set set-item <?php if ($equipementToDisplay->_Nom == 'Rathma\'s Ribcage Plate') {
                                                                    echo 'item-name';
                                                                } ?>">
																	Rathma's Ribcage Plate
																 </li><li
                                                                class="set set-item <?php if ($equipementToDisplay->_Nom == 'Rathma\'s Skeletal Legplates') {
                                                                    echo 'item-name';
                                                                } ?>">
																	Rathma's Skeletal Legplates
																 </li><li
                                                                class="set set-item <?php if ($equipementToDisplay->_Nom == 'Rathma\'s Ossified Sabatons') {
                                                                    echo 'item-name';
                                                                } ?>">
																	Rathma's Ossified Sabatons
																 </li><li
                                                                class="set set-item <?php if ($equipementToDisplay->_Nom == 'Rathma\'s Macabre Vambraces') {
                                                                    echo 'item-name';
                                                                } ?>">
																	Rathma's Macabre Vambraces
																 </li><li class="set">

																	(<span class="set-num">2</span>) Set: <span
                                                                    class="<?php if ($nb['count(*)'] > 1) {
                                                                        echo 'value';
                                                                    } ?>"><?php echo $panoplie['Effet1']; ?></span>
																 </li><li class="set">
																	(<span class="set-num">4</span>) Set: <span
                                                                    class="<?php if ($nb['count(*)'] > 3) {
                                                                        echo 'value';
                                                                    } ?>"><?php echo $panoplie['Effet2']; ?></span>
																 </li><li class="set">
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
                                                }
                                            }
                                            ?>
									</ul>

									<br>
									<form method="post" action="ajouter_objet.php" target=_blank>
										<input type="hidden" name="Statistique_Principale"
                                               value="<?php echo $equipementToDisplay->_Statistique_Principale; ?>">
										<input type="hidden" name="Val" value=<?php echo $equipementToDisplay->_Val; ?>>
										<input type="hidden" name="Val2"
                                               value=<?php echo $equipementToDisplay->_Val2; ?>>
										<input type="hidden" name="PropriétéMagique1"
                                               value="<?php echo $equipementToDisplay->_PropriétéMagique1; ?>">
										<input type="hidden" name="PropriétéMagique2"
                                               value="<?php echo $equipementToDisplay->_PropriétéMagique2; ?>">
										<input type="hidden" name="PropriétéMagique3"
                                               value="<?php echo $equipementToDisplay->_PropriétéMagique3; ?>">
										<input type="hidden" name="PropriétéMagique4"
                                               value="<?php echo $equipementToDisplay->_PropriétéMagique4; ?>">
										<input type="hidden" name="Valeur1"
                                               value=<?php echo $equipementToDisplay->_Valeur1; ?>>
										<input type="hidden" name="Valeur2"
                                               value=<?php echo $equipementToDisplay->_Valeur2; ?>>
										<input type="hidden" name="Valeur3"
                                               value=<?php echo $equipementToDisplay->_Valeur3; ?>>
										<input type="hidden" name="Valeur4"
                                               value=<?php echo $equipementToDisplay->_Valeur4; ?>>

										<input type="hidden" name="Nom"
                                               value="<?php echo $equipementToDisplay->_Nom; ?>">
										<input type="hidden" name="Image"
                                               value=<?php echo $equipementToDisplay->_Image; ?>>
										<input type="hidden" name="Couleur"
                                               value=<?php echo $equipementToDisplay->_Couleur; ?>>
										<input type="hidden" name="Rareté"
                                               value=<?php echo $equipementToDisplay->_Rareté; ?>>
										<input type="hidden" name="Type"
                                               value=<?php echo $equipementToDisplay->_Type; ?>>
										<input type="hidden" name="Emplacement"
                                               value=<?php echo $equipementToDisplay->_Emplacement; ?>>
										<input type="hidden" name="Niveau"
                                               value=<?php echo $equipementToDisplay->_Niveau; ?>>
										<input type="hidden" name="Type"
                                               value=<?php echo $equipementToDisplay->_Type; ?>>


										<input class="button button1" type="submit" value="Enregistrer l'objet"/>
									</form>

								</div>
							</div>
						</div>
					</div>
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

</body>

</html>	