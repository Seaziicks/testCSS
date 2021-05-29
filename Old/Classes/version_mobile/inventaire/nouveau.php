<?php

include('BDD.php');

$competences = $bdd->query('SELECT DISTINCT Libellé 
								FROM competence
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
	
	for ($i = 0 ; $i < $dataLen && count($results) < 25 ; $i++) {
	    if (stripos($data[$i][0], $_GET['s']) === 0) { // Si la valeur commence par les mêmes caractères que la recherche
			// print_r($data[$i]);
	        array_push($results, $data[$i][0]); // On ajoute alors le résultat à la liste à retourner
	
	    }
		if (stripos($data[$i][0], $_GET['s'])) { // Si la valeur commence par les mêmes caractères que la recherche
			// print_r($data[$i]);
	        array_push($results, $data[$i][0]); // On ajoute alors le résultat à la liste à retourner
	
	    }
	}
	// print_r($results);
	echo implode('|', $results); // Et on affiche les résultats séparés par une barre verticale |
	

?>