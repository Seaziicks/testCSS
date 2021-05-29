<?php

include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT idPersonnage
					from combatSession
                    where idCombat='.$_GET['id'].'
                    order by team, initiative');
					
					
					
    $réponse = [];
	while($réponseWitoutCamelCase=$personnagesInfos->fetch(PDO::FETCH_ASSOC)){
        array_push($réponse, $réponseWitoutCamelCase['idPersonnage']);
    }
?>