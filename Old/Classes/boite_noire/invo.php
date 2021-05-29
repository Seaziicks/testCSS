<?php


include('BDD.php');


$libellé = $_GET['libellé'];
$invo = $bdd->query('SELECT *
					from invocation 
					where Libellé =\''.$libellé.'\' ');
$invocation=$invo->fetch();				


	
	
$réponse=array('Nom'=>$invocation['Libellé'],'Description'=>$invocation['Description'],'Image'=>$invocation['Image'],'PDV'=>$invocation['PDV'],'PA'=>$invocation['PA'],'Dégâts'=>$invocation['Dégâts'],'PM'=>$invocation['PM'],'Armure'=>$invocation['Armure']);
function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
    return json_encode($arr,448);
    }else{
    return json_encode($arr);  
    }
}
echo json_encode($réponse);






















?>