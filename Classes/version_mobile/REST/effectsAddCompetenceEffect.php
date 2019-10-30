<?php



$competenceEffectsInfos = $bdd->query('SELECT ce.*, c.Niveau 
                                        FROM competenceeffect ce, competence c
                                        WHERE ce.idCompetence = '.$_GET['id'].'
                                        AND ce.idCompetence = c.Id_Competence
                                        ORDER BY effectOrder');

$réponse=array();
while($effect=$competenceEffectsInfos->fetch(PDO::FETCH_ASSOC)){

    array_push($réponse,$effect);
}

function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
        return json_encode($arr,448);
    }else{
        return json_encode($arr);
    }
}