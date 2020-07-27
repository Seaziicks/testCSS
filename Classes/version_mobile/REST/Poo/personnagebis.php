<table class="personnagebis">

	<th colspan="1">
		<b><?php echo $personnage->_Libellé?> </b>
	</th>
	
	<th>
	
	</th>
	<th >
		PDV : <b id="PDV<?php echo $personnage->_Libellé;?>" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'PDV_Actuel', 'nombre','personnage')"><?php echo $personnage->_PDV_Actuel ?> </b> / <b><?php echo ($personnage->_Vitalité+$personnage->_Bonus_Vitalité)*2 ?> </b>
	</th>
	<?php if (!empty($personnage->_Type_Ressource)){?>
		<th colspan=2 class="<?php if($personnage->_Id_Personnage==2){echo 'canon';}else{echo $personnage->_Type_Ressource;}?>">
			<?php echo $personnage->_Type_Ressource ?> : <b ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'Ressource_Actuelle', 'nombre','personnage')"><span id="<?php if($personnage->_Id_Personnage==2){echo 'Canon de lumière';}else{echo $personnage->_Type_Ressource;}?><?php echo $personnage->_Libellé?>"><?php echo $personnage->_Ressource_Actuelle ?></span> </b> / <b><?php echo ($personnage->_Ressource+$personnage->_Bonus_Ressource) ?> </b>
		</th>
	<?php }else{?>
		<th colspan=2 >
			
		</th>
	
	<?php }?>
	<tr> 
		<td> <span class="force">Force</span> </td> 
		<td> <span class="force"><?php echo $personnage->_Bonus_Force+$personnage->_Force?></span> (<span class="force" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'Force', 'nombre','personnage')"><?php echo $personnage->_Force ?> </span>+ <span class="force"><?php echo $personnage->_Bonus_Force?></span>)</td>
		<td>  </td> 
		<td> <span class="vie">Vitalité</span> </td> 
		<td> <span class="vie"><?php echo $personnage->_Bonus_Vitalité+$personnage->_Vitalité?></span> (<span class="vie"  ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'Vitalité', 'nombre','personnage')"><?php echo $personnage->_Vitalité ?> </span>+ <span class="vie"><?php echo $personnage->_Bonus_Vitalité?></span>)</td>
		<td ></td> 
	</tr>
	
	<tr> <td><span class="intelligence"> Intelligence </span></td> 
		<td> <span class="intelligence"><?php echo $personnage->_Bonus_Intelligence+$personnage->_Intelligence?></span> (<span class="intelligence" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'Intelligence', 'nombre','personnage')"><?php echo $personnage->_Intelligence ?> </span>+ <span class="intelligence"><?php echo $personnage->_Bonus_Intelligence?></span>)</td>
		<td></td> 
		<td> <span class="mana"><?php if($personnage=='Paladin'){echo 'Canon de lumière';}else{echo 'Mana';}?></span></td> 
		<td> <span class="mana"><?php echo $personnage->_Bonus_Ressource+$personnage->_Ressource?></span> (<span class="mana" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'Ressource', 'nombre','personnage')"> <?php echo $personnage->_Ressource ?> </span>+ <span class="mana"><?php echo $personnage->_Bonus_Ressource?></span>)</td>
	</tr>
	
	<tr> <td><span class="agilite"> Agilité </span></td>
		<td> <span class="agilite"><?php echo $personnage->_Bonus_Agilité+$personnage->_Agilité?></span> (<span class="agilite" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'Agilité', 'nombre','personnage')"> <?php echo $personnage->_Agilité ?></span> + <span class="agilite"><?php echo $personnage->_Bonus_Agilité?></span>)</td>
		<td> <!--   test ... <!--?php echo $testcompetence['merde; if(empty($testcompetence)){echo "raté!".$nbpointstestretourn;} ?-->   </td>
		<td> <span class="reussite">Réussite </span></td>
		<td><span class="reussite"><?php echo $personnage->_Bonus_Réussite+$personnage->_Réussite?></span> (<span class="reussite" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'Réussite', 'nombre','personnage')"><?php echo $personnage->_Réussite ?> </span> + <span class="reussite"><?php echo $personnage->_Bonus_Réussite?></span>)</td>
	</tr>
	
	<tr> <td> - </td> <td> - </td> <td> </td> <td> - </td> <td> - </td> </tr>
	<tr> <td> Dégâts par coup : </td> <td> <?php
switch($personnage->_Id_Personnage){
	case '1':
		echo floor(($personnage->_Agilité+$personnage->_Bonus_Agilité)/4);
		break;
	case '2' :
	case '4' :
		echo floor(($personnage->_Force+$personnage->_Bonus_Force)/3);
		break;
	case '3' :
	case '5' :
		echo floor(($personnage->_Intelligence+$personnage->_Bonus_Intelligence)/3);
		break;
}
?> </td> <td> Armure : </td> <td id ="Armure<?php echo $personnage->_Libellé?>"><?php echo $personnage->_Bonus_Armure; ?></td></tr>

<tr> 
	<td class="PA"> PA </td> <td class="PA" id ="PA<?php echo $personnage->_Libellé?>" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'PA_Actuel', 'nombre','personnage')"> <?php echo $personnage->_PA_Actuel; ?></td>
	<td> PM </td> <td class="PM" id ="PM<?php echo $personnage->_Libellé?>" ondblclick="inlineMod(<?php echo $personnage->_Id_Personnage ?>, this, 'PM_Actuel', 'nombre','personnage')"> <?php echo $personnage->_PM_Actuel; ?></td></tr>
	

</table>

