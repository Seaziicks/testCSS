<?php
try
{
    include("BDD.php");
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}
session_start();
	if(isset($_SESSION['pseudo'])){
		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

				$data = $recherche->fetch(); //On les mets sous forme string

				$id_groupe= $data['id_groupe']; //On prend l'id qui vient d'être attribué
				
		if (isset($id_groupe) && $id_groupe == 0) {
			
			
			//$personnage=$_POST['personnage'];
			
			$competences = $bdd->query('SELECT *
											from arbres a, competence c
											where c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
											Colonne6,Colonne7,Colonne8,Colonne9)
											and c.niveau > 0');
			$competencea=$competences->fetchAll();
			for($i=0;$i<count($competencea);$i++){
				$competence=$competencea[$i];
				
				if($competence['Cooldown']>0){
					$req = $bdd->prepare('UPDATE competence SET Cooldown = '.($competence['Cooldown']-1).' WHERE id_competence = :id');

					$req->execute(array('id' => $competence['Id_Competence']));
					$req->closeCursor();
				}
			}
			$competences->closeCursor();
			$recherche->closeCursor();
			header('Location: combat.php');
		}
	}else{
		$recherche->closeCursor();
		echo "Vous n'avez pas les droits pour gérer les combats.";?><br><a href="combat.php">Revenir à la page précédente</a><?php
	}
