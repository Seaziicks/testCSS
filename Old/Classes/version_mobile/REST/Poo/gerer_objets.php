<?php
declare(strict_types=1);
spl_autoload_register('chargerClasse');
session_start();


/**
 * @param $classname
 */
function chargerClasse($classname)
{
    if (is_file('Poo/' . $classname . '.php'))
        require 'Poo/' . $classname . '.php';
    elseif (is_file('Poo/Manager/' . $classname . '.php'))
        require 'Poo/Manager/' . $classname . '.php';
    elseif (is_file('Poo/Classes/' . $classname . '.php'))
        require 'Poo/Classes/' . $classname . '.php';
}

include ('BDD.php');

?>

<html lang="fr">

<head>
    <!-- ===================    CSS    =================== -->
    <?php include('css/BootstrapCSSImport.php'); ?>
    <link rel="stylesheet" href="css/css.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/test.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/creation_item.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/navbar.css" type="text/css" media="screen"/>

    <!-- ===================    Js    =================== -->

    <!-- ===================    Page    =================== -->
    <title>Uncommitted Quest - Item creation</title>
    <!-- https://game-icons.net/1x1/delapouite/scroll-quill.html -->
    <link rel="icon" href="css/images/scroll-quill.png"/>

    <style>

        .global-wrapper {
            display: flex;
            min-height: 100vh;
            flex-flow: column;
        }
        .wrapper {
            flex: 2;
            display: flex;
            width: 100%;
            z-index: 1;
        }

        .alignement{
            /*display: flex;*/
            flex-flow : row  wrap;
            width : 365px;
            color : white;
            top : 0;
            float : left;
            margin-bottom : 50px;
            height: fit-content;
            background-color: rgba(0, 0, 0, 0.3);
            border: 1px solid lightgrey;
            border-radius: 5px;
            margin-left: 10px;
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
        .personnagebis{
            margin : auto;
            color : white;
        }
        .boutton_valider{
            /*background-image:url("../images/Boutton.png");*/
        }

        .alignement{
            margin-top : 35px;
        }

        .button {
            border: none;
            color: #D6D3D2;
            padding: 7px 10px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }
        .button:hover{
            color: white;
        }
        .button:active{
            box-shadow: 1px 1px 10px black inset, 0 1px 0 rgba( 255, 255, 255, 0.4);
        }
        .button1{
            background-color: #3A863D;
        }
        .button1:hover{
            background-color: #4CAF50;
        }
        .button1:active{
            background-color: #3A863D;
        }
        .button2{
            background-color: #B13127;
        }
        .button2:hover{
            background-color: #f44336;
        }
        .button2:active{
            background-color: #B13127
        }
    </style>

</head>
<body>
<div class="background-image"></div>
<div class="global-wrapper">
    <?php include('navbar.php');?>
    <div class="wrapper"><?php


		$recherche = $bdd->query('SELECT * FROM equipement WHERE Validé=0 order by rareté') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		
		
		$numéroanneau=0;
		$témoin=0;
		while($okok=$recherche->fetch()){
			$témoin+=1;
			// echo '<br>'.$okok['Nom'].'<br>';
			${'objet'.$témoin}=array(
			'statistique_principale'=>$okok['Statistique_Principale'],
			'val'=>$okok['Val'],
			'val2'=>$okok['Val2'],
			'propriété_magique1'=>$okok['PropriétéMagique1'],
			'valeur1'=>$okok['Valeur1'],
			'propriété_magique2'=>$okok['PropriétéMagique2'],
			'valeur2'=>$okok['Valeur2'],
			'propriété_magique3'=>$okok['PropriétéMagique3'],
			'valeur3'=>$okok['Valeur3'],
			'propriété_magique4'=>$okok['PropriétéMagique4'],
			'valeur4'=>$okok['Valeur4'],
			'nom'=>$okok['Nom'],
			'image'=>$okok['Image'],
			'couleur'=>$okok['Couleur'],
			'rareté'=>$okok['Rareté'],
			'type'=>$okok['Type'],
			'niveau'=>$okok['Niveau'],
			'équipement'=>null,
			'variable'=>'objet'.$témoin,
			'id_objet'=>$okok['Id_Objet'],
			);
			if($okok['Type']=='Anneau'){
				${'objet'.$témoin}['équipement']=$okok['Type'].''.(($numéroanneau%2)+1).'';
				$numéroanneau+=1;
			}else{
				${'objet'.$témoin}['équipement']=$okok['Type'];
			}
			$armes=array('Dague','Baguette','Faux','Epée courte','Massue','Epée','Lance','Fléau','Hache');
			if(in_array($okok['Type'],$armes)){
				${'objet'.$témoin}['équipement']='Arme';
			}
			$offhand=array('Bouclier');
			if(in_array($okok['Type'],$offhand)){
				${'objet'.$témoin}['équipement']='Offhand';
			}

		}
		
		
		
		
		
		$placement=1;
		${'inventaire'.$placement}=array(
			'Coiffe' =>null,
			'Epaules' =>null,
			'Gants' =>null,
			'Torse' =>null,
			'Brassard' =>null,
			'Ceinture' =>null,
			'Jambieres' =>null,
			'Bottes' =>null,
			'Amulette' =>null,
			'Anneau1' =>null,
			'Anneau2' =>null,
			'Arme' =>null,
			'Offhand' =>null,
		);


		for($i=1;$i<=$témoin;$i++){
			$placé=false;
			$j=0;
			while(!$placé and $j<$placement){
				$j+=1;
				if (!isset(${'inventaire'.$j}[''.${'objet'.$i}['équipement'].''])){
					${'inventaire'.$j}[''.${'objet'.$i}['équipement'].'']=''.${'objet'.$i}['variable'].'';
					$placé=true;
				}
			}
			if(!$placé){
				$placement+=1;
				${'inventaire'.$placement}=array(
					'Coiffe' =>null,
					'Epaules' =>null,
					'Gants' =>null,
					'Torse' =>null,
					'Brassard' =>null,
					'Ceinture' =>null,
					'Jambieres' =>null,
					'Bottes' =>null,
					'Amulette' =>null,
					'Anneau1' =>null,
					'Anneau2' =>null,
					'Arme' =>null,
					'Offhand' =>null,
				);
				${'inventaire'.$placement}[''.${'objet'.$i}['équipement'].'']=''.${'objet'.$i}['variable'].'';
			}
		}
			
			

			
			
			
			
			
			
			
for($l=1;$l<=$placement;$l++){
	
	
	
	
	?><span class="alignement">
	<div class="mobile-item-wrapper d3-class-necromancer">
			<ul class="mobile-item-selection">	<?php
	
	
	
	$Equipement1='Coiffe';
	$Equipement2='Epaules';
	$Equipement3='Gants';
	$Equipement4='Torse';
	$Equipement5='Brassard';
	$Equipement6='Ceinture';
	$Equipement7='Jambieres';
	$Equipement8='Bottes';
	$Equipement9='Amulette';
	$Equipement10='Anneau1';
	$Equipement11='Anneau2';
	$Equipement12='Arme';
	$Equipement13='Offhand';
	
	
	
	
	for($j=1;$j<=13;$j++){
	$actuel=${'Equipement'.$j};
	
	if(isset(${'inventaire'.$l}[''.$actuel.''])){
			
			
	
?>


	
			<li class="d3-item item-slot-id-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['équipement'];?> rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?>"> <!-- todo: two-handed weapon tag -->
				<a class="item-slot-container">
					<div class="tooltip-hover" data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508" data-item-id="5847"></div>
					<span class="item-container"><span class="item-effect"></span></span>
					<span class="image"><img src="../../../../images/items/<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['image'];?>"></span>
					<div class="touch-tip">

						<div class="diablo-fans-tooltip item-tooltip">
							<div class="db-tooltip">
								<ul class="db-summary">
									<li class="db-title rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?> db-header">
										<span><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['nom'];?></span>
									</li>
								</ul>
								<div class="db-image rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?>">
									<img src="../../../../images/items/<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['image'];?>">
								</div>
								<div class="db-description" style="width : 100%;">
									<small class="rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?>"><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['type'];?> <span class="niveauObj"> Niveau : <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['niveau'];?></span></small>
									<ul class="db-summary">
										<li class="primary-stat">
											<?php 
											if (isset(${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale'])){
												if (${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale']=='Armure'){
													?>
												<span><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['val'];?></span> <small><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale'];?></small>
												
												<?php
												}else{
													?>
													<span><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['val'];?> - <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['val2'];?></span><small><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale'];?></small>
												<?php
												}
											}
											?>
										
										</li>
										
											
											<?php 
										
										if(${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté']>1){
												
												?>
												<li class="primary-stat">Primary Stats</li>
												
											<li class="grouped-stats">
												<ul>
													<li class="stat ">
													<?php 
														if(isset(${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique1'])){
															if (${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique1']=='Critical Hit Chance Increased by' or ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique1']=='Critical Hit Damages Increased by')
															{ 
																echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique1'];?> <span class="value">+<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur1'];?>%</span><?php
															}
															else{
																?><span class="value">+<?php echo (${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur1']-1);?></span>-<span class="value"><?php echo ceil(${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur1']*1.25);?></span> <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique1'];
															}
														}
														?>
													</li>
													<li class="stat ">
														<?php 
														if(isset(${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique2'])){
																if (${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique2']=='Critical Hit Chance Increased by' or ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique2']=='Critical Hit Damages Increased by')
																{ 
																	echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique2'];?> <span class="value">+<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur2'];?>%</span><?php
																}
																else{
																	?><span class="value">+<?php echo (${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur2']-1);?></span>-<span class="value"><?php echo ceil(${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur2']*1.25);?></span> <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique2'];
																}
														}
														?>
													</li>
													<li class="stat ">
														<?php 
														if(${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté']>3){
																if (isset(${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique3'])){
																	if (${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique3']=='Critical Hit Chance Increased by' or ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique3']=='Critical Hit Damages Increased by')
																	{ 
																		echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique3'];?> <span class="value">+<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur3'];?>%</span><?php
																	}
																	else{
																		?><span class="value">+<?php echo (${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur3']-1);?></span>-<span class="value"><?php echo ceil(${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur3']*1.25);?></span> <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique3'];
																	}
																}
																?>
															</li>
															<li class="stat ">
																<?php 
																if (isset(${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4'])){
																	if (${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4']=='Sockets'){
																		?> <span>Sockets (<span class="value"><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur4'];?></span>)</span><?php
																	}
																	elseif (${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4']=='Critical Hit Chance Increased by' or ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4']=='Critical Hit Damages Increased by')
																	{ 
																		echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4'];?> <span class="value">+<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur4'];?>%</span><?php
																	}
																	else{
																		?><span class="value">+<?php echo (${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur4']-1);?></span>-<span class="value"><?php echo ceil(${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur4']*1.25);?></span> <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4'];
																	}
																}
															?>
															</li>
													
														<?php 
															if(${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté']==5){?>
															<li class="primary-stat">Secondary Stats</li>
																<li class="passive ">
																		Pouvoir Spécial à insérer.
																</li>
														 
															<?php
															}
														}
														?>
												</ul>
											</li>
											
											<?php 
											
											if(${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté']==6){
													
													
												$set=$bdd->query('SELECT p.*
																FROM panoplie AS p
																WHERE p.Id_Panoplie='.$okok['Id_Panoplie'].'
																');
												$panoplie=$set->fetch();
												
												$nombre =$bdd->query('SELECT count(*)
																FROM equiper AS e, personnage AS p, equipement as o 
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
																 </li><li class="set set-item <?php if(${''.${'inventaire'.$l}[''.$actuel.''].''}['nom']=='Rathma\'s Skull Helm'){echo 'item-name';}?>"> 
																	Rathma's Skull Helm
																 </li><li class="set set-item <?php if(${''.${'inventaire'.$l}[''.$actuel.''].''}['nom']=='Rathma\'s Spikes'){echo 'item-name';}?>">
																	Rathma's Spikes
																 </li><li class="set set-item <?php if(${''.${'inventaire'.$l}[''.$actuel.''].''}['nom']=='Rathma\'s Ribcage Plate'){echo 'item-name';}?>">
																	Rathma's Ribcage Plate
																 </li><li class="set set-item <?php if(${''.${'inventaire'.$l}[''.$actuel.''].''}['nom']=='Rathma\'s Skeletal Legplates'){echo 'item-name';}?>">
																	Rathma's Skeletal Legplates
																 </li><li class="set set-item <?php if(${''.${'inventaire'.$l}[''.$actuel.''].''}['nom']=='Rathma\'s Ossified Sabatons'){echo 'item-name';}?>">
																	Rathma's Ossified Sabatons
																 </li><li class="set set-item <?php if(${''.${'inventaire'.$l}[''.$actuel.''].''}['nom']=='Rathma\'s Macabre Vambraces'){echo 'item-name';}?>">
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
									
									
						
									<br>
									<form method="post" action="valider_objet.php" style="float : left;" target=_blank>
										<input type="hidden" name="id_objet" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['id_objet']; ?> >
										<input class="button button1" type="submit" value="Valider" />
									</form>
									<form method="post" action="supprimer_objet.php" style="float : right;" target=_blank>
										<input type="hidden" name="id_objet" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['id_objet']; ?> >
										<input class="button button2" type="submit" value="Supprimer" />
									</form>
									
									
									
									
								</div>
							</div>
						</div>
					</div>
				</a>
			</li>



	<?php
	}
}
?>			</ul>
					
				
</div></span><?php
}
?>
    </div>


    <?php include("./footer.php") ?>
</div>

<?php include("./css/BootstrapJSImport.php") ?>
</body>

</html>	