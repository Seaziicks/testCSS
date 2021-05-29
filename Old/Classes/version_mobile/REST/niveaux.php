<?php


include('../BDD.php');



	$personnagesInfos = $bdd->query('SELECT *
						from personnage  ');
			

	$niveaux = $bdd->query('SELECT *
							FROM statistiques
							WHERE ID_Personnage = '.$_GET['id'].' ');	

	$réponse=array();
	
	while($niveau=$niveaux->fetch(PDO::FETCH_ASSOC)){
		array_push($réponse,$niveau);
	}				
	
	

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