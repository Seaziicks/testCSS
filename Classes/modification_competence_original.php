<?php
$f=1;
$g=1;

include("stat.php");
echo $competence['Description'.$g];

for($g=2;$g<=6;$g++){
		
		
		
		$impact="";
		
		
		if(!is_null($competence['Description'.$g])){
			
			

			if($competence['Statistique'.$f.'']=='ressource'){$competence['Statistique'.$f.'']=$statistique['Type_Ressource'];}
			
			
			
			if($competence['Type_calcul'.$f]==1){
				
				
				if($competence['Pourcentage'.$f.'']){$impact='';}
				elseif($competence['Impact'.$f.''] == "vie"){$impact=' points de vie';}
				elseif($competence['Impact'.$f.''] == "bouclier" ){$impact=' points de bouclier';}
				elseif($competence['Impact'.$f.''] != "red" && $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b'])).''.$impact>2){$impact=' '.$competence['Impact'.$f.''].'s';}
				elseif($competence['Impact'.$f.''] != "red"){$impact=' '.$competence['Impact'.$f.''];}
				elseif($competence['Impact'.$f.''] == "red" && !$competence['Pourcentage'.$f.'']){$impact=' points de dégâts';}
				
				
				
				
				?>
				<span class="voir"><span class="<?php echo $competence['Impact'.$f.''];?>">
				<?php
				echo $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b'])).''.$impact;
				if($competence['Pourcentage'.$f.'']){echo '%';} 
				
				
				?>
				</span><span class="formule"><span class="<?php echo $competence['Impact'.$f.''];?>"><?php /*if($competence['Calcul'.$f.'a']!=0){*/echo $competence['Calcul'.$f.'a'];/*}*/if($competence['Pourcentage'.$f.'']){echo '%';} ?></span> 
				<?php 
					if($competence['Calcul'.$f.'b']>1){
						if($competence['Pourcentage'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1%</span>/<?php echo ''.$competence['Calcul'.$f.'b'];?><span class="<?php echo $competence['Statistique'.$f.''];?>"><?php echo $competence['Statistique'.$f.'']; ?></span>)</span></span>
						<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1</span>/<?php echo ''.$competence['Calcul'.$f.'b'];?><span class="<?php echo $competence['Statistique'.$f.''];?>"><?php echo $competence['Statistique'.$f.'']; ?></span>)</span></span>
				<?php 
						}
					}else{ 
						if($competence['Pourcentage'.$f.'']){
						?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+'.round(1/$competence['Calcul'.$f.'b']).'%'; ?></span>/<?php echo $competence['Statistique'.$f.'']; ?>)</span></span>
					<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+'.round(1/$competence['Calcul'.$f.'b']); ?></span>/<?php echo $competence['Statistique'.$f.'']; ?>)</span></span>
						<?php
						}
					}
					
				if(!is_null($competence['Amplitude'.$f])){
					?>
						<span class="<?php echo $competence['Statistique'.$f];?>">+<span id="NombreAmplitude<?php echo $f;?>" class=""><?php echo $competence['Nombre_Amplitude'.$f];?></span>D<span id="Amplitude<?php echo $f;?>" ><?php echo $competence['Amplitude'.$f];?></span></span>
					<?php }
				echo $competence['Description'.$g];
				
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
				
				
				
				
				
				?>
				<span class="voir"><span class="<?php echo $competence['Impact'.$f.''];?>">
				<?php
				
				echo $competence['Calcul'.$f.'a']+(floor((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(floor((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b'])).''.$impact;
				if($competence['Pourcentage'.$f.'']){echo '%';}
				
				?>
				</span><span class="formule"><span class="<?php echo $competence['Impact'.$f.''];?>"><?php if($competence['Calcul'.$f.'a']!=0){echo $competence['Calcul'.$f.'a'];} ?></span> 
				<?php 
					if($competence['Calcul'.$f.'b']>1){ 
						if($competence['Pourcentage'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1%</span>/<?php echo ''.$competence['Calcul'.$f.'b'];?><span class="<?php echo $competence['Statistique'.$f.''];?>"><?php echo $competence['Statistique'.$f.'']; ?></span>)
				<?php	
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1</span>/<?php echo ''.$competence['Calcul'.$f.'b'];?><span class="<?php echo $competence['Statistique'.$f.''];?>"><?php echo $competence['Statistique'.$f.'']; ?></span>)
				<?php
						}
					}else{
						if($competence['Pourcentage'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+'.round(1/$competence['Calcul'.$f.'b']).'%'; ?></span>/<?php echo $competence['Statistique'.$f.'']; ?>)
				<?php 
						}else{
							?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+'.round(1/$competence['Calcul'.$f.'b']); ?></span>/<?php echo $competence['Statistique'.$f.'']; ?>)
				<?php 
						}
					}if($competence['Calcul'.($f+1).'b']>1){ 
						if($competence['Pourcentage'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>">+1%</span>/<?php echo ''.$competence['Calcul'.($f+1).'b'];?><span class="<?php echo $competence['Statistique'.($f+1).''];?>"><?php echo $competence['Statistique'.($f+1).'']; ?></span>)</span></span>
				<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>">+1</span>/<?php echo ''.$competence['Calcul'.($f+1).'b'];?><span class="<?php echo $competence['Statistique'.($f+1).''];?>"><?php echo $competence['Statistique'.($f+1).'']; ?></span>)</span></span>
				<?php
						}
					}else{
						if($competence['Pourcentage'.$f.'']){
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>"><?php echo '+'.round(1/$competence['Calcul'.($f+1).'b']).'%'; ?></span>/<?php echo $competence['Statistique'.($f+1).'']; ?>)</span></span>
				<?php
						}else{
							?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>"><?php echo '+'.round(1/$competence['Calcul'.($f+1).'b']); ?></span>/<?php echo $competence['Statistique'.($f+1).'']; ?>)</span></span>
				<?php
						}
					}
					if(!is_null($competence['Amplitude'.$f])){
					?>
						<span class="<?php echo $competence['Statistique'.$f];?>">+<span id="NombreAmplitude<?php echo $f;?>" ><?php echo $competence['Nombre_Amplitude'.$f];?></span>D<span id="Amplitude<?php echo $f;?>" ><?php echo $competence['Amplitude'.$f];?></span></span>
					<?php }
					if(!is_null($competence['Amplitude'.($f+1)])){
					?>
						<span class="<?php echo $competence['Statistique'.($f+1)];?>">+<span id="NombreAmplitude<?php echo ($f+1);?>"><?php echo $competence['Nombre_Amplitude'.($f+1)];?></span>D<span id="Amplitude<?php echo ($f+1);?>" ><?php echo $competence['Amplitude'.($f+1)];?></span></span>
					<?php }
				
				echo $competence['Description'.$g];
				$f+=2;
			}
			
		}
		
}

//Avec la modification de "$stata" et "$statb" respectivement en "${'stat'.$f}" et "${'stat'.($f+1)}", il n'y a plus besoin de 'merde.php'. Mais je le laisse quand même.
// En tout cas, vive la création de variable par concaténation de string et d'autres variables ! :D




/*
$f=1;
$g=1;

include("stat.php");
echo $competence['Description'.$g];
	if($competence['Type_calcul'.$f]==1){
		include('merde.php');
		echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']));echo $competence['Description'.($g+1)];
		$f++;$g++;
	}elseif($competence['Type_calcul'.$f]==2){
		include('merde.php');
		echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)$statb/$competence['Calcul'.($f+1).'b']));echo $competence['Description'.($g+1)];
		$f+=2;$g++;
	}
	if(!is_null($competence['Description3'])){
		if($competence['Type_calcul'.$f]==1){
			include('merde.php');
			echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']));echo $competence['Description'.($g+1)];
			$f++;$g++;
		}elseif($competence['Type_calcul'.$f]==2){
			include('merde.php');
			echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)$statb/$competence['Calcul'.($f+1).'b']));echo $competence['Description'.($g+1)];
			$f+=2;$g++;
		}
		if(!is_null($competence['Description4'])){
			if($competence['Type_calcul'.$f]==1){
				include('merde.php');
				echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']));echo $competence['Description'.($g+1)];
				$f++;$g++;
			}elseif($competence['Type_calcul'.$f]==2){
				include('merde.php');
				echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)$statb/$competence['Calcul'.($f+1).'b']));echo $competence['Description'.($g+1)];
				$f+=2;$g++;
			}
			if(!is_null($competence['Description5'])){
				if($competence['Type_calcul'.$f]==1){
					include('merde.php');
					echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']));echo $competence['Description'.($g+1)];
					$f++;$g++;
				}elseif($competence['Type_calcul'.$f]==2){
					include('merde.php');
					echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)$statb/$competence['Calcul'.($f+1).'b']));echo $competence['Description'.($g+1)];
					$f+=2;$g++;
				}
				if(!is_null($competence['Description6'])){
					if($competence['Type_calcul'.$f]==1){
						include('merde.php');
						echo $competence['Calcul'.$f.'a']+(round((float)$stat1/$competence['Calcul'.$f.'b']));echo $competence['Description'.($g+1)];
						$f++;$g++;
					}elseif($competence['Type_calcul'.$f]==2){
						include('merde.php');
						echo $competence['Calcul'.$f.'a']+(round((float)$stat1/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)$stat1/$competence['Calcul'.($f+1).'b']));echo $competence['Description'.($g+1)];
						$f+=2;$g++;
					}
				}
			}
		}
	}
*/
?>