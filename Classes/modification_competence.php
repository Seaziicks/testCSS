<?php 
header('X-XSS-Protection:0');
session_start();





	

include("BDD.php");


if(isset($_SESSION['pseudo'])){
		// Recherche du rang de l'utilisateur pour savoir si la demande en cours doit être accomplie.

		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		$data = $recherche->fetch(); //On les mets sous forme string

$id_groupe= $data['id_groupe'];}
else{$id_groupe=null;}
include('test2.php');
// echo '<script>alert(\''.$_POST['newCalcul4a'].'\');</script>';
if(!isset($_POST['Id_Competence'])){$_POST['Id_Competence']=0;}

$personnage = 'Magmaticien';
$competences = $bdd->query('SELECT * FROM competence WHERE Id_Competence = '.$_POST['Id_Competence'].' ');
$competence =$competences->fetch();
$competences->closeCursor();
include('statistiques.php');
	





//if (isset($_POST['modification'])){$req = $bdd->prepare('UPDATE test SET test = \''.$_POST['modification'].'\' WHERE id = 2');
									//$req->execute();}



//if(!isset($_POST['modification']) && isset($_POST['name'])){$bdd->exec('INSERT INTO test(id,test) VALUES(2,\''.$_POST['name'].'\')');}



?>
<html>



<head>
		<!--
		<link rel="stylesheet" href="css.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="test.css" type="text/css" media="screen"/>
		-->
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
		<link rel="stylesheet" href="modification_competence.css" type="text/css" media="screen"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="modification_competence.js"></script>
		<script> var arr = {"niveau" : <?php echo intval($competence['Niveau']);?>,"force" : <?php echo intval($bonusforce+$force);?>, "agilite" : <?php echo ($bonusagilité+$agilité); ?>, "intelligence": <?php echo ($bonusintelligence+$intelligence); ?>,"pa" : <?php echo intval($paactuel); ?>,"pm" :  <?php echo intval($pmactuel); ?>,"vitalite" : <?php echo intval($bonusvitalité+$vitalité); ?>,"ressource" : <?php echo intval($ressource+$bonusressource); ?>};</script>
</head>

<body>






<div class="limite">

	<form method="post" action="">
		<input type="radio" name="radio-choice" id="radio-choice-1" value="Paladin" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Paladin'){echo 'checked';}?>/>
		<label for="radio-choice-1"><img src="Paladin/Paladin.png" alt="" onclick="modification_personnage('Paladin',arr)"/></label>
		
		
		<input type="radio" name="radio-choice" id="radio-choice-2" value="Voleur" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Voleur'){echo 'checked';}?>/>
		<label for="radio-choice-2"><img src="Voleur/Voleur.png" alt="" onclick="modification_personnage('Voleur',arr)"></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-3" value="Démoniste" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Démoniste'){echo 'checked';}?>/>
		<label for="radio-choice-3"><img src="Demoniste/Demoniste.png" alt="" onclick="modification_personnage('Démoniste',arr)"/></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-4" value="Nain" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Nain'){echo 'checked';}?>/>
		<label for="radio-choice-4"><img src="Nain/Nain.png" alt="" onclick="modification_personnage('Nain',arr)"/></label>
		
		<input type="radio" name="radio-choice" id="radio-choice-5" value="Manipulateur de Sang" <?php if(isset($_POST['radio-choice']) and $_POST['radio-choice']=='Manipulateur de Sang'){echo 'checked';}?>/>
		<label for="radio-choice-5"><img src="Manipulateur_de_Sang/Manipulateur_de_Sang.png" alt="" onclick="modification_personnage('Manipulateur de Sang',arr)"/> </label>
		<div class="personnages">
			<div>Paladin</div><div>Voleur</div><div>Démoniste</div><div>Nain</div><div>Manipulateur de Sang</div>
		</div>
		<br><br><br>
		</form>

</div>


<script>//alert(document.getElementById('resultatBis1'));</script>





<div class="centre">

	<div class="original">
	<div>
		Original :	<br><br><br><span class="competence"><?php echo $competence['Libellé'];?></span><br><br><?php include('modification_competence_original.php');include('effets.php'); ?>
		<?php if (!empty($competence['Exemple'])){ ?><br><br></br><div class="exemple"><i><?php echo $competence['Exemple']; ?> </i></div><?php }?>
	</div>
	</div>

	<div class="modification">
	<div>
		Modification
		<br><br>
		<form action="modification_competence.php" method="post">
			Numéro de compétence : <input type="number" name="Id_Competence" value="<?php echo $competence['Id_Competence'];?>"style="width:40px" onload="this.select()" autofocus>
			<input type="submit" name="inscription" value="Compétence">
		</form>
		
		
		
		
		<br>
			<form action="modification_competence.php" method="post" id="statform"> 
			
				<input type="submit" name="Modification_competence" value="Modifier">
				
				
				<span onclick="cacher_afficher('caracteristiques_competence')" class="titre_section">Caractéristiques</span><br><br><br>
				<div id="caracteristiques_competence" class="normal transition">
					<br><br> <?php include('modification_competence_caracteristiques.php');?><br>
				</div>
				<br><br>
				<span onclick="cacher_afficher('description')" class="titre_section">Descriptions et Degats</span><br><br>
				<div id="description" class="normal transition">
					<br><br> <?php
					$competences = $bdd->query('SELECT * FROM competence WHERE Id_Competence = '.$_POST['Id_Competence'].' ');
					$competence =$competences->fetch();
					$competences->closeCursor(); 
					include('modification_competence_formulaire.php');?><br><br><br>
				</div>
				<br><br><span onclick="cacher_afficher('effets')" class="titre_section">Effets</span><br><br><br><br>
				<div id="effets" class="normal transition">
					<br><?php include('modification_competence_effets.php');?>
				</div>
					<TEXTAREA name="newFin" id="newFin" rows=3 cols=36 onblur="modification_description('Fin', this)"><?php echo $competence['Fin'];?></TEXTAREA>
				<br>
				<input id="Modification_demandee" name="Modification_demandee" type="hidden" value="ok">
				<input name="Id_Competence" value="<?php echo $competence['Id_Competence'];?>" type="hidden">
				<input type="submit" name="Modification_competence" value="Modifier">
			</form>
		
	</div>
	</div>

 
 

	<div class="résultat">
	<div>
		Modifié :	<br><br><br><span class="competence" id="Libelle"><?php echo $competence['Libellé'];?></span><br><br><?php include('modification_competence_apercu.php'); include('modification_competence_effets_appercu.php'); ?><br>
		<span id="Fin"><?php echo $competence['Fin'];?></span>
	</div>
	</div>
 </div>
 <?php 
 /*
	if(isset($_POST['nom'])){echo 'HTML entities : <br>'.htmlentities($_POST['nom']);}
	echo '<br><br><br>';
	if(isset($_POST['name'])){echo 'Normal : <br>'.$_POST['name'];}
	echo '<br><br><br>';
	if(isset($_POST['test'])){echo 'entity_decode : <br>'.html_entity_decode($_POST['test']);}	
// */
	?>


















<!--
<script>
		var x =document.getElementById('newCalcul'+1+'a');
		alert(document.getElementById('newCalcul'+1+'a'));
		alert(x.value+1);
		y=+x.value;
		alert(y+1);
		alert(+document.getElementById('newCalcul'+1+'a').value+1);
		alert(document.getElementById('newStatistique'+1).value);
		
		</script>
-->
</body>
</html>