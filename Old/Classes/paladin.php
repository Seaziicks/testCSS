<?phpsession_start();?>	<html>
<head>		<link rel="stylesheet" href="equipement.css" type="text/css" media="screen"/>
  		<link rel="stylesheet" href="css.css" type="text/css" media="screen"/>				<link rel="stylesheet" href="Paladin/css.css" type="text/css" media="screen"/>
		<link rel="stylesheet" href="../Police/Luminari/style.css">				<script type="text/javascript" src="inlinemod.js"></script>				<script type="text/javascript" src="inlinemod2.js"></script>		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>		<script>		$(document).ready(function(){			$("#competence").click(function(){				$(".nonactivé").removeClass("nonactivé");			});		});</script>
</head>
<body>
<?php include("menutest.php"); ?>
<main class="centrer">
<?php 
$personnage='Paladin';include("statistiques.php");
include("implemente1.php");
?>
</main><div class="footer"><div class="resistant"><?php include("barre_membre.php");?></div> <?php include('personnage.php');?> </div>
</body>
</html>