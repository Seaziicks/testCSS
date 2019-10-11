<?php
session_start();
?>

<html xmlns="//www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Magmaticien</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="menu.css">
		<link rel="stylesheet" type="text/css" href="magmaticien.css">
		<link rel="stylesheet" type="text/css" href="equipement.css">
		<link rel="stylesheet" type="text/css" href="inventaire/inventaire.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
		
		
		<link rel="icon" href="../Magmaticien/icone.jpg"/>
		
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
	<?php 
						
	include('../BDD.php');
	$personnage='Magmaticien';
	include('statistiques.php');


		// Recherche du rang de l'utilisateur pour savoir si la demande en cours doit être accomplie.
	if(isset($_SESSION['pseudo'])){
		$recherche = $bdd->query('SELECT * FROM membres WHERE pseudo="'.$_SESSION['pseudo'].'"') or die(print_r($bdd->errorInfo())); //On va chercher l'id pour vérifier si le memebre est un admin.

		$data = $recherche->fetch(); //On les mets sous forme string

		$id_groupe= $data['id_groupe']; //On prend l'id qui vient d'être attribué
	}
	?>
    <body>
        <div class="site-container">
            <div class="site-pusher">
                <?php include('menu.php');?>

                <div class="site-content">
                    <div class="container">
					
					
					
					
					
					
					
					
					
					
					
					
					
                        <?php 
						
						
						
						
						
						include('personnage.php');
						include('sorts.php');
						echo '<br><br>';
						include('description.php');
						echo '<br><br>';
						include("equipement.php");
						include('inventaire/inventaire.php');
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						?>
						<script type="text/javascript" src="statistiques.js"></script>
						<script type="text/javascript" src="inlinemod.js"></script>
						<script type="text/javascript" src="inlinemod2.js"></script>
						<script type="text/javascript" src="competence.js"></script>
						
						
						
						
						
						
						
						
						
						
                    </div>
                </div>

                <div class="site-cache" id="site-cache"></div>
            </div>
        </div>

        
        <script type="text/javascript" src="menu.js"></script>
		<div class="footer"></div>
    </body>
</html>
