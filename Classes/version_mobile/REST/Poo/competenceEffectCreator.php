<?php

spl_autoload_register('chargerClasse');
session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

// On enregistre notre autoload.
function chargerClasse($classname)
{
    $uselessIntervalToBaitPhpStormCheckBecauseItsBuging = $classname . '.php';
    if (is_file('Poo/Poo/'.$uselessIntervalToBaitPhpStormCheckBecauseItsBuging.'.php'))
        require 'Poo/Poo/'.$uselessIntervalToBaitPhpStormCheckBecauseItsBuging.'.php';
    elseif (is_file('Poo/Poo/Manager/'.$uselessIntervalToBaitPhpStormCheckBecauseItsBuging.'.php'))
        require 'Poo/Poo/Manager/'.$uselessIntervalToBaitPhpStormCheckBecauseItsBuging.'.php';
    elseif (is_file('Poo/Poo/Classes/'.$uselessIntervalToBaitPhpStormCheckBecauseItsBuging.'.php'))
        require 'Poo/Poo/Classes/'.$uselessIntervalToBaitPhpStormCheckBecauseItsBuging.'.php';
}
include("BDD.php");


if(isset($_SESSION['pseudo'])){
    // Recherche du rang de l'utilisateur pour savoir si la demande en cours doit être accomplie.

    $recherche = $bdd->query('SELECT * FROM membres WHERE pseudo=\''.$_SESSION['pseudo'].'\'') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

    $data = $recherche->fetch(); //On les mets sous forme string

    $id_groupe= $data['id_groupe'];}
else{$id_groupe=null;}
include('competenceEffectCreation.php');
// echo '<script>alert(\''.$_POST['newCalcul4a'].'\');</script>';
if(!isset($_POST['Id_Competence'])){$_POST['Id_Competence']=0;}

$personnage = 'Magmaticien';
$competences = $bdd->query('SELECT * FROM competence WHERE Id_Competence = '.$_POST['Id_Competence'].' ');
$competence =$competences->fetch();
$competences->closeCursor();
include('statistiques.php');

$competencePooManager = new CompetenceManager($bdd);
$personnagePooManager = new PersonnageManager($bdd);
$personnagePoo = $personnagePooManager->get(6);
$competencePoo = $competencePooManager->get($_POST['Id_Competence'], $personnagePoo);

?>

<html lang="fr">
<head>
    <style>
        /*
        .alignement{
            display: flex;
            flex-flow : row  wrap;
            width : 365px; <!--19%-->
            color : white;
            top : 0;
            float : left;
            margin-bottom : 50px;
            border: 0.5px blue dashed;
        }
        .mobile-item-wrapper{
            margin : 0;
        }
        .caca{
            width : 100%;
            height : 100px;;
            margin-left : 5px;
            color : white;
        }
        .db-description{
            width : 100%;
        }
        */
        form{
            color : white;
        }




        input[type="radio"]:checked+label img {
            filter: saturate(250%);
        }
        input[type="radio"] {
            transform: scale(0, 0);

        }
        form img{
            width : 7%;
        }
        label{
            text-align : center;
        }
        label span{
            width : 20%;
        }
        /*
        .limite{
            width : 100%;
            text-align : center;
            margin-top : 35px;
        }

        .personnages{
            width:43.5%;
            text-align : center;
            margin : auto;
            padding-left:1.3%;
        }
        */
        .personnages div{
            float : left;
            width:20%;
        }
        input[type="number"]{
            width : 11%;
        }
        /*
        .valeur{
            color: #bda6db;
        }
        .personnagebis{
            margin : auto;
            color : white;
        }
        .Equipement{
            position : relative;
        }
        .mobile-item-wrapper{
            margin : auto;
        }





        .optionGroup {
            font-weight: bold;
            font-style: italic;
            padding-top: 5px
        }

        .optionChild {
            padding-left: 15px;
            font-size : 90%;
        }

        .button {
            border: none;
            color: white;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }
        .button:active{
            box-shadow: 1px 1px 10px black inset, 0 1px 0 rgba( 255, 255, 255, 0.4);
        }
        .button1{
            background-color: #555555;
        }
        .button1:hover{
            color: black;
            background-color: #e7e7e7;
        }
        .button1:active{
            background-color: #555555;
        }
        */
    </style>
    <link rel="stylesheet" href="modification_competence.css" type="text/css" media="screen"/>
    <title></title>

</head>

