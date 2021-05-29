<?php

include('BDD.php');

$sqlPattern = "%";
for ($i = 0; $i < mb_strlen($_GET['pattern']); $i++) {
    $sqlPattern .= mb_substr($_GET['pattern'], $i, 1, 'UTF-8')."%"; // In order to handle UTF-8, specially french accents ("é", "è", etc ...)
}
$caseSensitive = isset($_GET['caseSensitive']) ? $_GET['caseSensitive'] : 'false';

$competences = $bdd->query('SELECT DISTINCT Libellé, Image, min(Cout_En_PA) as PA
								FROM competence
                                WHERE Libellé LIKE \'' . $sqlPattern . '\'
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
    if (strlen($data[$i]['Libellé']) > 0
        && stripos($data[$i]['Libellé'], $_GET['pattern']) === 0
        && like_match($sqlPattern, $data[$i]['Libellé'], filter_var($caseSensitive,FILTER_VALIDATE_BOOLEAN))) { // Si le nom de la competence commence par les mêmes caractères que la recherche
        $competence['Competence'] = $data[$i]['Libellé'];
        $competence['Image'] = $data[$i]['Image'];
        $competence['PA'] = $data[$i]['PA'];
        array_push($results, $competence);
        $j++;
    }
}
for ($i = 0; $i < $dataLen && count($results) < $nb_results_voulus; $i++) {
    if (strlen($data[$i]['Libellé']) > 0
        && array_search($data[$i]['Libellé'], array_column($results, 'Competence')) === FALSE
        && like_match($sqlPattern, $data[$i]['Libellé'], filter_var($caseSensitive,FILTER_VALIDATE_BOOLEAN))) { // Si le nom de la competence commence par les mêmes caractères que la recherche
        $competence['Competence'] = $data[$i]['Libellé'];
        $competence['Image'] = $data[$i]['Image'];
        $competence['PA'] = $data[$i]['PA'];
        array_push($results, $competence);
        $j++;
    }
}

/**
 * SQL Like operator in PHP.
 * Returns TRUE if match else FALSE.
 * @param string $pattern
 * @param string $subject
 * @param bool $isCaseSensitive
 * @return bool
 */
function like_match($pattern, $subject, $isCaseSensitive)
{
    $pattern = str_replace('%', '.*', preg_quote($pattern, '/'));
    $caseSensitive = $isCaseSensitive ? '' : 'i';
    return (bool) preg_match("/^{$pattern}$/$caseSensitive", $subject);
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
