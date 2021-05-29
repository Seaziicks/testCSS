<html>

<head>

	<link rel="stylesheet" href="css.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="test.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="inlinemod.js"></script>
	<script type="text/javascript" src="inlinemod2.js"></script>
	<script type="text/javascript" src="cooldown.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>	
	.moitie{
		margin-top : 35px;
	}
	</style>
</head>
<body>
<?php include("menu.php"); ?>
<?php 



	include('BDD.php');
	
								
								
	$personnages=array('Voleur','Paladin','Nain','Démoniste','Manipulateur de Sang');
								
	for($k=0;$k<count($personnages);$k++){
		$personnage=$personnages[$k];
		?>
		
		<div class="moitie fond<?php if($personnage=='Manipulateur de Sang'){echo 'manipulateurdesang';}else{echo $personnage;}?>">
		
		<?php
		
		
		include('statistiques.php');
		include("equipements.php");
		include('personnagebis.php');
			$competences = $bdd->query('SELECT *
										from arbres a, competence c
										where c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
										Colonne6,Colonne7,Colonne8,Colonne9)
										and a.Personnage=\'' . $personnage . '\'
										and c.niveau > 0
										order by spécialité');
								
								
								
		$competencea=$competences->fetchAll();
		$i=0;
		?><table><?php
		while(isset($competencea[$i])){
			$competence=$competencea[$i];
			$specialité=$competence['Spécialité'];
			?><tr><?php
				while ($specialité==$competence['Spécialité']){
					$rang=$competence['Rang'];
					while($rang==$competence['Rang'] and $specialité==$competence['Spécialité']){
						?><td style="text-align : center" class="test"> 
									<span class="centrage">
									<?php
										if($competence['TempsRechargement']-$competence['Cooldown']<$competence['Durée'] and $competence['TempsRechargement']>0)
														{
															?>
															<span id="<?php echo $personnage.$competence['Id_Competence'];?>">
																<span class="cddurée"><?php echo $competence['Cooldown']+$competence['Durée']-$competence['TempsRechargement']; ?></span>
																<span class="cdrechargement"><?php echo ($competence['Cooldown']); ?></span>
															</span>
															<?php
														}else if($competence['Cooldown']>0)
														{
															?>
															<span id="<?php echo $personnage.$competence['Id_Competence'];?>" class="rechargement">
																<?php echo $competence['Cooldown']; ?>
															</span>
															
															<?php
														}else{
															?>
															<span id="<?php echo $personnage.$competence['Id_Competence'];?>" class="nocooldown">
															</span>
															
															<?php
														}
									?>
									</span>
										<div class="cadre">

											<img ondblclick="loadCD('<?php echo $personnage.$competence['Id_Competence'];?>',<?php echo $competence['Id_Competence'];?>,'Image<?php echo $personnage.$i;?>','<?php echo $personnage;?>')" src="<?php echo $competence['Image']; ?>"<?php if($competence['Cooldown']>0){echo 'style="opacity:0.2"';}?>  id="Image<?php echo $personnage.$i;?>">

											<span>

											<span class="competence"><?php echo $competence['Libellé']; ?></span></br></br>

											<div class="entete"><i><?php echo $competence['Entete']; ?></i></div>
												<br> Niveau actuel de la compétence : <b ondblclick="inlineMod2(<?php echo $competence['Id_Competence'] ?>, this, 'Niveau', 'nombre','competence')"><?php echo $competence['Niveau'];?></b>
												<br>
												<br>
												<span class="couts">
													Coût en <span class="PA">PA</span> : <span class="PA"><?php echo $competence['Cout_En_PA']; ?></span>
													<?php if (!is_null($competence['Ressource'])){
														if($competence['Ressource']=='Canon de lumière'){$ressourcecomp='canon';}else{$ressourcecomp=$competence['Ressource'];}
														?>
															<br>Coût en <span class="<?php echo $ressourcecomp; ?>"><?php echo $competence['Ressource']; ?></span> : <span class="<?php echo $ressourcecomp; ?>"><?php echo $competence['Cout_En_Ressource']; ?></span>
														<?php
													}
													?>
												</span>
												<?php if (!is_null($competence['Ressource'])){echo '<br>';} ?> <!-- Obligé de faire ça, parce que le "float : left" gène sinon ... Mais bon,osef !-->
												<br>
												<?php include('modification_competence_original.php'); include('effets.php');?>
												<?php if (!empty($competence['Exemple'])){ ?><br><br></br><div class="exemple"><i><?php echo $competence['Exemple']; ?> </i></div><?php }?>
												
											</span>
										</div>
									
										</td><?php
						$i++;
						if(isset($competencea[$i])){
							$competence=$competencea[$i];
						}else{
							$competence=null;
						}
							
						
					}
					?><td class="cadre2"></td><?php
				}
				?></tr><?php
			
		}
		$competences->closeCursor();
		?>
		</table>
<FORM action="finTourJoueur.php" method="post" style="margin : auto;"	>
<input type="hidden" name="personnage" value="<?php echo $personnage; ?>" >
<input type="submit" value="Fin du tour"/>
</FORM></div>
<?php
	}
