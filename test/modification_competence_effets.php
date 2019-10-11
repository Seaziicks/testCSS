<?php
$f=1;
$g=1;




echo '<script>alert("'.$g.'");</script>';
for($g=1;$g<=3;$g++){
	$g+=5;
	$impact="";
		?><script>alert("ok");</script>
			<TEXTAREA name="newEffet<?php $g ?>" id="newEffet<?php $g ?>" rows=3 cols=36 onblur="modification_description('Effet<?php $g ?>', this)"><?php echo $competence['Effet'.$g];?></TEXTAREA><br>
		<?php
	
		if($competence['NumEffet']==$g){
			if($competence['Type_calculBis1']==1){
			?>	
							
							<input type="number" name="Type_calculBis1" id="Type_calculBis1" value="<?php echo $competence['Type_calculBis1'];?>"style="width:50px" > :
							<input type="number" name="CalculBis1a" id="CalculBis1a" value="<?php echo $competence['CalculBis1a'];?>" style="width:50px" onblur="modification_calcul('resultatbis1', this,'Calcul<?php echo $f;?>a',1,<?php echo $f?>,arr)">+(
							1 / 
							<input type="number" name="CalculBis1b" id="CalculBis1b" value="<?php echo $competence['CalculBis1b'];?>"style="width:50px" onblur="modification_calcul('resultatbis1', this,'Calcul<?php echo $f;?>b',1,<?php echo $f?>,arr)">
							<select name="StatistiqueBis1" id="StatistiqueBis1" value="<?php echo $competence['StatistiqueBis1'];?>"style="width:100px"onblur="modification_calcul('resultat1', this,'Statistique<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
							<option value="niveau"<?php if($competence['StatistiqueBis1']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['StatistiqueBis1']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['StatistiqueBis1']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['StatistiqueBis1']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['StatistiqueBis1']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['StatistiqueBis1']=='pm'){echo 'selected';}?>>PM</option>
							<option value="vitalite" <?php if($competence['StatistiqueBis1']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['StatistiqueBis1']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?>
							<br>
							<!--couleur :<input type="text" name="newImpact<?php/* echo $f;?>" id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['%'.$f.'']){echo 'checked';};*/?>><br--><br>
							
						<?php
						$f++;
			}else{
				?>	
							
							<input type="number" name="newType_calcul<?php echo $f;?>" id="newType_calcul<?php echo $f;?>" value="<?php echo $competence['Type_calcul'.$f];?>"style="width:50px"> :
							<input type="number" name="newCalcul<?php echo $f;?>a" id="newCalcul<?php echo $f;?>a" value="<?php echo $competence['Calcul'.$f.'a'];?>" style="width:50px">+(
							1 / 
							<input type="number" name="newCalcul<?php echo $f;?>b" id="newCalcul<?php echo $f;?>b" value="<?php echo $competence['Calcul'.$f.'b'];?>"style="width:75px">
							<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo $f;?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px"onblur="modification_calcul('resultat1', this,'Statistique<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
							<option value="niveau"<?php if($competence['Statistique'.$f.'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.$f.'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.$f.'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.$f.'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.$f.'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.$f.'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="vitalite" <?php if($competence['Statistique'.$f.'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.$f.'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<br>+(
							1 / 
							<input type="number" name="newCalcul<?php echo ($f+1);?>b" id="newCalcul<?php echo ($f+1);?>b" value="<?php echo $competence['Calcul'.($f+1).'b'];?>"style="width:75px">
							<select name="newStatistique<?php echo $f;?>" id="newStatistique<?php echo $f;?>" value="<?php echo $competence['Statistique'.$f.''];?>"style="width:100px"onblur="modification_calcul('resultat1', this,'Statistique<?php echo $f;?>',1,<?php echo $f?>,arr)" form="statform">
							<option value="niveau"<?php if($competence['Statistique'.($f+1).'']=='niveau'){echo 'selected';}?>>Niveau</option>
							<option value="force" <?php if($competence['Statistique'.($f+1).'']=='force'){echo 'selected';}?>>Force</option>
							<option value="agilite" <?php if($competence['Statistique'.($f+1).'']=='agilité'){echo 'selected';}?>>Agilité</option>
							<option value="intelligence" <?php if($competence['Statistique'.($f+1).'']=='intelligence'){echo 'selected';}?>>Intelligence</option>
							<option value="pa" <?php if($competence['Statistique'.($f+1).'']=='pa'){echo 'selected';}?>>PA</option>
							<option value="pm" <?php if($competence['Statistique'.($f+1).'']=='pm'){echo 'selected';}?>>PM</option>
							<option value="vitalite" <?php if($competence['Statistique'.($f+1).'']=='PDV'){echo 'selected';}?>>Vitalité</option>
							<option value="ressource" <?php if($competence['Statistique'.($f+1).'']=='ressource'){echo 'selected';}?>>Ressource</option></select>)<?php echo $impact; ?><br>
							couleur :<input type="text" name="newImpact<?php echo $f;?>" id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['%'.$f.'']){echo 'checked';};?>><br>
							couleur :<input type="text" name="newImpact<?php echo ($f+1);?>" id="newImpact<?php echo ($f+1);?>" value="<?php echo $competence['Impact'.($f+1).''];?>"style="width:75px">
							pourcentage : <input type="checkbox" name="new%<?php echo ($f+1);?>" id="new%<?php echo ($f+1);?>" value="%"style="width:75px" <?php if($competence['%'.($f+1).'']){echo 'checked';};?>><br><br>
							
						<?php
			}
			?>
			<script>alert("ok");</script>
			<TEXTAREA name="newEffet<?php echo $g;?>Bis" id="newEffet<?php echo $g;?>Bis" rows=3 cols=36 onblur="modification_description('Effet<?php echo $g;?>Bis', this)"><?php echo $competence['Effet'.$g.'Bis'];?></TEXTAREA><br>
			<?php
		}
		?><br><br><?php
}
?>
