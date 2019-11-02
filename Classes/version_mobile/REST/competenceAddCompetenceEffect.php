<?php



$competencesInfos = $bdd->query('SELECT DISTINCT c.Libellé, c.Id_Competence, c.Image
								FROM competence c
								WHERE Id_Competence = ' . $_GET['id'] . ' ');

$reponse;

while($competence=$competencesInfos->fetch(PDO::FETCH_ASSOC)){
    $reponse = $competence;
}