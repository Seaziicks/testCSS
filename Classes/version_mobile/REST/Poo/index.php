<html lang="fr"><head>    <link rel="stylesheet" href="css/csstest.css" type="text/css" media="screen"/>    <title>RP</title></head><body><main>    <div>        <nav id="menu">            <ul id="cool">                <li><a href="Hum.php"> <strong>Générateur d'item</strong></a></li>                <li><a href="gerer_objets.php"> <strong>Gestionnaire d'items</strong></a></li>                <li><a href="search_test.php"> <strong>Auto-complétion</strong></a></li>            </ul>        </nav>    </div>    <div class="downpage">        <div class="arbres">            <div class="image">                <a href="#" onclick="document.getElementById('character1').submit();">                    <img class="lien" src="images/bloggif_5a430e8bc1a66.jpeg" alt="Voleur">                    <form id="character1"                          method="post"                          action="characterPage.php"                          style="display: none;">                        <input type="hidden" name="characterID" value="1"/>                    </form>                </a>            </div>            <div class="image">                <a href="#" onclick="document.getElementById('character2').submit();">                    <img class="lien" src="images/bloggif_5a440fc015a0d.jpeg" alt="Paladin">                    <form id="character2"                          method="post"                          action="characterPage.php"                          style="display: none;">                        <input type="hidden" name="characterID" value="2"/>                    </form>                </a>            </div>            <div class="image">                <a href="#" onclick="document.getElementById('character3').submit();">                    <img class="lien" src="images/bloggif_5a430eb060fd8.jpeg" alt="Démoniste">                    <form id="character3"                          method="post"                          action="characterPage.php"                          style="display: none;">                        <input type="hidden" name="characterID" value="3"/>                    </form>                </a>            </div>            <div class="image">                <a href="#" onclick="document.getElementById('character4').submit();">                    <img class="lien" src="images/Nain.jpg" alt="Nain">                    <form id="character4"                          method="post"                          action="characterPage.php"                          style="display: none;">                        <input type="hidden" name="characterID" value="4"/>                    </form>                </a>            </div>            <div class="image">                <a href="#" onclick="document.getElementById('character5').submit();">                    <img class="lien" src="images/380121c8fa69507989a966917af86695.jpg" alt="Manipulateur de Sange">                </a>                <form id="character5"                      method="post"                      action="characterPage.php"                      style="display: none;">                    <input type="hidden" name="characterID" value="5"/>                </form>            </div>        </div>        <table class="nom">            <tr>                <td class="voleur">Assassin</td>                <td class="paladin"> Paladin</td>                <td class="demoniste"> Démoniste</td>                <td class="nain"> Nain</td>                <td class="manipulateurdesang"> Manipulateur de Sang</td>            </tr>        </table>    </div></main></body></html>