<?php



$competenceEffectInfos = $bdd->query('SELECT ce.*, c.Niveau 
                                        FROM competenceeffect ce, competence c
                                        WHERE ce.idCompetenceEffect = '.$_GET['id'].'
                                        AND ce.idCompetence = c.Id_Competence');

$réponse=array();
while($effect=$competenceEffectInfos->fetch(PDO::FETCH_ASSOC)){
    $réponse = $effect;
    $reponse['pourcentage'] = $reponse['pourcentage'] == 0 ? false : true;
}


function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
        return json_encode($arr,448);
    }else{
        return json_encode($arr);
    }
}