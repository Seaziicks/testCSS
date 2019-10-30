<?php



$competencesInfos = $bdd->query('SELECT DISTINCT c.Libellé, c.Id_Competence, c.Image
								FROM arbres a, competence c
								WHERE ID_Personnage = ' . $_GET['id'] . ' 
								AND c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
								Colonne6,Colonne7,Colonne8,Colonne9)
								ORDER BY Spécialité, Rang DESC');

$réponse=array();

while($competence=$competencesInfos->fetch(PDO::FETCH_ASSOC)){

    array_push($réponse,$competence);
}

function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
        return json_encode($arr,448);
    }else{
        return json_encode($arr);
    }
}