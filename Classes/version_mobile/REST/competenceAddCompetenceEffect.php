<?php



$competencesInfos = $bdd->query('SELECT DISTINCT c.Libellé, c.Id_Competence, c.Image
								FROM competence c
								WHERE Id_Competence = ' . $_GET['id'] . ' ');

$réponse=array();

while($competence=$competencesInfos->fetch(PDO::FETCH_ASSOC)){
    $reponse = $competence;
}

function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
        return json_encode($arr,448);
    }else{
        return json_encode($arr);
    }
}