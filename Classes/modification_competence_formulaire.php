<?php
$f=1;
$g=1;




for($g=1;$g<6;$g++){
		
		
		
		$impact="";
		?>
			<TEXTAREA name="newDescription<?php echo $g;?>" id="newDescription<?php echo $f;?>" rows=3 cols=36 onblur="modification_description('Description<?php echo $g;?>', this)"><?php echo $competence['Description'.$g];?></TEXTAREA><br>
		<?php
		if($f<6){
		if($competence['Type_calcul'.$f]==1){
			if($competence['Pourcentage'.$f.'']){$impact='';}
				elseif($competence['Impact'.$f.''] == "vie"){$impact=' points de vie';}
				elseif($competence['Impact'.$f.''] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['Impact'.$f.''] != "red" && $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b'])).''.$impact>2){$impact=' '.$competence['Impact'.$f.''].'s';}
				elseif($competence['Impact'.$f.''] != "red"){$impact=' '.$competence['Impact'.$f.''];}
				elseif($competence['Impact'.$f.''] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}
				
				
				
					
						if($competence['Pourcentage'.$f.'']){
						?>	
							
							<select name="newType_calcul<?php echo $f;?>" id="newType_calcul<?php echo $f;?>" value=<?php echo $competence['Type_calcul'.$f];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calcul'.$f]==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calcul'.$f]==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calcul'.$f]==2){echo 'selected';}?>>2</option></select> :
							<input type="number" name="newCalcul<?php echo $f;?>a" id="newCalcul<?php echo $f;?>a" value="<?php echo $competence['Calcul'.$f.'a'];?>" style="width:50px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>a',1,<?php echo $f?>,arr)">+(
							1 / 
							<input type="number" step="any" name="newCalcul<?php echo $f;?>b" id="newCalcul<?php echo $f;?>b" value="<?php echo $competence['Calcul'.$f.'b'];?>"style="width:50px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>b',1,<?php echo $f?>,arr)">
							<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo $f;?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px" onblur="modification_calcul(this,'Statistique<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['Statistique'.$f.''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['Statistique'.$f.'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.$f.'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.$f.'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.$f.'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.$f.'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.$f.'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['Statistique'.$f.'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.$f.'']=='ressource'){echo 'selected';}?>>Ressource</option></select>%<br>
							+<input type="number"  name="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" id="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" style="width:50px" >D
							<input type="number"  name="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" id="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" style="width:50px" ><br>
							couleur :<input type="text" name="newImpact<?php echo $f;?>" id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['Pourcentage'.$f.'']){echo 'checked';};?>><br><br>
							
							
						<?php
						}else{
						?>	
							
							<select name="newType_calcul<?php echo $f;?>" id="newType_calcul<?php echo $f;?>" value=<?php echo $competence['Type_calcul'.$f];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calcul'.$f]==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calcul'.$f]==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calcul'.$f]==2){echo 'selected';}?>>2</option></select> :
							<input type="number" name="newCalcul<?php echo $f;?>a" id="newCalcul<?php echo $f;?>a" value="<?php echo $competence['Calcul'.$f.'a'];?>" style="width:50px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>a',1,<?php echo $f?>,arr)">+(
							1 / 
							<input type="number" step="any" name="newCalcul<?php echo $f;?>b" id="newCalcul<?php echo $f;?>b" value="<?php echo $competence['Calcul'.$f.'b'];?>"style="width:50px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>b',1,<?php echo $f?>,arr)">
							<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo $f;?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px" onblur="modification_calcul(this,'Statistique<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['Statistique'.$f.''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['Statistique'.$f.'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.$f.'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.$f.'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.$f.'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.$f.'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.$f.'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['Statistique'.$f.'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.$f.'']=='ressource'){echo 'selected';}?>>Ressource</option>
							</select>)<?php echo $impact; ?>
							<br>
							+<input type="number"  name="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" id="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" style="width:50px" >D
							<input type="number"  name="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" id="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" style="width:50px" ><br>
							couleur :<input type="text" name="newImpact<?php echo $f;?>" id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['Pourcentage'.$f.'']){echo 'checked';};?>><br><br>
							
						<?php
						}
					
					
				
				
				$f++;
			}elseif($competence['Type_calcul'.$f]==2){
				
				
				//Affiche ce que fait la compétence (pdv, damages, case, tour, etc ...) et met un "s" si il y en a plusieurs.
				if($competence['Pourcentage'.$f.'']){$impact=' %';}
				elseif($competence['Impact'.$f.''] == "vie"){$impact=' points de vie';}
				elseif($competence['Impact'.$f.''] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['Impact'.$f.''] != "red" and $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(floor((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b'])).''.$impact>2)
				{$impact=' '.$competence['Impact'.$f.''].'s';}
				elseif($competence['Impact'.$f.''] != "red"){$impact=' '.$competence['Impact'.$f.''];}
				elseif($competence['Impact'.$f.''] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}
				
				
				
				
				
				if($competence['Pourcentage'.$f.'']){
						?>	
							<select name="newType_calcul<?php echo $f;?>" id="newType_calcul<?php echo $f;?>" value= <?php echo $competence['Type_calcul'.$f];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calcul'.$f]==NULL){echo 'selected';}?>></option>
							<option value=1 <?php if($competence['Type_calcul'.$f]==1){echo 'selected';}?>>1</option>
							<option value=2 <?php if($competence['Type_calcul'.$f]==2){echo 'selected';}?>>2</option></select>
							 :
							<input type="number" name="newCalcul<?php echo $f;?>a" id="newCalcul<?php echo $f;?>a" value="<?php echo $competence['Calcul'.$f.'a'];?>" style="width:50px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>a',2,<?php echo $f?>,arr)">+(
							1 / 
							<input type="number" step="any" name="newCalcul<?php echo $f;?>b" id="newCalcul<?php echo $f;?>b" value="<?php echo $competence['Calcul'.$f.'b'];?>"style="width:75px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>b',2,<?php echo $f?>,arr)">
							<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo $f;?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px" onblur="modification_calcul(this,'Statistique<?php echo $f;?>',2,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['Statistique'.$f.''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['Statistique'.$f.'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.$f.'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.$f.'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.$f.'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.$f.'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.$f.'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['Statistique'.$f.'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.$f.'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<br>
							<input type="hidden" name="newCalcul<?php echo ($f+1);?>a" id="newCalcul<?php echo ($f+1);?>a" value="<?php echo $competence['Calcul'.($f+1).'a'];?>" style="width:50px">+(
							1 / 
							<input type="number" step="any" name="newCalcul<?php echo ($f+1);?>b" id="newCalcul<?php echo ($f+1);?>b" value="<?php echo $competence['Calcul'.($f+1).'b'];?>"style="width:75px" onblur="modification_calcul(this,'Calcul<?php echo ($f+1);?>a',2,<?php echo $f?>,arr)">
							<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo ($f+1);?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px" onblur="modification_calcul(this,'Statistique<?php echo ($f+1);?>',2,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['Statistique'.$f.''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['Statistique'.($f+1).'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.($f+1).'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.($f+1).'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.($f+1).'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.($f+1).'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.($f+1).'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['Statistique'.($f+1).'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.($f+1).'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)%<br>
							+<input type="number"  name="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" id="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" style="width:50px" >D
							<input type="number"  name="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" id="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" style="width:50px" ><br>
							+<input type="number"  name="newNombreAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Nombre_Amplitude'.($f+1)];?>" id="newNombreAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Nombre_Amplitude'.($f+1)];?>" style="width:50px" >D
							<input type="number"  name="newAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Amplitude'.($f+1)];?>" id="newAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Amplitude'.($f+1)];?>" style="width:50px" ><br>
							couleur :<input type="text" name="newImpact<?php echo $f;?> id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['Pourcentage'.$f.'']){echo 'checked';};?>><br>
							couleur :<input type="text" name="newImpact<?php echo ($f+1);?>" id="newImpact<?php echo ($f+1);?>" value="<?php echo $competence['Impact'.($f+1).''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo ($f+1);?>" id="new%<?php echo ($f+1);?>" value="%"style="width:75px" <?php if($competence['Pourcentage'.($f+1).'']){echo 'checked';};?>><br><br><br>
							
							
						<?php
						}else{
						?>	
							
							<select name="newType_calcul<?php echo $f;?>" id="newType_calcul<?php echo $f;?>" value=<?php echo $competence['Type_calcul'.$f];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calcul'.$f]==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calcul'.$f]==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calcul'.$f]==2){echo 'selected';}?>>2</option></select> :
							<input type="number" name="newCalcul<?php echo $f;?>a" id="newCalcul<?php echo $f;?>a" value="<?php echo $competence['Calcul'.$f.'a'];?>" style="width:50px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>a',2,<?php echo $f?>,arr)">+(
							1 / 
							<input type="number" step="any" name="newCalcul<?php echo $f;?>b" id="newCalcul<?php echo $f;?>b" value="<?php echo $competence['Calcul'.$f.'b'];?>"style="width:75px" onblur="modification_calcul(this,'Calcul<?php echo $f;?>b',2,<?php echo $f?>,arr)">
							<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo $f;?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px" onblur="modification_calcul(this,'Statistique<?php echo $f;?>',2,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['Statistique'.$f.''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['Statistique'.$f.'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.$f.'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.$f.'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.$f.'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.$f.'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.$f.'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['Statistique'.$f.'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.$f.'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<br>
							<input type="hidden" name="newCalcul<?php echo ($f+1);?>a" id="newCalcul<?php echo ($f+1);?>a" value="<?php echo $competence['Calcul'.($f+1).'a'];?>" style="width:50px">+(
							1 / 
							<input type="number" step="any" name="newCalcul<?php echo ($f+1);?>b" id="newCalcul<?php echo ($f+1);?>b" value="<?php echo $competence['Calcul'.($f+1).'b'];?>"style="width:75px" onblur="modification_calcul(this,'Calcul<?php echo ($f+1)?>b',2,<?php echo $f?>,arr)">
							<select name="newStatistique<?php echo ($f+1);?>" id="newStatistique<?php echo ($f+1);?>" value="<?php echo $competence['Statistique'.($f+1).''];?>"style="width:100px" onblur="modification_calcul(this,'Statistique<?php echo ($f+1);?>',2,<?php echo $f?>,arr)" form="statform">
							<option value='NULL' <?php if(!isset($competence['Statistique'.$f.''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['Statistique'.($f+1).'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.($f+1).'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.($f+1).'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.($f+1).'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.($f+1).'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.($f+1).'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['Statistique'.($f+1).'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.($f+1).'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?><br>
							+<input type="number"  name="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" id="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" style="width:50px" >D
							<input type="number"  name="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" id="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" style="width:50px" ><br>
							+<input type="number"  name="newNombreAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Nombre_Amplitude'.($f+1)];?>" id="newNombreAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Nombre_Amplitude'.($f+1)];?>" style="width:50px" >D
							<input type="number"  name="newAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Amplitude'.($f+1)];?>" id="newAmplitude<?php echo ($f+1);?>" value="<?php echo $competence['Amplitude'.($f+1)];?>" style="width:50px" ><br>
							couleur :<input type="text" name="newImpact<?php echo $f;?>" id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['Pourcentage'.$f.'']){echo 'checked';};?>><br>
							couleur :<input type="text" name="newImpact<?php echo ($f+1);?>" id="newImpact<?php echo ($f+1);?>" value="<?php echo $competence['Impact'.($f+1).''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo ($f+1);?>" id="new%<?php echo ($f+1);?>" value="%"style="width:75px" <?php if($competence['Pourcentage'.($f+1).'']){echo 'checked';};?>><br><br>
							
						<?php
						}
					
				
				$f+=2;
			}elseif(!isset($competence['Type_calcul'.$f])){
				?>	
							
					<select name="newType_calcul<?php echo $f;?>" id="newType_calcul<?php echo $f;?>" value=<?php echo $competence['Type_calcul'.$f];?> style="width:50px" form="statform">
							<option value='NULL'  <?php if($competence['Type_calcul'.$f]==NULL){echo 'selected';}?>></option>
							<option value='1' <?php if($competence['Type_calcul'.$f]==1){echo 'selected';}?>>1</option>
							<option value='2' <?php if($competence['Type_calcul'.$f]==2){echo 'selected';}?>>2</option></select> :
					<input type="number" name="newCalcul<?php echo $f;?>a" id="newCalcul<?php echo $f;?>a" value="<?php echo $competence['Calcul'.$f.'a'];?>" style="width:50px">+(
					1 / 
					<input type="number" step="any" name="newCalcul<?php echo $f;?>b" id="newCalcul<?php echo $f;?>b" value="<?php echo $competence['Calcul'.$f.'b'];?>"style="width:75px">
					<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo $f;?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px" onblur="modification_calcul(this,'Statistique<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
					<option value='NULL' <?php if(!isset($competence['Statistique'.$f.''])){echo 'selected';}?>></option>
							<option value="niveau"<?php if($competence['Statistique'.$f.'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.$f.'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.$f.'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.$f.'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.$f.'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.$f.'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="PDV" <?php if($competence['Statistique'.$f.'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.$f.'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?><br>
							+<input type="number"  name="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" id="newNombreAmplitude<?php echo $f;?>" value="<?php echo $competence['Nombre_Amplitude'.$f];?>" style="width:50px" >D
							<input type="number"  name="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" id="newAmplitude<?php echo $f;?>" value="<?php echo $competence['Amplitude'.$f];?>" style="width:50px" ><br>
					couleur :<input type="text" name="newImpact<?php echo $f;?>" id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
					pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="TRUE" style="width:75px" <?php if($competence['Pourcentage'.$f.'']){echo 'checked';};?>><br><br>
				
			<?php
					$f++;
			}
		}
}
?>
<TEXTAREA name="newDescription6" id="newDescription6" rows=3 cols=36 onblur="modification_description('Description6', this)" ><?php echo $competence['Description6'];?></TEXTAREA>