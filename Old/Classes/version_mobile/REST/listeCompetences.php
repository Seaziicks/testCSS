<?php
include('../BDD.php');


$idCompetence = $_GET['id'];
$personnagesInfos = $bdd->query('SELECT *
					from personnage
					where Id_Personnage='.$_GET['id'].'');
	$personnage=$personnagesInfos->fetch();
	
	$nomPersonnage=$personnage["Libellé"];
	


	$competences = $bdd->query('SELECT DISTINCT ID_Competence
								FROM arbres,competence
								WHERE Personnage = \'' . $nomPersonnage . '\' 
                                AND ID_Competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,Colonne6,Colonne7,Colonne8,Colonne9)
                                AND Niveau != 0
								ORDER BY Spécialité, Rang DESC');									// Je récupère toutes les compétences de voleur, triées par Spécialité, puis Rang, puis Ordre.

								
								
	$réponse=array();
	while($resultat = $competences->fetch()){
				
		$fin = $bdd->query('SELECT Libellé,Image,ID_Competence
					FROM competence
					WHERE  Id_Competence = \'' . $resultat['ID_Competence'] . '\'');					// Sélection de la compétence correspondante dans la table des Compétences.
		$competence = $fin->fetch();	
		
		$tableau['Nom_Competence'] = $competence['Libellé'];
		if(isset($competence['Image']) && !is_null($competence['Image'])){$tableau['Image'] = $competence['Image'];}else{$tableau['Image'] = NULL;}
		if(isset($competence['ID_Competence']) && !is_null($competence['ID_Competence'])){$tableau['Id_Competence'] = $competence['ID_Competence'];}else{$tableau['Id_Competence'] = NULL;}
	
		array_push($réponse,$tableau);						
					
	}					


?>