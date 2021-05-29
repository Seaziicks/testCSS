<?php
spl_autoload_register('chargerClasse');
session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

// On enregistre notre autoload.
function chargerClasse($classname)
{
    if (is_file('Poo/' . $classname . '.php'))
        require 'Poo/' . $classname . '.php';
    elseif (is_file('Poo/Manager/' . $classname . '.php'))
        require 'Poo/Manager/' . $classname . '.php';
    elseif (is_file('Poo/Classes/' . $classname . '.php'))
        require 'Poo/Classes/' . $classname . '.php';
}

include('BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$idPersonnage = isset($_POST['characterID']) ? $_POST['characterID'] : 6;

$managerPersonnage = new PersonnageManager($bdd);

$personnage = $managerPersonnage->get($idPersonnage);
$arbre = new Arbre($personnage, $bdd);

$pntsCmptnc = $bdd->query('SELECT DISTINCT sum(c.Niveau) as pntsCmptnc
                        FROM arbres a, competence c
                        WHERE c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,Colonne6,Colonne7,Colonne8,Colonne9)
                        AND a.ID_Personnage = ' . $personnage->_Id_Personnage . '');
$pointsCompetenceUtilises = $pntsCmptnc->fetch();
$pointsCompetenceUtilises = $pointsCompetenceUtilises['pntsCmptnc'];
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- ===================    CSS    =================== -->
    <?php include('css/BootstrapCSSImport.php'); ?>
    <link rel="stylesheet" href="css/equipement.css" type="text/css" media="screen"/>
    <!--Get the css fil from the character folder. Every " " (space) has been replaced by "_" in the folder name, that's why their is a str_replace
    Same is done for accents : "é" -> "e"-->
    <link rel="stylesheet" href="Characters/<?=str_replace(array(" ", "é"), array("_", "e"), $personnage->_Libellé)?>/css.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/characterPage.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/characterInfos.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/characterItems.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/competenceTree.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/characterCompetence.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="Characters/Magmaticien/css.css" type="text/css" media="screen"/>


    <!-- ===================    Js    =================== -->
    <script type="text/javascript" src="js/display.js"></script>
    <!-- ===================    Page    =================== -->
    <title>Uncommitted Quest</title>
    <!-- https://game-icons.net/1x1/delapouite/scroll-quill.html -->
    <link rel="icon" href="css/images/scroll-quill.png"/>
</head>

<body>
<div class="global-wrapper">
<?php include("navbar.php"); ?>
<div class="wrapper">
    <?php include("characterInfos.php"); ?>
    <div id="content">
        <div class="container-fluid">
            <button type="button" id="characterInfosCollapse" class="btn btn-info">
                <svg class="svg-inline--fa fa-align-left fa-w-14" style="height: 1em; width: 0.875em; vertical-align: text-bottom" aria-hidden="true" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path>
                </svg>
                <span style="vertical-align: sub;">Statistiques & Arbre</span>
            </button>
            <button type="button" id="characterItemsCollapse" class="btn btn-info" style="float: right">
                <span style="vertical-align: sub;">Equipements</span>
                <svg class="svg-inline--fa fa-align-left fa-w-14" style="height: 1em; width: 0.875em; vertical-align: text-bottom" aria-hidden="true" data-prefix="fas" data-icon="align-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M288 44v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16zM0 172v40c0 8.837 7.163 16 16 16h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16zm16 312h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm256-200H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16z"></path>
                </svg>
            </button>
        </div>
        <main class="centrer" id="mainDisplayCompetenceTree">
        </main>
        <main>
            <div id="mainDisplayCompetence"></div>
        </main>

        <?php
        $pntsCmptnc = $bdd->query('SELECT DISTINCT sum(c.Niveau) as pntsCmptnc
                        FROM arbres a, competence c
                        WHERE c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,Colonne6,Colonne7,Colonne8,Colonne9)
                        AND a.ID_Personnage = ' . $personnage->_Id_Personnage . '');
        $pointsCompetenceUtilises = $pntsCmptnc->fetch();
        $pointsCompetenceUtilises = $pointsCompetenceUtilises['pntsCmptnc'];
        ?>
    </div>
    <?php include("characterItems.php"); ?>
</div>
<?php include('footer.php');?>

</div>
<?php include('css/BootstrapJSImport.php'); ?>

<script type="text/javascript">
    let a_href = 0;
    $(document).ready(function () {
        $('#characterInfosCollapse').on('click', function () {
            $('#characterInfos').toggleClass('active');
        });
        $('#characterItemsCollapse').on('click', function () {
            $('#characterItems').toggleClass('active');
        });
    });

    window.addEventListener('click', function(e){
        if (!document.getElementById('divItemDisplay').contains(e.target) && !document.getElementById('mobile-item-wrapper').contains(e.target)){
            // Clicked outside the box
            document.getElementById('divItemDisplay').innerHTML = '';
        }
    });

</script>
<script>
    // Function allowing admin to remove property that hidden unreached competence effects.
    $(document).ready(function () {
        $("#competence").click(function () {
            $(".nonactivé").removeClass("nonactivé");
        });
    });
</script>
</body>
</html>
<?php
function modificationPointsDeCompetence(Personnage $personnage, int $pointsCompetenceUtilises) : int {
    switch ($personnage->_Id_Personnage) {
        case 6:
            /*bCar Magmaticien a "Jet de Lave" et "Canalisation" en sort de base. */
            return $pointsCompetenceUtilises - 1;
        default:
            return $pointsCompetenceUtilises;
    }
}
?>