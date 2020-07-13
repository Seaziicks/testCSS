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

include('/BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$idPersonnage = $_POST['characterID'];

$managerPersonnage = new PersonnageManager($bdd);

$personnage = $managerPersonnage->get($idPersonnage);
$arbre = new Arbre($personnage, $bdd);


/* Vu que j'ai passé la page en post request, et que le site n'est pas fini, bah ... Faut y aller par des moyens détournés.
var f = document.createElement('form');
f.action='http://localhost/testCSS/Classes/version_mobile/REST/Poo/characterPage.php';
f.method='POST';
f.target='_blank';

var i=document.createElement('input');
i.type='hidden';
i.name='characterID';
i.value=1;
f.appendChild(i);

document.body.appendChild(f);
f.submit();
 */
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="equipement.css" type="text/css" media="screen"/>

    <link rel="stylesheet" href="css.css" type="text/css" media="screen"/>
    <!--Get the css fil from the character folder. Every " " (space) has been replaced by "_" in the folder name, that's why their is a str_replace
    Same is done for accents : "é" -> "e"-->
    <link rel="stylesheet" href="<?=str_replace(array(" ", "é"), array("_", "e"), $personnage->_Libellé)?>/css.css" type="text/css" media="screen"/>

    <link rel="stylesheet" href="../Police/Luminari/style.css">

    <script type="text/javascript" src="inlinemod.js"></script>

    <script type="text/javascript" src="inlinemod2.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        // Function allowing admin to remove property that hidden unreached competence effects.
        $(document).ready(function(){
            $("#competence").click(function(){
                $(".nonactivé").removeClass("nonactivé");
            });
        });
    </script>
    <title>Test</title>
</head>

<body>


<?php include("TestMenu.php"); ?>

<main class="centrer">

    <?php
    $arbre->displayArbre();
    ?>

</main>

<?php
$pointsCompétenceUtilisés=0;
?>
<div class="footer"><div class="resistant"><?php include("barre_membre.php");?></div> <?php include('personnage.php');?> </div>



<?php include("equipements.php"); ?>


<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.<br/>.
</body>

</html>