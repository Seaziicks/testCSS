<?php 
?>

         <header class="header">
                    <a href="#" class="header__icon" id="header__icon"></a>
                    <a href="../../index.php" class="header__logo">Accueil</a>
					<span><?php echo $personnage;?></span>
                    <nav class="menu" >
						<div id="menu_personnages" class="menu_personnages_cache" onclick="cacher_afficher_avec_class('menu_personnages','menu_personnages_cache','menu_personnages')">Personnages
                        <a href="magmaticien.php">Magmaticien</a>
                        <a href="franklin.php">Franklin</a>
                        <a href="centaure.php">Centaure</a>
                        <a href="assassin.php">Assassin</a>
						</div>
						<a href="../Hum.php" style="text-align : left;">Générer items</a>
						<?php if (isset($id_groupe) && $id_groupe == 0) { ?>
						<div id="menu_administrateur" class="menu_personnages_cache" onclick="cacher_afficher_avec_class('menu_administrateur','menu_personnages_cache','menu_personnages')">Menu Administrateur
                        <a href="magmaticien.php">Gérer items</a>
                        <a href="franklin.php">Gérer stats</a>
                        <a href="centaure.php">Gérer compétences</a>
						</div>
						<?php }else if(isset($id_groupe)){echo $id_groupe;} ?>
                    </nav>
                </header>

                