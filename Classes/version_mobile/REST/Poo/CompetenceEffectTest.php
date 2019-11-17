<?php

class CompetenceEffectTest
{
    public $_idCompetenceEffect,
        $_idCompetence,
        $_effectOrder,
        $_actionType,
        $_effectType,
        $_applicationType,
        $_niveau,
        $_niveauRequis,
        $_descriptionBefore,
        $_descriptionAfter,
        $_typeCalcul,
        $_calcul1A,
        $_calcul1B,
        $_calcul2A,
        $_calcul2B,
        $_amplitude,
        $_nombreAmplitude,
        $_statistique1,
        $_statistique2,
        $_impact,
        $_pourcentage,
        $_numberOfUse,
        $_numberOfTurn,
        $_numberOfFight,
        $_numberOfTarget,
        $_numberOfAccumulation,
        $_linkedEffect;

    /* @var $_Personnage PersonnageTest */
    public $_Personnage;

    public function __construct(array $donnees, PersonnageTest $Personnage)
    {
        $this->hydrate($donnees);
        $this->setPersonnage($Personnage);
    }

    public function setIdCompetenceEffect($idCompetenceEffect)
    {
        $idCompetenceEffect = (int)$idCompetenceEffect;

        if ($idCompetenceEffect > 0) {
            $this->_idCompetenceEffect = $idCompetenceEffect;
        }
    }

    public function setIdCompetence($idCompetence)
    {
        $idCompetence = (int)$idCompetence;

        if ($idCompetence > 0) {
            $this->_idCompetence = $idCompetence;
        }
    }

    public function setEffectOrder($effectOrder)
    {
        $effectOrder = (int)$effectOrder;

        if ($effectOrder > 0) {
            $this->_effectOrder = $effectOrder;
        }
    }

    public function setActionType($Action_Type)
    {
        $Action_Type = (int)$Action_Type;

        if ($Action_Type > 0) {
            $this->_actionType = $Action_Type;
        }
    }

    public function setEffectType($Effect_Type)
    {
        $Effect_Type = (int)$Effect_Type;

        if ($Effect_Type > 0) {
            $this->_effectType = $Effect_Type;
        }
    }

    public function setApplicationType($applicationType)
    {
        $applicationType = (int)$applicationType;

        if ($applicationType > 0) {
            $this->_applicationType = $applicationType;
        }
    }

    public function setNiveau($Niveau)
    {
        $Niveau = (int)$Niveau;

        if ($Niveau > 0) {
            $this->_niveau = $Niveau;
        }
    }

    public function setNiveauRequis($Niveau_Requis)
    {
        $Niveau_Requis = (int)$Niveau_Requis;

        if ($Niveau_Requis > 0) {
            $this->_niveauRequis = $Niveau_Requis;
        }
    }

    public function setDescriptionBefore($descriptionBefore)
    {
        if (is_string($descriptionBefore))
            $this->_descriptionBefore = $descriptionBefore;

    }

    public function setDescriptionAfter($descriptionAfter)
    {
        if (is_string($descriptionAfter))
            $this->_descriptionAfter = $descriptionAfter;

    }

    public function setTypeCalcul($Type_calcul1)
    {
        $Type_calcul1 = (int)$Type_calcul1;

        if ($Type_calcul1 > 0) {
            $this->_typeCalcul = $Type_calcul1;
        }
    }

    public function setCalcul1A($Calcul1a)
    {
        $Calcul1a = (int)$Calcul1a;

        if ($Calcul1a > 0) {
            $this->_calcul1A = $Calcul1a;
        }
    }

    public function setCalcul1B($Calcul1b)
    {
        $Calcul1b = (float)$Calcul1b;
        $this->_calcul1B = $Calcul1b;
    }

    public function setCalcul2A($Calcul2a)
    {
        $Calcul2a = (int)$Calcul2a;

        if ($Calcul2a > 0) {
            $this->_calcul2A = $Calcul2a;
        }
    }

    public function setCalcul2B($Calcul2b)
    {
        $Calcul2b = (float)$Calcul2b;
        $this->_calcul2B = $Calcul2b;
    }

