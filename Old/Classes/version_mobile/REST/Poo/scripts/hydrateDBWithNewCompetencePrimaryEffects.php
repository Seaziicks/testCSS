<?php

include('BDD.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
for ($competenceIDNumber = 0; $competenceIDNumber < 265; $competenceIDNumber++) {
    echo '<br/><br/>';
    echo "<br/>Je suis à la compétence ID n° $competenceIDNumber <br/>";
    $q = $bdd->query('SELECT c.*
                            FROM competence c
                            WHERE c.Id_Competence = ' . $competenceIDNumber . '');

    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    //echo $donnees['Description1'] . '<br/>';

    $pourcentage = is_null($donnees['Pourcentage1']) ? 0 : 1;
    $amplitude = is_null($donnees['Amplitude1']) ? 'NULL' : $donnees['Amplitude1'];
    $nombreAmplitude = is_null($donnees['Nombre_Amplitude1']) ? 'NULL' : $donnees['Nombre_Amplitude1'];

    //print_r($donnees);

    /*
    $bdd->exec('INSERT INTO competenceeffect(effectOrder, idCompetence, actionType, effectType, applicationType, niveauRequis, descriptionBefore, descriptionAfter,
                                 typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage,
                                 numberOfUse, numberOfTurn, numberOfFight, numberOfTarget, accumulationType, numberOfAccumulation, successiveAccumulation, linkedEffect)
        VALUES(1, '.$donnees['Id_Competence'].', 1, NULL, 2, '.$donnees['Niveau_Requis'].', \''.$donnees['Description1'].'\', \''.$donnees['Description2'].'\',
        '.$donnees['Type_calcul1'].', '.$donnees['Calcul1a'].', '.$donnees['Calcul1b'].', NULL, NULL,
        '.$donnees['Amplitude1'].', '.$donnees['Nombre_Amplitude1'].', \''.$donnees['Statistique1'].'\', NULL,
        \''.$donnees['Impact1'].'\', '.$pourcentage.', NULL, NULL, NULL, 0, 0, 0, 0, 0)');
    */

    $i = 1;
    $j = 1;
    $descriptioni = str_replace("'", "\'", $donnees['Description' . ($i) . '']);
    $descriptioni2 = str_replace("'", "\'", $donnees['Description' . ($i + 1) . '']);
    if ($donnees['Type_calcul' . ($i) . ''] == 1) {

        echo '<br/><br/>INSERT INTO competenceeffect(effectOrder, idCompetence, actionType, effectType, applicationType, niveauRequis, descriptionBefore, descriptionAfter,
                             typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage,
                             numberOfUse, numberOfTurn, numberOfFight, numberOfTarget, accumulationType, numberOfAccumulation, successiveAccumulation, linkedEffect) 
        VALUES(' . $j . ', ' . $donnees['Id_Competence'] . ', 1, NULL, 2, 1, \'' . $descriptioni . '\', \'' . $descriptioni2 . '\', 
        ' . $donnees['Type_calcul' . ($i) . ''] . ', ' . $donnees['Calcul' . ($i) . 'a'] . ', ' . $donnees['Calcul' . ($i) . 'b'] . ', NULL, NULL, 
        ' . $amplitude . ', ' . $nombreAmplitude . ', \'' . $donnees['Statistique' . ($i) . ''] . '\', NULL, 
        \'' . $donnees['Impact' . ($i) . ''] . '\', ' . $pourcentage . ', NULL, NULL, NULL, 0, 0, 0, 0, 0)<br/><br/>';
        $bdd->exec('INSERT INTO competenceeffect(effectOrder, idCompetence, actionType, effectType, applicationType, niveauRequis, descriptionBefore, descriptionAfter,
                             typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage,
                             numberOfUse, numberOfTurn, numberOfFight, numberOfTarget, accumulationType, numberOfAccumulation, successiveAccumulation, linkedEffect) 
        VALUES(' . $j . ', ' . $donnees['Id_Competence'] . ', 1, NULL, 2, 1, \'' . $descriptioni . '\', \'' . $descriptioni2 . '\', 
        ' . $donnees['Type_calcul' . ($i) . ''] . ', ' . $donnees['Calcul' . ($i) . 'a'] . ', ' . $donnees['Calcul' . ($i) . 'b'] . ', NULL, NULL, 
        ' . $amplitude . ', ' . $nombreAmplitude . ', \'' . $donnees['Statistique' . ($i) . ''] . '\', NULL, 
        \'' . $donnees['Impact' . ($i) . ''] . '\', ' . $pourcentage . ', NULL, NULL, NULL, 0, 0, 0, 0, 0)');

    } elseif ($donnees['Type_calcul' . ($i) . ''] == 2) {

        $bdd->exec('INSERT INTO competenceeffect(effectOrder, idCompetence, actionType, effectType, applicationType, niveauRequis, descriptionBefore, descriptionAfter,
                             typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage,
                             numberOfUse, numberOfTurn, numberOfFight, numberOfTarget, accumulationType, numberOfAccumulation, successiveAccumulation, linkedEffect) 
        VALUES(' . $j . ', ' . $donnees['Id_Competence'] . ', 1, NULL, 2, 1, \'' . $descriptioni . '\', \'' . $descriptioni2 . '\', 
        ' . $donnees['Type_calcul' . ($i) . ''] . ', ' . $donnees['Calcul' . ($i) . 'a'] . ', ' . $donnees['Calcul' . ($i) . 'b'] . ', ' . $donnees['Calcul' . ($i + 1) . 'a'] . ', 
        ' . $donnees['Calcul' . ($i + 1) . 'b'] . ', ' . $amplitude . ', ' . $nombreAmplitude . ', \'' . $donnees['Statistique' . ($i) . ''] . '\', \'' . $donnees['Statistique' . ($i + 1) . ''] . '\', 
        \'' . $donnees['Impact' . ($i) . ''] . '\', ' . $pourcentage . ', NULL, NULL, NULL, 0, 0, 0, 0, 0)');
        $i++;

    } elseif (is_null($donnees['Type_calcul' . ($i) . ''])) {
        $bdd->exec('INSERT INTO competenceeffect(effectOrder, idCompetence, actionType, effectType, applicationType, niveauRequis, descriptionBefore, descriptionAfter,
                             typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage,
                             numberOfUse, numberOfTurn, numberOfFight, numberOfTarget, accumulationType, numberOfAccumulation, successiveAccumulation, linkedEffect) 
        VALUES(' . $j . ', ' . $donnees['Id_Competence'] . ', 1, NULL, 2, 1, \'' . $descriptioni . '\', 
        \'' . $descriptioni2 . '\', NULL, NULL, 
        NULL, NULL, NULL, NULL, NULL, 
        NULL, NULL, NULL, ' . $pourcentage . ', NULL, NULL, NULL, 0, 0, 0, 0, 0)');
    }

    $i++;
    $j++;

    echo '<br/>';
    while (!empty($donnees['Description' . ($i + 1)])) {
        $pourcentage = is_null($donnees['Pourcentage' . ($i) . '']) ? 0 : 1;
        $amplitude = is_null($donnees['Amplitude' . ($i) . '']) ? 'NULL' : $donnees['Amplitude' . ($i) . ''];
        $nombreAmplitude = is_null($donnees['Nombre_Amplitude' . ($i) . '']) ? 'NULL' : $donnees['Nombre_Amplitude' . ($i) . ''];
        $descriptioni = str_replace("'", "\'", $donnees['Description' . ($i) . '']);
        $descriptioni2 = str_replace("'", "\'", $donnees['Description' . ($i + 1) . '']);
        if ($donnees['Type_calcul' . ($i) . ''] == 1) {

            $bdd->exec('INSERT INTO competenceeffect(effectOrder, idCompetence, actionType, effectType, applicationType, niveauRequis, descriptionBefore, descriptionAfter,
                             typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage,
                             numberOfUse, numberOfTurn, numberOfFight, numberOfTarget, accumulationType, numberOfAccumulation, successiveAccumulation, linkedEffect) 
        VALUES(' . $j . ', ' . $donnees['Id_Competence'] . ', 1, NULL, 2, 1, \'\', \'' . $descriptioni2 . '\', 
        ' . $donnees['Type_calcul' . ($i) . ''] . ', ' . $donnees['Calcul' . ($i) . 'a'] . ', ' . $donnees['Calcul' . ($i) . 'b'] . ', NULL, NULL, 
        ' . $amplitude . ', ' . $nombreAmplitude . ', \'' . $donnees['Statistique' . ($i) . ''] . '\', NULL, 
        \'' . $donnees['Impact' . ($i) . ''] . '\', ' . $pourcentage . ', NULL, NULL, NULL, 0, 0, 0, 0, 0)');

        } elseif ($donnees['Type_calcul' . ($i) . ''] == 2) {

            $bdd->exec('INSERT INTO competenceeffect(effectOrder, idCompetence, actionType, effectType, applicationType, niveauRequis, descriptionBefore, descriptionAfter,
                             typeCalcul, calcul1A, calcul1B, calcul2A, calcul2B, amplitude, nombreAmplitude, statistique1, statistique2, impact, pourcentage,
                             numberOfUse, numberOfTurn, numberOfFight, numberOfTarget, accumulationType, numberOfAccumulation, successiveAccumulation, linkedEffect) 
        VALUES(' . $j . ', ' . $donnees['Id_Competence'] . ', 1, NULL, 2, 1, \'\', \'' . $descriptioni2 . '\', 
        ' . $donnees['Type_calcul' . ($i) . ''] . ', ' . $donnees['Calcul' . ($i) . 'a'] . ', ' . $donnees['Calcul' . ($i) . 'b'] . ', ' . $donnees['Calcul' . ($i + 1) . 'a'] . ', 
        ' . $donnees['Calcul' . ($i + 1) . 'b'] . ', ' . $amplitude . ', ' . $nombreAmplitude . ', \'' . $donnees['Statistique' . ($i) . ''] . '\', 
        ' . $donnees['Statistique' . ($i + 1) . ''] . ', \'' . $donnees['Impact' . ($i) . ''] . '\', ' . $pourcentage . ', NULL, NULL, NULL, 0, 0, 0, 0, 0)');

            $i++;
        }


        echo '<br/> Le numéro $i est le suivant : ' . $i . '';
        $i++;
        $j++;
    }
}