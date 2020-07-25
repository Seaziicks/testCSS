<?php
spl_autoload_register('chargerClasse');
session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

// On enregistre notre autoload.
function chargerClasse($classname)
{
    if (is_file('Poo/'.$classname.'.php'))
        require 'Poo/'.$classname.'.php';
    elseif (is_file('Poo/Manager/'.$classname.'.php'))
        require 'Poo/Manager/'.$classname.'.php';
    elseif (is_file('Poo/Classes/'.$classname.'.php'))
        require 'Poo/Classes/'.$classname.'.php';
}

include('BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$idPersonnage = isset($_POST['characterID']) ? $_POST['characterID'] : 1;

$managerPersonnage = new PersonnageManager($bdd);

$personnage = $managerPersonnage->get($idPersonnage);
$arbre = new Arbre($personnage, $bdd);

?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- ===================    CSS    =================== -->
    <?php include('css/BootstrapCSSImport.php');?>
    <link rel="stylesheet" href="css/equipement.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen"/>
    <!--Get the css fil from the character folder. Every " " (space) has been replaced by "_" in the folder name, that's why their is a str_replace
    Same is done for accents : "é" -> "e"-->
    <link rel="stylesheet" href="Characters/<?=str_replace(array(" ", "é"), array("_", "e"), $personnage->_Libellé)?>/css.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="../Police/Luminari/style.css">
    <script type="text/javascript" src="inlinemod.js"></script>
    <script type="text/javascript" src="inlinemod2.js"></script>
    <script>
        // Function allowing admin to remove property that hidden unreached competence effects.
        $(document).ready(function(){
            $("#competence").click(function(){
                $(".nonactivé").removeClass("nonactivé");
            });
        });
    </script>
    <!-- ===================    Page    =================== -->
    <title>Uncommitted Quest</title>
    <!-- https://game-icons.net/1x1/delapouite/scroll-quill.html -->
    <link rel="icon" href="css/images/scroll-quill.png"/>
</head>

<body>


<?php include("navbar.php"); ?>

<main class="centrer">

    <?php
    $arbre->displayArbre();
    ?>

</main>

<?php
$pntsCmptnc = $bdd->query('SELECT DISTINCT sum(c.Niveau) as pntsCmptnc
                        FROM arbres a, competence c
                        WHERE c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,Colonne6,Colonne7,Colonne8,Colonne9)
                        AND a.ID_Personnage = '.$personnage->_Id_Personnage.'');
$pointsCompetenceUtilises = $pntsCmptnc->fetch();
$pointsCompetenceUtilises = $pointsCompetenceUtilises['pntsCmptnc'];
?>
<div class="footer"><div class="resistant"></div> <?php include('personnage.php');?> </div>



<?php include("equipements.php"); ?>


<?php include('footer.php');
include('css/BootstrapJSImport.php');?>
</body>

</html>