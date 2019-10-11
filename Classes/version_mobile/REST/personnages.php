<?php


include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT *
					from personnage  ');
			

	

	$réponse=array();
	
	while($personnage=$personnagesInfos->fetch()){
		array_push($réponse,$personnage);
	}
	
	// print_r($réponse);
	// echo json_encode($réponse);
	
	

function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
    return json_encode($arr,448);
    }else{
    return json_encode($arr);  
    }
}
/*
echo json_encode($réponse);
echo '<br><br><br><br><br><br><br><br><br><br><br>';

print_r(json_decode(json_encode($réponse)));

*/




















?>