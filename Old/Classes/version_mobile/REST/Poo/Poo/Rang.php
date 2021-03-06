<?php


class Rang
{
    /* @var $_competences Competence[] */
    public $_competences = [];
    /* @var $_personnage Personnage */
    public $_personnage;
    public $_ligneNumber;
    /* @var $_specialite string */
    public $_specialiteLibelle;
    // Array of competence <u>ID</u>
    public $_ligne = [];
    /* @var $_db PDO */
    public $_db;

    public function __construct(Personnage $personnage, string $specialite, int $ligneNumber, $db)
    {
        $this->_db = $db;
        $this->_personnage = $personnage;
        $this->_ligneNumber = $ligneNumber;
        $this->_specialiteLibelle = $specialite;
        $this->getCompetences();
    }

    public function getCompetences() {
            $competences = $this->_db->query('SELECT Colonne1, Colonne2, Colonne3, Colonne4, Colonne5, Colonne6, Colonne7, Colonne8, Colonne9
                                    FROM arbres 
                                    WHERE ID_Personnage = '.$this->_personnage->_Id_Personnage.'
                                    AND Rang = '.$this->_ligneNumber.'
                                    AND Spécialité = \''.$this->_specialiteLibelle.'\'');									// Je récupère toutes les compétences de voleur, triées par Spécialité, puis Rang, puis Ordre.
        // We take all <u>ID</u> competences, even if they are padding competences (une competence de bourrage).
        // Padding competences represent the hidden competence that give form to the HTML table, and multiple same competence to represent colspan.
        $this->_ligne = $competences->fetch(PDO::FETCH_NUM);
        $competenceManager = new CompetenceManager($this->_db);

        // We always add a competence at the begining, to give the minimal shape of the HTML table.
        // I think this first line is here for that reason, but I don't really know
        $competence = $competenceManager->get($this->_ligne[0], $this->_personnage);
        array_push($this->_competences, $competence);
        for ($index = 1 ; $index < count($this->_ligne) ; $index++) {
            // Here, we register every competence only once, even if they are multiple register of it in the original data.
            // As said in the previous comment, the multiple register is here to take care of colspan effect (see a characterPage.php to understand why).
            // But here we only need each competence once, exept for padding competences (une competence de bourrage), which if competence with id = 0.
            if ($this->_ligne[$index] != $this->_ligne[$index - 1]) {
                $competence = $competenceManager->get($this->_ligne[$index], $this->_personnage);
                array_push($this->_competences, $competence);
            }
        }
    }