    public function setAmplitude($Amplitude1)
    {
        $Amplitude1 = (int)$Amplitude1;

        if ($Amplitude1 > 0) {
            $this->_amplitude = $Amplitude1;
        }
    }

    public function setNombreAmplitude($Nombre_Amplitude1)
    {
        $Nombre_Amplitude1 = (int)$Nombre_Amplitude1;

        if ($Nombre_Amplitude1 > 0) {
            $this->_nombreAmplitude = $Nombre_Amplitude1;
        }
    }

    public function setStatistique1($Statistique1)
    {
        if (is_string($Statistique1)) {
            $this->_statistique1 = $Statistique1;
        }
    }

    public function setStatistique2($Statistique2)
    {
        if (is_string($Statistique2)) {
            $this->_statistique2 = $Statistique2;
        }
    }

    public function setImpact($Impact1)
    {
        if (is_string($Impact1)) {
            $this->_impact = $Impact1;
        }
    }

    public function setPourcentage($Pourcentage1)
    {
        $this->_pourcentage = (boolean)$Pourcentage1;
    }

    public function setNumberOfUse($numberOfUse)
    {
        $this->_numberOfUse = (int)$numberOfUse;
    }

    public function setNumberOfTurn($numberOfTurn)
    {
        $this->_numberOfTurn = (int)$numberOfTurn;
    }

    public function setNumberOfFight($numberOfFight)
    {
        $this->_numberOfFight = (int)$numberOfFight;
    }

    public function setLinkedEffect($linkedEffect)
    {
        $this->_linkedEffect = (boolean)$linkedEffect;
    }

    public function setNumberOfTarget($numberOfTarget)
    {
        $this->_numberOfTarget = (int)$numberOfTarget;
    }

    public function setNumberOfAccumulation($numberOfAccumulation)
    {
        $this->_numberOfAccumulation = (int)$numberOfAccumulation;
    }

    public function getStatistique(int $index)
    {
        if ($this->getElement('statistique' . $index) == 'ressource')
            return $this->getElement('Type_Ressource');
        else
            return $this->getElement('statistique' . $index);
    }

    public function getStatistiqueValue(int $index)
    {
        switch (strtolower($this->getElement('statistique' . $index))) {
            case "force":
                return $this->_Personnage->getTotalForce();
                break;
            case "intelligence":
                return $this->_Personnage->getTotalIntelligence();
                break;
            case "agilité":
            case "agilite":
                return $this->_Personnage->getTotalAgilité();
                break;
            case "pdv":
                return $this->_Personnage->getTotalVitalité();
                break;
            case "niveau":
                return $this->_niveau;
                break;
            case "ressource":
                return $this->_Personnage->getTotalRessource();
                break;
        }
        return null;
    }

    public function getCalcul()
    {
        return ($this->getCalculElement('A') + (floor((float)$this->getStatistiqueValue('1') / $this->getCalculElement('B'))));
    }

    public function getElement($elementName)
    {
        $retour = '_' . $elementName;
        return $this->$retour;
    }

    public function getCalculElement($secondPartElement)
    {
        $retour = '_calcul1' . $secondPartElement;
        return $this->$retour;
    }

    public function getImpact()
    {
        $impact = null;

        if ($this->getElement('pourcentage')) {
            $impact = '';
        } elseif ($this->getElement('impact') == "vie") {
            $impact = ' points de vie';
        } elseif ($this->getElement('impact') == "bouclier") {
            $impact = ' points de bouclier';
        } elseif ($this->getElement('impact') != "red" && $this->getCalculElement('a') + (floor((float)$this->getStatistiqueValue() / $this->getCalculElement('B'))) > 2) {
            $impact = ' ' . $this->getElement('impact') . 's';
        } elseif ($this->getElement('impact') != "red") {
            $impact = ' ' . $this->getElement('impact');
        } elseif ($this->getElement('impact') == "red" && !$this->getElement('pourcentage')) {
            $impact = ' points de dégâts';
        }

        return $impact;
    }

    public function getEffectWithBonusCombatStatistique(BonusCombat $bonusCombat)
    {
        return $this->_calcul1A + floor(($this->getStatistiqueValue(1) + $this->getBonusCombatStatistique($this->getStatistique(1), $bonusCombat)) / $this->_calcul1B);
    }

