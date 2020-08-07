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
$personnages = $bdd->query('SELECT * FROM personnage');
?>
<html lang="fr">
<head>
    <!-- ===================    CSS    =================== -->
    <link rel="stylesheet" href="css/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ===================    Page    =================== -->
    <title>Uncommitted Quest</title>
    <!-- https://game-icons.net/1x1/delapouite/scroll-quill.html -->
    <link rel="icon" href="css/images/scroll-quill.png"/>
</head>
<body>
<div class="global-wrapper">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000;">
    <a class="navbar-brand websiteIcon" href=".">
        <img src="css/images/scroll-quill.png" class="d-inline-block" alt="">
        Uncommitted Quest
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Personnages
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" data-animations="zoomIn"
                     data-hover="dropdown">
                    <a class="dropdown-item" href="#">Arbres</a>
                    <div class="dropdown-divider"></div>
                    <?php
                    while ($personnagePage = $personnages->fetch()) {
                        ?>
                        <a class="dropdown-item" href="#"
                           onclick="document.getElementById('character<?= ($personnagePage['Id_Personnage']) ?>').submit();">
                            <?php echo $personnagePage['Libellé'] ?>
                        </a>
                        <form id="character<?= ($personnagePage['Id_Personnage']) ?>"
                              method="post"
                              action="characterPage.php"
                              style="display: none;">
                            <input type="hidden" name="characterID" value="<?= ($personnagePage['Id_Personnage']) ?>"/>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Equipements
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" data-animations="zoomIn" data-hover="dropdown">
                    <a class="dropdown-item" href="#">Générateur</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Gestionnaire</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Auto-complétion</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Connexion</button>
        </form>
    </div>
</nav>
<?php $personnages->closeCursor()?>



<main class="wrapper">
    <div class="background-div"> </div>
        <div class="bg-text page-middle">
            <h1>Uncommitted Quest</h1>
            <p>Baichoo Esteban</p>
        </div>

</main>
<!-- Footer -->
<footer class="page-footer font-small blue sticky-bottom">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="color:wheat">© 2020 Copyright:
        Esteban Baichoo
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</div>

<?php include("./css/BootstrapJSImport.php") ?>
</body>
</html>