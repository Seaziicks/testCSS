<?php
session_start();

if(empty($_POST['radio-choice']))
{
    ?>Veuillez choisir un personnage ! <br> 
	<form method="post" action="selection.php">
	<input type="hidden" name="Nombre_Gris" value=<?php echo $_POST['Nombre_Gris'] ?> />
	<input type="hidden" name="Nombre_Blanc" value=<?php echo $_POST['Nombre_Blanc'] ?> />
	<input type="hidden" name="Nombre_Bleu" value=<?php echo $_POST['Nombre_Bleu'] ?> />
	<input type="hidden" name="Nombre_Jaune" value=<?php echo $_POST['Nombre_Jaune'] ?> />
	<input type="hidden" name="Nombre_Orange" value=<?php echo $_POST['Nombre_Orange'] ?> />
	
	<input type="submit" value="Revenir à la page précédente" /><?php
	
}else if (empty($_POST['Nombre_Gris']) and empty($_POST['Nombre_Blanc']) and empty($_POST['Nombre_Bleu']) and empty($_POST['Nombre_Jaune']) and empty($_POST['Nombre_Orange'])){
	?>
	Vous devez générer au moins 1 item. <br> 
	<form method="post" action="selection.php">
	<input type="hidden" name="radio-choice" value="<?php echo $_POST['radio-choice'] ?>" />
	
	<input type="submit" onClick="window.close()" value="Revenir à la page précédente" />
	<?php
}else{
try
{
   include("BDD.php");
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}


$personnage=$_POST['radio-choice'];

$statistiques = $bdd->query('SELECT * FROM personnage WHERE Libellé = \'' . $personnage . '\' ');

$statistique = $statistiques->fetch();

$niveau = $statistique['Niveau'];


$nbobjets=array($_POST['Nombre_Gris'],$_POST['Nombre_Blanc'],$_POST['Nombre_Bleu'],$_POST['Nombre_Jaune'],$_POST['Nombre_Orange']);







?>

<html>

<head>

	<link rel="stylesheet" href="css.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="test.css" type="text/css" media="screen"/>
	<script type="text/javascript" src="inlinemod.js"></script>
	<script type="text/javascript" src="inlinemod2.js"></script>
	<script type="text/javascript" src="cooldown.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<style>

	.alignement{
		display: flex; 
		flex-flow : row  wrap; 
		width : 365px; <!--19%-->
		color : white;
		top : 0;
		float : left;
		margin-bottom : 50px;
		border: 0.5px blue dashed;
	}
	.mobile-item-wrapper{
		margin-left : 0px;
		margin : 0;
	}
	.caca{
		width : 100%;
		height : 100px;;
		margin-left : 5px;
		color : white;
	}
	.db-description{
		width : 100%;
	}
	.niveauObj{
		float : right;
	}
	form{
		color : white;
	}

	
	
	
input[type="radio"]:checked+label img {
  filter: saturate(250%);
} 
input[type="radio"] {
     transform: scale(0, 0);
	 
}
form img{
	width : 7%;
}
label{
	text-align : center;
}
label span{
	width : 20%;
}
.limite{
	width : 100%;
	text-align : center;
	background-color : white;
	margin-top : 35px;
}

.personnages{
	width:43.5%;
	text-align : center;
	margin : auto;
	padding-left:1.3%;
}
.personnages div{
	float : left;
	width:20%;
}
input[type="number"]{
	width : 11%;
}
.valeur{
	color: #bda6db;
}
	</style>
</head>
<body>
<?php include("menutest.php"); ?>
<div class="limite">

	<form method="post" action="generer_itembis.php">
		<input type="radio" name="radio-choice" id="radio-choice-1" value="Paladin" <?php if(!empty($_POST['radio-choice']) and $_POST['radio-choice']=='Paladin'){echo 'checked';}?>/>
		<label for="radio-choice-1"><img src="Paladin/Paladin.png" alt="" /></label>
		
		
		<input type="radio" name="radio-choice" id="radio-choice-2" value="Voleur" <?php if(!empty($_POST['radio-choice']) and $_POST['radio-choice']=='Voleur'){echo 'checked';}?>/>
		<label for="radio-choice-2"><img src="Voleur/Voleur.png" alt="" /></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-3" value="Démoniste" <?php if(!empty($_POST['radio-choice']) and $_POST['radio-choice']=='Démoniste'){echo 'checked';}?>/>
		<label for="radio-choice-3"><img src="Demoniste/Demoniste.png" alt="" /></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-4" value="Nain" <?php if(!empty($_POST['radio-choice']) and $_POST['radio-choice']=='Nain'){echo 'checked';}?>/>
		<label for="radio-choice-4"><img src="Nain/Nain.jpg" alt="" /></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-5" value="Manipulateur de Sang" <?php if(!empty($_POST['radio-choice']) and $_POST['radio-choice']=='Manipulateur de Sang'){echo 'checked';}?>/>
		<label for="radio-choice-5"><img src="Manipulateur_de_Sang/Manipulateur_de_Sang.png" alt="" /> </label>
		<div class="personnages">
			<div>Paladin</div><div>Voleur</div><div>Démoniste</div><div>Nain</div><div>Manipulateur de Sang</div>
		</div>
		<br><br><br>
		<div class="limite">
		Qualités des objets :<br>
		<input name="Nombre_Gris"  type="number" min="0" placeholder="Mauvaises factures" value="<?php if(!empty($_POST['Nombre_Gris'])){echo $_POST['Nombre_Gris'];}?>">
		<input name="Nombre_Blanc" type="number" min="0" placeholder="Normaux" value="<?php if(!empty($_POST['Nombre_Blanc'])) {echo$_POST['Nombre_Blanc'];}?>">
		<input name="Nombre_Bleu" type="number" min="0" placeholder="Magiques" value="<?php if(!empty($_POST['Nombre_Bleu'])) {echo$_POST['Nombre_Bleu'];}?>">
		<input name="Nombre_Jaune" type="number" min="0" placeholder="Rares" value="<?php if(!empty($_POST['Nombre_Jaune'])) {echo$_POST['Nombre_Jaune'];}?>">
		<input name="Nombre_Orange" type="number" min="0" placeholder="Légendaires" value="<?php if(!empty($_POST['Nombre_Orange'])) {echo$_POST['Nombre_Orange'];}?>">
		</div>
		<br>
		<div>
			<input type="submit" value="Valider" />
		</div>
	</form>

</div>
<br>
<?php




for($k=0;$k<count($nbobjets);$k++){
	$rareté=$k+1;
for($j=1;$j<=$nbobjets[$k];$j++){
?>
	
<span class="alignement">

<?php
$statistique_principale='Armure';
$propriété_magique1=null;
$propriété_magique2=null;
$propriété_magique3=null;
$propriété_magique4=null;
$val=null;
$val2=null;
$valeur1=null;
$valeur2=null;
$valeur3=null;
$valeur4=null;

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





$équipements=array('Coiffe','Epaules','Gants','Torse','Brassard','Ceinture','Jambières','Bottes','Amulette','Anneau','Arme','Arme');

$armes=array('Dague','Baguette','Faux','Epée courte','Massue','Epée','Lance','Fléau','Hache');

$équipement = $équipements[array_rand($équipements, 1)];

if ($équipement=='Arme'){
	$équipement=$armes[array_rand($armes, 1)];
}
switch($personnage){
	case 'Voleur':
		$propriétés_magiques_primaires=['Agilité','Agilité','Agilité','Intelligence','Force'];
		break;
	case 'Nain':
		$propriétés_magiques_primaires=['Agilité','Force','Force','Force','Intelligence'];
		break;
	case 'Paladin':
		$propriétés_magiques_primaires=['Agilité','Force','Force','Intelligence','Intelligence'];
		break;
	case 'Manipulateur de Sang':
	case 'Démoniste':
		$propriétés_magiques_primaires=['Agilité','Force','Intelligence','Intelligence','Intelligence'];
		break;
}

$propriétés_magiques_secondaires=['Agilité','Force','Intelligence','Agilité','Force','Intelligence','Vitalité','Vitalité','Mana','Canon de Lumière','Critique'];




switch($équipement){
	case 'Dague':
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/5);
		$val2=floor($niveau/3);
		$type='Arme';
		$emplacement='Arme';
		break;
	case 'Baguette':
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/7);
		$val2=floor($niveau/5);
		$type='Arme';
		$emplacement='Arme';
		break;
	case 'Faux':
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/5);
		$val2=floor($niveau/4);
		$type='Arme';
		$emplacement='Arme';
		break;
	case 'Epée courte':
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/4);
		$val2=floor($niveau/3);
		$type='Arme';
		$emplacement='Arme';
		break;
	case 'Massue':
	case 'Epée':
	case 'Lance':
	case 'Fléau':
	case 'Hache':
		$statistique_principale='Dégâts par coup';
		$val=floor($niveau/3);
		$val2=floor($niveau/2);
		$type='Arme';
		$emplacement='Arme';
		break;
	case 'Amulette':
		$type='Amulette';
		$emplacement='Bijou';
		break;
	case 'Anneau':
		$type='Anneau1';
		$emplacement='Bijou';
		break;
	case 'Coiffe':
		$statistique_principale='Armure';
		$val=0.2;
		$type='Coiffe';
		$emplacement='Armure';
		break;
	case 'Epaules':
		$statistique_principale='Armure';
		$val=0.2;
		$type='Epaules';
		$emplacement='Armure';
		break;
	case 'Gants':
		$statistique_principale='Armure';
		$val=0.2;
		$type='Gants';
		$emplacement='Armure';
		break;
	case 'Torse' :
		$statistique_principale='Armure';
		$val=0.2;
		$type='Torse';
		$emplacement='Armure';
		break;
	case 'Brassard':
		$statistique_principale='Armure';
		$val=0.2;
		$type='Brassard';
		$emplacement='Armure';
		break;
	case 'Ceinture':
		$statistique_principale='Armure';
		$val=0.2;
		$type='Ceinture';
		$emplacement='Armure';
		break;
	case 'Jambières':
		$statistique_principale='Armure';
		$val=0.2;
		$type='Jambières';
		$emplacement='Armure';
		break;
	case 'Bottes':
		$statistique_principale='Armure';
		$val=0.2;
		$type='Bottes';
		$emplacement='Armure';
		break;
	
	
	
	
	
	
}