?>

<div class="moitie" >
<FORM action="finTour.php" method="post" style="margin : auto;"	>
<input type="submit" value="Fin du tour"/>
</FORM>
</div>


<div class="moitie" style="width : 98.35%;" >

<?php
$monstres = $bdd->query('SELECT *
							from arbres a, competence c
							where c.id_competence in (Colonne1,Colonne2,Colonne3,Colonne4,Colonne5,
							Colonne6,Colonne7,Colonne8,Colonne9)
							and a.Personnage=\'Monstre\'
							and c.niveau > 0
							order by spécialité,rang desc');
$competencea=$monstres->fetchAll();
$i=0;
		
		while(isset($competencea[$i])){
			?><table><?php
			$competence=$competencea[$i];
			$specialité=$competence['Spécialité'];
			?><th colspan=100> <?php echo $competence['Spécialité'];?> </th><?php
				while ($specialité==$competence['Spécialité']){
					?><tr><?php
					$rang=$competence['Rang'];
					while($rang==$competence['Rang'] and $specialité==$competence['Spécialité']){
						?><td style="text-align : center" class="test"> 
									<span class="centrage">
									
										<span id="<?php echo $personnage.$i;?>" class="<?php if($competence['TempsRechargement']-$competence['Cooldown']<$competence['Durée']){echo 'durée';}else if($competence['Cooldown']>0){ echo 'rechargement';}else{echo 'nocooldown';}?>">
											<?php if($competence['TempsRechargement']-$competence['Cooldown']<$competence['Durée']){echo $competence['Cooldown']-$competence['Durée'];}elseif($competence['Cooldown']>0){echo $competence['Cooldown'];}?>
										</span>
									
									</span>
										<div class="cadre">

											<img ondblclick="loadCD('<?php echo $personnage.$i;?>',<?php echo $competence['Id_Competence'];?>,'Image<?php echo $personnage.$i;?>')" src="<?php echo $competence['Image']; ?>"<?php if($competence['Cooldown']>0){echo 'style="opacity:0.2"';}?>  id="Image<?php echo $personnage.$i;?>">

											<span>

											<span class="competence"><?php echo $competence['Libellé']; ?></span></br></br>

											<div class="entete"><i><?php echo $competence['Entete']; ?></i></div>
												<br> Niveau actuel de la compétence : <b ondblclick="inlineMod2(<?php echo $competence['Id_Competence'] ?>, this, 'Niveau', 'nombre','competence')"><?php echo $competence['Niveau'];?></b><br>
												<?php include('projet1.php'); include('effets.php');?>
												<?php if (!empty($competence['Exemple'])){ ?><br><br></br><div class="exemple"><i><?php echo $competence['Exemple']; ?> </i></div><?php }?>
												
											</span>
										</div>
									
										</td><?php
						$i++;
						if(isset($competencea[$i])){
							$competence=$competencea[$i];
						}else{
							$competence=null;
						}
							
						
					}
					?><td class="cadre2"></td><?php
				}
				?></tr><?php
			
		}
		
		$monstres->closeCursor();
?>

</div>





</body>
	
</html>		