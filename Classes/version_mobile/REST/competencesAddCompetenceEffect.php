<?php



$competencesInfos = $bdd->query('SELECT DISTINCT c.Libellé, c.Id_Competence, c.Image
								FROM arbres a, competence c
								WHERE ID_Personnage = ' . $_GET['id'] . ' 
								AND c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
								Colonne6,Colonne7,Colonne8,Colonne9)
								ORDER BY c.Libellé');

$futurCompetencesInfos = $bdd->query('SELECT Libellé, Id_Competence, Image
								FROM competence , learnedcompetence
								WHERE idPersonnage = ' . $_GET['id'] . ' 
								ORDER BY Libellé');

$reponse=array();

while($competence=$competencesInfos->fetch(PDO::FETCH_ASSOC)){

    array_push($reponse,$competence);
}

while($competence=$futurCompetencesInfos->fetch(PDO::FETCH_ASSOC)){

    array_push($reponse,$competence);
}