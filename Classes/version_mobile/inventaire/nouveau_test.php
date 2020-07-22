<?php

include('BDD.php');

$competences = $bdd->query('SELECT DISTINCT Libellé,Image,min(Cout_En_PA)
			FROM competence
			group by Libellé,Cout_En_PA
			ORDER BY Libellé');                                    // Je récupère toutes les compétences.

$data = $competences->fetchAll();
$dataLen = count($data);

sort($data); // On trie les compétences dans l'ordre alphabétique

$results = array(); // Le tableau où seront stockés les résultats de la recherche

// La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats
$j = 0;
$nb_results_voulus = 19;
for ($i = 0; $i < $dataLen && count($results) < $nb_results_voulus; $i++) {
    if (stripos($data[$i][0], $_GET['s']) === 0) { // Si le nom de la competence commence par les mêmes caractères que la recherche
        $results[$j]['Competence'] = $data[$i][0];
        $results[$j]['Image'] = $data[$i][1];
        $results[$j]['PA'] = $data[$i][2];
        $j++;
    }
}
for ($i = 0; $i < $dataLen && count($results) < $nb_results_voulus; $i++) {
    if (stripos($data[$i][0], $_GET['s'])) { // Si le nom de la competence contient les caracteres de la recherche
        $results[$j]['Competence'] = $data[$i][0];
        $results[$j]['Image'] = $data[$i][1];
        $results[$j]['PA'] = $data[$i][2];
        $j++;
    }
}

function EnJson($arr, $format = 0)
{
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if ($format) 
        return json_encode($arr, 448);
    else 
        return json_encode($arr);
    
}

echo EnJson($results, true);


?>
