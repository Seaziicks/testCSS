<?php

//On sort en cas de paramètre manquant ou invalide

if(empty($_GET['id']) or empty($_GET['type']) or empty($_GET['champ']) or empty($_GET['val'])
   or !is_numeric($_GET['id'])
        )
{
    exit;
}
try
{
    include("BDD.php");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

session_start();



$caract = $_GET['champ'];

switch ($caract) {

	case 'Niveau': 
		$table = 'Niveau'; 
	break;

	case 'Force': 
		$table = 'Force'; 
	break;

	case 'Agilité': 
		$table = 'Agilité'; 
	break;

	case 'Intelligence': 
		$table = 'Intelligence'; 
	break;
	
	case 'Vitalité': 
		$table = 'Vitalité'; 
	break;
	
	case 'Ressource': 
		$table = 'Ressource'; 
	break;
	case 'Réussite': 
		$table = 'Réussite'; 
	break;
	
	case 'Charisme': 
		$table = 'Charisme'; 
	break;
	
	case 'Marchandage': 
		$table = 'Marchandage'; 
	break;
	
	case 'Intimidation': 
		$table = 'Intimidation'; 
	break;
	
	case 'Chance': 
		$table = 'Chance'; 
	break;
	
	case 'Inventaire': 
		$table = 'Inventaire'; 
	break;

}



		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		$data = $recherche->fetch(); //On les mets sous forme string

		$id_groupe= $data['id_groupe']; //On prend l'id qui vient d'être attribué

		


		

if (isset($id_groupe) && $id_groupe == 0) {

switch($_GET['type'])
{
    case 'texte':
    case 'texte-multi':
		
	$req = $bdd->prepare('UPDATE personnage SET '.$table.' = "'.$_GET['val'].'" WHERE Id_Personnage = :carac');

	$req->execute(array('carac' => $_GET['id'],));

	break;
	
	case 'nombre':
	$req = $bdd->prepare('UPDATE competence SET '.$table.' = '.intval($_GET['val']).' WHERE Id_Competence = :carac');

	$req->execute(array('carac' => $_GET['id']));
        break;
	$req->closeCursor();
    default:
        exit;
}



echo $table. ' ' . $_POST['nouvelle_valeur']. ' ' . $_POST['caracteristique'];
$recherche->closeCursor();
header('Location: paladin.php');

}



else {

	echo "Vous n'avez pas les droits pour modifier ces valeurs. Veuillez contatcer un modérateur.";

	echo $id_groupe, $_SESSION['pseudo'];
$recherche->closeCursor();
}

?>

