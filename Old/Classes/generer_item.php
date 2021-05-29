<html>

<head>

	<link rel="stylesheet" href="css.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="test.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="inlinemod.js"></script>
	<script type="text/javascript" src="inlinemod2.js"></script>
	<script type="text/javascript" src="cooldown.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<style>
	.alignement{float: left;
				margin-left : 60px;
				color : white;
				}
	
	</style>
</head>
<body>
<?php
for($j=1;$j<=5;$j++){
?>
	
<span class="alignement">

<?php
$personnage='Nain';
$rareté=$j;
switch($rareté){
	case $rareté==1:
		$couleur='Gris';
		break;
	case $rareté==2:
		$couleur='Blanc';
		break;
	case $rareté==3:
		$couleur='Bleu';
		break;
	case $rareté==4:
		$couleur='Jaune';
		break;
	case $rareté==5:
		$couleur='Orange';
		break;
	case $rareté==6:
		$couleur='Vert';
		break;
}



$niveau=7;

$équipements=array('Coiffe','Epaules','Gants','Torse','Brassard','Ceinture','Jambieres','Bottes','Amulette','Anneau','Dague','Baguette','Faux','Epée courte','Massue','Epée','Lance','Fléau','Hache');


$équipement = $équipements[array_rand($équipements, 1)];

$propriétés_magiques_primaires=['Agilité','Force','Intelligence'];

$propriétés_magiques_secondaires=['Agilité','Force','Intelligence','Agilité','Force','Intelligence','Vitalité','Vitalité','Mana','Canon de Lumière','Critique'];





if($équipement=='Dague'){
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/5);
		$val2=floor($niveau/3);
		$type='Arme';
	}
	else if($équipement=='Baguette'){
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/7);
		$val2=floor($niveau/5);
		$type='Arme';
	}
	else if($équipement=='Faux'){
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/5);
		$val2=floor($niveau/4);
		$type='Arme';
	}
	else if($équipement=='Epée courte'){
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/4);
		$val2=floor($niveau/3);
		$type='Arme';
	}
	else if($équipement=='Massue' or $équipement=='Epée' or $équipement=='Lance' or $équipement=='Fléau'or $équipement=='Hache'){
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/3);
		$val2=floor($niveau/2);
		$type='Arme';
	}
	else{
		$statistique_principale='Armure';
		$val=0.2;
		$type='Armure';
	}

	
	
	
	$image=''.$type.'/'.$équipement.'/Bleu/1.png';
		
		
		
		
		
	if($rareté==1){
		$nom=$équipement.' de mauvaise facture';
	}
	
	if($rareté==2){
		$nom=$équipement.' normale';
		$valeur1=round($niveau*$niveau/17);
	}

