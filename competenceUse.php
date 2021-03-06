<?php


/*
Programme lancerCompetence

    $personnageManager = new PersonnageManager($bdd);
    $launcher = $personnageManager->get($_POST['idLauncher']);
    $bonusCombatManager = new BonusCombatManager($bdd);
    $bonusCombatLauncher = $bonusCombatManager->get($launcher->_Id_Personnage);
    $receivers = [];
    $bonusCombatReceivers = [];
    foreach($_POST['receivers'] as $receiverID) {
        array_push($receivers, $personnageManager->get($receiverID));
        array_push($bonusCombatReceivers, $bonusCombatManager->get($receiverID));
    }
    $competenceManager = new CompetenceManager($bdd);
    $competence = $competenceManager->get($_POST['idCompetence'], $launcher);
    $competenceEffects = $competence->_Effects;
    *** Trier les effets actifs sur le personnage <= Rafinnage 1 ***

    for($indexCible = 0 ; $indexCible < count($receivers) ; indexCible++) {

        $receiver = $receivers[indexCible];
        $bonusCombatReceiver = $bonusCombatReceivers[$indexCible];

        foreach($EffetsAvantAction as (Effect) $beforeActionEffect)
            *** $beforeEffect->useEffect($beforeActionEffect, $receiver, $bonusCombatReceiver); ***

        foreach($EffetsAvantCompetence as (Effect) $beforeCompetenceEffect)
            *** $beforeEffect->useEffect($beforeCompetenceEffect, $receiver, $bonusCombatReceiver); ***

        foreach(EffetAvantDegats as (Effect) $beforeActionEffect)
            *** $beforeEffect->useEffect($beforeActionEffect, $receiver, $bonusCombatReceiver); ***

        foreach(EffetAvantDegatsPhysiques as (Effect) $beforeCompetenceEffect)
            *** $beforeEffect->useEffect($beforeCompetenceEffect, $receiver, $bonusCombatReceiver); ***

        foreach(EffetAvantDegatsMagiques as (Effect) $beforeCompetenceEffect)
            *** $beforeEffect->useEffect($beforeCompetenceEffect, $receiver, $bonusCombatReceiver); ***

        foreach(EffetAvantSoin as (Effect) $beforeCompetenceEffect)
        *** $beforeEffect->useEffect($beforeCompetenceEffect, $receiver, $bonusCombatReceiver); ***

        $receiver->triggerEffectReceivingAction($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, true);

        foreach($competenceEffects as (CompetenceEffect) $competenceEffect)
            if($competence->_Niveau >= $competenceEffect->_NiveauRequis)
               *** $competenceEffect->appliquerEffetCompetenceAvecBonusGeneraux($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver); ***
            }
        }

        $receiver->triggerEffectReceivingAction($bdd, $launcher, $receiver, $bonusCombatLauncher, $bonusCombatReceiver, $competenceEffect, false);

        foreach($EffetsAprèsAction as (Effect) $beforeActionEffect)
            *** $beforeEffect->useEffect($beforeActionEffect, $receiver, $bonusCombatReceiver); ***

        foreach($EffetsAprèsCompetence as (Effect) $beforeCompetenceEffect)
            *** $beforeEffect->useEffect($beforeCompetenceEffect), $receiver, $bonusCombatReceiver; ***

        foreach(EffetAprèsDegats as (Effect) $beforeActionEffect)
            *** $beforeEffect->useEffect($beforeActionEffect, $receiver, $bonusCombatReceiver); ***

        foreach(EffetAprèsDegatsPhysiques as (Effect) $beforeCompetenceEffect)
            *** $beforeEffect->useEffect($beforeCompetenceEffect, $receiver, $bonusCombatReceiver); ***

        foreach(EffetAprèsDegatsMagiques as (Effect) $beforeCompetenceEffect)
            *** $beforeEffect->useEffect($beforeCompetenceEffect, $receiver, $bonusCombatReceiver); ***

        foreach(EffetAprèsSoin as (Effect) $beforeCompetenceEffect)
            *** $beforeEffect->useEffect($beforeCompetenceEffect, $receiver, $bonusCombatReceiver); ***
    }

Fin LancerCompetence


------------------------------------------------------------
Raffinage 1.1 : Trier les effets actifs sur le personnage
    // EffetsGeneraux = [];
    $EffetAvantAction = [];
$EffetAprèsAction = [];
$EffetAvantCompetence = [];
$EffetAprèsCompetence = [];
$EffetAvantDegats = [];
$EffetAprèsDegats = [];
$EffetAvantDegatsPhysiques = [];
$EffetAprèsDegatsPhysiques = [];
$EffetAvantDegatsMagiques = [];
$EffetAprèsDegatsMagiques = [];
$EffetAvantSoin = [];
$EffetAprèsSoin = [];


$effectTestManager = new EffectTestManager($bdd);
$effects = getEffectListForReceiver($launcher->_Id_personnage);

foreach($effects as $effect) {
    Switch ($effect->ActionType) {
        case 7 :
            // Récupéré dans BonusCombat
            break;
        case 8 :
            array_push($EffetAvantAction, $effect);
            break;
        case 9 :
            array_push($EffetAprèsAction, $effect);
            break;
        case 12 :
            array_push($EffetAvantCompetence, $effect);
            break;
        case 13 :
            array_push($EffetAprèsCompetence, $effect);
            break;
        case 14 :
            array_push($EffetAvantDegats, $effect);
            break;
        case 15 :
            array_push($EffetAprèsDegats, $effect);
            break;
        case 16 :
            array_push($EffetAvantDegatsPhysiques, $effect);
            break;
        case 17 :
            array_push($EffetAprèsDegatsPhysiques, $effect);
            break;
        case 18 :
            array_push($EffetAvantDegatsMagiques, $effect);
            break;
        case 19 :
            array_push($EffetAprèsDegatsMagiques, $effect);
            break;
        case 20 :
            array_push($EffetAvantSoin, $effect);
            break;
        case 21 :
            array_push($EffetAprèsSoin, $effect);
            break;

    }
}

------------------------------
Raffinage 1.2 : appliquerEffetCompetenceAvecBonusGeneraux($bdd, CompetenceEffect $competenceEffect, Personnage $launcher, Personnage $receiver, BonusCombat $bonusCombatLauncher, BonusCombat $bonusCombatReceiver);


    switch ($competenceEffect->_actionType) {
        case 1: // Damages Physical & Magical
        case 2:
            $initialDamages = $competenceEffect->dealDamagesWithBonusCombat($bonusCombatLauncher, $competenceEffect->_actionType);
            $effectiveDamages = $receiver->calculateDamagesReducedByArmor($initialDamages, $bonusCombatLauncher, $bonusCombatReceiver);
            $remainingShield = max(0, $receiver->_Bouclier - $effectiveDamages);
            $remainingHP = max(0, $receiver->_PDV_Actuel - max(0, $effectiveDamages - $receiver->_Bouclier));
            $sql = "UPDATE personnage SET PDV_Actuel = " . $remainingHP . ", Bouclier = " . $remainingShield . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
            $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $initialDamages . ") WHERE idPersonnage = " . $receiver->_Id_Personnage;
            $bdd->exec($sql2);
            break;
        case 3: // LifeSteal Physical & Magical
        case 4:
            $initialDamages = $competenceEffect->dealDamagesWithBonusCombat($bonusCombatLauncher);
            $effectiveDamages = $receiver->calculateDamagesReducedByArmor($initialDamages, $bonusCombatLauncher, $bonusCombatReceiver);
            $lifeSteal = floor($effectiveDamages * 0.2);
            $remainingShield = max(0, $receiver->_Bouclier - $effectiveDamages);
            $remainingHP = max(0, $receiver->_PDV_Actuel - max(0, $effectiveDamages - $receiver->_Bouclier));
            $sql = "UPDATE personnage SET PDV_Actuel = " . $remainingHP . ", Bouclier = " . $remainingShield . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
            $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $initialDamages . ") WHERE idPersonnage = " . $receiver->_Id_Personnage;
            $sql3 = "UPDATE personnage SET PDV_Actuel = (PDV_Actuel + " . $lifeSteal . ") WHERE Id_Personnage = " . $launcher->_Id_Personnage;
            $bdd->exec($sql2);
            $bdd->exec($sql3);
            break;
        case 5: // Heal
            $healBoostLauncher = $competenceEffect->dealHealWithBonusCombat($bonusCombatLauncher);
            $healBoostReceiver = $receiver->calculateHealWithBonusCombat($healBoostLauncher, $bonusCombatReceiver);
            $lifePoint = min(($receiver->getTotalVitalité() + $bonusCombatReceiver->_Vitalite) * 2, $receiver->_PDV_Actuel + $healBoostReceiver);
            $sql = "UPDATE personnage SET PDV_Actuel = " . $lifePoint . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
            break;
        case 6: // Shield
            $BouclierTotal = max(0, $receiver->_Bouclier - $competenceEffect->EffectValueMin);
            $sql = "UPDATE personnage SET Bouclier = " . $BouclierTotal . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
            break;
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
        case 13:
        case 13:
        case 13:
            // $effect = $competenceEffect;

            $sql = "INSERT INTO effectapplied (ActionType,EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                                IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
            VALUES (" . $competenceEffect->_actionType . "," . $competenceEffect->_effectType . "," . $competenceEffect->_EffectValueMin . "," . $competenceEffect->_EffectValueMax . ",
                    " . $competenceEffect->_idCompetence . "," . $launcher->_Id_Personnage . "," . $receiver->_Id_Personnage . ",
                    " . $competenceEffect->_numberOfUse . ", " . $competenceEffect->_numberOfTurn . "," . $competenceEffect->_numberOfFight . ")";
            // use exec() because no results are returned
            $bdd->exec($sql);
             break;
    }
    // use exec() because no results are returned
    $bdd->exec($sql);


------------------------------
Raffinage 1.3 : ->useEffect($bdd, Effect $effect, Personnage $receiver, BonusCombat $bonusCombatReceiver);

    switch(true) {
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
            $sql = "UPDATE personnage SET PDV_Actuel = " . $lifePoint . " WHERE Id_Personnage = " . $effect->_IDReceiver;
            $bdd->exec($sql);
            break;
        case $effect->_EffectType == 36: // Shield
            $totalShield = max(0, $receiver->_Bouclier - $effect->_EffectValueMin);
            $sql = "UPDATE personnage SET Bouclier = " . $totalShield . " WHERE Id_Personnage = " . $effect->_IDReceiver;
            $bdd->exec($sql);
            break;
    }

------------------------------------------------------------------------------------------------------------------------

Programme DonnerCoupCorpACorp

 ...

Fin DonnerCoupCorpACorp



------------------------------------------------------------------------------------------------------------------------

*/
