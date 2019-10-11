<?php

include('BDD.php');

$competences = $bdd->query('SELECT DISTINCT Libellé,Image,min(Cout_En_PA)
								FROM competence
								group by Libellé,Cout_En_PA
								ORDER BY Libellé');									// Je récupère toutes les compétences de voleur, triées par Spécialité, puis Rang, puis Ordre.
																						// Je considère la première Spécialité en train de se faire. Initialisation de la boucle des Spécialité.
	$resultat = $competences->fetchAll();
	// print_r($resultat[2]);
	$serialized = serialize($resultat);
	
	$data = unserialize($serialized);
	
	$dataLen = count($data);
	
	sort($data); // On trie les villes dans l'ordre alphabétique
	
	$results = array(); // Le tableau où seront stockés les résultats de la recherche
	
	// La boucle ci-dessous parcourt tout le tableau $data, jusqu'à un maximum de 10 résultats
	$j=1;
	$nb_results_voulus=19;
	for ($i = 0 ; $i < $dataLen && count($results) < $nb_results_voulus*3 ; $i++) { //Modifier le multiplicateur en fonction du nombre de paramètres passés.
	    if (stripos($data[$i][0], $_GET['s']) === 0) { // Si la valeur commence par les mêmes caractères que la recherche
			// print_r($data[$i]);
	        // array_push($results, $data[$i][0]); // On ajoute alors le résultat à la liste à retourner
			$results['Competence'.$j]=$data[$i][0];
			$results['Image'.$j]=$data[$i][1];
			$results['PA'.$j]=$data[$i][2];
			$j++;
	    }
	}
	for ($i=0; $i < $dataLen && count($results) < $nb_results_voulus*3 ; $i++) { //Modifier le multiplicateur en fonction du nombre de paramètres passés.
		if(stripos($data[$i][0], $_GET['s'])) { // Si la valeur commence par les mêmes caractères que la recherche
			// print_r($data[$i]);
	        // array_push($results, $data[$i][0]); // On ajoute alors le résultat à la liste à retourner
			$results['Competence'.$j]=$data[$i][0];
			$results['Image'.$j]=$data[$i][1];
			$results['PA'.$j]=$data[$i][2];
			$j++;
	    }
	}
	// print_r($results);
	// echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |
	
function EnJson($arr , $format = 0){
    header('Content-type: application/json;charset=utf-8'); //Setting the page Content-type
    if($format){
    return json_encode($arr,448);
    }else{
    return json_encode($arr);  
    }
}
echo EnJson($results,true);
	

?>