/*
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
	}else if($équipement=='Amulette' or $équipement=='Anneau' ){
		$type='Bijou';
	}
	else{
		$statistique_principale='Armure';
		$val=0.2;
		$type='Armure';
	}

	*/
	
	
	$image=''.$emplacement.'/'.$équipement.'/Bleu/1.png';
		
		
		
		
		
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
		$emplacement='Arme';
	}
	else if($équipement=='Baguette'){
		$propriété_magique1='Intelligence';
		$emplacement='Arme';
	}
	else if($équipement=='Faux'){
		$propriété_magique1='Intelligence';
		$emplacement='Arme';
	}
	else if($équipement=='Epée courte'){
		if(rand(0,100)>51){
			$propriété_magique1='Agilité';
		}else{
			$propriété_magique1='Force';
		}
		$emplacement='Arme';
	}
	else if($équipement=='Massue' or $équipement=='Epée' or $équipement=='Lance' or $équipement=='Fléau'or $équipement=='Hache'){
		$propriété_magique1='Force';
		$emplacement='Arme';
	}
	else if($équipement=='Amulette' or $équipement=='Anneau' ){
		$propriété_magique1=$propriétés_magiques_primaires[rand(0,count($propriétés_magiques_primaires)-1)];
		$emplacement='Bijou';
	}else{
		$propriété_magique1=$propriétés_magiques_primaires[rand(0,count($propriétés_magiques_primaires)-1)];
		$emplacement='Armure';
	}
	
	if($rareté==3){
		$valeur1=round($niveau*$niveau/12);
		
		if(rand(0,100)<=intval($niveau*$niveau/2.25)){
			$i=rand(0,count($propriétés_magiques_secondaires)-1);
			while($propriétés_magiques_secondaires[$i]==$propriété_magique1){
				$i=rand(0,count($propriétés_magiques_secondaires)-1);
			}
			$propriété_magique2=$propriétés_magiques_secondaires[$i];
			$valeur2=round($niveau*$niveau/16);
				
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if($propriété_magique2=='Vitalité'){$propriété_active2='Vie';}else{$propriété_active2=$propriété_magique2;}
	if($propriété_magique3=='Vitalité'){$propriété_active3='Vie';}else{$propriété_active3=$propriété_magique3;}
	if($propriété_magique4=='Vitalité'){$propriété_active4='Vie';}else{$propriété_active4=$propriété_magique4;}
	
	
}

?><span class="caca"><?php
	echo $équipement.' '.$couleur; ?><span style="margin :3px 10px 0 0"class="niveauObj"> Niveau : <?php echo $niveau;?></span><?php
	?><br><?php
	?><br><?php
	if(isset($propriété_magique1)){
		echo 'Propriété magique 1 :    + <span class="valeur">'.($valeur1-1).'</span>-<span class="valeur">'.ceil($valeur1*1.25).'</span> <span class='.$propriété_magique1.'>'.$propriété_magique1.'</span>';
	}
	?><br><?php
	if(isset($propriété_magique2)){
		echo 'Propriété magique 2 :    + <span class="valeur">'.($valeur2-1).'</span>-<span class="valeur">'.ceil($valeur2*1.25).'</span> <span class='.$propriété_active2.'>'.$propriété_magique2.'</span>';
	}
	?><br><?php
	if(isset($propriété_magique3)){
		echo 'Propriété magique 3 :    + <span class="valeur">'.($valeur3-1).'</span>-<span class="valeur">'.ceil($valeur3*1.25).'</span> <span class='.$propriété_active3.'>'.$propriété_magique3.'</span>';
	}
	?><br><?php
	if(isset($propriété_magique4)){
		echo 'Propriété magique 4 :    + <span class="valeur">'.($valeur4-1).'</span>-<span class="valeur">'.ceil($valeur4*1.25).'</span> <span class='.$propriété_active4.'>'.$propriété_magique4.'</span>';
	}
?></span><?php


?>			
			<div class="mobile-item-wrapper d3-class-necromancer">
			<ul class="mobile-item-selection">		
			<li class="d3-item item-slot-id-<?php echo $type;?> rarity-<?php echo $rareté;?>"> <!-- todo: two-handed weapon tag -->
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
								<div class="db-description" style="width : 100%;">
									<small class="rarity-<?php echo $rareté;?>"><?php echo $équipement;?> <span class="niveauObj"> Niveau : <?php echo $niveau;?></span></small>
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
																and o.Id_Objet in(e.Coiffe,e.Epaules,e.Gants,e.Torse,e.Brassard,e.Ceinture,e.Jambières,e.Bottes,e.Amulette,e.Anneau1,e.Anneau2,e.Arme,e.Offhand)
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
			</ul>
					
				
</div>	
</span>	
			<?php




}
}
?>


</body>
	
</html>	
<?php
}
?>