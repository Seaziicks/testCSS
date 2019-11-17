<html>
<body>
<?php


$array_expression = [
    'DegatsFlat' => 0,
    'DegatsPourcentage' => 0,
    'DegatsPhysiqueFlat' => 0,
    'DegatsPhysiquePourcentage' => 0,
    'DegatsMagiqueFlat' => 0,
    'DegatsMagiquePourcentage' => 0,
    'Force' => 0,
    'Agilite' => 0,
    'Intelligence' => 0,
    'Vitalite' => 0,
    'PA' => 0,
    'PM' => 0,
    'SortFlat' => 0,
    'SortPourcentage' => 0,
    'ArmureFlat' => 0,
    'ArmurePourcentage' => 0,
    'ArmureMagiqueFlat' => 0,
    'ArmureMagiquePourcentage' => 0,
    'ReductionDegatsFlat' => 0,
    'ReductionDegatsPourcentage' => 0,
    'SoinFlat' => 0,
    'SoinPourcentage' => 0,
    'SoinRecuFlat' => 0,
    'SoinRecuPourcentage' => 0,
    'IgnoreArmureFlat' => 0,
    'IgnoreArmurePourcentage' => 0,
    'IgnoreArmureMagiqueFlat' => 0,
    'IgnoreArmureMagiquePourcentage' => 0,
    'AugmenteNombreAttaque' => 0,
    'RedirectionDegatFlat' => 0,
    'RedirectionDegatPourcentage' => 0,
    'RenvoieDegatFlat' => 0,
    'RenvoieDegatPourcentage' => 0,
    'Portee' => 0,
    'Degat' => 0,
    'DegatDiffere' => 0,
    'Soin' => 0,
    'Shield' => 0,
    'DiffererDegatsFlatToTheEndOfEffect' => 0,
    'DiffererDegatsPourcentageToTheEndOfEffect' => 0,
    'DiffererDegatsFlat' => 0,
    'DiffererDegatsPourcentage' => 0,
    'Statistique3' => 1,
    'Impact3' => 1,
    'Pourcentage3' => 0,
    'Type_calcul4' => 0,
    'Calcul4a' => 0,
    'Calcul4b' => 0,
    'Amplitude4' => 0,
    'Nombre_Amplitude4' => 0,
    'Statistique4' => 1,
    'Impact4' => 1,
    'Pourcentage4' => 0,
    'Type_calcul5' => 0,
    'Calcul5a' => 0,
    'Calcul5b' => 0,
    'Amplitude5' => 0,
    'Nombre_Amplitude5' => 0,
    'Statistique5' => 1,
    'Impact5' => 1,
    'Pourcentage5' => 0,
    'NumEffet' => 0,
    'Type_calculBis1' => 0,
    'CalculBis1a' => 0,
    'CalculBis1b' => 0,
    'StatistiqueBis1' => 1,
    'Type_calculBis2' => 0,
    'CalculBis2a' => 0,
    'CalculBis2b' => 0,
    'StatistiqueBis2' => 1,
    'ImpactBis' => 1,
    'PourcentageBis' => 0,
    'Entete' => 1,
    'Exemple' => 1,
    'Niveau_Requis' => 0,
    'Competence_Requise_1' => 1,
    'Competence_Requise_2' => 1,
    'Competence_Requise_3' => 1,
    'TempsRechargement' => 0,
    'Duree' => 0,
    'Cooldown' => 0,
    'Bonus_Temporaire' => 1,
    'Type_Calcul_Temporaire' => 0,
    'Valeur_Temporaire1' => 0,
    'Valeur_Temporaire2' => 0,
    'Statistique_Temporaire1' => 1
];

?>
<textarea style="height : 100%; width : 100%">
<?php

foreach ($array_expression as $key => $value) {
    if ($value == 0) {
        ?>public <?= $key ?>: number;
        <?php
    } else {
        ?>public <?= $key ?>: string;
        <?php
    }
}

?>
</textarea>

<textarea style="height : 100%; width : 100%">
<?php

foreach ($array_expression as $key => $value) {
    if ($value == 0) {
        ?>this.<?= $key ?> = item.<?= $key ?>;
        <?php
    } else {
        ?>this.<?= $key ?> = item.<?= $key ?>;
        <?php
    }
}

?>
</textarea>

<textarea style="height : 100%; width : 100%">
<?php

foreach ($array_expression as $key => $value) {
    if ($value == 0) {
        ?>$réponse['<?= $key ?>']=$réponseWitoutCamelCase['<?= $key ?>'];
        <?php
    } else {
        ?>$réponse['<?= $key ?>']=$réponseWitoutCamelCase['<?= $key ?>'];
        <?php
    }
}

?>
</textarea>
</body>
</html>