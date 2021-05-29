<html>
<head>


<style>

input[type="radio"]:checked+label img {
  filter: saturate(250%);
} 
input[type="radio"] {
     transform: scale(0, 0);
	 
}
form img{
	width : 11%;
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
}

.personnages{
	width:62.7%;
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
</style>


</head>

<body>




<div class="limite">

	<form method="post" action="generer_itembis.php"TARGET=_BLANK>
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




<?php
/*
if(isset($_POST['radio-choice']))
              echo $_POST['radio-choice'].'<br>';
 
if(!empty($_POST['Nombre_Gris']))
              echo "Nombre d'objets de mauvaise facture demandés : ".$_POST['Nombre_Gris'].'<br>';

if(isset($_POST['Nombre_Blanc']))
              echo "Nombre d'objets normaux demandés : ".$_POST['Nombre_Blanc'].'<br>';
if(isset($_POST['Nombre_Bleu']))
              echo "Nombre d'objets magiques demandés : ".$_POST['Nombre_Bleu'].'<br>';
if(isset($_POST['Nombre_Jaune']))
              echo "Nombre d'objets rares demandés : ".$_POST['Nombre_Jaune'].'<br>';
if(isset($_POST['Nombre_Orange']))
              echo "Nombre d'objets légendaires demandés : ".$_POST['Nombre_Orange'].'<br>';
*/

?>


</body>

</html>