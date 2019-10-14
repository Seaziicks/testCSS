<?php
spl_autoload_register('chargerClasse');
session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

// On enregistre notre autoload.
function chargerClasse($classname)
{
    require $classname.'.php';
}


$db = new PDO('mysql:host=localhost;dbname=modifications(zone tampon);charset=utf8', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.



$managerPersonnage = new PersonnageManager($db);

$personnage = $managerPersonnage->get(6);

$arbre = new Arbre($personnage, $db);
?>

<html lang="fr">

<head>
    <link rel="stylesheet" href="equipement.css" type="text/css" media="screen"/>

    <link rel="stylesheet" href="css.css" type="text/css" media="screen"/>

    <link rel="stylesheet" href="Paladin/css.css" type="text/css" media="screen"/>

    <link rel="stylesheet" href="../Police/Luminari/style.css">

    <script type="text/javascript" src="inlinemod.js"></script>

    <script type="text/javascript" src="inlinemod2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#competence").click(function(){
                $(".nonactivé").removeClass("nonactivé");
            });
        });
    </script>
    <title>Test</title>
</head>

<body>


<?php include("menutest.php"); ?>

<main class="centrer">

    <?php
    $arbre->displayArbre();
    ?>

</main>

<?php
$pointsCompétenceUtilisés=0;
$personnage = $managerPersonnage->get(6);
?>
<div class="footer"><div class="resistant"><?php include("barre_membre.php");?></div> <?php include('personnage.php');?> </div>



<?php include("equipements.php"); ?>


<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.
</body>

</html>