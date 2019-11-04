<?php

include('BDD.php');

$personnagesInfos = $bdd->query('SELECT *
					from personnage  ');


$headLine = "testCSV\n";

$réponse=array();

while($personnage=$personnagesInfos->fetch(PDO::FETCH_ASSOC)){
    array_push($réponse,$personnage);
}


$keys = '';
foreach ($réponse[0] as $key => $value) {
    $keys.= $key.';';
}
$keys .= "\n";


$values = '';
foreach ($réponse as $reponse) {
    foreach ($reponse as $key => $value) {
        $values .= $value.';';
    }
    $values .= "\n";
}


$bottomLine = "testCSV\n";



// 1 : on ouvre le fichier
$monfichier = fopen('C:/Users/LJBS7218/Desktop/test.csv', 'a+');

// 2 : on fera ici nos opérations sur le fichier...

$texte = $headLine.''.$keys.''.$values.''.$bottomLine;
echo $texte;
fwrite($monfichier, $texte);

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
