<?phpif (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) {    $recherche = $bdd->query('SELECT * FROM membres WHERE pseudo=\'' . $_SESSION['pseudo'] . '\'') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.    $data = $recherche->fetch(); //On les mets sous forme string    $id_groupe = $data['id_groupe']; //On prend l'id qui vient d'être attribué    ?>    <div id="barre">        <div id="barre1"><p>Bonjour <strong><?php echo $_SESSION['pseudo']; ?></strong>            </p> <?php if ($id_groupe == 0) { ?>                <button id="competence">Faire apparaître le texte</button><?php } ?></div>        <div id="barre2"><p>Je vous souhaite une bonne navigation. </p></div>        <div id="barre3">            <form action="espaceclient.php" method="post"><input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'] ?>"/> <input                        type="submit" value="Espace Client"/></form>        </div>        <div id="barre4">            <form action="deconec.php" method="post"><input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'] ?>"/> <input                        type="submit" value="Déconnexion"/></form>        </div>    </div>    <?php    $recherche->closeCursor();} else {    ?>    <div id="barre">        <div id="barre1"><p>Bonjour !</p></div>        <div id="barre2"><p>N'hésitez pas à vous inscrire, ou à vous connecter !</p></div>        <div id="barre3">            <form action="page_inscription.php" method="post"><input type="hidden" name="url" value="<?php echo $_SERVER['REQUEST_URI'] ?>"/>                <input type="submit" value="Inscription"/></form>        </div>        <div id="barre4">            <form id="connexionprincipal" name="connexionprincipal" action="conec.php" method="post">                <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"/>                <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe"/>                <input type='hidden' name='url' value=<?php echo $_SERVER['REQUEST_URI'] ?> id='url'/>                <input type="submit" name="connect" id="connect" value="Ok">            </form>        </div>    </div>    <?php}