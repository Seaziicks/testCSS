<table>

	<th colspan="2">
		<b><?php echo $statistique['Libellé'] ?> </b>
	</th>
	
	<th >
		Niveau : <b ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Niveau', 'nombre','personnage')"><?= $niveau ?> </b>
	</th>
	
	<th >
		Points de vie : <b ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PDV_Actuel', 'nombre','personnage')"><?= $pdvactuel ?> </b> / <b><?= ($vitalité+$bonusvitalité)*2 ?> </b>
	</th>
	
	<tr> 
		<td> <span class="force">Force</span> </td> 
		<td> <span class="force" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Force', 'nombre','personnage')"><?= $force ?> </span>+ <span class="force"><?php echo $bonusforce?></span> (<span class="force"><?php echo $bonusforce+$force?></span>)</td>
		<td>  </td> 
		<td> <span class="vie">Vitalité</span> </td> 
		<td><span class="vie"  ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Vitalité', 'nombre','personnage')"><?= $vitalité ?> </span>+ <span class="vie"><?= $bonusvitalité?></span> (<span class="vie"><?= $bonusvitalité+$vitalité?></span>)</td>
		<td rowspan="5" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Inventaire', 'texte-multi','personnage')"><span class="inventaire"> <?php echo $statistique['Inventaire'] ?> </span></td> 
	</tr>
	
	<tr> <td><span class="intelligence"> Intelligence </span></td> 
		<td><span class="intelligence" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Intelligence', 'nombre','personnage')"><?= $intelligence ?> </span>+ <span class="intelligence"><?= $bonusintelligence?></span> (<span class="intelligence"><?= $bonusintelligence+$intelligence?></span>)</td>
		<?php if($personnage=='Magmaticien'){$pointsCompétenceUtilisés--; /*Car j'ai "Jet de Lave" et "Canalisation" en sort de base.*/}?>
		<td> Points de compétence : <span class="<?php if(($niveau+floor(($niveau)/6))-$pointsCompétenceUtilisés>0){echo "pointsdispo";}elseif(($niveau+floor(($niveau)/6))-$pointsCompétenceUtilisés<0){echo "red";}?>"><?= ($niveau+floor(($niveau)/6))-$pointsCompétenceUtilisés ?>  </span></td>
		<td> <span class="<?= $statistique['Type_Ressource'];?>"><?php echo $statistique['Type_Ressource'];?> </span></td> 
		<td><?php if (!empty($statistique['Type_Ressource'])){?><span class="<?= $statistique['Type_Ressource'];?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Ressource', 'nombre','personnage')"> <?= $ressource ?> </span>+ <span class="<?= $statistique['Type_Ressource'];?>"><?= $bonusressource?></span> (<span class="<?= $statistique['Type_Ressource'];?>"><?php echo $bonusressource+$ressource?></span>)<?php } ?></td>
	</tr>
	
	<tr> <td><span class="agilité"> Agilité </span></td> 
		<td><span class="agilité" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Agilité', 'nombre','personnage')"> <?= $agilité ?></span> + <span class="agilité"><?php echo $bonusagilité?></span> (<span class="agilité"><?php echo $bonusagilité+$agilité?></span>)</td>
		<td> <!--   test ... <!--?php echo $testcompetence['merde']; if(empty($testcompetence)){echo "raté!".$nbpointstestretourn;} ?-->   </td> 
		<td> <span class="réussite">Réussite </span></td> 
		<td><span class="réussite"><?= $bonusréussite+$réussite?></span> (<span class="réussite" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Réussite', 'nombre','personnage')"><?php echo $réussite ?> </span> + <span class="réussite"><?php echo $bonusréussite?></span>)</td>
	</tr>
	
	<tr> <td> - </td> <td> - </td> <td> </td> <td> - </td> <td> - </td> </tr>
	<tr> <td> Charisme </td> <td> Marchandage </td> <td>  </td> <td> Intimidation </td> <td> Chance </td> 
	</tr>
	
	<tr> 
		<td ondblclick="inlineMod(<?= $statistique['Id_Personnage'] ?>, this, 'Charisme', 'nombre','personnage')"> <?= $charisme?> </td>
		<td ondblclick="inlineMod(<?= $statistique['Id_Personnage'] ?>, this, 'Marchandage', 'nombre','personnage')"> <?= $marchandage ?> </td>
		<td>  </td> 
		<td ondblclick="inlineMod(<?= $statistique['Id_Personnage'] ?>, this, 'Intimidation', 'nombre','personnage')"> <?= $intimidation ?> </td>
		<td ondblclick="inlineMod(<?= $statistique['Id_Personnage'] ?>, this, 'Chance', 'nombre','personnage')"> <?= $chance ?> </td>
	</tr>

</table>

