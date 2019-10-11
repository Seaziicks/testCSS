<?php
session_start();

?>

<html>

<head>

	<link rel="stylesheet" href="css.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="test.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="creation_item.css" type="text/css" media="screen"/>
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
.Equipement{
	position : relative;
}
.mobile-item-wrapper{
	margin : auto;
}





.optionGroup {
    font-weight: bold;
    font-style: italic;
	padding-top: 5px
}
    
.optionChild {
    padding-left: 15px;
	font-size : 90%;
}

.button {
	border: none;
	color: white;
	padding: 7px 10px;
	text-align: center;
	text-decoration: none;
	cursor: pointer;
}
.button:active{
     box-shadow: 1px 1px 10px black inset, 0 1px 0 rgba( 255, 255, 255, 0.4);
}
.button1{
	background-color: #555555;
}
.button1:hover{
	color: black;
	background-color: #e7e7e7;
}
.button1:active{
	background-color: #555555;
}
	</style>
</head>
<body>
<?php include("menu.php"); ?>
<div class="limite">

	<form method="post" action="">
		<input type="radio" name="radio-choice" id="radio-choice-1" value="Paladin" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Paladin'){echo 'checked';}?>/>
		<label for="radio-choice-1"><img src="Paladin/Paladin.png" alt="" /></label>
		
		
		<input type="radio" name="radio-choice" id="radio-choice-2" value="Voleur" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Voleur'){echo 'checked';}?>/>
		<label for="radio-choice-2"><img src="Voleur/Voleur.png" alt="" /></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-3" value="Démoniste" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Démoniste'){echo 'checked';}?>/>
		<label for="radio-choice-3"><img src="Demoniste/Demoniste.png" alt="" /></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-4" value="Nain" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Nain'){echo 'checked';}?>/>
		<label for="radio-choice-4"><img src="Nain/Nain.png" alt="" /></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-5" value="Manipulateur de Sang" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Manipulateur de Sang'){echo 'checked';}?>/>
		<label for="radio-choice-5"><img src="Manipulateur_de_Sang/Manipulateur_de_Sang.png" alt="" /> </label>
		<div class="personnages">
			<div>Paladin</div><div>Voleur</div><div>Démoniste</div><div>Nain</div><div>Manipulateur de Sang</div>
		</div>
		<br><br><br>
		<div class="limite">
		Qualités des objets :<br>
		<input name="Nombre_Gris"  type="number" min="0" placeholder="Mauvaises factures" value="<?php if(isset($_POST['Nombre_Gris'])){echo $_POST['Nombre_Gris'];}?>">
		<input name="Nombre_Blanc" type="number" min="0" placeholder="Normaux" value="<?php if(isset($_POST['Nombre_Blanc'])) {echo$_POST['Nombre_Blanc'];}?>">
		<input name="Nombre_Bleu" type="number" min="0" placeholder="Magiques" value="<?php if(isset($_POST['Nombre_Bleu'])) {echo$_POST['Nombre_Bleu'];}?>">
		<input name="Nombre_Jaune" type="number" min="0" placeholder="Rares" value="<?php if(isset($_POST['Nombre_Jaune'])) {echo$_POST['Nombre_Jaune'];}?>">
		<input name="Nombre_Orange" type="number" min="0" placeholder="Légendaires" value="<?php if(isset($_POST['Nombre_Orange'])) {echo$_POST['Nombre_Orange'];}?>">
		<script>function hide()
{
document.getElementById('to_hide').style.display = 'none';
}
</script>
		<SELECT name="équipement" size="1" id="caracteristique" >
		<OPTION disabled <?php if (empty($_POST['équipement'])){echo 'selected';}?>> Item selectionnable
		<OPTION>
		<OPTION class="optionGroup" label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Equipements'){echo 'selected';}?>>Equipements
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Bottes'){echo 'selected';}?>>    Bottes
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Brassard'){echo 'selected';}?>>Brassard
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Ceinture'){echo 'selected';}?>>Ceinture
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Coiffe'){echo 'selected';}?>>Coiffe
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Epaules'){echo 'selected';}?>>Epaules
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Gants'){echo 'selected';}?>>Gants
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Jambières'){echo 'selected';}?>>Jambières
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Torse'){echo 'selected';}?>>Torse
		<OPTION disabled>
		<OPTION class="optionGroup" label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Bijoux'){echo 'selected';}?>>Bijoux
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Amulette'){echo 'selected';}?>>Amulette
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Anneau'){echo 'selected';}?>>Anneau
		<OPTION disabled>
		<OPTION class="optionGroup" label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Armes'){echo 'selected';}?>>Armes
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Baguette'){echo 'selected';}?>>Baguette
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Dague'){echo 'selected';}?>>Dague
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Epée'){echo 'selected';}?>>Epée
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Epée courte'){echo 'selected';}?>>Epée courte
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Faux'){echo 'selected';}?>>Faux
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Fléau'){echo 'selected';}?>>Fléau
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Hache'){echo 'selected';}?>>Hache
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Lance'){echo 'selected';}?>>Lance
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Massue'){echo 'selected';}?>>Massue
		<OPTION disabled>
		<OPTION class="optionGroup" label="" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Main gauche'){echo 'selected';}?>>Main gauche
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Bouclier'){echo 'selected';}?>>Bouclier
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Ciboire'){echo 'selected';}?>>Ciboire
		<OPTION class="optionChild" <?php if (!empty($_POST['équipement']) and $_POST['équipement']=='Talisman démoniaque'){echo 'selected';}?>>Talisman démoniaque
		</SELECT>
		
		<input name="niveau" type="number" min="0" placeholder="Niveau" value="<?php if(isset($_POST['niveau'])) {echo$_POST['niveau'];}?>">
		</div>
		<br>
		<div>
			<input type="submit" value="Valider" />
		</div>
	</form>

