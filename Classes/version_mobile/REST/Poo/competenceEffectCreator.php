<?php

spl_autoload_register('chargerClasse');
session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

// On enregistre notre autoload.
function chargerClasse($classname)
{
    require $classname.'.php';
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
        .personnages div{
            float : left;
            width:20%;
        }
        input[type="number"]{
            width : 11%;
        }
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
    </style>
    <link rel="stylesheet" href="modification_competence.css" type="text/css" media="screen"/>
    <title></title>

</head>

<body>
<div class="centre">

    <div class="original">
        <div>
            Original :	<br/><br/><br/><span class="competence"><?= $competence['Libellé'];?></span><br/><br/><?php include('modification_competence_original.php');include('effets.php'); ?>
            <?php if (!empty($competence['Exemple'])){ ?><br/><br/></br><div class="exemple"><i><?= $competence['Exemple']; ?> </i></div><?php }?>
        </div>
    </div>

    <div class="modification">
        <div>
            Modification
            <br/><br/>
            <form action="" method="post">
                Numéro de compétence : <input type="number" name="Id_Competence" value="<?= $competence['Id_Competence'];?>"style="width:40px" onload="this.select()" autofocus>
                <input type="submit" name="inscription" value="Compétence">
            </form>




            <br/>
            <form action="" method="post" id="statform">

                <input type="submit" name="Modification_competence" value="Ajouter">


                <span  class="titre_section">Caractéristiques</span><br/><br/><br/>
                effectOrder =>  <input type="number" style="text-align : center;"name="neweffectOrder" id="neweffectOrder" rows=1 cols=36 > </input>
                idCompetence => <input type="number" name="newidCompetence" id="newidCompetence" rows=3 cols=36 > </input><br/>
                actionType =>   <select type="number" name="newactionType" id="newactionType" style="width:185px">
                                    <option disabled="disabled" selected="selected" value="-1"> Choisissez le type d'action </option>
                                    <?= optionWithSpace(1, "Dommage physique", 3); ?>
                                    <?= optionWithSpace(2, "Dommage Magique", 3); ?>
                                    <?= optionWithSpace(3, "VoleDeViePhysique", 3); ?>
                                    <?= optionWithSpace(4, "VoleDeVieMagique", 3); ?>
                                    <?= optionWithSpace(5, "Soin", 3); ?>
                                    <?= optionWithSpace(6, "Bouclier", 3); ?>
                                    <?= optionWithSpace(7, "Effet", 3); ?>
                                    <?= optionWithSpace(8, "Effet avant action", 3); ?>
                                    <?= optionWithSpace(9, "Effet après action ", 3); ?>
                                    <?= optionWithSpace(10, "Effet avant attaque", 3); ?>
                                    <?= optionWithSpace(11, "Effet après attaque ", 3); ?>
                                    <?= optionWithSpace(12, "Effet avant competence", 3); ?>
                                    <?= optionWithSpace(13, "Effet après competence ", 3); ?>
                                </select><br/>
                effectType =>   <select type="number" name="neweffectType" id="neweffectType" style="width:175px"><br/>
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
                                    <?= optionWithSpace(32, "Portee", 3); ?>
                                    <?= optionWithSpace(33, "Degat", 3); ?>
                                    <?= optionWithSpace(34, "DegatDiffere", 3); ?>
                                    <?= optionWithSpace(35, "Soin", 3); ?>
                                    <?= optionWithSpace(36, "Shield", 3); ?>
                                </select><br/>

                modeApplication => <select type="number" name="newmodeApplication" style="text-align : center; width : 270px;" id="newmodeApplication" rows=1 cols=15 >
                                    <option disabled="disabled" selected="selected" value="-1"> Choisissez le type d'application de l'effet </option>
                                    <?= optionWithSpace(1, "Sois même", 3); ?>
                                    <?= optionWithSpace(2, "Cible unique", 3); ?>
                                    <?= optionWithSpace(3, "Effet de zone", 3); ?>
                                    <?= optionWithSpace(4, "Effet de rebond direct", 3); ?>
                                    <option value="" disabled="disabled"> Effet sur plusieurs tour </option>
                                    <?= optionWithSpace(5, "Canalisation", 3); ?>
                                    <?= optionWithSpace(6, "S'accumule après avoir toucher", 3); ?>
                                    <?= optionWithSpace(7, "S'accumule sur une cible particulière", 3); ?>
                                    <?= optionWithSpace(8, "Effet de zone", 3); ?>
                                    <?= optionWithSpace(9, "Effet de zone après accumulation sur N tours", 3); ?>
                                    <?= optionWithSpace(10, "Effet de zone après accumulation après avoir toucher sur N tours", 3); ?>
                                    <?= optionWithSpace(11, "Effet de zone après accumulation d'une cible particulière sur N tours", 3); ?>
                                </select>
                niveauRequis => <input type="number" name="newniveauRequis" id="newniveauRequis" rows=3 cols=36 > </input><br/>
                typeCalcul => <select onchange="changeTypeCalcul()" type="number" name="newtypeCalcul" style="text-align : center; width : 190px;" id="newtypeCalcul" rows=1 cols=15 >
                    <option disabled="disabled" selected="selected" value="-1"> Choisissez le type de calcul </option>
                    <?= optionWithSpace(1, "Une caractéristique", 3); ?>
                    <?= optionWithSpace(2, "Deux caractéristiques", 3); ?>
                </select><br/>
                calcul1A => <input type="number" name="newcalcul1A" id="newcalcul1A" rows=3 cols=36 > </input>
                calcul1B => <input type="number" name="newcalcul1B" id="newcalcul1B" style="width:50px"><br/>
                calcul2A => <input type="number" name="newcalcul2A" id="newcalcul2A" style="width:50px">
                calcul2B => <input type="number" name="newcalcul2B" id="newcalcul2B" style="width:50px"><br/>
                amplitude => <input type="number" name="newamplitude" id="newamplitude" rows=3 cols=36 > </input>
                nombreAmplitude => <input type="number" name="newnombreAmplitude" id="newnombreAmplitude" style="width:50px"><br/>
                statistique1 => <input name="newstatistique1" id="newstatistique1" style="width:50px">
                statistique2 => <input name="newstatistique2" id="newstatistique2" style="width:50px">
                impact => <input name="newimpact" id="newimpact" rows=3 cols=36 > </input><br/>
                pourcentage	 => <input name="newpourcentage" id="newpourcentage" rows=3 cols=36 > </input><br/>

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
        if(document.getElementById('typeCalcul').options[document.getElementById('typeCalcul').selectedIndex].value == 1) {
            document.getElementById('calcul2A').disabled = true;
            document.getElementById('calcul2B').disabled = true;
            document.getElementById('calcul2A').value = '';
            document.getElementById('calcul2B').value = '';
        } else if (document.getElementById('typeCalcul').options[document.getElementById('typeCalcul').selectedIndex].value == 2) {
            document.getElementById('calcul2A').disabled = false;
            document.getElementById('calcul2B').disabled = false;
        }
    }
</script>
</body>
</html>