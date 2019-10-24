<?php


/*
Programme lancerCompetence

    $personnageManager = new PersonnageManager($bdd);
    $personnage = personnageManager->get($_POST['idLauncher']);
    $bonusCombatManager = new BonusCombatManager($bdd);
    $bonusCombatLauncher = $bonusCombatManager->get($personnage->_Id_Personnage);
    $receivers = [];
    $bonusCombatReceivers = [];
    foreach($_POST['receivers'] as $recieverID) {
        array_push($receivers, $personnageManager->get($recieverID));
        array_push($bonusCombatReceivers, $bonusCombatManager->get($receiverID));
    }
    Récupérer la compétence et ses effets
    Trier les effets actifs sur le personnage <= Rafinnage 1

    foreach($EffetsAprèsCompetence as (EffectTest) $afterEffect)
                $afterEffect->déclenchereffet();

    foreach($competenceEffects as (CompetenceEffectTest) $competenceEffect)
        if($competence->_Niveau >= $competenceEffect->_NiveauRequis)
           Appliquer l'effet <= Raffinage 2
        }
    }

    foreach($EffetsAvantCompetence as (EffectTest) $beforeEffect)
        $beforeEffect->déclenchereffet();

Fin LancerCompetence


------------------------------------------------------------
Raffinage 1.1 : Trier les effets actifs sur le personnage
    EffetsGeneraux = [];
    EffetsAvantCompetence = [];
    EffetAprèsCompetence = [];

    foreach($effects as $effect) {
        Switch ($effects->ActionType) {
            case 5 :
                // Récupéré dans BonusCombat
                break;
            case 8 :
               array_push(EffetsAvantCompetence, effet);
                break;
            case 9 :
               array_push(EffetAprèsCompetence, effet);
                break;
        }
    }

------------------------------
Raffinage 1.2 : Appliquer l'effet

    foreach($cibles as PersonnageTest $cible) {
        $bonusCombatReceiver = $bonusCombatManager->get($cible->Id_Personnage);
        appliquerEffetCompetenceAvecBonusGeneraux($competenceEffect, $cible);
    }


------------------------------
Raffinage 1.3 : ->déclenchereffet();





------------------------------------------------------------

Raffinage 2.2 : appliquerEffetCompetenceAvecBonusGeneraux(EffectTest $effect, PersonnageTest $cible);

    switch ($effect->ActionType) {
        case 1:
        case 2:
            $DegatsEnvoyes = $effect->dealDamagesWithBonusCombat();
            $DegatsSubits = $cible->calculateReducedDamages($effects->EffectValueMin, $bonusCombatLauncher, $bonusCombatReceiver);
            $BouclierRestant = max(0, $perso->_Bouclier - $DegatsSubits);
            $PDVRestant = max(0, $perso->_PDV_Actuel - max(0, $DegatsSubits - $perso->_Bouclier));
            $sql = "UPDATE personnage SET PDV_Actuel = " . $PDVRestant . ", Bouclier = " . $BouclierRestant . " WHERE $effects->Id_Personnage = " . $effects->IDReceiver;
            $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $effects->EffectValueMin . ") WHERE idPersonnage = " . $effects->IDReceiver;
            $bdd->exec($sql2);
            break;
        case 3:
            $PDVSoignes = min($perso->getTotalVitalité() * 2, $perso->_PDV_Actuel + $effects->EffectValueMin);
            $sql = "UPDATE personnage SET PDV_Actuel = " . $PDVSoignes . " WHERE $effects->Id_Personnage = " . $effects->IDReceiver;
            break;
        case 4:
            $BouclierTotal = max(0, $perso->_Bouclier - $effects->EffectValueMin);
            $sql = "UPDATE personnage SET Bouclier = " . $BouclierTotal . " WHERE $effects->Id_Personnage = " . $effects->IDReceiver;
            break;
    }





------------------------------------------------------------------------------------------------------------------------

Programme DonnerCoupCorpACorp
 ...
Fin DonnerCoupCorpACorp



------------------------------------------------------------------------------------------------------------------------

*/