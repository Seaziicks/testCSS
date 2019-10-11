<?php
$f=1;
$g=1;

include("stat.php");
echo $competence['Description'.$g];

for($g=2;$g<=6;$g++){
	
		if(!is_null($competence['Description'.$g])){
			if($competence['Type_calcul'.$f]==1){
				
				echo $competence['Calcul'.$f.'a']+(round((float)${'stat'.$f}/$competence['Calcul'.$f.'b']));echo $competence['Description'.$g];
				$f++;
			}elseif($competence['Type_calcul'.$f]==2){
				
				echo $competence['Calcul'.$f.'a']+(round((float)${'stat'.$f}/$competence['Calcul'.$f.'b']))+$competence['Calcul'.($f+1).'a']+(round((float)${'stat'.($f+1)}/$competence['Calcul'.($f+1).'b']));echo $competence['Description'.$g];
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