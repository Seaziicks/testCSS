<?php


/*
Programme lancerCompetence

    Récupérer le Personnage et BonusCombat
    Récupérer tous les Personnage cibles.
    Récupérer la compétence et ses effets
    Trier les effets <= Rafinnage 1
    Pour chaque effet
        Si que le niveau requis est bien atteint
           Appliquer l'effet <= Raffinage 2
        Sinon
            Rien
        Fin si
    Fin Pour

Fin LancerCompetence



Raffinage 1 => Trier les effets
    EffetsGeneraux = [];
    EffetsAvantCompetence = [];
    EffetAprèsCompetence = [];

    foreach($effects as $effect) {
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
    }





Raffinage 2 =>Appliquer l'effet

    foreach($cibles as $cible) {
    }






------------------------------------------------------------------------------------------------------------------------
Programme DonnerCoupCorpACorp
 ...
Fin DonnerCoupCorpACorp


*/