<?phpinclude("BDD.php");$personnages = $bdd->query('SELECT * FROM personnage');?><div>    <nav id="menu">        <ul id="cool">            <li>                <a href="index.php"> <strong>Accueil</strong></a>            </li>            <?php            while ($personnagePage = $personnages->fetch()) {                ?>                <li>                    <a href="#" onclick="document.getElementById('character<?= ($personnagePage['Id_Personnage']) ?>').submit();">                        <strong> <?php echo $personnagePage['Libellé'] ?></strong>                    </a>                    <form id="character<?= ($personnagePage['Id_Personnage']) ?>"                          method="post"                          action="characterPage.php"                          style="display: none;">                        <input type="hidden" name="characterID" value="<?= ($personnagePage['Id_Personnage']) ?>" />                    </form>                </li>                <?php            }            ?>        </ul>    </nav></div>