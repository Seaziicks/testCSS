<div class="Equipement">

	<div class="mobile-item-wrapper d3-class-necromancer">
		<ul class="mobile-item-selection">

			<?php
			include('BDD.php');

			$Equipement1='Coiffe';
			$Equipement2='Epaules';
			$Equipement3='Gants';
			$Equipement4='Torse';
			$Equipement5='Brassard';
			$Equipement6='Ceinture';
			$Equipement7='Jambières';
			$Equipement8='Bottes';
			$Equipement9='Amulette';
			$Equipement10='Anneau1';
			$Equipement11='Anneau2';
			$Equipement12='Arme';
			$Equipement13='Offhand';

			
			/*$Equipement='';

			for($i=1;$i<=12;$i++){
				if(!empty($Equipement.'$i'))
					$Equipement.='\'.$Equipement'.$i.'.\',';
			}
			echo $Equipement;


			$objets=$bdd->query('SELECT ov.*
									FROM equiper AS e, personnage AS p,Objet_Vert AS ov 
									WHERE e.Id_Personnage = p.Id_Personnage
									AND p.Libellé = \'' . $personnage . '\'
									AND ov.Id_Objet in ('.$Equipement1.','.$Equipement2.','.$Equipement3.','.$Equipement4.','.$Equipement5.','.$Equipement6.','.$Equipement7.','.$Equipement8.','.$Equipement9.','.$Equipement10.','.$Equipement11.','.$Equipement12.','.$Equipement13.')
									');
			$statistique=$objets->fetchAll();


			?><br><?php


			for($i=0;$i<count($statistique);$i++){
				echo $statistique[$i]['Nom'];
				?><br><?php
				}
				
				
				?><br><br><br><br><br><br><?php
				$actuel=$Equipement1;
				echo $actuel;
				?><br><br><br><br><br><br><?php
				*/	
				
			for($j=1;$j<=13;$j++){
				$actuel=${'Equipement'.$j};
				$Coiffe=$bdd->query('SELECT '.$actuel.'
									FROM equiper AS e, personnage AS p
									WHERE e.Id_Personnage = p.Id_Personnage
									AND p.Libellé = \'' . $personnage->_Libellé . '\'
								');
				
				$ok=$Coiffe->fetch();

				if(!is_null($ok[''.$actuel.''])){
					
					
					$objet=$bdd->query('SELECT o.*
											FROM equiper AS e, personnage AS p, equipement AS o 
											WHERE e.Id_Personnage = p.Id_Personnage
											AND p.Libellé = \'' . $personnage->_Libellé . '\'
											AND o.Id_Objet='.$ok[''.$actuel.''].'
											');

					$fetchedObject = $objet->fetch();


					?>
					
			<li class="d3-item item-slot-id-<?php echo $actuel;?> rarity-<?php echo $fetchedObject['Rareté'];?>"> <!-- todo: two-handed weapon tag -->
				<a class="item-slot-container">
					<div class="tooltip-hover" data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508" data-item-id="5847"></div>
					<span class="item-container"><span class="item-effect"></span></span>
					<span class="image"><img src="../images/items/<?php echo $fetchedObject['Image'];?>" <?php if($fetchedObject['NombreMain']==2 and $actuel=='Offhand'){echo 'style="opacity : 0.4;"';}?>></span>
					<div class="touch-tip">

						<div class="diablo-fans-tooltip item-tooltip">
							<div class="db-tooltip">
								<ul class="db-summary">
									<li class="db-title rarity-<?php echo $fetchedObject['Rareté'];?> db-header">
										<span><?php echo $fetchedObject['Nom'];?></span>
									</li>
								</ul>
								<div class="db-image rarity-<?php echo $fetchedObject['Rareté'];?>">
									<img src="../images/items/<?php echo $fetchedObject['Image'];?>">
								</div>
								<div class="db-description" style="width : 100%;">
									<small class="rarity-<?php echo $fetchedObject['Rareté'];?>"><?php echo $fetchedObject['Type']; if($fetchedObject['Emplacement']=='Arme'){echo ' à '.$fetchedObject['NombreMain'].' mains';} ?><span class="niveauObj" <?php if($fetchedObject['Niveau']>$personnage->_Niveau){echo 'style="color : red;"';}?>> Niveau : <?php echo $fetchedObject['Niveau'];?></span></small>
									<ul class="db-summary">
										<li class="primary-stat">
											<?php 
											if ($fetchedObject['Statistique_Principale']=='Armure'){
												?>
											<span><?php echo $fetchedObject['Val'];?></span> <small><?php echo $fetchedObject['Statistique_Principale'];?></small>
											
											<?php
											}else{
												?>
												<span><?php echo $fetchedObject['Val'];?> - <?php echo $fetchedObject['Val2'];?></span><small><?php echo $fetchedObject['Statistique_Principale'];?></small>
											<?php
											}
											
											?>
										
										</li>
										
											
											<?php 
										if(!isset($fetchedObject['NombreMain']) or $fetchedObject['NombreMain']==1 or $actuel!='Offhand'){
											if($fetchedObject['Rareté']>1){
													
													?>
													<li class="primary-stat">Primary Stats</li>
													
												<li class="grouped-stats">
													<ul>
														<li class="stat ">
														<?php if ($fetchedObject['PropriétéMagique1']=='Critical Hit Chance Increased by' or $fetchedObject['PropriétéMagique1']=='Critical Hit Damages Increased by')
															{ 
																echo $fetchedObject['PropriétéMagique1'];?> <span class="value">+<?php echo $fetchedObject['Valeur1'];?>%</span><?php
															}
															else{
																?><span class="value">+<?php echo $fetchedObject['Valeur1'];?></span> <?php echo $fetchedObject['PropriétéMagique1'];
															}
															?>
														</li>
														<li class="stat ">
															<?php 
															if (isset ($fetchedObject['PropriétéMagique2'])){
																if ($fetchedObject['PropriétéMagique2']=='Critical Hit Chance Increased by' or $fetchedObject['PropriétéMagique2']=='Critical Hit Damages Increased by')
																{ 
																	echo $fetchedObject['PropriétéMagique2'];?> <span class="value">+<?php echo $fetchedObject['Valeur2'];?>%</span><?php
																}
																else{
																	?><span class="value">+<?php echo $fetchedObject['Valeur2'];?></span> <?php echo $fetchedObject['PropriétéMagique2'];
																}
															}
															?>
														</li>
														<li class="stat ">
															<?php 
															if($fetchedObject['Rareté']>3){
															
																	if ($fetchedObject['PropriétéMagique3']=='Critical Hit Chance Increased by' or $fetchedObject['PropriétéMagique3']=='Critical Hit Damages Increased by')
																	{ 
																		echo $fetchedObject['PropriétéMagique3'];?> <span class="value">+<?php echo $fetchedObject['Valeur3'];?>%</span><?php
																	}
																	else{
																		?><span class="value">+<?php echo $fetchedObject['Valeur3'];?></span> <?php echo $fetchedObject['PropriétéMagique3'];
																	}
																	?>
																</li>
																<li class="stat ">
																	<?php 
																	if (isset($fetchedObject['PropriétéMagique4'])){
																		if ($fetchedObject['PropriétéMagique4']=='Sockets'){
																			?> <span>Sockets (<span class="value"><?php echo $fetchedObject['Valeur4'];?></span>)</span><?php
																		}
																		elseif ($fetchedObject['PropriétéMagique4']=='Critical Hit Chance Increased by' or $fetchedObject['PropriétéMagique4']=='Critical Hit Damages Increased by')
																		{ 
																			echo $fetchedObject['PropriétéMagique4'];?> <span class="value">+<?php echo $fetchedObject['Valeur4'];?>%</span><?php
																		}
																		else{
																			?><span class="value">+<?php echo $fetchedObject['Valeur4'];?></span> <?php echo $fetchedObject['PropriétéMagique4'];
																		}
																	}
																?>
																</li>
														
															<?php 
																if($fetchedObject['Rareté']==5){?>
																<li class="primary-stat">Secondary Stats</li>
																	<li class="passive ">
																			<?php echo $fetchedObject['Pouvoir_Spécial1'];?> <span class="value"><?php echo $fetchedObject['Valeur_Pouvoir_Special']; ?></span> <?php echo $fetchedObject['Pouvoir_Spécial2'];?>
																	</li>
															 
																<?php
																}
															}
															?>
													</ul>
												</li>
												
												<?php 
												
												if($fetchedObject['Rareté']==6){
														
														
													$set=$bdd->query('SELECT p.*
																	FROM panoplie AS p
																	WHERE p.Id_Panoplie='.$fetchedObject['Id_Panoplie'].'
																	');
													$panoplie=$set->fetch();
													
													$nombre=$bdd->query('SELECT count(*)
																	FROM equiper AS e, personnage AS p, equipement as o 
																	WHERE e.Id_Personnage = p.Id_Personnage
																	AND p.Libellé = \'' . $personnage . '\'
																	AND o.id_panoplie='.$fetchedObject['Id_Panoplie'].'
																	and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambières,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
																	');
													$nb=$nombre->fetch();
													
													
													$nomsobjets=$bdd->query('SELECT o.Nom
																	FROM panoplie AS p, equipement as o 
																	WHERE o.Id_Objet in(p.Objet1,p.Objet2,p.Objet3,p.Objet4,p.Objet5,p.Objet6)
																	');
													$nomobjet=$nomsobjets->fetchAll();
																	?>
													<li class="grouped-stats">
														<ul>
														   <li class="set">
																		<?php echo $panoplie['Nom'];
																		
																		
																		for($i=0;$i<$nb['count(*)'];$i++){
																			?>
																	 </li><li class="set set-item <?php if($fetchedObject['Nom']==$nomobjet[$i][0]){echo 'item-name';}?>"> 
																		<?php echo $nomobjet[$i][0];?>
																	 </li><li class="set">
																		<?php } ?>
																	 
																		(<span class="set-num">2</span>) Set: <span class="<?php if($nb['count(*)']>1){echo 'value';}?>"><?php echo $panoplie['Effet1'];?></span>
																	 </li><li class="set">
																		(<span class="set-num">4</span>) Set: <span class="<?php if($nb['count(*)']>3){echo 'value';}?>"><?php echo $panoplie['Effet2'];?></span>
																	 </li><li class="set">
																		(<span class="set-num">6</span>) Set: <span class="<?php if($nb['count(*)']>5){echo 'value';}?>"><?php echo $panoplie['Effet3'];?></span>
																	 </li>
														</ul>
													</li>
												<?php 
												$nombre->closeCursor();
												$set->closeCursor();
												$nomsobjets->closeCursor();
												}
											}
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</a>
			</li>
					
				
					<?php
					$objet->closeCursor();
					
					
					$fetchedObject = null;
				}
				$Coiffe->closeCursor();
			}

			?>
		</ul>
    </div>
</div>