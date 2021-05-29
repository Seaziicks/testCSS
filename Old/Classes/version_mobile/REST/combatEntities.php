<?php

include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT Id_Personnage, Libellé, Image, iconImage, Niveau, team, initiative, DegatsRecus, Bouclier, PDV_Actuel
					from combatSession, personnage
                    where idCombat='.$_GET['id'].'
                    and idPersonnage = Id_Personnage
                    order by team, initiative');
					
					
					
    $reponse = [];
	while($reponseWitoutCamelCase=$personnagesInfos->fetch(PDO::FETCH_ASSOC)){

        $reponseCamelCase['Id_Personnage'] = $reponseWitoutCamelCase['Id_Personnage'];
        $reponseCamelCase['Libelle'] = $reponseWitoutCamelCase['Libellé'];
        $reponseCamelCase['Image'] = $reponseWitoutCamelCase['Image'];
        $reponseCamelCase['iconImage'] = $reponseWitoutCamelCase['iconImage'];
        $reponseCamelCase['Niveau'] = $reponseWitoutCamelCase['Niveau'];
        $reponseCamelCase['team'] = $reponseWitoutCamelCase['team'];
        $reponseCamelCase['initiative'] = $reponseWitoutCamelCase['initiative'];
        $reponseCamelCase['isAlive'] = intval($reponseWitoutCamelCase['PDV_Actuel']) == 0 ? false : true;
        $reponseCamelCase['DegatsRecus']=$reponseWitoutCamelCase['DegatsRecus'];
        $reponseCamelCase['Bouclier']=$reponseWitoutCamelCase['Bouclier'];

        array_push($reponse, $reponseCamelCase);
    }
?>