    public function displayRang()
    {
        ?>

        <tr>
            <td class="blanc"> <?php switch ($this->_ligneNumber){ case "0" : echo "Débutant"; break;case '1' : echo 'Apprenti'; break;case '2' : echo "Confirmé"; break;case "3" : echo "Maître"; break;case "4" : echo "God Tier"; break;} ?> </td>

            <?php
        for ($indexCompetence = 0; $indexCompetence < count($this->_ligne) ; $indexCompetence++) 																	// Tant que la compétence en cours est de même rang que la précédente, je l'implémente au tableau.
        {
            if (!is_null($this->_ligne[$indexCompetence]))
            {

                $indexFindCompetence = 0;
                // Look for the competence in $this->_competences[] that match the current Id_Competence in $this->_ligne[]
                while(intval($this->_competences[$indexFindCompetence]->_Id_Competence) != intval($this->_ligne[$indexCompetence])) {
                    $indexFindCompetence++;
                }
                $competencetoDisplay = $this->_competences[$indexFindCompetence];

                if($competencetoDisplay->_Id_Competence == 0)												// Si la compétence est une case de remplissage.
                {
                    ?><td class="cadre2"> </td><?php
                }
                else																			// Sinon, créer la case de la compétence correspondante.
                {
                    $colspan=1;
                    while ($this->_ligne[$indexCompetence] == $this->_ligne[$indexCompetence + 1])											// Gestion du Colspan. Tant que la compétence dans la casee suivante est la même que celle de la case en cours.
                    {
                        $colspan = $colspan + 1;													// J'ajoute 1 au colspan, et je passe à la case suivante.
                        $indexCompetence++;
                    }
                    ?>										<!-- Création de la cellule du tableau-->

                    <td <?php if($colspan > 1){ echo "colspan=$colspan";} ?>  class="test <?php if($competencetoDisplay->_Niveau > 0) {echo 'pulse';}?>" style="text-align : center" >

                        <div class="cadre ">

                            <div <?php /* $dégradé=$competence['Niveau']*10; echo 'style="-webkit-mask: linear-gradient(to top,white '.$dégradé.'%, rgba(255,255,255,0.15) '.$dégradé.'%)"';*/ ?>>
                                <img alt="ImageCompetence"  src="<?= $competencetoDisplay->getImage(); ?>">
                            </div>

                            <span>

								<span class="competence"><?= $competencetoDisplay->_Libellé; ?></span><br/><br/>

                                <div class="entete"><i><?= $competencetoDisplay->_Entete; ?></i></div>
									<br> Niveau actuel de la compétence : <b ondblclick="inlineMod2(<?= $competencetoDisplay->_Id_Competence ?>, this, 'Niveau', 'nombre','competence')"><?= $competencetoDisplay->_Niveau;?></b>
									<br>
									<br>
									<span class="couts">
										Coût en <span class="PA">PA</span> : <span class="PA"><?= $competencetoDisplay->_Cout_En_PA; ?></span>
										<?php if (!is_null($competencetoDisplay->_Ressource)){
                                            if($competencetoDisplay->_Ressource=='Canon de lumière'){$ressourcecomp='canon';}else{$ressourcecomp = $competencetoDisplay->_Ressource;}
                                            ?>
                                            <br>Coût en <span class="<?= $ressourcecomp; ?>"><?= $competencetoDisplay->_Ressource; ?></span> : <span class="<?= $ressourcecomp; ?>"><?= $competencetoDisplay->_Cout_En_Ressource; ?></span><br>
                                            <?php
                                        }
                                        ?>
									</span>
									<?php if (!is_null($competencetoDisplay->_Ressource)){echo '<br>';} ?> <!-- Obligé de faire ça, parce que le "float : left" gène sinon ... Mais bon,osef !-->
									<br><br>
									<?php $competencetoDisplay->getNewDescriptionComplete(); //$competencetoDisplay->getEffects();
                                    $competencetoDisplay->getLeveledEffectsDescriptions();?>
                                <?php if (!empty($competencetoDisplay->_Exemple)){ ?><br/><br/><br/><div class="exemple"><i><?= $competencetoDisplay->_Exemple; ?> </i></div><?php }?>

								</span>
                        </div>
                    </td>
                    <?php
                }
            }
        }
        ?>
        </tr>
        <?php
    }

    public function displaySimpleRang() {
        ?>

        <tr>
            <td class="blanc"> <?php switch ($this->_ligneNumber){ case "0" : echo "Débutant"; break;case '1' : echo 'Apprenti'; break;case '2' : echo "Confirmé"; break;case "3" : echo "Maître"; break;case "4" : echo "God Tier"; break;} ?> </td>

            <?php
            for ($indexCompetence = 0; $indexCompetence < count($this->_ligne) ; $indexCompetence++) 																	// Tant que la compétence en cours est de même rang que la précédente, je l'implémente au tableau.
            {
                if (!is_null($this->_ligne[$indexCompetence]))
                {

                    $indexFindCompetence = 0;
                    // Look for the competence in $this->_competences[] that match the current Id_Competence in $this->_ligne[]
                    while(intval($this->_competences[$indexFindCompetence]->_Id_Competence) != intval($this->_ligne[$indexCompetence])) {
                        $indexFindCompetence++;
                    }
                    $competencetoDisplay = $this->_competences[$indexFindCompetence];

                    if($competencetoDisplay->_Id_Competence == 0)												// Si la compétence est une case de remplissage.
                    {
                        ?><td class="cadre2"> </td><?php
                    }
                    else																			// Sinon, créer la case de la compétence correspondante.
                    {
                        $colspan=1;
                        while ($this->_ligne[$indexCompetence] == $this->_ligne[$indexCompetence + 1])											// Gestion du Colspan. Tant que la compétence dans la casee suivante est la même que celle de la case en cours.
                        {
                            $colspan = $colspan + 1;													// J'ajoute 1 au colspan, et je passe à la case suivante.
                            $indexCompetence++;
                        }
                        ?>										<!-- Création de la cellule du tableau-->

                        <td <?php if($colspan > 1){ echo "colspan=$colspan";} ?>  class="test <?php if($competencetoDisplay->_Niveau > 0) {echo 'pulse';}?>" style="text-align : center" >

                            <div class="cadre ">

                                <div <?php /* $dégradé=$competence['Niveau']*10; echo 'style="-webkit-mask: linear-gradient(to top,white '.$dégradé.'%, rgba(255,255,255,0.15) '.$dégradé.'%)"';*/ ?>>
                                    <img alt="ImageCompetence"  src="<?= $competencetoDisplay->getImage(); ?>">
                                </div>
                            </div>
                        </td>
                        <?php
                    }
                }
            }
            ?>
        </tr>
        <?php
    }

