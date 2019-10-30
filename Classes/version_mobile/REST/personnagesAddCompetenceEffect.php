<?php



$personnagesInfos = $bdd->query('SELECT *
					from personnage  ');




$EquipementManager = new EquipementPortesManager($bdd);
$réponse=array();

while($personnage=$personnagesInfos->fetch(PDO::FETCH_ASSOC)){

    $panoplie = $EquipementManager->getListForCharacter($personnage['Id_Personnage']);
    $personnage = $panoplie->insertAllBonusesIntoArray($personnage);

    array_push($réponse,$personnage);
}

function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
        return json_encode($arr,448);
    }else{
        return json_encode($arr);
    }
}