<body>
<div class="centre">

    <div class="original">
        <div>
            Original :	<br/><br/><br/><span class="competence"><?= $competence['Libellé'];?></span><br/><br/><?php include('modification_competence_original.php');include('effets.php'); ?>
            <?php if (!empty($competence['Exemple'])){ ?><br/><br/><br/><div class="exemple"><i><?= $competence['Exemple']; ?> </i></div><?php }?>
        </div>
    </div>

    <div class="modification">
        <div>
            Modification
            <br/><br/>
            <form action="" method="post">
                <label for="Id_Competence">Numéro de compétence : </label><input type="number" id="Id_Competence" name="Id_Competence" value="<?= $competence['Id_Competence'];?>" style="width:40px" onload="this.select()" autofocus>
                <input type="submit" name="inscription" value="Compétence">
            </form>




            <br/>
            <form action="" method="post" id="statform">

                <input type="submit" name="Modification_competence" value="Ajouter">


                <span  class="titre_section">Caractéristiques</span><br/><br/><br/>
                <label for="neweffectOrder">effectOrder =>  </label><input type="number" style="text-align : center;" name="neweffectOrder" id="neweffectOrder">
                <label for="newidCompetence">idCompetence => </label><input type="number" name="newidCompetence" id="newidCompetence"><br/>
                <label for="newactionType">actionType =>   </label><select name="newactionType" id="newactionType" style="width:185px">
                                    <option disabled="disabled" selected="selected" value="-1"> Choisissez le type d'action </option>
                                    <?= optionWithSpace(1, "Dommage physique", 3); ?>
                                    <?= optionWithSpace(2, "Dommage Magique", 3); ?>
                                    <?= optionWithSpace(3, "VoleDeViePhysique", 3); ?>
                                    <?= optionWithSpace(4, "VoleDeVieMagique", 3); ?>
                                    <?= optionWithSpace(5, "Soin", 3); ?>
                                    <?= optionWithSpace(6, "Bouclier", 3); ?>
                                    <?= optionWithSpace(7, "Effet", 3); ?>
                                    <?= optionWithSpace(8, "Effet avant action", 3); ?>
                                    <?= optionWithSpace(9, "Effet après action", 3); ?>
                                    <?= optionWithSpace(10, "Effet avant attaque", 3); ?>
                                    <?= optionWithSpace(11, "Effet après attaque", 3); ?>
                                    <?= optionWithSpace(12, "Effet avant competence", 3); ?>
                                    <?= optionWithSpace(13, "Effet après competence", 3); ?>
                                    <?= optionWithSpace(14, "Effet avant dégâts", 3); ?>
                                    <?= optionWithSpace(15, "Effet après dégâts", 3); ?>
                                    <?= optionWithSpace(16, "Effet avant dégâts physique", 3); ?>
                                    <?= optionWithSpace(17, "Effet après dégâts physique", 3); ?>
                                    <?= optionWithSpace(18, "Effet avant dégâts magique", 3); ?>
                                    <?= optionWithSpace(19, "Effet après dégâts magique", 3); ?>
                                    <?= optionWithSpace(20, "Effet avant soin", 3); ?>
                                    <?= optionWithSpace(21, "Effet après soin", 3); ?>
                                    <?= optionWithSpace(22, "Effet avant action reçu", 3); ?>
                                    <?= optionWithSpace(23, "Effet après action reçu", 3); ?>
                                    <?= optionWithSpace(24, "Effet avant attaque reçu", 3); ?>
                                    <?= optionWithSpace(25, "Effet après attaque reçu", 3); ?>
                                    <?= optionWithSpace(26, "Effet avant competence reçu", 3); ?>
                                    <?= optionWithSpace(27, "Effet après competence reçu", 3); ?>
                                    <?= optionWithSpace(28, "Effet avant dégâts reçu", 3); ?>
                                    <?= optionWithSpace(29, "Effet après dégâts reçu", 3); ?>
                                    <?= optionWithSpace(30, "Effet avant dégâts physique reçu", 3); ?>
                                    <?= optionWithSpace(31, "Effet après dégâts physique reçu", 3); ?>
                                    <?= optionWithSpace(32, "Effet avant dégâts magique reçu", 3); ?>
                                    <?= optionWithSpace(33, "Effet après dégâts magique reçu", 3); ?>
                                    <?= optionWithSpace(34, "Effet avant soin reçu", 3); ?>
                                    <?= optionWithSpace(35, "Effet après soin reçu", 3); ?>
                                    <?= optionWithSpace(36, "EffetDebutTour", 3); ?>
                                    <?= optionWithSpace(37, "EffetFinTour", 3); ?>
                                </select><br/>
                <label for="neweffectType">effectType =>  </label><select  name="neweffectType" id="neweffectType" style="width:175px"><br/>
                                    <option disabled="disabled" selected="selected" value="-1"> Choisissez le type d'effet </option>
                                    <?= optionWithSpace(1, "DegatsFlat", 3); ?>
                                    <?= optionWithSpace(2, "DegatsPourcentage", 3); ?>
                                    <?= optionWithSpace(3, "DegatsPhysiqueFlat", 3); ?>
                                    <?= optionWithSpace(4, "DegatsPhysiquePourcentage", 3); ?>
                                    <?= optionWithSpace(5, "DegatsMagiqueFlat", 3); ?>
                                    <?= optionWithSpace(6, "DegatsMagiquePourcentage", 3); ?>
                                    <?= optionWithSpace(7, "Force", 3); ?>
                                    <?= optionWithSpace(8, "Agilite", 3); ?>
                                    <?= optionWithSpace(9, "Intelligence", 3); ?>
                                    <?= optionWithSpace(10, "Vitalite", 3); ?>
                                    <?= optionWithSpace(11, "PA", 3); ?>
                                    <?= optionWithSpace(12, "PM", 3); ?>
                                    <?= optionWithSpace(13, "SortFlat", 3); ?>
                                    <?= optionWithSpace(14, "SortPourcentage", 3); ?>
                                    <?= optionWithSpace(15, "ArmureFlat", 3); ?>
                                    <?= optionWithSpace(16, "ArmurePourcentage", 3); ?>
                                    <?= optionWithSpace(17, "ArmureMagiqueFlat", 3); ?>
                                    <?= optionWithSpace(18, "ArmureMagiquePourcentage", 3); ?>
                                    <?= optionWithSpace(19, "ReductionDegatsFlat", 3); ?>
                                    <?= optionWithSpace(20, "ReductionDegatsPourcentage", 3); ?>
                                    <?= optionWithSpace(21, "SoinFlat", 3); ?>
                                    <?= optionWithSpace(22, "SoinPourcentage", 3); ?>
                                    <?= optionWithSpace(23, "SoinRecuFlat", 3); ?>
                                    <?= optionWithSpace(24, "SoinRecuPourcentage", 3); ?>
                                    <?= optionWithSpace(25, "IgnoreArmureFlat ", 3); ?>
                                    <?= optionWithSpace(26, "IgnoreArmurePourcentage ", 3); ?>
                                    <?= optionWithSpace(27, "IgnoreArmureMagiqueFlat ", 3); ?>
                                    <?= optionWithSpace(28, "IgnoreArmureMagiquePourcentage ", 3); ?>
                                    <?= optionWithSpace(29, "AugmenteNombreAttaque", 3); ?>
                                    <?= optionWithSpace(30, "RedirectionDegatFlat", 3); ?>
                                    <?= optionWithSpace(31, "RedirectionDegatPourcentage", 3); ?>
                                    <?= optionWithSpace(32, "RenvoieDegatFlat", 3); ?>
                                    <?= optionWithSpace(33, "RenvoieDegatPourcentage", 3); ?>
                                    <?= optionWithSpace(34, "Portee", 3); ?>
                                    <?= optionWithSpace(35, "Degat", 3); ?>
                                    <?= optionWithSpace(36, "DegatDiffere", 3); ?>
                                    <?= optionWithSpace(37, "Soin", 3); ?>
                                    <?= optionWithSpace(38, "Shield", 3); ?>
                                    <?= optionWithSpace(39, "DiffererDegatsFlatToTheEndOfEffect", 3); ?>
                                    <?= optionWithSpace(40, "DiffererDegatsPourcentageToTheEndOfEffect", 3); ?>
                                    <?= optionWithSpace(41, "DiffererDegatsFlat", 3); ?>
                                    <?= optionWithSpace(42, "DiffererDegatsPourcentage", 3); ?>
                                </select><br/>

                <label for="newmodeApplication">modeApplication => </label><select name="newmodeApplication" style="text-align : center; width : 270px;" id="newmodeApplication">
                                    <option disabled="disabled" selected="selected" value="-1"> Choisissez le type d'application de l'effet </option>
                                    <?= optionWithSpace(1, "Sois même", 3); ?>
                                    <?= optionWithSpace(2, "Cible unique", 3); ?>
                                    <?= optionWithSpace(3, "Effet de zone", 3); ?>
                                    <?= optionWithSpace(4, "Effet sur précédentes cibles", 3); ?>
                                    <?= optionWithSpace(5, "Effet de rebond direct", 3); ?>
                                    <?= optionWithSpace(6, "Canalisation", 3); ?>
                                    <?= optionWithSpace(7, "Cible unique après M accumulation", 3); ?>
                                    <?= optionWithSpace(8, "Cible unique après M accumulation sur cible unique", 3); ?>
                                    <?= optionWithSpace(9, "Cible unique après M accumulation sur cibles distinctes", 3); ?>
                                    <?= optionWithSpace(10, "Cible unique après M accumulation successives", 3); ?>
                                    <?= optionWithSpace(11, "Cible unique après M accumulation successives sur cible unique", 3); ?>
                                    <?= optionWithSpace(12, "Cible unique après M accumulation successives sur cibles distinctes", 3); ?>
                                    <?= optionWithSpace(13, "Effet de zone après M accumulation", 3); ?>
                                    <?= optionWithSpace(14, "Effet de zone après M accumulation sur cible unique", 3); ?>
                                    <?= optionWithSpace(15, "Effet de zone après M accumulation sur cibles distinctes", 3); ?>
                                    <?= optionWithSpace(16, "Effet de zone après M accumulation successives", 3); ?>
                                    <?= optionWithSpace(17, "Effet de zone après M accumulation successives sur cible unique", 3); ?>
                                    <?= optionWithSpace(18, "Effet de zone après M accumulation successives sur cibles distinctes", 3); ?>
                                    <?= optionWithSpace(19, "Effet sur précédentes cibles après M accumulation", 3); ?>
                                    <?= optionWithSpace(20, "Effet sur précédentes cibles après M accumulation sur cibles distinctes", 3); ?>
                                    <?= optionWithSpace(21, "Effet sur précédentes cibles après M accumulation successives", 3); ?>
                                    <?= optionWithSpace(22, "Effet sur précédentes cibles après M accumulation successives sur cibles distinctes", 3); ?>
                                </select>
                <label for="newniveauRequis">niveauRequis => </label><input type="number" name="newniveauRequis" id="newniveauRequis"><br/>
                <label for="newtypeCalcul">typeCalcul => </label><select onchange="changeTypeCalcul()" name="newtypeCalcul" style="text-align : center; width : 190px;" id="newtypeCalcul">
                    <option disabled="disabled" selected="selected" value="-1"> Choisissez le type de calcul </option>
                    <?= optionWithSpace(1, "Une caractéristique", 3); ?>
                    <?= optionWithSpace(2, "Deux caractéristiques", 3); ?>
                </select><br/>
                <label for="newcalcul1A">calcul1A => </label><input type="number" name="newcalcul1A" id="newcalcul1A">
                <label for="newcalcul1B">calcul1B => </label><input type="number" name="newcalcul1B" id="newcalcul1B" style="width:50px"><br/>
                <label for="newcalcul2A">calcul2A => </label><input type="number" name="newcalcul2A" id="newcalcul2A" style="width:50px">
                <label for="newcalcul2B">calcul2B => </label><input type="number" name="newcalcul2B" id="newcalcul2B" style="width:50px"><br/>
                <label for="newamplitude">amplitude => </label><input type="number" name="newamplitude" id="newamplitude">
                <label for="newnombreAmplitude">nombreAmplitude => </label><input type="number" name="newnombreAmplitude" id="newnombreAmplitude" style="width:50px"><br/>
                <label for="newstatistique1">statistique1 => </label><input name="newstatistique1" id="newstatistique1" style="width:50px">
                <label for="newstatistique2">statistique2 => </label><input name="newstatistique2" id="newstatistique2" style="width:50px">
                <label for="newimpact">impact => </label><input name="newimpact" id="newimpact"><br/>
                <label for="newpourcentage">pourcentage	 => </label><input name="newpourcentage" id="newpourcentage"><br/>

                <input id="Modification_demandee" name="Modification_demandee" type="hidden" value="ok">
                <input name="Id_Competence" value="<?= $competence['Id_Competence'];?>" type="hidden">
                <input type="submit" name="Modification_competence" value="Modifier">
            </form>
        </div>
    </div>




    <div class="résultat">
        <div>
            <?php $competencePoo->getNewDescriptionComplete();?>
        </div>
    </div>
</div>
<?php

function optionWithSpace($value, string $text, int $nbSpace) {
    $space="";
    for($indexSpace = 0 ; $indexSpace < $nbSpace ; $indexSpace++) {
        $space.="&nbsp;";
    }
    echo $space;
    return "<option value=\"$value \"> $space $text </option>" ;
}
?>

<script>
    function changeTypeCalcul() {
        if(parseInt(document.getElementById('typeCalcul').options[document.getElementById('typeCalcul').selectedIndex].value) === 1) {
            document.getElementById('calcul2A').disabled = true;
            document.getElementById('calcul2B').disabled = true;
            document.getElementById('calcul2A').value = '';
            document.getElementById('calcul2B').value = '';
        } else if (parseInt(document.getElementById('typeCalcul').options[document.getElementById('typeCalcul').selectedIndex].value) === 2) {
            document.getElementById('calcul2A').disabled = false;
            document.getElementById('calcul2B').disabled = false;
        }
    }
</script>
</body>
</html>