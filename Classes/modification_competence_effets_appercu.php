<?php
$f=1;
$g=1;





for($g=1;$g<=3;$g++){
	$impact="";
	
				
		
		
		
		
				
				?>
			<span id="Effet<?php echo $g; ?>"><?php echo '<br><br>'.$competence['Effet'.$g];?></span>
		<?php
			if($competence['NumEffet']==$g){
				if($competence['PourcentageBis']){$impact='';}
				elseif($competence['ImpactBis'] == "vie"){$impact=' points de vie';}
				elseif($competence['ImpactBis'] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['ImpactBis'] != "red" && $competence['CalculBis1a']+(floor((float)${'stat'.$f}/$competence['CalculBis1b']))>2){$impact=' '.$competence['ImpactBis'].'s';}
				elseif($competence['ImpactBis'] != "red"){$impact=' '.$competence['ImpactBis'];}
				elseif($competence['ImpactBis'] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}
				
				

				if($competence['Type_calculBis1']==1){
				
				if($competence['StatistiqueBis1']=='ressource'){$competence['StatistiqueBis1']=$statistique['Type_Ressource'];}
				?>	
								<!-- Il était tard, Arisoa attendait, alors je n'ai qu'à peine commencé. Les quelques lignes en haut sont correctes, les trois lignes en dessous sont à verifier, et celle après sont issues du copier/coller
									Il faut modifier la base de données pour faire apparaître les % et impacts liés aux effets, et modifier le code en conséquence, en mettant des "Bis", par exemple.
									Temps estimé avant fin : 1h~1h30, mais c'est vraiment large. Cela dépend de si on le fait très proprement en prenant compte des calcul de type 2.
									Courage, moi du futur ! -->
								<span class="voir"><span class="<?php echo $competence['ImpactBis'];?>">
					<?php
					?><span id="resultatBis<?php echo $f?>"><?php echo $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b'])).'</span>'.$impact;
					if($competence['PourcentageBis']){echo '%';}else{echo $impact;} 
					?></span><span class="formule"><span class="<?php echo $competence['ImpactBis'];?>"><span id="CalculBis1a"><?php echo $competence['CalculBis1a'].'</span>';if($competence['PourcentageBis']){echo '<span id="PourcentageBis">%';} ?></span> 
				<?php 
					if($competence['CalculBis1b']>1){
						if($competence['PourcentageBis']){
							?>(<span class="<?php echo $competence['ImpactBis'];?>">+1%</span>/<span id="CalculBis1b"><?php echo $competence['CalculBis1b'].'</span>';?><span class="<?php echo $competence['StatistiqueBis1'];?>"><?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?></span>)</span></span>
						<?php
						}else{
							?>(<span class="<?php echo $competence['ImpactBis'];?>">+1</span>/<?php echo '<span id="CalculBis1b">'.$competence['CalculBis1b'].'</span>';?><span class="<?php echo $competence['StatistiqueBis1'];?>"><?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?></span>)</span></span>
				<?php 
						}
					}else{ 
						if($competence['Pourcentage'.$f.'']){
						?>(<span class="<?php echo $competence['ImpactBis'];?>"><?php echo '+<span id="CalculBis1b">'.round(1/$competence['CalculBis1b']).'</span>%'; ?></span>/<?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?>)</span></span>
					<?php
						}else{
							?>(<span class="<?php echo $competence['ImpactBis'];?>"><?php echo '+<span id="CalculBis1b">'.round(1/$competence['CalculBis1b']).'</span>'; ?></span>/<?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?>)</span></span>
						<?php
						}
					}
								
								
							 /*couleur :<input type="text" name="newImpact<?php echo $f;?>" id="newImpact<?php echo $f;?>" value="<?php echo $competence['Impact'.$f.''];?>"style="width:75px">
								pourcentage : <input type="checkbox" name="new%<?php echo $f;?>" id="new%<?php echo $f;?>" value="%"style="width:75px" <?php if($competence['%'.$f.'']){echo 'checked';};?>><br><br>*/
							$f++;
				}else{
					
					if($competence['StatistiqueBis1']=='ressource'){$competence['StatistiqueBis1']=$statistique['Type_Ressource'];}
					if($competence['StatistiqueBis2']=='ressource'){$competence['StatistiqueBis2']=$statistique['Type_Ressource'];}
					?>	
						<span class="voir"><span class="<?php echo $competence['ImpactBis'];?>">
						
						<?php
					?><span id="resultatBis<?php echo $f?>"><?php echo $competence['CalculBis1a']+((floor((float)$statBis1/$competence['CalculBis1b']))+(floor((float)$statBis2/$competence['CalculBis2b']))).'</span>';
					if($competence['PourcentageBis']){echo '%';}else{echo $impact;} 
					?></span><span class="formule"><span class="<?php echo $competence['ImpactBis'];?>"><span id="CalculBis1a"><?php echo $competence['CalculBis1a'].'</span>';if($competence['PourcentageBis']){echo '<span id="PourcentageBis">%';} ?></span> 
				<?php 
						if($competence['CalculBis1b']>1){
						if($competence['PourcentageBis']){
							?>(<span class="<?php echo $competence['ImpactBis'];?>">+1%</span>/<span id="CalculBis1b"><?php echo $competence['CalculBis1b'].'</span>';?><span class="<?php echo $competence['StatistiqueBis1'];?>"><?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?></span>)
						<?php
						}else{
							?>(<span class="<?php echo $competence['ImpactBis'];?>">+1</span>/<?php echo '<span id="CalculBis1b">'.$competence['CalculBis1b'].'</span>';?><span class="<?php echo $competence['StatistiqueBis1'];?>"><?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?></span>)
				<?php 
						}
						}else{ 
							if($competence['Pourcentage'.$f.'']){
							?>(<span class="<?php echo $competence['ImpactBis'];?>"><?php echo '+<span id="CalculBis1b">'.round(1/$competence['CalculBis1b']).'</span>%'; ?></span>/<?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?>)</span>
						<?php
							}else{
								?>(<span class="<?php echo $competence['ImpactBis'];?>"><?php echo '+<span id="CalculBis1b">'.round(1/$competence['CalculBis1b']).'</span>'; ?></span>/<?php echo '<span id="StatistiqueBis1">'.$competence['StatistiqueBis1'].'</span>'; ?>)</span>
							<?php
							}
						}
						if($competence['CalculBis2b']>1){
						if($competence['PourcentageBis']){
							?>(<span class="<?php echo $competence['ImpactBis'];?>">+1%</span>/<span id="CalculBis2b"><?php echo $competence['CalculBis2b'].'</span>';?><span class="<?php echo $competence['StatistiqueBis2'];?>"><?php echo '<span id="StatistiqueBis2">'.$competence['StatistiqueBis2'].'</span>'; ?></span>)</span>
						<?php
						}else{
							?>(<span class="<?php echo $competence['ImpactBis'];?>">+1</span>/<?php echo '<span id="CalculBis2b">'.$competence['CalculBis2b'].'</span>';?><span class="<?php echo $competence['StatistiqueBis2'];?>"><?php echo '<span id="StatistiqueBis2">'.$competence['StatistiqueBis2'].'</span>'; ?></span>)</span>
				<?php 
						}
						}else{ 
							if($competence['Pourcentage'.$f.'']){
							?>(<span class="<?php echo $competence['ImpactBis'];?>"><?php echo '+<span id="CalculBis2b">'.round(1/$competence['CalculBis2b']).'</span>%'; ?></span>/<?php echo '<span id="StatistiqueBis2">'.$competence['StatistiqueBis2'].'</span>'; ?>)</span>
						<?php
							}else{
								?>(<span class="<?php echo $competence['ImpactBis'];?>"><?php echo '+<span id="CalculBis2b">'.round(1/$competence['CalculBis2b']).'</span>'; ?></span>/<?php echo '<span id="StatistiqueBis2">'.$competence['StatistiqueBis2'].'</span>'; ?>)</span>
							<?php
							}
						}
					?>
					</span>
					<?php
						
						
						
							$f+=2;
				}
				?>
				<span id="Effet<?php $g; ?>Bis"><?php echo $competence['Effet'.$g.'Bis'];?></span><br>
				<?php
			}
		?><br><?php
		
}
?>