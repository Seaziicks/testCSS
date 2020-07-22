<?php

include('BDD.php');

$newString = '%';
for ( $i = 0 ; $i < strlen($_GET['s']) ; $i++) {
    $newString .= $_GET['s'][$i].'%';
}

$competences = $bdd->query('SELECT DISTINCT Libellé, Image, min(Cout_En_PA) as PA
								FROM competence
                                WHERE Libellé LIKE \''.$newString.'\'
								group by Libellé, Cout_En_PA
								ORDER BY Libellé');                                    // Je récupère toutes les compétences qui macth la recherche.

$data = $competences->fetchAll(PDO::FETCH_ASSOC);
$dataLen = count($data);
sort($data); // On trie les compétences dans l'ordre alphabétique
// print("<pre>".print_r($data,true)."</pre>");
$results = array(); // Le tableau où seront stockés les résultats de la recherche

// La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats
$j = 0;
$nb_results_voulus = 19;
for ($i = 0; $i < $dataLen && count($results) < $nb_results_voulus; $i++) {
    if (strlen($data[$i]['Libellé']) > 0 && stripos($data[$i]['Libellé'], $_GET['s']) === 0) { // Si le nom de la competence commence par les mêmes caractères que la recherche
        $competence['Competence'] = $data[$i]['Libellé'];
        $competence['Image'] = $data[$i]['Image'];
        $competence['PA'] = $data[$i]['PA'];
        array_push($results, $competence);
        $j++;
    }
}
for ($i = 0; $i < $dataLen && count($results) < $nb_results_voulus; $i++) {
    if (strlen($data[$i]['Libellé']) > 0 && gettype(array_search($data[$i]['Libellé'], array_column($results, 'Competence'))) == 'boolean') { // Si le nom de la competence commence par les mêmes caractères que la recherche
        $competence['Competence'] = $data[$i]['Libellé'];
        $competence['Image'] = $data[$i]['Image'];
        $competence['PA'] = $data[$i]['PA'];
        array_push($results, $competence);
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