    public function dealDamagesWithBonusCombat(BonusCombat $bonusCombat, int $actionType)
    {
        $damagesInitialWithBonusStatistique = $this->getEffectWithBonusCombatStatistique($bonusCombat);
        $degatBonusCombatPourcentage = 0;
        if ($actionType == 1 || $actionType == 3) {
            $degatBonusCombatFlat = ($damagesInitialWithBonusStatistique + $bonusCombat->_DegatsFlat + $bonusCombat->_DegatsPhysiqueFlat + $bonusCombat->_SortFlat);
            $degatBonusCombatPourcentage = $degatBonusCombatFlat * (1 + $bonusCombat->_DegatsPourcentage) * (1 + $bonusCombat->_DegatsPhysiquePourcentage) * (1 + $bonusCombat->_SortPourcentage);
        } elseif ($actionType == 2 || $actionType == 4) {
            $degatBonusCombatFlat = ($damagesInitialWithBonusStatistique + $bonusCombat->_DegatsFlat + $bonusCombat->_DegatsMagiqueFlat + $bonusCombat->_SortFlat);
            $degatBonusCombatPourcentage = $degatBonusCombatFlat * (1 + $bonusCombat->_DegatsPourcentage) * (1 + $bonusCombat->_DegatsMagiquePourcentage) * (1 + $bonusCombat->_SortPourcentage);
        }
        return $degatBonusCombatPourcentage;
    }

    public function dealHealWithBonusCombat(BonusCombat $bonusCombat)
    {
        $healInitialWithBonusStatistique = $this->getEffectWithBonusCombatStatistique($bonusCombat);
        $healBonusCombatFlat = ($healInitialWithBonusStatistique + $bonusCombat->_SoinFlat + $bonusCombat->_SortFlat);
        $healBonusCombatPourcentage = $healBonusCombatFlat * (1 + $bonusCombat->_SoinPourcentage) * (1 + $bonusCombat->_SortPourcentage);
        return $healBonusCombatPourcentage;
    }

    public function dealWithBonusCombat(BonusCombat $bonusCombat, int $actionType)
    {
        if ($actionType < 5)
            return $this->dealDamagesWithBonusCombat($bonusCombat, $actionType);
        elseif ($actionType == 5)
            return $this->dealHealWithBonusCombat($bonusCombat);
        return null;
    }

    public function getBonusCombatStatistique(string $statistique, BonusCombat $bonusCombat)
    {
        switch (strtolower($statistique)) {
            case "force":
                return $bonusCombat->_Force;
                break;
            case "agilité":
            case "agilite":
                return $bonusCombat->_Agilite;
                break;
            case "intelligence":
                return $bonusCombat->_Intelligence;
                break;
        }
        return null;
    }

    public function setPersonnage(PersonnageTest $Personnage)
    {
        $this->_Personnage = $Personnage;
    }

