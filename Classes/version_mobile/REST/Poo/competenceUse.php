<?php


/*
Programme lancerCompetence

    Récupérer le Personnage et BonusCombat
    Récupérer tous les Personnage cibles.
    Récupérer la compétence et ses effets
    Trier les effets actifs sur le personnage <= Rafinnage 1

    foreach($EffetsAprèsCompetence as (EffectTest) $afterEffect)
                $afterEffect->déclenchereffet();

    foreach($EffetsAprèsCompetence as (EffectTest) $afterEffect)
        if(
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
        Switch (effectType) {
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

    foreach($cibles as $cible) {
        appliquerEffetCompetenceAvecBonusGeneraux();
    }


------------------------------
Raffinage 1.3 : ->déclenchereffet();





------------------------------------------------------------

Raffinage 2.2 : appliquerEffetCompetenceAvecBonusGeneraux();

    Switch (effectType) {
            case 5 :
               array_push(EffetsGeneraux, effet);
                break;
            case 8 :
               array_push(EffetsAvantCompetence, effet);
                break;
            case 9 :
               array_push(EffetAprèsCompetence, effet);
                break;
        }





------------------------------------------------------------------------------------------------------------------------

Programme DonnerCoupCorpACorp
 ...
Fin DonnerCoupCorpACorp


*/