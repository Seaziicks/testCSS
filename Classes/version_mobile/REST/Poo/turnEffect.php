<?php
spl_autoload_register('chargerClasse');
session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.

// On enregistre notre autoload.
function chargerClasse($classname)
{
    require $classname.'.php';
}

include('BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$personnageManager = new PersonnageManager($bdd);
$receiver = $personnageManager->get($_GET['id']);
$turnStart = $personnageManager->get($_GET['turnStart']);

$bonusCombatManager = new BonusCombatManager($bdd);
$bonusCombatReceiver = $bonusCombatManager->get($personnage->_Id_Personnage);

$effectTestManager = new EffectTestManager($bdd);
if($turnStart)
    $effectsTurn = $effectTestManager->getTurnStartEffectList($personnage->_Id_Personnage);
else
    $effectsTurn = $effectTestManager->getTurnEndEffectList($personnage->_Id_Personnage);

foreach ($effectsTurn as $effect) {
    switch (true) {
        case $effect->_EffectType <= 30:
            $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                                    IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
                VALUES (" . $effect->_EffectType . "," . $effect->_EffectValueMin . "," . $effect->_EffectValueMax . ",
                        " . $effect->_ID_Competence . "," . $effect->_IDLauncher . "," . $effect->_IDReceiver . ",
                        " . $effect->_NumberOfUse . ", " . $effect->_NumberOfTurn . "," . $effect->_NumberOfFight . ")";
            // use exec() because no results are returned
            $bdd->exec($sql);
        case $effect->_EffectType == 33: // Damage
            $initialDamages = $effect->_EffectValueMin;
            $effectiveDamages = $receiver->calculateReducedDamages($initialDamages, $bonusCombatReceiver);
            $remainingShield = max(0, $receiver->_Bouclier - $effectiveDamages);
            $remainingHP = max(0, $receiver->_PDV_Actuel - max(0, $effectiveDamages - $receiver->_Bouclier));
            $sql = "UPDATE personnage SET PDV_Actuel = " . $remainingHP . ", Bouclier = " . $remainingShield . " WHERE $effect->Id_Personnage = " . $effect->_IDReceiver;
            $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $effect->_EffectValueMin . ") WHERE idPersonnage = " . $effect->_IDReceiver;
            $bdd->exec($sql);
            $bdd->exec($sql2);
            break;
        case $effect->_EffectType == 35: // Heal
            $initialHeal = $effect->_EffectValueMin;
            $healBoostReceiver = ($initialHeal + $bonusCombatReceiver->_SoinRecuFlat) * (1 + $bonusCombatReceiver->_SoinRecuPourcentage);
            $lifePoint = min(($receiver->getTotalVitalité() + $bonusCombatReceiver->_Vitalite) * 2, $receiver->_PDV_Actuel + $healBoostReceiver);
            $idReceiver = $effect->_IDReceiver != null ? $effect->_IDReceiver : $receiver->_Id_Personnage;
            $sql = "UPDATE personnage SET PDV_Actuel = " . $lifePoint . " WHERE Id_Personnage = " . $effect->$idReceiver;
            $bdd->exec($sql);
            break;
        case $effect->_EffectType == 36: // Shield
            $totalShield = max(0, $receiver->_Bouclier - $effect->_EffectValueMin);
            $sql = "UPDATE personnage SET Bouclier = " . $totalShield . " WHERE Id_Personnage = " . $effect->_IDReceiver;
            $bdd->exec($sql);
            break;
    }
}