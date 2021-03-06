<?php
declare(strict_types=1);
include("BDD.php");
$personnages = $bdd->query('SELECT * FROM personnage');
?>
<nav class="navbar navbar-expand-lg navbar-dark">
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
                    <a class="dropdown-item" href="Hum.php">Générateur</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="gerer_objets.php">Gestionnaire</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="search_test.php">Auto-complétion</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="signIn.php" method="post">
            <input type='hidden' name='previousUrl' value="<?php echo $_SERVER['REQUEST_URI'] ?>" id='previousUrlInput' />
            <button class="btn btn-outline-perso my-2 my-sm-0" type="submit">Connexion</button>
        </form>
    </div>
</nav>
<?php $personnages->closeCursor()?>