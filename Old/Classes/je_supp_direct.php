<?php 
				if($competence['PourcentageBis']){$impact='';}
				elseif($competence['ImpactBis'] == "vie"){$impact=' points de vie';}
				elseif($competence['ImpactBis'] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['ImpactBis'] != "red" && isset($statBis1) && $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b']))>2){$impact=' '.$competence['ImpactBis'].'s';}
				elseif($competence['ImpactBis'] != "red"){$impact=' '.$competence['ImpactBis'];}
				elseif($competence['ImpactBis'] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}
if (!empty($competence['Effet1']))
{ 
	if($competence['Niveau'] > 2){
		?><span class="activé">
	<?php
	}else{ 
			?><span class="nonactivé">
		<?php
	} 
	
	echo $competence['Effet1'];
	if($competence['NumEffet']==1){
		if($competence['Type_calculBis1']==1){
			?><span class="<?php echo $competence['ImpactBis'];?>"> <?php
			echo $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b'])).$impact;echo $competence['Effet1Bis'];
			?></span><?php
		}elseif($competence['Type_calculBis1']==2){
			?><span class="<?php echo $competence['ImpactBis'];?>"><?php
			echo $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b']))+$competence['CalculBis2a']+(floor((float)$statBis2/$competence['CalculBis2b'])).$impact;echo $competence['Effet1Bis'];
			?></span><?php
		}
	}
	
	if($competence['Niveau'] > 2){
	?>
		</span> 
	<?php }

	
	if (!empty($competence['Effet2']))
	{ 

		if($competence['Niveau'] > 5){
			?><span class="activé">
		<?php
		}else{ 
			?><span class="nonactivé">
		<?php
		} 
	
		echo $competence['Effet2'];
		if($competence['NumEffet']==2){
			if($competence['Type_calculBis1']==1){
			?><span class="<?php echo $competence['ImpactBis'];?>"> <?php
			echo $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b'])).$impact;echo $competence['Effet2Bis'];
			?></span><?php
			}elseif($competence['Type_calculBis1']==2){
				?><span class="<?php echo $competence['ImpactBis'];?>"><?php
				echo $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b']))+$competence['CalculBis2a']+(floor((float)$statBis2/$competence['CalculBis2b'])).$impact;echo $competence['Effet2Bis'];
				?></span><?php
			}
		}
	
		if($competence['Niveau'] > 5){
		?>
			</span> 
		<?php }

	
		if (!empty($competence['Effet3']))
		{ 

			if($competence['Niveau'] > 8 ){
				?><span class="activé">
			<?php
			}else{ 
			?><span class="nonactivé">
		<?php
			} 
	
			echo $competence['Effet3']; 
			if($competence['NumEffet']==3){
				if($competence['Type_calculBis1']==1){
				?><span class="<?php echo $competence['ImpactBis'];?>"> <?php
				echo $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b'])).$impact;echo $competence['Effet3Bis'];
				?></span><?php
				}elseif($competence['Type_calculBis1']==2){
					?><span class="<?php echo $competence['ImpactBis'];?>"><?php
					echo $competence['CalculBis1a']+(floor((float)$statBis1/$competence['CalculBis1b']))+$competence['CalculBis2a']+(floor((float)$statBis2/$competence['CalculBis2b'])).$impact;echo $competence['Effet3Bis'];
					?></span><?php
				}
			}
		

		switch ($competence['Niveau']) {
			case $competence['Niveau'] <= 2  and $competence['Niveau']:                           /*Si je ne mets pas     and $competence['Niveau']     , ça ne marche pas. Alors je le mets, même si je ne sais pas pourquoi. */
				?>
					</span></span></span>
				<?php
				break;
			case $competence['Niveau']>=3 and $competence['Niveau']<6 :
				?>
				</span> </span> 
				<?php
				break;
			case $competence['Niveau']>5 and $competence['Niveau']<9 :
				?>
				</span> 
				<?php
				break;
			case $competence['Niveau']>8 :
				?>
				</span> 
				<?php
				break;
		}
			if (!empty($competence['Fin'])){echo '<br><br>'.$competence['Fin'];}
		}
	}
}


?>