    public function appliquerEffetCompetenceAvecBonusGeneraux(PDO $bdd, PersonnageTest $launcher, PersonnageTest $receiver, BonusCombat $bonusCombatLauncher, BonusCombat $bonusCombatReceiver)
    {
        switch (true) {
            case $this->_actionType == 1: // Damages Physical & Magical
            case $this->_actionType == 2:
                $initialDamages = $this->dealWithBonusCombat($bonusCombatLauncher, $this->_actionType);
                $damageAfterRedirection = $receiver->calculateDamagesReducedByRedirection($initialDamages, $bonusCombatReceiver);
                $damageAfterArmor = $receiver->calculateDamagesReducedByArmor($damageAfterRedirection, $bonusCombatLauncher, $bonusCombatReceiver);
                $damageAfterReduction = $receiver->calculateReducedDamages($damageAfterArmor, $bonusCombatReceiver);
                $effectiveDamages = max(0, $receiver->calculateNonDifferedDamages($damageAfterReduction, $bonusCombatReceiver));
                $remainingShield = max(0, $receiver->_Bouclier - $effectiveDamages);
                $remainingHP = max(0, $receiver->_PDV_Actuel - max(0, $effectiveDamages - $receiver->_Bouclier));
                $sql = "UPDATE personnage SET PDV_Actuel = " . $remainingHP . ", Bouclier = " . $remainingShield . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
                $bdd->exec($sql);
                $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $initialDamages . ") WHERE idPersonnage = " . $receiver->_Id_Personnage;
                $bdd->exec($sql2);
                break;
            case $this->_actionType == 3: // LifeSteal Physical & Magical
            case $this->_actionType == 4:
                $initialDamages = $this->dealWithBonusCombat($bonusCombatLauncher, $this->_actionType);
                $damageAfterRedirection = $receiver->calculateDamagesReducedByRedirection($initialDamages, $bonusCombatReceiver);
                $damageAfterArmor = $receiver->calculateDamagesReducedByArmor($damageAfterRedirection, $bonusCombatLauncher, $bonusCombatReceiver);
                $damageAfterReduction = $receiver->calculateReducedDamages($damageAfterArmor, $bonusCombatReceiver);
                $effectiveDamages = max(0, $receiver->calculateNonDifferedDamages($damageAfterReduction, $bonusCombatReceiver));
                $lifeSteal = max(0, floor($receiver->calculateReducedDamages($receiver->calculateDamagesReducedByArmor($initialDamages, $bonusCombatReceiver, $bonusCombatReceiver), $bonusCombatReceiver) * 0.2));
                $remainingShield = max(0, $receiver->_Bouclier - $effectiveDamages);
                $remainingHP = max(0, $receiver->_PDV_Actuel - max(0, $effectiveDamages - $receiver->_Bouclier));
                $sql = "UPDATE personnage SET PDV_Actuel = " . $remainingHP . ", Bouclier = " . $remainingShield . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
                $sql2 = "UPDATE combatSession SET DegatsRecus = (DegatsRecus + " . $initialDamages . ") WHERE idPersonnage = " . $receiver->_Id_Personnage;
                $sql3 = "UPDATE personnage SET PDV_Actuel = (PDV_Actuel + " . $lifeSteal . ") WHERE Id_Personnage = " . $launcher->_Id_Personnage;
                $bdd->exec($sql);
                $bdd->exec($sql2);
                $bdd->exec($sql3);
                break;
            case $this->_actionType == 5: // Heal
                $healBoostLauncher = $this->dealWithBonusCombat($bonusCombatLauncher, $this->_actionType);
                $healBoostReceiver = max(0, $receiver->calculateHealWithBonusCombat($healBoostLauncher, $bonusCombatReceiver));
                $lifePoint = min(($receiver->getTotalVitalité() + $bonusCombatReceiver->_Vitalite) * 2, $receiver->_PDV_Actuel + $healBoostReceiver);
                $sql = "UPDATE personnage SET PDV_Actuel = " . $lifePoint . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
                $bdd->exec($sql);
                break;
            case $this->_actionType == 6: // Shield
                $bonusShield = $this->dealWithBonusCombat($bonusCombatLauncher, $this->_actionType);
                $BouclierTotal = max(0, $receiver->_Bouclier + $bonusShield);
                $sql = "UPDATE personnage SET Bouclier = " . $BouclierTotal . " WHERE Id_Personnage = " . $receiver->_Id_Personnage;
                $bdd->exec($sql);
                break;
            case $this->_actionType > 6 : // Tous les effets
                $effectValue = $this->dealWithBonusCombat($bonusCombatLauncher, $this->_actionType);
                $sql = "INSERT INTO effectapplied (ActionType,EffectType,EffectValueMin ,EffectValueMax,ID_Competence,IDLauncher,
                                                IDReceiver,NumberOfUse,NumberOfTurn,NumberOfFight)
            VALUES (" . $this->_actionType . "," . $this->_effectType . "," . $effectValue . "," . $effectValue . ",
                    " . $this->_idCompetence . "," . $launcher->_Id_Personnage . "," . $receiver->_Id_Personnage . ",
                    " . $this->_numberOfUse . ", " . $this->_numberOfTurn . "," . $this->_numberOfFight . ")";
                // use exec() because no results are returned
                $bdd->exec($sql);
                break;
        }
    }

    public function canBeUsed(int $idPersonnage, CompetenceManager $competenceManager, array $receivers): bool
    {
        if ($this->_applicationType < 7)
            return true;
        else if ($this->_applicationType == 7 || $this->_applicationType == 13 || $this->_applicationType == 19) {
            // Cas des différents "après accumulation".
            $previousUses = $competenceManager->getPreviousCompetenceUses($this->_idCompetence, $idPersonnage);
            return $this->accumulativeUse($previousUses);
        } else if ($this->_applicationType == 8 || $this->_applicationType == 14) {
            // Cas des différents "après accumulation sur cible unique".
            $previousUses = $competenceManager->getPreviousCompetenceUses($this->_idCompetence, $idPersonnage);
            return $this->accumulativeUse($previousUses) && $this->uniqueTarget($previousUses, $receivers[0]);
        } else if ($this->_applicationType == 9 || $this->_applicationType == 15 || $this->_applicationType == 20) {
            // Cas des différents "après accumulation sur cible distinctes".
            $previousUses = $competenceManager->getPreviousCompetenceUses($this->_idCompetence, $idPersonnage);
            return $this->accumulativeUse($previousUses) && $this->distinctTargets($previousUses, $receivers[0]);
        } else if ($this->_applicationType == 10 || $this->_applicationType == 16 || $this->_applicationType == 21) {
            // Cas des différents "après accumulation successives".
            $previousUses = $competenceManager->getPreviousCharacterUses($idPersonnage);
            return $this->successiveUses($previousUses);
        } else if ($this->_applicationType == 11 || $this->_applicationType == 17) {
            // Cas des différents "après accumulation successives sur cibles uniques".
            $previousUses = $competenceManager->getPreviousCharacterUses($idPersonnage);
            return $this->successiveUses($previousUses) && $this->uniqueTarget($previousUses, $receivers[0]);
        } else if ($this->_applicationType == 12 || $this->_applicationType == 18 || $this->_applicationType == 22) {
            // Cas des différents "après accumulation successives sur cibles distinctes".
            $previousUses = $competenceManager->getPreviousCharacterUses($idPersonnage);
            return $this->successiveUses($previousUses) && $this->distinctTargets($previousUses, $receivers[0]);
        }
        return null;
    }

    /*
     * $this->_numberOfAccumulation - 1 car quand on précise le nombre d'accumulation nécessaire, c'est à ce nombre d'utilisation qui déclenchera l'effet.
     *      => Pou JetDeLave : 3 accumulations pour que l'effet se déclence veut dire que j'ai besoin de l'utiliser 2 fois, et à la troisième utilisation, l'effet se déclenche.
     *      => Donc à l'utilisation en cours. Ce qui veut dire, que je n'ai pas besoin de le valider, étant donné que je suis dans l'effet de la compétence en question.
     *      => Aurait pu être renomé en quelque chose comme numberOfUseToExec.
     */
    public function accumulativeUse(array $previousUses): bool
    {
        return count($previousUses) == $this->_numberOfAccumulation - 1;
    }

    public function successiveUses(array $previousUses): bool
    {
        $index = 0;
        while ($previousUses[$index]['idCompetence'] == $this->_idCompetence && $index < $this->_numberOfAccumulation - 1 && $index < count($previousUses)) {
            $index++;
        }
        if ($index != $this->_numberOfAccumulation - 1)
            return false;
        return true;
    }

    public function uniqueTarget(array $previousUses, $actualTarget): bool
    {
        $index = 0;
        while ($previousUses[$index]['idReceiver '] == $actualTarget && $index < $this->_numberOfAccumulation - 1 && $index < count($previousUses)) {
            if ($previousUses[$index]['idCompetence'] == $this->_idCompetence)
                $index++;
        }
        if ($index != $this->_numberOfAccumulation - 1)
            return false;
        return true;
    }

    public function distinctTargets(array $previousUses, $actualTarget): bool
    {
        $index = 0;
        $arrayTargets = array();
        while (!in_array($arrayTargets, $previousUses[$index]['idReceiver']) && $index < $this->_numberOfAccumulation - 1 && $index < count($previousUses)) {
            if ($previousUses[$index]['idCompetence'] == $this->_idCompetence) {
                $index++;
                array_push($arrayTargets, $previousUses[$index]['idReceiver']);
            }
        }
        if ($index != $this->_numberOfAccumulation - 1 && in_array($arrayTargets, $actualTarget))
            return false;
        return true;
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }
}
