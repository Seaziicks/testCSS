<table>

	<th colspan="2">
		<b><?php echo $personnage->_Libellé; ?> </b>
	</th>
	
	<th >
		Niveau : <b ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Niveau', 'nombre','personnage')"><?= $personnage->_Niveau ?> </b>
	</th>
	
	<th >
		Points de vie : <b ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'PDV_Actuel', 'nombre','personnage')"><?= $personnage->_PDV_Actuel ?> </b> / <b><?= ($personnage->getTotalVitalité())*2 ?> </b>
	</th>
	
	<tr> 
		<td> <span class="force">Force</span> </td> 
		<td> <span class="force" ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Force', 'nombre','personnage')"><?= $personnage->_Force ?> </span>+ <span class="force"><?= $personnage->_Bonus_Force?></span> (<span class="force"><?= $personnage->getTotalForce()?></span>)</td>
		<td>  </td> 
		<td> <span class="vie">Vitalité</span> </td> 
		<td><span class="vie"  ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Vitalité', 'nombre','personnage')"><?= $personnage->_Vitalité ?> </span>+ <span class="vie"><?= $personnage->_Bonus_Vitalité?></span> (<span class="vie"><?= $personnage->getTotalVitalité()?></span>)</td>
		<td rowspan="5" ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Inventaire', 'texte-multi','personnage')"><span class="inventaire"> <?= $personnage->_Inventaire; ?> </span></td> 
	</tr>
	
	<tr> <td><span class="intelligence"> Intelligence </span></td> 
		<td><span class="intelligence" ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Intelligence', 'nombre','personnage')"><?= $personnage->_Intelligence; ?> </span>+ <span class="intelligence"><?= $personnage->_Bonus_Intelligence?></span> (<span class="intelligence"><?= $personnage->getTotalIntelligence();?></span>)</td>
		<?php if($personnage->_Id_Personnage==6){ $pointsCompétenceUtilisés=modificationPointsDeCompetence($personnage, $pointsCompétenceUtilisés); }?>
		<td> Points de compétence : <span class="<?php if(($personnage->_Niveau+floor(($personnage->_Niveau)/6))-$pointsCompétenceUtilisés>0){echo "pointsdispo";}elseif(($personnage->_Niveau+floor(($personnage->_Niveau)/6))-$pointsCompétenceUtilisés<0){echo "red";}?>"><?= ($personnage->_Niveau+floor(($personnage->_Niveau)/6))-$pointsCompétenceUtilisés ?>  </span></td>
		<td> <span class="<?= $personnage->_Type_Ressource;?>"><?= $personnage->_Type_Ressource;?> </span></td>
		<td><?php if (!empty($personnage->_Type_Ressource)){?><span class="<?= $personnage->_Type_Ressource;?>" ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Ressource', 'nombre','personnage')"> <?= $personnage->_Ressource ?> </span>+ <span class="<?= $personnage->_Type_Ressource;?>"><?= $personnage->_Bonus_Ressource?></span> (<span class="<?= $personnage->_Type_Ressource;?>"><?= $personnage->getTotalRessource()?></span>)<?php } ?></td>
	</tr>
	
	<tr> <td><span class="agilité"> Agilité </span></td> 
		<td><span class="agilité" ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Agilité', 'nombre','personnage')"> <?= $personnage->_Agilité ?></span> + <span class="agilité"><?= $personnage->_Bonus_Agilité?></span> (<span class="agilité"><?= $personnage->getTotalAgilité() ?></span>)</td>
		<td>  </td>
		<td> <span class="réussite">Réussite </span></td> 
		<td><span class="réussite"><?= ($personnage->_Réussite + $personnage->_Bonus_Réussite)?></span> (<span class="réussite" ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Réussite', 'nombre','personnage')"><?= $personnage->_Réussite ?> </span> + <span class="réussite"><?= $personnage->_Bonus_Réussite?></span>)</td>
	</tr>
	
	<tr> <td> - </td> <td> - </td> <td> </td> <td> - </td> <td> - </td> </tr>
	<tr> <td> Charisme </td> <td> Marchandage </td> <td>  </td> <td> Intimidation </td> <td> Chance </td> 
	</tr>
	
	<tr> 
		<td ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Charisme', 'nombre','personnage')"> <?= $personnage->_Charisme?> </td>
		<td ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Marchandage', 'nombre','personnage')"> <?= $personnage->_Marchandage ?> </td>
		<td>  </td> 
		<td ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Intimidation', 'nombre','personnage')"> <?= $personnage->_Intimidation ?> </td>
		<td ondblclick="inlineMod(<?= $personnage->_Id_Personnage; ?>, this, 'Chance', 'nombre','personnage')"> <?= $personnage->_Chance ?> </td>
	</tr>

</table>
<?php
function modificationPointsDeCompetence(Personnage $personnage, int $pointsCompetenceUtilises) : int {
    switch ($personnage->_Id_Personnage) {
        case 6:
            /*bCar Magmaticien a "Jet de Lave" et "Canalisation" en sort de base. */
            return $pointsCompetenceUtilises - 1;
        default:
            return $pointsCompetenceUtilises;
    }
}
?>
