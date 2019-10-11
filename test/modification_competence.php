<?php
$f=1;
$g=1;

include("stat.php");
echo '<span id="Description1">'.$competence['Description'.$g].'</span>';

for($g=2;$g<=6;$g++){
		
		
		
		$impact="";
		
		
		if(!is_null($competence['Description'.$g])){
			if($competence['Type_calcul'.$f]==1){
				
				
				if($competence['%'.$f.'']){$impact='';}
				elseif($competence['Impact'.$f.''] == "vie"){$impact=' points de vie';}
				elseif($competence['Impact'.$f.''] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['Impact'.$f.''] != "red" && $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b'])).''.$impact>2){$impact=' '.$competence['Impact'.$f.''].'s';}
				elseif($competence['Impact'.$f.''] != "red"){$impact=' '.$competence['Impact'.$f.''];}
				elseif($competence['Impact'.$f.''] == "red" && !$competence['%'.$f.'']){$impact=' points de dégâts';}
				
				if($competence['Statistique'.$f.'']=='ressource'){$competence['Statistique'.$f.'']=$statistique['Type_Ressource'];}
				
				
				?>
				<span class="voir"><span class="<?php echo $competence['Impact'.$f.''];?>">
				<?php
				?><span id="resultat<?php echo $f?>"><?php echo $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b'])).'</span>'.$impact;
				if($competence['%'.$f.'']){echo '%';} 
				
				
				?>
				</span><span class="formule"><span class="<?php echo $competence['Impact'.$f.''];?>"><span id="Calcul<?php echo $f?>a"><?php echo $competence['Calcul'.$f.'a'].'</span>';if($competence['%'.$f.'']){echo '<span id="%'.$f.'">%';} ?></span> 
				<?php 
					if($competence['Calcul'.$f.'b']>1){
						if($competence['%'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1%</span>/<span id="Calcul<?php echo $f;?>b"><?php echo $competence['Calcul'.$f.'b'].'</span>';?><span class="<?php echo $competence['Statistique'.$f.''];?>"><?php echo '<span id="Statistique'.$f.'">'.$competence['Statistique'.$f.''].'</span>'; ?></span>)</span></span><br><br><br>
						<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1</span>/<?php echo '<span id="Calcul'.$f .'b">'.$competence['Calcul'.$f.'b'].'</span>';?><span class="<?php echo $competence['Statistique'.$f.''];?>"><?php echo '<span id="Statistique'.$f.'">'.$competence['Statistique'.$f.''].'</span>'; ?></span>)</span></span><br><br>
				<?php 
						}
					}else{ 
						if($competence['%'.$f.'']){
						?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+<span id="Calcul'.$f.'b">'.round(1/$competence['Calcul'.$f.'b']).'</span>%'; ?></span>/<?php echo '<span id="Statistique'.$f.'">'.$competence['Statistique'.$f.''].'</span>'; ?>)</span></span><br><br>
					<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+<span id="Calcul'.$f.'b">'.round(1/$competence['Calcul'.$f.'b']).'</span>'; ?></span>/<?php echo '<span id="Statistique'.$f.'">'.$competence['Statistique'.$f.''].'</span>'; ?>)</span></span><br><br>
						<?php
						}
					}
					
				
				echo '<span id="Description'.$g.'">'.$competence['Description'.$g].'</span>';
				
				$f++;
			}elseif($competence['Type_calcul'.$f]==2){
				
				
				//Affiche ce que fait la compétence (pdv, damages, case, tour, etc ...) et met un "s" si il y en a plusieurs.
				if($competence['%'.$f.'']){$impact=' %';}
				elseif($competence['Impact'.$f.''] == "vie"){$impact=' points de vie';}
				elseif($competence['Impact'.$f.''] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['Impact'.$f.''] != "red" and $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(floor((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b'])).''.$impact>2)
				{$impact=' '.$competence['Impact'.$f.''].'s';}
				elseif($competence['Impact'.$f.''] != "red"){$impact=' '.$competence['Impact'.$f.''];}
				elseif($competence['Impact'.$f.''] == "red" && !$competence['%'.$f.'']){$impact=' points de dégâts';}
				
				
				
				
				
				?>
				<span class="voir"><span class="<?php echo $competence['Impact'.$f.''];?>">
				<?php
				
				?><span id="resultat<?php echo $f?>"><?php echo $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(floor((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b'])).'</span>'.$impact;
				if($competence['%'.$f.'']){echo '%';}
				
				?>
				</span><span class="formule"><span class="<?php echo $competence['Impact'.$f.''];?>"><span id="Calcul<?php echo $f?>a"><?php echo $competence['Calcul'.$f.'a'].'</span>'; ?></span> 
				<?php 
					if($competence['Calcul'.$f.'b']>1){
						if($competence['%'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1%</span>/<span id="Calcul<?php echo $f;?>b"><?php echo ''.$competence['Calcul'.$f.'b'].'</span>';?><span class="<?php echo $competence['Statistique'.$f.''];?>"><span id="Statistique<?php echo $f;?>"><?php echo $competence['Statistique'.$f.'']; ?></span></span>)
				<?php	
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1</span>/<span id="Calcul<?php echo $f;?>b"><?php echo ''.$competence['Calcul'.$f.'b'].'</span>';?><span class="<?php echo $competence['Statistique'.$f.''];?>"><span id="Statistique<?php echo $f;?>"><?php echo $competence['Statistique'.$f.'']; ?></span></span>)
				<?php
						}
					}else{
						if($competence['%'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+<span id="Calcul'.$f.'b">'.round(1/$competence['Calcul'.$f.'b']).'</span>%'; ?></span>/<span id="Statistique<?php echo $f;?>"><?php echo $competence['Statistique'.$f.''].'</span>'; ?>)
				<?php 
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+<span id="Calcul'.$f.'b">'.round(1/$competence['Calcul'.$f.'b']).'</span>'; ?></span>/<span id="Statistique<?php echo $f;?>"><?php echo $competence['Statistique'.$f.''].'</span>'; ?>)
				<?php 
						}
					}if($competence['Calcul'.($f+1).'b']>1){
						if($competence['%'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>">+1%</span>/<span id="Calcul<?php echo ($f+1);?>b"><?php echo ''.$competence['Calcul'.($f+1).'b'].'</span>';?><span class="<?php echo $competence['Statistique'.($f+1).''];?>"><span id="Statistique<?php echo ($f+1);?>"><?php echo $competence['Statistique'.($f+1).'']; ?></span></span>)</span></span>
				<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>">+1</span>/<span id="Calcul<?php echo ($f+1);?>b"><?php echo ''.$competence['Calcul'.($f+1).'b'].'</span>';?><span class="<?php echo $competence['Statistique'.($f+1).''];?>"><span id="Statistique<?php echo ($f+1);?>"><?php echo $competence['Statistique'.($f+1).'']; ?></span></span>)</span></span>
				<?php
						}
					}else{
						if($competence['%'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>"><?php echo '+<span id="Calcul'.($f+1).'b">'.round(1/$competence['Calcul'.($f+1).'b']).'</span>%'; ?></span>/<span id="Statistique<?php echo ($f+1);?>"><?php echo $competence['Statistique'.($f+1).''].'</span>'; ?>)</span></span>
				<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>"><?php echo '+<span id="Calcul'.($f+1).'b">'.round(1/$competence['Calcul'.($f+1).'b']).'</span>'; ?></span>/<span id="Statistique<?php echo ($f+1);?>"><?php echo $competence['Statistique'.($f+1).''].'</span>'; ?>)</span></span>
				<?php
						}
					}
					
				echo '<span id="Description'.$g.'">'.$competence['Description'.$g].'</span>';
				$f+=2;
			}
		}
}

//Avec la modification de "$stata" et "$statb" respectivement en "${'stat'.$f}" et "${'stat'.($f+1)}", il n'y a plus besoin de 'merde.php'. Mais je le laisse quand même(ou pas).
// En tout cas, vive la création de variable par concaténation de string et d'autres variables ! :D

?>