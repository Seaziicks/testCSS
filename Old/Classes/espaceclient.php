<?php
<head>
<link href="css.css" rel="stylesheet" type="text/css"/>

  <meta charset="UTF-8">		
  <title>Mon RP - Univers</title>
  <?php $titre='Espace Client'?>
  <link rel="stylesheet" href="../style.css" type="text/css" media="screen"/>


</head>

<body>
	
	
	<!-- Partie haute -->
<?php include("header.php"); ?>




<?php

	if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
	{
    ?> 
<div class="background"> 
Bonjour et bienvenu <b><?php echo $_SESSION['pseudo']; ?></b> dans ton espace membre ! </br></br>
Celui-ci est en cours de construction !
</div>

<?php 
	}
	else {

?>
<div class="background"> 
Oh ! Mais tu n'est pas connecté ! Je te conseil de retourner vers l'accueil, ou de te connecter, ou de t'inscrire !
</div>
<?php	
}
?>
</body>
</html>