if($rareté>=2){
	
	
	if($équipement=='Dague'){
		if(rand(0,100)>75){
			$propriété_magique1='Intelligence';
		}else{
			$propriété_magique1='Agilité';
		}
	}
	else if($équipement=='Baguette'){
		$propriété_magique1='Intelligence';
	}
	else if($équipement=='Faux'){
		$propriété_magique1='Intelligence';
	}
	else if($équipement=='Epée courte'){
		if(rand(0,100)>51){
			$propriété_magique1='Agilité';
		}else{
			$propriété_magique1='Force';
		}
	}
	else if($équipement=='Massue' or $équipement=='Epée' or $équipement=='Lance' or $équipement=='Fléau'or $équipement=='Hache'){
		$propriété_magique1='Force';
	}
	else if($équipement=='Amulette' or $équipement=='Anneau' ){
		$propriété_magique1=$propriétés_magiques_primaires[rand(0,count($propriétés_magiques_primaires)-1)];
		$type='Bijou';
	}else{
		$propriété_magique1=$propriétés_magiques_primaires[rand(0,count($propriétés_magiques_primaires)-1)];
	}
	
	if($rareté==3){
		$valeur1=round($niveau*$niveau/12);
		
		if(rand(0,100)<=intval($niveau*$niveau/2.25)){
			$i=rand(0,count($propriétés_magiques_secondaires)-1);
			while($propriétés_magiques_secondaires[$i]==$propriété_magique1){
				$i=rand(0,count($propriétés_magiques_secondaires)-1);
			}
			$propriété_magique2=$propriétés_magiques_secondaires[$i];
			$valeur2=round($niveau*$niveau/14);
				
		}
		$nom=$équipement.' magique';
	}
	
	if($rareté==4){
		$valeur1=round($niveau*$niveau/10);
		$i=rand(0,count($propriétés_magiques_secondaires)-1);
		while($propriétés_magiques_secondaires[$i]==$propriété_magique1){
			$i=rand(0,count($propriétés_magiques_secondaires)-1);
		}
		$propriété_magique2=$propriétés_magiques_secondaires[$i];
		$valeur2=round($niveau*$niveau/11);
		
		if(rand(0,100)<=intval($niveau*$niveau/2.25)){
			$i=rand(0,count($propriétés_magiques_secondaires)-1);
			while($propriétés_magiques_secondaires[$i]==$propriété_magique1 or $propriétés_magiques_secondaires[$i]==$propriété_magique2){
				$i=rand(0,count($propriétés_magiques_secondaires)-1);
			}
			$propriété_magique3=$propriétés_magiques_secondaires[$i];
			$valeur3=round($niveau*$niveau/11);	
		}
		$nom=$équipement.' rare';
	}
	
	if($rareté==5){
		//Valeur 1
		$valeur1=round($niveau*$niveau/7);
		
		// Propriété et valeur 2
		$i=rand(0,count($propriétés_magiques_secondaires)-1);
		while($propriétés_magiques_secondaires[$i]==$propriété_magique1){
			$i=rand(0,count($propriétés_magiques_secondaires)-1);
		}
		$propriété_magique2=$propriétés_magiques_secondaires[$i];
		$valeur2=round($niveau*$niveau/8);
		
		//Propriété et valeur 3
		$i=rand(0,count($propriétés_magiques_secondaires)-1);
		while($propriétés_magiques_secondaires[$i]==$propriété_magique1 or $propriétés_magiques_secondaires[$i]==$propriété_magique2){
			$i=rand(0,count($propriétés_magiques_secondaires)-1);
		}
		$propriété_magique3=$propriétés_magiques_secondaires[$i];
		$valeur3=round($niveau*$niveau/8);
		
		//Propriété et valeur 4
		
			$i=rand(0,count($propriétés_magiques_secondaires)-1);
			while($propriétés_magiques_secondaires[$i]==$propriété_magique1 or $propriétés_magiques_secondaires[$i]==$propriété_magique2 or $propriétés_magiques_secondaires[$i]==$propriété_magique3){
				$i=rand(0,count($propriétés_magiques_secondaires)-1);
			}
			$propriété_magique4=$propriétés_magiques_secondaires[$i];
			$valeur4=round($niveau*$niveau/8);	
		$nom=$équipement.' légendaire';
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}


	echo $équipement.' '.$couleur;
	?><br><?php
	if(isset($propriété_magique1)){
		echo 'Propriété magique 1 :    + '.($valeur1-1).'-'.ceil($valeur1*1.25).' '.$propriété_magique1;
	}
	?><br><?php
	if(isset($propriété_magique2)){
		echo 'Propriété magique 2 :    + '.($valeur2-1).'-'.ceil($valeur2*1.25).' '.$propriété_magique2;
	}
	?><br><?php
	if(isset($propriété_magique3)){
		echo 'Propriété magique 3 :    + '.($valeur3-1).'-'.ceil($valeur3*1.25).' '.$propriété_magique3;
	}
	?><br><?php
	if(isset($propriété_magique4)){
		echo 'Propriété magique 4 :    + '.($valeur4-1).'-'.ceil($valeur4*1.25).' '.$propriété_magique4;
	}



?>
					
			<li class="d3-item item-slot-id-<?php echo $équipement;?> rarity-<?php echo $rareté;?>"> <!-- todo: two-handed weapon tag -->
				<a class="item-slot-container">
					<div class="tooltip-hover" data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508" data-item-id="5847"></div>
					<span class="item-container"><span class="item-effect"></span></span>
					<span class="image"><img src="../images/items/<?php echo $image;?>"></span>
					<div class="touch-tip">

						<div class="diablo-fans-tooltip item-tooltip">
							<div class="db-tooltip">
								<ul class="db-summary">
									<li class="db-title rarity-<?php echo $rareté;?> db-header">
										<span><?php echo $nom;?></span>
									</li>
								</ul>
								<div class="db-image rarity-<?php echo $rareté;?>">
									<img src="../images/items/<?php echo $image;?>">
								</div>
								<div class="db-description">
									<small class="rarity-<?php echo $rareté;?>"><?php echo$équipement;?></small>
									<ul class="db-summary">
										<li class="primary-stat">
											<?php 
											if (isset($statistique_principale)){
												if ($statistique_principale=='Armure'){
													?>
												<span><?php echo $val;?></span> <small><?php echo $statistique_principale;?></small>
												
												<?php
												}else{
													?>
													<span><?php echo $val;?> - <?php echo $val2;?></span><small><?php echo $statistique_principale;?></small>
												<?php
												}
											}
											?>
										
										</li>
										
											
											<?php 
										
										if($rareté>1){
												
												?>
												<li class="primary-stat">Primary Stats</li>
												
											<li class="grouped-stats">
												<ul>
													<li class="stat ">
													<?php 
														if(isset($propriété_magique1)){
															if ($propriété_magique1=='Critical Hit Chance Increased by' or $propriété_magique1=='Critical Hit Damages Increased by')
															{ 
																echo $propriété_magique1;?> <span class="value">+<?php echo $valeur1;?>%</span><?php
															}
															else{
																?><span class="value">+<?php echo ($valeur1-1);?></span>-<span class="value"><?php echo ceil($valeur1*1.25);?></span> <?php echo $propriété_magique1;
															}
														}
														?>
													</li>
													<li class="stat ">
														<?php 
														if(isset($propriété_magique2)){
																if ($propriété_magique2=='Critical Hit Chance Increased by' or $propriété_magique2=='Critical Hit Damages Increased by')
																{ 
																	echo $propriété_magique2;?> <span class="value">+<?php echo $valeur2;?>%</span><?php
																}
																else{
																	?><span class="value">+<?php echo ($valeur2-1);?></span>-<span class="value"><?php echo ceil($valeur2*1.25);?></span> <?php echo $propriété_magique2;
																}
														}
														?>
													</li>
													<li class="stat ">
														<?php 
														if($rareté>3){
																if (isset($propriété_magique3)){
																	if ($propriété_magique3=='Critical Hit Chance Increased by' or $propriété_magique3=='Critical Hit Damages Increased by')
																	{ 
																		echo $propriété_magique3;?> <span class="value">+<?php echo $valeur3;?>%</span><?php
																	}
																	else{
																		?><span class="value">+<?php echo ($valeur3-1);?></span>-<span class="value"><?php echo ceil($valeur3*1.25);?></span> <?php echo $propriété_magique3;
																	}
																}
																?>
															</li>
															<li class="stat ">
																<?php 
																if (isset($propriété_magique4)){
																	if ($propriété_magique4=='Sockets'){
																		?> <span>Sockets (<span class="value"><?php echo $valeur4;?></span>)</span><?php
																	}
																	elseif ($propriété_magique4=='Critical Hit Chance Increased by' or $propriété_magique4=='Critical Hit Damages Increased by')
																	{ 
																		echo $propriété_magique4;?> <span class="value">+<?php echo $valeur4;?>%</span><?php
																	}
																	else{
																		?><span class="value">+<?php echo ($valeur4-1);?></span>-<span class="value"><?php echo ceil($valeur4*1.25);?></span> <?php echo $propriété_magique4;
																	}
																}
															?>
															</li>
													
														<?php 
															if($rareté==5){?>
															<li class="primary-stat">Secondary Stats</li>
																<li class="passive ">
																		<?php echo $okok['Pouvoir_Spécial1'];?> <span class="value"><?php echo $okok['Valeur_Pouvoir_Special']; ?></span> <?php echo $okok['Pouvoir_Spécial2'];?>
																</li>
														 
															<?php
															}
														}
														?>
												</ul>
											</li>
											
											<?php 
											
											if($rareté==6){
													
													
												$set=$bdd->query('SELECT p.*
																FROM panoplie AS p
																WHERE p.Id_Panoplie='.$okok['Id_Panoplie'].'
																');
												$panoplie=$set->fetch();
												
												$nombre =$bdd->query('SELECT count(*)
																FROM equipements AS e, personnage AS p, objets as o 
																WHERE e.Id_Personnage = p.Id_Personnage
																AND p.Libellé = \'' . $personnage . '\'
																AND o.id_panoplie='.$okok['Id_Panoplie'].'
																and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambieres,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
																');
												$nb=$nombre->fetch();
																?>
												<li class="grouped-stats">
													<ul>
													   <li class="set">
																	<?php echo $panoplie['Nom'];?>
																 </li><li class="set set-item <?php if($nom=='Rathma\'s Skull Helm'){echo 'item-name';}?>"> 
																	Rathma's Skull Helm
																 </li><li class="set set-item <?php if($nom=='Rathma\'s Spikes'){echo 'item-name';}?>">
																	Rathma's Spikes
																 </li><li class="set set-item <?php if($nom=='Rathma\'s Ribcage Plate'){echo 'item-name';}?>">
																	Rathma's Ribcage Plate
																 </li><li class="set set-item <?php if($nom=='Rathma\'s Skeletal Legplates'){echo 'item-name';}?>">
																	Rathma's Skeletal Legplates
																 </li><li class="set set-item <?php if($nom=='Rathma\'s Ossified Sabatons'){echo 'item-name';}?>">
																	Rathma's Ossified Sabatons
																 </li><li class="set set-item <?php if($nom=='Rathma\'s Macabre Vambraces'){echo 'item-name';}?>">
																	Rathma's Macabre Vambraces
																 </li><li class="set">
																 
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
					
</span>				
					<?php




}
?>


</body>
	
</html>	