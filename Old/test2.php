<?php 






	

include("BDD.php");


if(!isset($_POST['Id_Compétence'])){$_POST['Id_Compétence']=0;}

$personnage = 'Paladin';
$competences = $bdd->query('SELECT * FROM competence WHERE Id_Competence = '.$_POST['Id_Compétence'].' ');
$competence =$competences->fetch();
include('statistiques.php');
include('statbis.php');
include('stat.php');




//if (isset($_POST['modification'])){$req = $bdd->prepare('UPDATE test SET test = \''.$_POST['modification'].'\' WHERE id = 2');
									//$req->execute();}



//if(!isset($_POST['modification']) && isset($_POST['name'])){$bdd->exec('INSERT INTO test(id,test) VALUES(2,\''.$_POST['name'].'\')');}



?>
<html>



<head>
		<link rel="stylesheet" href="test2.css" type="text/css" media="screen"/>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="modification_competence.js"></script>
		<script> var arr = {"niveau" : <?php echo 1?>,"force" : <?php echo intval($bonusforce+$force);?>, "agilite" : <?php echo ($bonusagilité+$agilité); ?>, "intelligence": <?php echo ($bonusintelligence+$intelligence); ?>,"pa" : <?php echo intval($paactuel); ?>,"pm" :  <?php echo intval($pmactuel); ?>,"vitalite" : <?php echo intval($bonusvitalité+$vitalité); ?>,"ressource" : <?php echo intval($ressource+$bonusressource); ?>};</script>
</head>

<body>

<div class="centrage">

	<div class="original">
	<div>
		Original :	<br><br><br><span class="competence"><?php echo $competence['Libellé'];?></span><br><br><?php include('future_projet1.php');include('effets.php'); ?>
	</div>
	</div>

	<div class="modification">
	<div>
		Modification
		<form action="test2.php" method="post" id="statform">
			Numéro de compétence : <input type="number" name="Id_Compétence" value="<?php echo $competence['Id_Competence'];?>"style="width:35px">
			<input type="submit" name="inscription" value="Modifier">
		</FORM>
		<form action="test2.php" method="post"> 
		 <br><br> <?php include('projet2.php');?>

		<br>
		<!--input type="submit" name="inscription" value="Modifier"-->
		 
		</FORM>
	</div>
	</div>

 
 

	<div class="résultat">
	<div>
		Modifié :	<br><br><br><span class="competence"><?php echo $competence['Libellé'];?></span><br><br><?php include('modification_competence.php');  ?>
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