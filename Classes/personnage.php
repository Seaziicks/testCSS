<table>

	<th colspan="2">
		<b><?php echo $statistique['Libellé'] ?> </b>
	</th>
	
	<th >
		Niveau : <b ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Niveau', 'nombre','personnage')"><?php echo $niveau ?> </b>
	</th>
	
	<th >
		Points de vie : <b ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PDV_Actuel', 'nombre','personnage')"><?php echo $pdvactuel ?> </b> / <b><?php echo ($vitalité+$bonusvitalité)*2 ?> </b>
	</th>
	
	<tr> 
		<td> <span class="force">Force</span> </td> 
		<td> <span class="force" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Force', 'nombre','personnage')"><?php echo $force ?> </span>+ <span class="force"><?php echo $bonusforce?></span> (<span class="force"><?php echo $bonusforce+$force?></span>)</td> 
		<td>  </td> 
		<td> <span class="vie">Vitalité</span> </td> 
		<td><span class="vie"  ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Vitalité', 'nombre','personnage')"><?php echo $vitalité ?> </span>+ <span class="vie"><?php echo $bonusvitalité?></span> (<span class="vie"><?php echo $bonusvitalité+$vitalité?></span>)</td> 
		<td rowspan="5" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Inventaire', 'texte-multi','personnage')"><span class="inventaire"> <?php echo $statistique['Inventaire'] ?> </span></td> 
	</tr>
	
	<tr> <td><span class="intelligence"> Intelligence </span></td> 
		<td><span class="intelligence" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Intelligence', 'nombre','personnage')"><?php echo $intelligence ?> </span>+ <span class="intelligence"><?php echo $bonusintelligence?></span> (<span class="intelligence"><?php echo $bonusintelligence+$intelligence?></span>)</td>
		<?php if($personnage=='Magmaticien'){$pointsCompétenceUtilisés--; /*Car j'ai "Jet de Lave" et "Canalisation" en sort de base.*/}?>
		<td> Points de compétence : <span class="<?php if(($niveau+floor(($niveau)/6))-$pointsCompétenceUtilisés>0){echo "pointsdispo";}elseif(($niveau+floor(($niveau)/6))-$pointsCompétenceUtilisés<0){echo "red";}?>"><?php echo ($niveau+floor(($niveau)/6))-$pointsCompétenceUtilisés ?>  </span></td> 
		<td> <span class="<?= $statistique['Type_Ressource'];?>"><?php echo $statistique['Type_Ressource'];?> </span></td> 
		<td><?php if (!empty($statistique['Type_Ressource'])){?><span class="<?= $statistique['Type_Ressource'];?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Ressource', 'nombre','personnage')"> <?php echo $ressource ?> </span>+ <span class="<?= $statistique['Type_Ressource'];?>"><?php echo $bonusressource?></span> (<span class="<?= $statistique['Type_Ressource'];?>"><?php echo $bonusressource+$ressource?></span>)<?php } ?></td> 
	</tr>
	
	<tr> <td><span class="agilité"> Agilité </span></td> 
		<td><span class="agilité" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Agilité', 'nombre','personnage')"> <?php echo $agilité ?></span> + <span class="agilité"><?php echo $bonusagilité?></span> (<span class="agilité"><?php echo $bonusagilité+$agilité?></span>)</td> 
		<td> <!--   test ... <!--?php echo $testcompetence['merde']; if(empty($testcompetence)){echo "raté!".$nbpointstestretourn;} ?-->   </td> 
		<td> <span class="réussite">Réussite </span></td> 
		<td><span class="réussite"><?php echo $bonusréussite+$réussite?></span> (<span class="réussite" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Réussite', 'nombre','personnage')"><?php echo $réussite ?> </span> + <span class="réussite"><?php echo $bonusréussite?></span>)</td> 
	</tr>
	
	<tr> <td> - </td> <td> - </td> <td> </td> <td> - </td> <td> - </td> </tr>
	<tr> <td> Charisme </td> <td> Marchandage </td> <td>  </td> <td> Intimidation </td> <td> Chance </td> 
	</tr>
	
	<tr> 
		<td ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Charisme', 'nombre','personnage')"> <?php echo $charisme?> </td> 
		<td ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Marchandage', 'nombre','personnage')"> <?php echo $marchandage ?> </td> 
		<td>  </td> 
		<td ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Intimidation', 'nombre','personnage')"> <?php echo $intimidation ?> </td> 
		<td ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Chance', 'nombre','personnage')"> <?php echo $chance ?> </td> 
	</tr>

</table>

