<?php


/*
Programme lancerCompetence

    Récupérer le Personnage et ses Bonus et BonusCombat
    Récupérer la compétence et ses effets
    Pour chaque effet
        Si que le niveau requis est bien atteint
           Rafinnage 1 => Appliquer l'effet
        Sinon
            Rien
        Fin si
    Fin Pour

Fin LancerCompetence



Raffinage 1 => Appliquer l'effet

Si s'applique à (sois-même | cibleUnique |  Alors
    LancerEffet(cibles, nbTours)
Sinon Si s'applique à une cible unique Alors
    lancerEffetUnique(cibles, nbTours)
Sinon Si s'applique en zone Alors
    lancerEffetZone(cibles, nbTours)
Sinon Si s'applique par rebond Alors
    lancerEffetRebond(cibles, nbTours)
Sinon Si canalisation Alors
    LancerCanalisation(nbTours)
Sinon Si

Sinon
    RaiseError => Application non reconnue.
FinSi






------------------------------------------------------------------------------------------------------------------------
Programme DonnerCoupCorpACorp
 ...
Fin DonnerCoupCorpACorp


*/