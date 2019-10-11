<table class="personnagebis">

	<th colspan="1">
		<b><?php echo $statistique['Libellé']?> </b>
	</th>
	
	<th>
	
	</th>
	
	<th >
		PDV : <b id="PDV<?php echo $personnage;?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PDV_Actuel', 'nombre','personnage')"><?php echo $pdvactuel ?> </b> / <b><?php echo ($vitalité+$bonusvitalité)*2 ?> </b>
	</th>
	<?php if (!empty($statistique['Type_Ressource'])){?>
		<th colspan=2 class="<?php if($personnage=='Paladin'){echo 'canon';}else{echo $statistique['Type_Ressource'];}?>">
			<?php echo $statistique['Type_Ressource'] ?> : <b ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Ressource_Actuelle', 'nombre','personnage')"><span id="<?php if($personnage=='Paladin'){echo 'Canon de lumière';}else{echo $statistique['Type_Ressource'];}?><?php echo $personnage?>"><?php echo $ressourceactuelle ?></span> </b> / <b><?php echo ($ressource+$bonusressource) ?> </b>
		</th>
	<?php }else{?>
		<th colspan=2 >
			
		</th>
	
	<?php }?>
	<tr> 
		<td> <span class="force">Force</span> </td> 
		<td> <span class="force"><?php echo $bonusforce+$force?></span> (<span class="force" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Force', 'nombre','personnage')"><?php echo $force ?> </span>+ <span class="force"><?php echo $bonusforce?></span>)</td> 
		<td>  </td> 
		<td> <span class="vie">Vitalité</span> </td> 
		<td> <span class="vie"><?php echo $bonusvitalité+$vitalité?></span> (<span class="vie"  ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Vitalité', 'nombre','personnage')"><?php echo $vitalité ?> </span>+ <span class="vie"><?php echo $bonusvitalité?></span>)</td> 
		<td ></td> 
	</tr>
	
	<tr> <td><span class="intelligence"> Intelligence </span></td> 
		<td> <span class="intelligence"><?php echo $bonusintelligence+$intelligence?></span> (<span class="intelligence" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Intelligence', 'nombre','personnage')"><?php echo $intelligence ?> </span>+ <span class="intelligence"><?php echo $bonusintelligence?></span>)</td> 
		<td></td> 
		<td> <span class="mana"><?php if($personnage=='Paladin'){echo 'Canon de lumière';}else{echo 'Mana';}?></span></td> 
		<td> <span class="mana"><?php echo $bonusressource+$ressource?></span> (<span class="mana" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Ressource', 'nombre','personnage')"> <?php echo $ressource ?> </span>+ <span class="mana"><?php echo $bonusressource?></span>)</td> 
	</tr>
	
	<tr> <td><span class="agilité"> Agilité </span></td> 
		<td> <span class="agilité"><?php echo $bonusagilité+$agilité?></span> (<span class="agilité" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Agilité', 'nombre','personnage')"> <?php echo $agilité ?></span> + <span class="agilité"><?php echo $bonusagilité?></span>)</td> 
		<td> <!--   test ... <!--?php echo $testcompetence['merde']; if(empty($testcompetence)){echo "raté!".$nbpointstestretourn;} ?-->   </td> 
		<td> <span class="réussite">Réussite </span></td> 
		<td><span class="réussite"><?php echo $bonusréussite+$réussite?></span> (<span class="réussite" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Réussite', 'nombre','personnage')"><?php echo $réussite ?> </span> + <span class="réussite"><?php echo $bonusréussite?></span>)</td> 
	</tr>
	
	<tr> <td> - </td> <td> - </td> <td> </td> <td> - </td> <td> - </td> </tr>
	<tr> <td> Dégâts par coup : </td> <td> <?php
switch($personnage){
	case 'Voleur':
		echo floor(($agilité+$bonusagilité)/4);
		break;
	case 'Paladin' :
	case 'Nain' :
		echo floor(($force+$bonusforce)/3);
		break;
	case 'Démoniste' :
	case 'Manipulateur de Sang' :
		echo floor(($intelligence+$bonusintelligence)/3);
		break;
}
?> </td> <td> Armure : </td> <td id ="Armure<?php echo $personnage?>"><?php echo $bonusarmure; ?></td></tr>

<tr> 
	<td class="PA"> PA </td> <td class="PA" id ="PA<?php echo $personnage?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PA_Actuel', 'nombre','personnage')"> <?php echo $paactuel; ?></td> 
	<td> PM </td> <td class="PM" id ="PM<?php echo $personnage?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PM_Actuel', 'nombre','personnage')"> <?php echo $pmactuel; ?></td></tr>
	

</table>

