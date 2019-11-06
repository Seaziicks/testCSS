<?php

$cibleListes =  array();

$listeCibles1 = array();
$listeCibles2 = array();
$listeCibles3 = array();

for($index = 0 ; $index < 10 ; $index++){
    array_push($listeCibles1, $index + 1);
    array_push($listeCibles2, $index + 1);
    array_push($listeCibles3, $index + 1);
}

array_push($cibleListes, $listeCibles1);
array_push($cibleListes, $listeCibles2);
array_push($cibleListes, $listeCibles3);

$jsonEncoded = json_encode($cibleListes).'<br/> ';
// echo json_last_error().'<br/> ';
// echo json_last_error_msg().'<br/> ';


echo $jsonEncoded;
// print_r($jsonEncoded);
echo '<br/><br/><br/><br/> '.strlen($jsonEncoded);

echo '<br/><br/><br/><br/> '.json_decode($jsonEncoded);