<?php

try

{



    include("BDD.php");

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}
?>

<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))&& (isset($_POST['email']) && !empty($_POST['email']) )) {
	// on teste les deux mots de passe
	if ($_POST['pass'] != $_POST['pass_confirm']) {
		$erreur = 'Les 2 mots de passe sont différents.';
	}
	else {
		

		// on recherche si ce login est déjà utilisé par un autre membre
		$req = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_POST['login'].'"') or die(print_r($bdd->errorInfo()));
		$data = $req->fetch();

		if ($data[0] == 0) { //Si le membre peut être créé :
		$pass_hache = sha1($_POST['pass']); //On code le mot de passe grâce à sha1
		$sql = $bdd->query('INSERT INTO membres(pseudo,pass,email,date_inscription,id_groupe) VALUES("'.$_POST['login'].'", "'.$pass_hache.'", "'.$_POST['email'].'",CURDATE(),1)') or die(print_r($bdd->errorInfo())); // On crée le membre
		
		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_POST['login'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour connecter le nouveau membre
		$data = $recherche->fetch(); //On les mets sous forme string
		$id= $data['id']; //On prend l'id qui vient d'être attribué
		session_start(); //On démarre la session du membre
		$_SESSION['pseudo'] = $_POST['login']; //On met le pseudo que le membre a rentré dans $_SESSION
		$_SESSION['id'] = $id; //On met l'id qu'on a récupéré dans $_SESSION
		header('Location: '.$_POST['url'].''); //On redirige le membre vers la page d'où il vient.
		exit();
		}
		else {
		$erreur = 'Un membre possède déjà ce login.';
		}
	}
	}
	else {
	$erreur = 'Au moins un des champs est vide.';
	}
}
?>
<html>
<head>
  <meta charset="UTF-8">		
  <title>Mon RP - Inscription</title>

</head>



<body>



<div align=center>
<table>
	<tr>
		<td>Pseudo :</td>
		<td> <form action="page_inscription.php" method="post"> <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>" placeholder="Pseudo"> </td>
	</tr>
	<tr>
		<td>Mot de passe :</td>
		<td> <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>" placeholder="Mot de passe"> </td>
	</tr>
	<tr>
		<td>Confirmez le mot de passe :</td>
		<td> <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>" placeholder="Mot de passe"> </td>
	</tr>
	<tr>
		<td>Adresse mail : </td>
		<td> <input type="text" name="email" value="<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?>" placeholder="xy@base.domaine"> </td>
	</tr>
	<tr> <td> </td> <td> <input type="hidden" name="url" value="<?php echo $_POST['url'] ?>" /> <input type="submit" name="inscription" value="Inscription"> </form> </td> </tr> <!-- On transmet l'url de la page d'avant -->

</table>
<div>
<?php
if (isset($erreur)) echo '<br />',$erreur,'</br>';



?>




</body>
</html>





<!--<div>
<form id="connexionprincipal" name="connexionprincipal" action="inscri.php" method="post">
	Pseudo : <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"/></br>
	Mot de passe : <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" /></br>
	Retapez le mot de passe : <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" /></br>
	Adresse mail : <input type="text" name="email" id="email" placeholder="xy@base.domaine" /></br>
	<input type="submit" name="connect" id="connect" value="Ok">
	</form>

</div>
-->


<!--
<div align=center>
<table>
	<tr>
		<td>Pseudo :</td>
		<td> <form id="connexionprincipal" name="connexionprincipal" action="inscri.php" method="post"> <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"/> </td>
	</tr>
	<tr>
		<td>Mot de passe :</td>
		<td> <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" /> </td>
	</tr>
	<tr>
		<td>Retapez le mot de passe :</td>
		<td> <input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" /> </td>
	</tr>
	<tr>
		<td>Adresse mail : </td>
		<td> <input type="text" name="email" id="email" placeholder="xy@base.domaine" /> </td>
	</tr>
	<tr> <td> </td> <td> <input type="submit" name="connect" id="connect" value="Valider"> </form> </td> </tr>

</table>
<div>-->
