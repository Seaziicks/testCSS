<?php 

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
			echo $competence['CalculBis1a']+(round((float)$statBis1/$competence['CalculBis1b']));echo $competence['Effet1Bis'];
		}elseif($competence['Type_calculBis1']==2){
			echo $competence['CalculBis1a']+(round((float)$statBis1/$competence['CalculBis1b']))+$competence['CalculBis2a']+(round((float)$statBis2/$competence['CalculBis2b']));echo $competence['Effet1Bis'];
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
				echo $competence['CalculBis1a']+(round((float)$statBis1/$competence['CalculBis1b']));echo $competence['Effet2Bis'];
			}elseif($competence['Type_calculBis1']==2){
				echo $competence['CalculBis1a']+(round((float)$statBis1/$competence['CalculBis1b']))+$competence['CalculBis2a']+(round((float)$statBis2/$competence['CalculBis2b']));echo $competence['Effet2Bis'];
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
				echo $competence['CalculBis1a']+(round((float)$statBis1/$competence['CalculBis1b']));echo $competence['Effet3Bis'];
			}elseif($competence['Type_calculBis1']==2){
				echo $competence['CalculBis1a']+(round((float)$statBis1/$competence['CalculBis1b']))+$competence['CalculBis2a']+(round((float)$statBis2/$competence['CalculBis2b']));echo $competence['Effet3Bis'];
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