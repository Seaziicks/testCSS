<?php
$f=1;
$g=1;





for($g=1;$g<=3;$g++){
	$impact="";
		?>
			<TEXTAREA name="newEffet<?php echo $g ;?>" id="newEffet<?php echo $g ;?>" rows=3 cols=36 onblur="modification_description('Effet<?php echo $g; ?>', this)"><?php echo $competence['Effet'.$g];?></TEXTAREA><br>
		<?php
	
		if($competence['NumEffet']==$g){
			if($competence['Type_calculBis1']==1){
			?>	
							<select name="newNumEffet" id="newNumEffet" value=<?php echo $competence['NumEffet'];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['NumEffet']==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['NumEffet']==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['NumEffet']==2){echo 'selected';}?>>2</option>
							<option value='3' <?php if($competence['NumEffet']==3){echo 'selected';}?>>3</option></select><br>
							<select name="newType_calculBis1" id="newType_calculBis1" value=<?php echo $competence['Type_calculBis1'];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calculBis1']==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calculBis1']==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calculBis1']==2){echo 'selected';}?>>2</option></select> :
							<input type="number" name="newCalculBis1a" id="newCalculBis1a" value="<?php echo $competence['CalculBis1a'];?>" style="width:50px" onblur="modification_calculBis('resultatBis1', this,'CalculBis<?php echo $f;?>a',1,<?php echo $f?>,arr)">+(
							1 / 
							<input type="number" step="any" name="newCalculBis1b" id="newCalculBis1b" value="<?php echo $competence['CalculBis1b'];?>"style="width:50px" onblur="modification_calculBis('resultatBis1', this,'CalculBis<?php echo $f;?>b',1,<?php echo $f?>,arr)">
							<select name="newStatistiqueBis1" id="newStatistiqueBis1" value="<?php echo $competence['StatistiqueBis1'];?>"style="width:100px"onblur="modification_calculBis('resultatBis1', this,'StatistiqueBis<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['StatistiqueBis1'])){echo 'selected';}?>> </option>
							<option value="niveau"<?php if($competence['StatistiqueBis1']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['StatistiqueBis1']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['StatistiqueBis1']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['StatistiqueBis1']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['StatistiqueBis1']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['StatistiqueBis1']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['StatistiqueBis1']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['StatistiqueBis1']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?><br>
							couleur :<input type="text" name="newImpactBis" id="newImpactBis" value="<?php echo $competence['ImpactBis'];?>"style="width:50px">
							pourcentage : <input type="checkbox" name="new%Bis" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['PourcentageBis']){echo 'checked';};?>><br><br>
							
						<?php 
						$f++;
			}else{
				?>	
							<select name="newNumEffet" id="newNumEffet" value=<?php echo $competence['NumEffet'];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['NumEffet']==NULL){echo 'selected';}?>> </option>
							<option value='1' <?php if($competence['NumEffet']==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['NumEffet']==2){echo 'selected';}?>>2</option>
							<option value='3' <?php if($competence['NumEffet']==3){echo 'selected';}?>>2</option></select><br>
							<select name="newType_calculBis1" id="newType_calculBis1" value=<?php echo $competence['Type_calculBis1'];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calculBis1']==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calculBis1']==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calculBis1']==2){echo 'selected';}?>>2</option></select> :
							<input type="number" name="newCalculBis<?php echo $f;?>a" id="newCalculBis<?php echo $f;?>a" value="<?php echo $competence['CalculBis'.$f.'a'];?>" style="width:50px">+(
							1 / 
							<input type="number" step="any" name="newCalculBis<?php echo $f;?>b" id="newCalculBis<?php echo $f;?>b" value="<?php echo $competence['CalculBis'.$f.'b'];?>"style="width:75px">
							<select name="newStatistiqueBis<?php echo $f;?>" id="newStatistiqueBis<?php echo $f;?>" value="<?php echo $competence['StatistiqueBis'.$f.''];?>"style="width:100px"onblur="modification_calcul('resultat1', this,'StatistiqueBis<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['StatistiqueBis'.$f.''])){echo 'selected';}?>> </option>
							<option value="niveau"<?php if($competence['StatistiqueBis'.$f.'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['StatistiqueBis'.$f.'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['StatistiqueBis'.$f.'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['StatistiqueBis'.$f.'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['StatistiqueBis'.$f.'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['StatistiqueBis'.$f.'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['StatistiqueBis'.$f.'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['StatistiqueBis'.$f.'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<br>+(
							1 / 
							<input type="number" step="any" name="newCalculBis<?php echo ($f+1);?>b" id="newCalculBis<?php echo ($f+1);?>b" value="<?php echo $competence['CalculBis'.($f+1).'b'];?>"style="width:75px">
							<select name="newStatistiqueBis<?php echo ($f+1);?>" id="newStatistiqueBis<?php echo ($f+1);?>" value="<?php echo $competence['StatistiqueBis'.($f+1).''];?>"style="width:100px"onblur="modification_calcul('resultat1', this,'StatistiqueBis<?php echo ($f+1);?>',1,<?php echo ($f+1)?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['StatistiqueBis'.($f+1).''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['StatistiqueBis'.($f+1).'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['StatistiqueBis'.($f+1).'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['StatistiqueBis'.($f+1).'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['StatistiqueBis'.($f+1).'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['StatistiqueBis'.($f+1).'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['StatistiqueBis'.($f+1).'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['StatistiqueBis'.($f+1).'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['StatistiqueBis'.($f+1).'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?><br>
							couleur :<input type="text" name="newImpactBis" id="newImpactBis" value="<?php echo $competence['ImpactBis'];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%Bis" id="new%Bis" value="%"style="width:75px" <?php if($competence['PourcentageBis']){echo 'checked';};?>><br>
							<br><br>
							
						<?php
						$f+=2;
			}
			?>
			
			<?php
		}
		?><TEXTAREA name="newEffet<?php echo $g;?>Bis" id="newEffet<?php echo $g;?>Bis" rows=3 cols=36 onblur="modification_description('Effet<?php echo $g;?>Bis', this)"><?php echo $competence['Effet'.$g.'Bis'];?></TEXTAREA><br><br><?php
}

if(is_null($competence['NumEffet'])){
	?>						
							<select name="newNumEffet" id="newNumEffet" value=<?php echo $competence['NumEffet'];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['NumEffet']==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['NumEffet']==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['NumEffet']==2){echo 'selected';}?>>2</option>
							<option value='3' <?php if($competence['NumEffet']==3){echo 'selected';}?>>3</option></select><br>
							<select name="newType_calculBis1" id="newType_calculBis1" value=<?php echo $competence['Type_calculBis1'];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calcul'.$f]==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calculBis1']==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calculBis1']==2){echo 'selected';}?>>2</option></select>
							 :
							<input type="number" name="newCalculBis1a" id="newCalculBis1a" value="<?php echo $competence['CalculBis1a'];?>" style="width:50px" onblur="modification_calculBis('resultatBis1', this,'CalculBis1a',1,1,arr)">+(
							1 / 
							<input type="number" step="any" name="newCalculBis1b" id="newCalculBis1b" value="<?php echo $competence['CalculBis1b'];?>"style="width:50px" onblur="modification_calculBis('resultatBis1', this,'CalculBis1b',1,1,arr)">
							<select name="newStatistiqueBis1" id="newStatistiqueBis1" value="<?php echo $competence['StatistiqueBis1'];?>"style="width:100px"onblur="modification_calculBis('resultatBis1', this,'StatistiqueBis1',1,1,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['StatistiqueBis1'])){echo 'selected';}?>> </option>
							<option value="niveau"<?php if($competence['StatistiqueBis1']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['StatistiqueBis1']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['StatistiqueBis1']=='agilite'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['StatistiqueBis1']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['StatistiqueBis1']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['StatistiqueBis1']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['StatistiqueBis1']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['StatistiqueBis1']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?><br>
							
							<select name="newType_calculBis2" id="newType_calculBis2" value=<?php echo $competence['Type_calculBis2'];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calcul'.$f]==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calculBis2']==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calculBis2']==2){echo 'selected';}?>>2</option></select>
							 :
							<input type="number" name="newCalculBis2a" id="newCalculBis2a" value="<?php echo $competence['CalculBis2a'];?>" style="width:50px" onblur="modification_calculBis('resultatBis1', this,'CalculBis2a',1,2,arr)">+(
							1 / 
							<input type="number" step="any" name="newCalculBis2b" id="newCalculBis2b" value="<?php echo $competence['CalculBis2b'];?>"style="width:50px" onblur="modification_calculBis('resultatBis1', this,'CalculBis2b',1,2,arr)">
							<select name="newStatistiqueBis2" id="newStatistiqueBis2" value="<?php echo $competence['StatistiqueBis2'];?>"style="width:100px"onblur="modification_calculBis('resultatBis1', this,'StatistiqueBis2',1,2,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['StatistiqueBis2'])){echo 'selected';}?>> </option>
							<option value="niveau"<?php if($competence['StatistiqueBis2']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['StatistiqueBis2']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['StatistiqueBis2']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['StatistiqueBis2']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['StatistiqueBis2']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['StatistiqueBis2']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['StatistiqueBis2']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['StatistiqueBis2']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?><br>
							
							
							
							couleur :<input type="text" name="newImpactBis" id="newImpactBis" value="<?php echo $competence['ImpactBis'];?>"style="width:50px">
							pourcentage : <input type="checkbox" name="new%Bis" id="new%Bis" value="%"style="width:75px" <?php if($competence['PourcentageBis']){echo 'checked';};?>>
	<?php
}
?>
