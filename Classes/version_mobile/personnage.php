<div class="personnagebis cache" id="statistiques_personnage">
<table >
<tr> 
	<th colspan="2" id="libelle">
		<b><?php echo $statistique['Libellé']?> </b>
	</th>
</tr>
<tr class="statistiques_basique"> 	
	<td>
		PV : <b id="PDV<?php echo $personnage;?>" onclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PDV_Actuel', 'nombre','personnage')"><?php echo $pdvactuel ?> </b> / <b><?php echo ($vitalité+$bonusvitalité)*2 ?> </b>
	</td>
	<?php if (!empty($statistique['Type_Ressource'])){?>
		<td colspan=2 class="<?php if($personnage=='Paladin'){echo 'canon';}else{echo $statistique['Type_Ressource'];}?>">
			<?php echo $statistique['Type_Ressource'] ?> : <b onclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Ressource_Actuelle', 'nombre','personnage')"><span id="<?php if($personnage=='Paladin'){echo 'Canon de lumière';}else{echo $statistique['Type_Ressource'];}?><?php echo $personnage?>"><?php echo $ressourceactuelle ?></span> </b> / <b><?php echo ($ressource+$bonusressource) ?> </b>
		</td>
	<?php }else{?>
		<th colspan=2 >
			
		</th>
</tr>
	<?php }?>
	<tr> <td> ---- </td> <td> ---- </td></tr>
	<tr>
		<td> <span class="vie">Vitalité</span> </td> 
		<td> <span class="vie"><?php echo $bonusvitalité+$vitalité?></span> (<span class="vie"  ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Vitalité', 'nombre','personnage')"><?php echo $vitalité ?> </span>+ <span class="vie"><?php echo $bonusvitalité?></span>)</td> 
		<td ></td> 
	</tr>
	<tr>
		<td> <?php if(isset($statistique['Ressource'])) {?><span class="<?php echo $statistique{'Type_Ressource'}; ?>"><?php if($personnage=='Paladin'){echo 'Canon de lumière';}else{echo $statistique{'Type_Ressource'};}?></span> <?php } ?></td> 
		<td> <?php if(isset($statistique['Ressource'])) {?><span class="<?php echo $statistique{'Type_Ressource'}; ?>"><?php echo $bonusressource+$ressource?></span> (<span class="<?php echo $statistique{'Type_Ressource'}; ?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Ressource', 'nombre','personnage')"> <?php echo $ressource ?> </span>+ <span class="<?php echo $statistique{'Type_Ressource'}; ?>"><?php echo $bonusressource?></span>) <?php } ?></td> 
	</tr>
	<tr> <td> ---- </td> <td> ---- </td></tr>
	<tr> 
		<td> <span class="force">Force</span> </td> 
		<td> <span class="force"><?php echo $bonusforce+$force?></span> (<span class="force" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Force', 'nombre','personnage')"><?php echo $force ?> </span>+ <span class="force"><?php echo $bonusforce?></span>)</td> 
	</tr>
	
	
	<tr> <td><span class="intelligence"> Intelligence </span></td> 
		<td> <span class="intelligence"><?php echo $bonusintelligence+$intelligence?></span> (<span class="intelligence" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Intelligence', 'nombre','personnage')"><?php echo $intelligence ?> </span>+ <span class="intelligence"><?php echo $bonusintelligence?></span>)</td> 
		</tr>
	
	
	<tr> <td><span class="agilité"> Agilité </span></td> 
		<td> <span class="agilité"><?php echo $bonusagilité+$agilité?></span> (<span class="agilité" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Agilité', 'nombre','personnage')"> <?php echo $agilité ?></span> + <span class="agilité"><?php echo $bonusagilité?></span>)</td> 
		</tr><tr>
		<td> <span class="réussite">Réussite </span></td> 
		<td><span class="réussite"><?php echo $bonusréussite+$réussite?></span> (<span class="réussite" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'Réussite', 'nombre','personnage')"><?php echo $réussite ?> </span> + <span class="réussite"><?php echo $bonusréussite?></span>)</td> 
	</tr>
	
	<tr> <td> ---- </td> <td> ---- </td>   </tr>
	<tr> <td> Dégâts par coup : </td> <td> <?php
switch($personnage){
	case 'Voleur':
		echo floor(($agilité+$bonusagilité)/4);
		break;
	case 'Paladin' :
	case 'Nain' :
	case 'Franklin' :
		echo floor(($force+$bonusforce)/3);
		break;
	case 'Démoniste' :
	case 'Magmaticien' :
	case 'Manipulateur de Sang' :
		echo floor(($intelligence+$bonusintelligence)/3);
		break;
}
?> </td> 
</tr><tr>
<td class="armure"> Armure : </td> <td class="armure" id ="Armure<?php echo $personnage?>"><?php echo $bonusarmure; ?></td></tr>

<tr> 
	<td class="PA"> PA </td> <td class="PA" id ="PA<?php echo $personnage?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PA_Actuel', 'nombre','personnage')"> <?php echo $paactuel; ?></td> 
	</tr><tr>
	<td class="PM"> PM </td> <td class="PM" id ="PM<?php echo $personnage?>" ondblclick="inlineMod(<?php echo $statistique['Id_Personnage'] ?>, this, 'PM_Actuel', 'nombre','personnage')"> <?php echo $pmactuel; ?></td>
	</tr>
	

</table>
</div>
<div class="repliement_statistiques"><span class="hamburger-inner" onclick="cacher_afficher('statistiques_personnage')"></span></div>
