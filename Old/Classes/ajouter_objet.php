<?php



session_start();
		include("BDD.php");

		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		$data = $recherche->fetch(); //On les mets sous forme string

		$id_groupe= $data['id_groupe']; //On prend l'id qui vient d'être attribué






if (isset($id_groupe) && $id_groupe == 0) {


	if(empty($_POST['statistique_principale']))
		$_POST['statistique_principale']='NULL';
	else
		$_POST['statistique_principale']='"'.$_POST['statistique_principale'].'"';
	
	if(empty($_POST['propriété_magique1']))
		$_POST['propriété_magique1']='NULL';
	else
		$_POST['propriété_magique1']='"'.$_POST['propriété_magique1'].'"';
	
	
	if(empty($_POST['propriété_magique2']))
		$_POST['propriété_magique2']='NULL';
	else
		$_POST['propriété_magique2']='"'.$_POST['propriété_magique2'].'"';
	
	
	if(empty($_POST['propriété_magique3']))
		$_POST['propriété_magique3']='NULL';
	else
		$_POST['propriété_magique3']='"'.$_POST['propriété_magique3'].'"';
	
	
	if(empty($_POST['propriété_magique4']))
		$_POST['propriété_magique4']='NULL';
	else
		$_POST['propriété_magique4']='"'.$_POST['propriété_magique4'].'"';
	
	
	if(empty($_POST['val']))
		$_POST['val']='NULL';

	
	
	if(empty($_POST['val2']))
		$_POST['val2']='NULL';

	
	
	if(empty($_POST['valeur1']))
		$_POST['valeur1']='NULL';
	
	
	if(empty($_POST['valeur2']))
		$_POST['valeur2']='NULL';
	
	
	if(empty($_POST['valeur3']))
		$_POST['valeur3']='NULL';
	
	
	if(empty($_POST['valeur4']))
		$_POST['valeur4']='NULL';
	
	echo $_POST['statistique_principale'].' ';
	echo $_POST['propriété_magique1'].' ';
	echo $_POST['propriété_magique2'].' ';
	echo $_POST['propriété_magique3'].' ';
	echo $_POST['propriété_magique4'].' ';
	echo $_POST['val'].' ';
	echo $_POST['val2'].' ';
	echo $_POST['valeur1'].' ';
	echo $_POST['valeur2'].' ';
	echo $_POST['valeur3'].' ';
	echo $_POST['valeur4'].'<br><br><br><br><br><br><br>';
	







 
$sql = $bdd->query('INSERT INTO equipement(Statistique_principale,Val,Val2,PropriétéMagique1,PropriétéMagique2,PropriétéMagique3,PropriétéMagique4,Valeur1,Valeur2,Valeur3,Valeur4,Nom,Image,Couleur,Rareté,Type,Niveau,Emplacement,Validé) 
					VALUES(
						'.$_POST['statistique_principale'].',
						'.$_POST['val'].',
						'.$_POST['val2'].',
						'.$_POST['propriété_magique1'].',
						'.$_POST['propriété_magique2'].',
						'.$_POST['propriété_magique3'].',
						'.$_POST['propriété_magique4'].',
						'.$_POST['valeur1'].',
						'.$_POST['valeur2'].',
						'.$_POST['valeur3'].',
						'.$_POST['valeur4'].',
						"'.$_POST['nom'].'",
						"'.$_POST['image'].'",
						"'.$_POST['couleur'].'",
						'.$_POST['rareté'].',
						"'.$_POST['équipement'].'",
						'.$_POST['niveau'].',
						"'.$_POST['emplacement'].'",
						false
					)
					')or die(print_r($bdd->errorInfo()));;
					
					echo 'Objet enregistré !';
				
					
}
	$recherche->closeCursor();
echo '<SCRIPT>javascript:window.close()</SCRIPT>';	

?>