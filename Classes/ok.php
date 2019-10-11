<html>

<head>

	<link rel="stylesheet" href="css.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="test.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="inlinemod.js"></script>
	<script type="text/javascript" src="inlinemod2.js"></script>
	<script type="text/javascript" src="cooldown.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<?php 



	include('BDD.php');
	
								
								
	$personnages=array('Voleur','Paladin','Nain','Démoniste','Manipulateur de Sang');
								
	for($k=0;$k<count($personnages);$k++){
		$personnage=$personnages[$k];
		?>
		
		<div class="moitie fond<?php if($personnage=='Manipulateur de Sang'){echo 'manipulateurdesang';}else{echo $personnage;}?>">
		
		<?php
		
		
		include('statistiques.php');
		include	("equipements.php");
		include('personnagebis.php');
			$competences = $bdd->query('SELECT *
										from arbres a, competence c
										where c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
										Colonne6,Colonne7,Colonne8,Colonne9)
										and a.Personnage=\'' . $personnage . '\'
										and c.niveau > 0
										order by spécialité');
								
								
								
		$competencea=$competences->fetchAll();
		?><table><tr><?php
		$specialite = $competencea[0]['Spécialité'];
		$test=0;
		for($j=0;$j<=4;$j++){
			
			?><?php
			for($i=0;$i<count($competencea);$i++){
				
				// $lignevide=0;
					// for ($j=0;$j<count($competence[0]);$j++){
						// $lignevide+=$competence[$i][$j];
					// }
				// if($lignevide!=0)
				
				if ($competencea[$i]['Rang']==$j){
					if (isset($competencea[$test]) and $specialite!=$competencea[$i]['Spécialité']){
						?></tr><tr><?php
					}
					$competence=$competencea[$i];
					
					?><td style="text-align : center" class="test"> 
							<span class="centrage">
							
								<span id="<?php echo $personnage.$test;?>" class="<?php if($competence['Cooldown']>0){ echo 'rechargement';}else{echo 'nocooldown';}?>">
									<?php if($competence['Cooldown']>0){echo $competence['Cooldown'];}?>
								</span>
							
							</span>
								<div class="cadre">

									<img ondblclick="loadCD('<?php echo $personnage.$test;?>',<?php echo $competence['Id_Competence'];?>,'Image<?php echo $personnage.$test;?>')" src="<?php echo $competence['Image']; ?>"<?php if($competence['Cooldown']>0){echo 'style="opacity:0.2"';}?>  id="Image<?php echo $personnage.$test;?>">

									<span>

									<span class="competence"><?php echo $competence['Libellé']; ?></span></br></br>

									<div class="entete"><i><?php echo $competence['Entete']; ?></i></div>
										<br> Niveau actuel de la compétence : <b ondblclick="inlineMod2(<?php echo $competence['Id_Competence'] ?>, this, 'Niveau', 'nombre','competence')"><?php echo $competence['Niveau'];?></b><br>
										<?php include('projet1.php'); include('effets.php');?>
										<?php if (!empty($competence['Exemple'])){ ?><br><br></br><div class="exemple"><i><?php echo $competence['Exemple']; ?> </i></div><?php }?>
										
									</span>
								</div>
							
								</td><?php
								$test+=1;
				}
				$specialite = $competencea[$i]['Spécialité'];
			}
			if(isset($competencea[$test])){
				?><td class="cadre2"></td><?php
			}
		}
		?></tr></table></div><?php
								
	}
?>
<FORM action="finTour.php" method="post">
<input type="submit" value="Fin du tour"/>


</FORM>


</body>
	
</html>							
								
								