<?php
$f=1;
$g=1;

include("stat.php");
echo $competence['Description'.$g];

for($g=2;$g<=6;$g++){
	
		if(!is_null($competence['Description'.$g])){
			if($competence['Type_calcul'.$f]==1){
				include('merde.php');
				echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']));echo $competence['Description'.$g];
				$f++;
			}elseif($competence['Type_calcul'.$f]==2){
				include('merde.php');
				echo $competence['Calcul'.$f.'a']+(round((float)$stata/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)$statb/$competence['Calcul'.($f+1).'b']));echo $competence['Description'.$g];
				$f+=2;
			}
		}
}

,Impact1 = '.$_POST['newImpact1'].',Impact2 = '.$_POST['newImpact2'].',Impact3 = '.$_POST['newImpact3'].',Impact4 = '.$_POST['newImpact4'].',Impact5 = '.$_POST['newImpact5'].'


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














<span class="pulse"></span>




.pulse {
  height:100px;
  width:100px;
  border-radius:50%;
  background-color:red;
  
  position:relative;
  top:100px;
  left:300px;
  
  -webkit-transition:height .25s ease, width .25s ease;
  transition:height .25s ease, width .25s ease;
  
  -webkit-transform:translate(-50%,-50%);
  transform:translate(-50%,-50%);
  
}

.pulse:before,
.pulse:after {
  content:'';
  display:block;
  position:absolute;
  top:0; right:0; bottom:0; left:0;
  border-radius:50%;
  border:1px solid red;
}

.pulse:before {
  -webkit-animation: pulse 4s linear infinite;
  animation: pulse 4s linear infinite;
}
.pulse:after {
  -webkit-animation: pulse 4s linear 3s infinite;
  animation: pulse 4s linear 3s infinite;
}




@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 1);
  }
 
  100% {
      -webkit-box-shadow: 0 0 0 100px rgba(204,169,44, 0);
  }
}
@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 1);
    box-shadow: 0 0 0 0 rgba(204,169,44, 1);
  }
  
  100% {
      -moz-box-shadow: 0 0 0 100px rgba(204,169,44, 0);
      box-shadow: 0 0 0 100px rgba(204,169,44, 0);
  }
}























































.pulse {
  margin:100px;
  display: block;
  width: 220px;
  height: 220px;
  border-radius: 50%;
  background: #cca92c;
  cursor: pointer;
  box-shadow: 0 0 0 rgba(204,169,44, 0.4);
  animation: pulse 2s linear  infinite;
}




@-webkit-keyframes pulse {
  0% {
    -webkit-box-shadow: 0 0 0 0 rgba(204,169,44, 0.6);
  }
 
  100% {
      -webkit-box-shadow: 0 0 0 100px rgba(204,169,44, 0.2);
  }
}
@keyframes pulse {
  0% {
    -moz-box-shadow: 0 0 0 0 rgba(204,169,44, 0.6);
    box-shadow: 0 0 0 0 rgba(204,169,44, 0.6);
  }
  
  100% {
      -moz-box-shadow: 0 0 0 100px rgba(204,169,44, 0.2);
      box-shadow: 0 0 0 100px rgba(204,169,44, 0.2);
  }
}




<span class="pulse"></span>




























<span class="voir"><span class="red">


</span><span class="formule"><span class="red">10</span> (<span class="red">+1</span>/3force)(<span class="red">+1</span>/4intel)</span></span>











<span class="voir"><span class="red">


</span><span class="formule"><span class="red">20</span>(<span class="red">+1</span>/4intel)</span></span>












?>
				<span class="voir"><span class="<?php echo $competence['Impact'.$f.''];?>">
				<?php
				
				echo $competence['Calcul'.$f.'a']+(round((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b']));
				
				?>
				</span><span class="formule"><span class="<?php echo $competence['Impact'.$f.''];?>"><?php if($competence['Calcul'.$f.'a']!=0){echo $competence['Calcul'.$f.'a'];} ?></span> 
				<?php 
					if($competence['Calcul'.$f.'b']>1){ 
						?>(<span class="<?php echo $competence['Impact'.$f.''];?>">+1</span>/<?php echo ''.$competence['Calcul'.$f.'b'].''.$competence['Statistique'.$f.'']; ?>)(
				<?php
					}else{
						?>(<span class="<?php echo $competence['Impact'.$f.''];?>"><?php echo '+'.round(1/$competence['Calcul'.$f.'b']); ?></span>/<?php echo $competence['Statistique'.$f.'']; ?>)
				<?php 
					}if($competence['Calcul'.($f+1).'b']>1){ 
						?><span class="<?php echo $competence['Impact'.($f+1).''];?>">+1</span>/<?php echo ''.$competence['Calcul'.($f+1).'b'].''.$competence['Statistique'.($f+1).'']; ?>)</span></span>
				<?php
					}else{
						?>(<span class="<?php echo $competence['Impact'.($f+1).''];?>"><?php echo '+'.round(1/$competence['Calcul'.($f+1).'b']); ?></span>/<?php echo $competence['Statistique'.($f+1).'']; ?>)</span></span>
				<?php
					}









?>

