<?php


/*
Programme lancerCompetence

    $personnageManager = new PersonnageManager($bdd);
    $launcher = personnageManager->get($_POST['idLauncher']);
    $bonusCombatManager = new BonusCombatManager($bdd);
    $bonusCombatLauncher = $bonusCombatManager->get($launcher->_Id_Personnage);
    $receivers = [];
    $bonusCombatReceivers = [];
    foreach($_POST['receivers'] as $recieverID) {
        array_push($receivers, $personnageManager->get($recieverID));
        array_push($bonusCombatReceivers, $bonusCombatManager->get($receiverID));
    }
    $competenceManager = new CompetenceManager($bdd);
    $competence = competenceManager->get($_POST['idCompetence'], $launcher);
    $competenceEffects = $competence->_Effects;
    *** Trier les effets actifs sur le personnage <= Rafinnage 1 ***

    for($indexCible = 0 ; $indexCible < count($receivers) ; indexCible++) {

        $receiver = $receivers[indexCible];
        $bonusCombatReceiver = $bonusCombatReceivers[$indexCible];

        foreach($EffetsAvantAction as (EffectTest) $beforeActionEffect)
            *** $beforeEffect->déclenchereffet($beforeActionEffect); ***

        foreach($EffetsAvantCompetence as (EffectTest) $beforeCompetenceEffect)
            *** $beforeEffect->déclenchereffet($beforeCompetenceEffect); ***

        foreach($competenceEffects as (CompetenceEffectTest) $competenceEffect)
            if($competence->_Niveau >= $competenceEffect->_NiveauRequis)
               *** appliquerEffetCompetenceAvecBonusGeneraux($competenceEffect, $receiver, $bonusCombatReceiver); ***
            }
        }

        foreach($EffetsAprèsCompetence as (EffectTest) $afterCompetenceEffect)
                    *** $afterEffect->déclenchereffet($afterCompetenceEffect); ***

        foreach($EffetsAprèsAction as (EffectTest) $afterActionEffect)
                    *** $afterEffect->déclenchereffet($afterActionEffect); ***
    }

Fin LancerCompetence


------------------------------------------------------------
Raffinage 1.1 : Trier les effets actifs sur le personnage
    // EffetsGeneraux = [];
    EffetsAvantCompetence = [];
    EffetAprèsCompetence = [];
    EffetsAvantAction = [];
    EffetAprèsAction = [];

    $effectTestManager = new EffectTestManager($bdd);
    $effects = getEffectListForReceiver($launcher->_Id_personnage);

    foreach($effects as $effect) {
        Switch ($effects->ActionType) {
            case 5 :
                // Récupéré dans BonusCombat
                break;
            case 8 :
               array_push(EffetsAvantAction, effet);
                break;
            case 9 :
               array_push(EffetAprèsAction, effet);
                break;
            case 12 :
               array_push(EffetsAvantCompetence, effet);
                break;
            case 13 :
               array_push(EffetAprèsCompetence, effet);
                break;
        }
    }

------------------------------
Raffinage 1.2 : appliquerEffetCompetenceAvecBonusGeneraux(CompetenceEffectTest $competenceEffect,PersonnageTest $launcher, PersonnageTest $receiver, BonusCombat $bonusCombatReceiver);

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
            $healBoostLauncher = dealHealWithBonusCombat($bonusCombatLauncher);
            $healBoostReceiver = $reveiver->calculateHealWithBonusCombat($healBoostLauncher, $bonusCombatReceiver);
            $lifePoint = min(($receiver->getTotalVitalité() + $bonusCombatReceiver->_Vitalite) * 2, $receiver->_PDV_Actuel + $healBoostReceiver);
            $sql = "UPDATE personnage SET PDV_Actuel = " . $lifePoint . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
            break;
        case 6: // Shield
            $BouclierTotal = max(0, $perso->_Bouclier - $competenceEffects->EffectValueMin);
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
            // $effects = $competenceEffect;

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
Raffinage 1.3 : ->déclenchereffet(EffectTest $effect);

    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    switch(true) {
        case $effect->_EffectType <= 32:
            $sql = "INSERT INTO effectapplied (EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                                IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
            VALUES (" . $effect->_EffectType . "," . $effect->_EffectValueMin . "," . $effect->_EffectValueMax . ",
                    " . $effect->_ID_Competence . "," . $effect->_IDLauncher . "," . $effect->_IDReceiver . ",
                    " . $effect->_NumberOfUse . ", " . $effect->_NumberOfTurn . "," . $effect->_NumberOfFight . ")";
            // use exec() because no results are returned
            $bdd->exec($sql);
        case 33: // Damage
            $initialDamages = $effect->_EffectValueMin;
            $effectiveDamages = $receiver->calculateReducedDamages($initialDamages, $bonusCombatReceiver);
            $remainingShield = max(0, $perso->_Bouclier - $effectiveDamages);
            $remainingHP = max(0, $perso->_PDV_Actuel - max(0, $effectiveDamages - $perso->_Bouclier));
            $sql = "UPDATE personnage SET PDV_Actuel = " . $remainingHP . ", Bouclier = " . $remainingShield . " WHERE $effects->Id_Personnage = " . $effects->_IDReceiver;
            $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $effects->_EffectValueMin . ") WHERE idPersonnage = " . $effects->_IDReceiver;
            $bdd->exec($sql2);
            break;
        case 35: // Heal
            $initialHeal = $effects->_EffectValueMin;
            $healBoostReceiver = ($initialHeal + $bonusCombatReceiver->_SoinRecuFlat) * (1 + $bonusCombatReceiver->_SoinRecuPourcentage);
            $lifePoint = min(($receiver->getTotalVitalité() + $bonusCombatReceiver->_Vitalite) * 2, $receiver->_PDV_Actuel + $healBoostReceiver);
            $idReceiver = $effects->_IDReceiver != null ? $effects->_IDReceiver : $receiver->_Id_Personnage;
            $sql = "UPDATE personnage SET PDV_Actuel = " . $lifePoint . " WHERE Id_Personnage = " . $effects->_IDReceiver;
            break;
        case 36: // Shield
            $totalShield = max(0, $perso->_Bouclier - $effects->_EffectValueMin);
            $sql = "UPDATE personnage SET Bouclier = " . $totalShield . " WHERE Id_Personnage = " . $effects->_IDReceiver;
            break;
    }

------------------------------------------------------------------------------------------------------------------------

Programme DonnerCoupCorpACorp

 ...

Fin DonnerCoupCorpACorp



------------------------------------------------------------------------------------------------------------------------

*/
