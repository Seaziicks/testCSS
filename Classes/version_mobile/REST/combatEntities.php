<?php

include('../BDD.php');



$personnagesInfos = $bdd->query('SELECT Id_Personnage, Libellé, Image, iconImage, Niveau, team, initiative, DegatsRecus, Bouclier, PDV_Actuel
					from combatSession, personnage
                    where idCombat='.$_GET['id'].'
                    and idPersonnage = Id_Personnage
                    order by team, initiative');
					
					
					
    $réponse = [];
	while($réponseWitoutCamelCase=$personnagesInfos->fetch(PDO::FETCH_ASSOC)){

        $réponseCamelCase['Id_Personnage'] = $réponseWitoutCamelCase['Id_Personnage'];
        $réponseCamelCase['Libelle'] = $réponseWitoutCamelCase['Libellé'];
        $réponseCamelCase['Image'] = $réponseWitoutCamelCase['Image'];
        $réponseCamelCase['iconImage'] = $réponseWitoutCamelCase['iconImage'];
        $réponseCamelCase['Niveau'] = $réponseWitoutCamelCase['Niveau'];
        $réponseCamelCase['team'] = $réponseWitoutCamelCase['team'];
        $réponseCamelCase['initiative'] = $réponseWitoutCamelCase['initiative'];
        $réponseCamelCase['isAlive'] = intval($réponseWitoutCamelCase['PDV_Actuel']) == 0 ? false : true;
        $réponseCamelCase['DegatsRecus']=$réponseWitoutCamelCase['DegatsRecus'];
        $réponseCamelCase['Bouclier']=$réponseWitoutCamelCase['Bouclier'];

        array_push($réponse, $réponseCamelCase);
    }
?>