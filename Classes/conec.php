<?php

try

{

    include("BDD.php");

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}

// Hachage du mot de passe
$pass_hache = sha1($_POST['motdepasse']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT id FROM membres WHERE pseudo = :pseudo AND pass = :pass');
$req->execute(array(
    'pseudo' => $_POST['pseudo'],
    'pass' => $pass_hache));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !'?><!--.$_POST['pseudo'].' / '.$_POST['motdepasse'].' / '.$pass_hache.''; ?>-->
	<br><a href ="<?php echo $_POST['url']?>"> Revenir à la page</a>
	<?php$req->closeCursor();
}
else
{
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    echo 'Vous êtes connecté !';	$req->closeCursor();
	header('Location: '.$_POST['url'].'');
}

?>