    public function getSimpleRangAsHTML($characterID, $componentToDisplay = '') : string
    {
        $simpleRangAsHTML = "<tr>
            <td class=\"blanc\">";
        switch ($this->_ligneNumber){
            case "0" :
                $simpleRangAsHTML .= "Débutant";
                break;
            case "1" :
                $simpleRangAsHTML .= "Apprenti";
                break;
            case "2" :
                $simpleRangAsHTML .= "Confirmé";
                break;
            case "3" :
                $simpleRangAsHTML .= "Maître";
                break;
            case "4" :
                $simpleRangAsHTML .= "God Tier";
                break;
        }
        $simpleRangAsHTML .= " </td>";
        for ($indexCompetence = 0; $indexCompetence < count($this->_ligne) ; $indexCompetence++) 																	// Tant que la compétence en cours est de même rang que la précédente, je l'implémente au tableau.
        {
            if (!is_null($this->_ligne[$indexCompetence]))
            {

                $indexFindCompetence = 0;
                // Look for the competence in $this->_competences[] that match the current Id_Competence in $this->_ligne[]
                while(intval($this->_competences[$indexFindCompetence]->_Id_Competence) != intval($this->_ligne[$indexCompetence])) {
                    $indexFindCompetence++;
                }
                $competencetoDisplay = $this->_competences[$indexFindCompetence];

                if($competencetoDisplay->_Id_Competence == 0)												// Si la compétence est une case de remplissage.
                {
                    $simpleRangAsHTML .= "<td class=\"cadre2\"> </td>";
                }
                else																			// Sinon, créer la case de la compétence correspondante.
                {
                    $colspan=1;
                    while ($this->_ligne[$indexCompetence] == $this->_ligne[$indexCompetence + 1])											// Gestion du Colspan. Tant que la compétence dans la casee suivante est la même que celle de la case en cours.
                    {
                        $colspan = $colspan + 1;													// J'ajoute 1 au colspan, et je passe à la case suivante.
                        $indexCompetence++;
                    }
                    $simpleRangAsHTML .= "<!-- Création de la cellule du tableau-->
                    <td onclick=\"displayCompetenceToDiv(".$competencetoDisplay->_Id_Competence.",".$characterID.",'".$componentToDisplay."')\"";
                    if($colspan > 1){ $simpleRangAsHTML .= " colspan=$colspan\"";} $simpleRangAsHTML .= " class=\"test"; if($competencetoDisplay->_Niveau > 0) {$simpleRangAsHTML .= " pulse";}$simpleRangAsHTML .= "\" style=\"text-align : center\" >

                        <div class=\"cadre \">

                            <div"; /* $simpleRangAsHTML .= "$dégradé=$competence['Niveau']*10; echo 'style=\"-webkit-mask: linear-gradient(to top,white '.$dégradé.'%, rgba(255,255,255,0.15) '.$dégradé.'%)\"';*/$simpleRangAsHTML .= ">
                                <img alt=\"ImageCompetence\"  src=\"".$competencetoDisplay->getImage()."\">
                            </div>
                        </div>
                    </td>";

                }
            }
        }
        $simpleRangAsHTML .= "</tr>";
        return $simpleRangAsHTML;
    }

}