</div>
<br>
<?php

try
{
   include("BDD.php");
}
catch(Exception $e)
{
       die('Erreur : '.$e->getMessage());
}



if(!isset($_POST['radio-choice']) and isset($_POST['Nombre_Gris']) and isset($_POST['Nombre_Blanc']) and isset($_POST['Nombre_Bleu']) and isset($_POST['Nombre_Jaune']) and isset($_POST['Nombre_Orange']))
{
    ?><span style="color:white">Veuillez choisir un personnage !</span> <br> <?php
	
}else if ((empty($_POST['Nombre_Gris']) and empty($_POST['Nombre_Blanc']) and empty($_POST['Nombre_Bleu']) and empty($_POST['Nombre_Jaune']) and empty($_POST['Nombre_Orange'])) and isset($_POST['radio-choice'])){
	$personnage=$_POST['radio-choice'];
	include('statistiques.php');
	?><div style="width:100%;background-color : rgba(43,43,43,0.7);"><?php
	include('personnagebis.php');
	include('equipements.php');
	?></div>
	Vous devez générer au moins 1 item. <br> 
	<?php
}else if (isset($_POST['Nombre_Gris']) and isset($_POST['Nombre_Blanc']) and isset($_POST['Nombre_Bleu']) and isset($_POST['Nombre_Jaune']) and isset($_POST['Nombre_Orange']) and isset($_POST['radio-choice'])){




$personnage=$_POST['radio-choice'];
include('statistiques.php');	
include('personnagebis.php');
include('equipements.php');


$nbobjets=array($_POST['Nombre_Gris'],$_POST['Nombre_Blanc'],$_POST['Nombre_Bleu'],$_POST['Nombre_Jaune'],$_POST['Nombre_Orange']);
































$sauvniv=$niveau;
$numéroanneau=0;
$témoin=0;
for($k=0;$k<count($nbobjets);$k++){
	$rareté=$k+1;
	for($j=1;$j<=$nbobjets[$k];$j++){
		
		
		if(!empty($_POST['niveau'])){
			$niveau=$_POST['niveau'];
		}else{
		$niveau=$sauvniv;
		}
		$niveau=rand($niveau-floor($niveau/7),$niveau+floor($niveau/10));
		
		
		
		
		
		
		
		$témoin+=1;

		$statistique_principale=null;
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


		if(!empty($_POST['équipement']) and !in_array($_POST['équipement'],['Equipements','Armes','Bijoux','Main gauche'])){
			$équipement=$_POST['équipement'];
		}else if(!empty($_POST['équipement']) and in_array($_POST['équipement'],['Equipements','Armes','Bijoux','Main gauche'])){
			switch($_POST['équipement']){
				case 'Equipements':
					$provisoire=array('Coiffe','Epaules','Gants','Torse','Brassard','Ceinture','Jambières','Bottes');
					$équipement=$provisoire[array_rand($provisoire, 1)];
					break;
				case 'Armes':
					$provisoire=array('Dague','Baguette','Faux','Epée courte','Massue','Epée','Lance','Fléau','Hache');
					$équipement=$provisoire[array_rand($provisoire, 1)];
					break;
				case 'Bijoux':
					$provisoire=array('Amulette','Anneau');
					$équipement=$provisoire[array_rand($provisoire, 1)];
					break;
				case 'Main gauche':
					$provisoire=array('Bouclier','Talisman démoniaque','Ciboire');
					$équipement=$provisoire[array_rand($provisoire, 1)];
					break;
			}
		}else{
			$équipements=array('Coiffe','Epaules','Gants','Torse','Brassard','Ceinture','Jambières','Bottes','Amulette','Anneau','Arme','Offhand');

			$armes=array('Dague','Baguette','Faux','Epée courte','Massue','Epée','Lance','Fléau','Hache');
			
			$offhand=array('Bouclier','Talisman démoniaque','Ciboire');
			
			$équipement = $équipements[array_rand($équipements, 1)];

			if ($équipement=='Arme'){
				$équipement=$armes[array_rand($armes, 1)];
			}
			
			if ($équipement=='Offhand'){
				$équipement=$offhand[array_rand($offhand, 1)];
			}
			
			
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

		$propriétés_magiques_secondaires=['Agilité','Force','Intelligence','Agilité','Force','Intelligence','Vitalité','Vitalité','Mana','Canon de lumière','Critique'];


		switch($équipement){
			case 'Dague':
				$statistique_principale='Dégâts par coup';
				$val=floor(pow($niveau,1.13)*pow($rareté,1.02)/7);
				$val2=floor(pow($niveau,1.13)*pow($rareté,1.02)/4);
				$type='Arme';
				$emplacement='Arme';
				$nbimage=7;
				break;
			case 'Baguette':
				$statistique_principale='Dégâts par coup';
				$val=floor(pow($niveau,1.13)*pow($rareté,1.02)/7);
				$val2=floor(pow($niveau,1.13)*pow($rareté,1.02)/5);
				$type='Arme';
				$emplacement='Arme';
				$nbimage=6;
				break;
			case 'Faux':
				$statistique_principale='Dégâts par coup';
				$val=floor(pow($niveau,1.13)*pow($rareté,1.02)/7);
				$val2=floor(pow($niveau,1.13)*pow($rareté,1.02)/4.5);
				$type='Arme';
				$emplacement='Arme';
				$nbimage=2;
				break;
			case 'Epée courte':
				$statistique_principale='Dégâts par coup';
				$val=floor(pow($niveau,1.13)*pow($rareté,1.02)/3.25);
				$val2=floor(pow($niveau,1.13)*pow($rareté,1.02)/2.75);
				$type='Arme';
				$emplacement='Arme';
				$nbimage=4;
				break;
			
			case 'Epée':
			case 'Lance':
			case 'Fléau':
			case 'Hache':
				$statistique_principale='Dégâts par coup';
				$val=floor(pow($niveau,1.13)*pow($rareté,1.02)/4);
				$val2=floor(pow($niveau,1.13)*pow($rareté,1.02)/2);
				$type='Arme';
				$emplacement='Arme';
				$nbimage=6;
				break;
				
			case 'Massue':
				$statistique_principale='Dégâts par coup';
				$val=floor(pow($niveau,1.13)*pow($rareté,1.02)/5);
				$val2=floor(pow($niveau,1.13)*pow($rareté,1.02)/1.5);
				$type='Arme';
				$emplacement='Arme';
				$nbimage=6;
				break;
				
			case 'Amulette':
				$type='Amulette';
				$emplacement='Bijou';
				$nbimage=10;
				break;
			case 'Anneau':
				$type='Anneau'.(($numéroanneau%2)+1).'';
				$emplacement='Bijou';
				$nbimage=11;
				$numéroanneau+=1;
				break;
				
				
				
			case 'Coiffe':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.5);
				$type='Coiffe';
				$emplacement='Armure';
				$nbimage=7;
				break;
			case 'Epaules':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.4);
				$type='Epaules';
				$emplacement='Armure';
				$nbimage=6;
				break;
			case 'Gants':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.4);
				$type='Gants';
				$emplacement='Armure';
				$nbimage=6;
				break;
			case 'Torse' :
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.7);
				$type='Torse';
				$emplacement='Armure';
				$nbimage=7;
				break;
			case 'Brassard':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.2);
				$type='Brassard';
				$emplacement='Armure';
				$nbimage=7;
				break;
			case 'Ceinture':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.2);
				$type='Ceinture';
				$emplacement='Armure';
				$nbimage=11;
				break;
			case 'Jambières':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.2);
				$type='Jambières';
				$emplacement='Armure';
				$nbimage=6;
				break;
			case 'Bottes':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/27,1),0.2);
				$type='Bottes';
				$emplacement='Armure';
				$nbimage=6;
				break;
				
				
				
			case 'Bouclier':
				$statistique_principale='Armure';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/19,1),0.5);
				$type='Offhand';
				$emplacement='Offhand';
				$nbimage=8;
				break;
			case 'Talisman démoniaque':
				$statistique_principale='Dégâts des sorts';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/10),1);
				$type='Offhand';
				$emplacement='Offhand';
				$nbimage=5;
				break;
			case 'Ciboire':
				$statistique_principale='Dégâts des sorts';
				$val=max(round(pow($niveau,1.13)*pow($rareté,1.02)/10),1);
				$type='Offhand';
				$emplacement='Offhand';
				$nbimage=5;
				break;
		}
		
		
		
		switch($équipement){
			case 'Massue':
				$nbimage=5;
				break;
			case 'Epée':
				$nbimage=4;
				break;
			case 'Lance':
				$nbimage=3;
				break;
			case 'Fléau':
				$nbimage=4;
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
		
		
		$image=''.$emplacement.'/'.$équipement.'/'.$couleur.'/'.rand(1,$nbimage).'.png';
		
			
		if($rareté==1){
			$nom=$équipement.' de mauvaise facture';
		}
		
		if($rareté==2){
			if(in_array($équipement,['Coiffe','Epaules','Ceinture','Amulette']) or ($type=='Arme' and $équipement!='Fléau')){
				$nom=$équipement.' normale';
			}else if(in_array($équipement,['Jambières','Bottes'])){
				$nom=$équipement.' normales';
			}else{
				$nom=$équipement.' normal';
			}
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
				if(in_array($équipement,['Jambières','Bottes'])){
				$nom=$équipement.' magiques';
				}else{
					$nom=$équipement.' magique';
				}
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
				if(in_array($équipement,['Jambières','Bottes'])){
				$nom=$équipement.' rares';
				}else{
					$nom=$équipement.' rare';
				}
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
				if(in_array($équipement,['Jambières','Bottes'])){
				$nom=$équipement.' légendaires';
				}else{
					$nom=$équipement.' légendaire';
				}
			}			
		}
		
		for($c=1;$c<=4;$c++){
			if(${'propriété_magique'.$c}=='Vitalité'){
				${'valeur'.$c}=round(${'valeur'.$c}/5);
			}else if(${'propriété_magique'.$c}=='Canon de lumière'){
				${'valeur'.$c}=floor(${'valeur'.$c}/15);
			}else if(${'propriété_magique'.$c}=='Critique'){
				${'valeur'.$c}=floor(${'valeur'.$c}/10);
			}else if(${'propriété_magique'.$c}=='Mana'){
				${'valeur'.$c}=round(${'valeur'.$c}/3);
			}
		}
		
		
		
		
		
		
		${'objet'.$témoin}=array(
			'statistique_principale'=>$statistique_principale,
			'val'=>$val,
			'val2'=>$val2,
			'propriété_magique1'=>$propriété_magique1,
			'valeur1'=>$valeur1,
			'propriété_magique2'=>$propriété_magique2,
			'valeur2'=>$valeur2,
			'propriété_magique3'=>$propriété_magique3,
			'valeur3'=>$valeur3,
			'propriété_magique4'=>$propriété_magique4,
			'valeur4'=>$valeur4,
			'nom'=>$nom,
			'image'=>$image,
			'couleur'=>$couleur,
			'rareté'=>$rareté,
			'type'=>$type,
			'emplacement'=>$emplacement,
			'niveau'=>$niveau,
			'équipement'=>$équipement,
			'variable'=>'objet'.$témoin
		);

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
	'Jambières' =>null,
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
		if (!isset(${'inventaire'.$j}[''.${'objet'.$i}['type'].''])){
			${'inventaire'.$j}[''.${'objet'.$i}['type'].'']=''.${'objet'.$i}['variable'].'';
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
			'Jambières' =>null,
			'Bottes' =>null,
			'Amulette' =>null,
			'Anneau1' =>null,
			'Anneau2' =>null,
			'Arme' =>null,
			'Offhand' =>null,
		);
		${'inventaire'.$placement}[''.${'objet'.$i}['type'].'']=''.${'objet'.$i}['variable'].'';
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
	$Equipement7='Jambières';
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


	
			<li class="d3-item item-slot-id-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['type'];?> rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?>"> <!-- todo: two-handed weapon tag -->
				<a class="item-slot-container">
					<div class="tooltip-hover" data-tooltip-href="//www.diablofans.com/items/5847-rathmas-skull-helm?build=49508" data-item-id="5847"></div>
					<span class="item-container"><span class="item-effect"></span></span>
					<span class="image"><img src="../images/items/<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['image'];?>"></span>
					<div class="touch-tip">

						<div class="diablo-fans-tooltip item-tooltip">
							<div class="db-tooltip">
								<ul class="db-summary">
									<li class="db-title rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?> db-header">
										<span><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['nom'];?></span>
									</li>
								</ul>
								<div class="db-image rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?>">
									<img src="../images/items/<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['image'];?>">
								</div>
								<div class="db-description" style="width : 100%;">
									<small class="rarity-<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté'];?>"><?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['équipement'];?> <span class="niveauObj"> Niveau : <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['niveau'];?></span></small>
									<ul class="db-summary">
										<li class="primary-stat">
											<?php 
											if (isset(${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale'])){
												if (${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale']=='Armure' or ${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale']=='Dégâts des sorts'){
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
																	?><span class="value">+<?php echo max(0,${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur2']-1);?></span>-<span class="value"><?php echo ceil(${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur2']*1.25);?></span> <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique2'];
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
																		?><span class="value">+<?php echo max(0,${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur3']-1);?></span>-<span class="value"><?php echo ceil(${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur3']*1.25);?></span> <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique3'];
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
																		?><span class="value">+<?php echo max(0,${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur4']-1);?></span>-<span class="value"><?php echo ceil(${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur4']*1.25);?></span> <?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4'];
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
									<form method="post" action="ajouter_objet.php" target=_blank>
										<input type="hidden" name="statistique_principale" value="<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['statistique_principale']; ?>" >
										<input type="hidden" name="val" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['val']; ?> >
										<input type="hidden" name="val2" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['val2']; ?> >
										<input type="hidden" name="propriété_magique1" value="<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique1']; ?>" >
										<input type="hidden" name="propriété_magique2" value="<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique2']; ?>" >
										<input type="hidden" name="propriété_magique3" value="<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique3']; ?>" >
										<input type="hidden" name="propriété_magique4" value="<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['propriété_magique4']; ?>" >
										<input type="hidden" name="valeur1" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur1']; ?> >
										<input type="hidden" name="valeur2" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur2']; ?> >
										<input type="hidden" name="valeur3" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur3']; ?> >
										<input type="hidden" name="valeur4" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['valeur4']; ?> >
										
										<input type="hidden" name="nom" value="<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['nom']; ?>" >
										<input type="hidden" name="image" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['image']; ?> >
										<input type="hidden" name="couleur" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['couleur']; ?> >
										<input type="hidden" name="rareté" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['rareté']; ?> >
										<input type="hidden" name="type" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['type']; ?> >
										<input type="hidden" name="emplacement" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['emplacement']; ?> >
										<input type="hidden" name="niveau" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['niveau']; ?> >
										<input type="hidden" name="équipement" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['équipement']; ?> >
										<input type="hidden" name="variable" value=<?php echo ${''.${'inventaire'.$l}[''.$actuel.''].''}['variable']; ?> >
										
										
										<input class="button button1" type="submit" value="Enregistrer l'objet" />
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

<?php

}

?>

	</body>
	
</html>	