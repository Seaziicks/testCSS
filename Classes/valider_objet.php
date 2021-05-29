<?php



session_start();
		include("BDD.php");

		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		$data = $recherche->fetch(); //On les mets sous forme string

		$id_groupe= $data['id_groupe']; //On prend l'id qui vient d'être attribué






if (isset($id_groupe) && $id_groupe == 0) {
	$sql = $bdd->query('UPDATE equipement
						SET Validé=true
						WHERE Id_Objet='.$_POST['id_objet'].'
					')or die(print_r($bdd->errorInfo()));;
					
					echo 'Objet validé ! !';
				
					
}else{
	echo "Vous n'avez pas les droits pour valider un objet !";
}
//echo '<SCRIPT>javascript:window.close()</SCRIPT>';	

?>