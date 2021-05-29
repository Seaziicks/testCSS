<?php 

include("BDD.php");

$personnages = $bdd->query('SELECT * FROM personnage');
?>
<div>
	<nav id ="menu">
		<ul id="cool">
			<li> <a href="../index.php"> <strong>Accueil</strong></a>  </li>
<?php
while($personnage=$personnages->fetch())
{
	?>
		<li><a href="<?php switch ($personnage['Libellé']){ case "Voleur" : echo "voleur"; 
																			break;
															case 'Paladin' : echo 'paladin'; 
																			break;
															case 'Démoniste' : echo "demoniste"; 
																			break;																																		case 'Nain' : echo "nain";																			break;															case 'Manipulateur de Sang' : echo "manipulateur_de_sang";																			break;															case 'Magmaticien' : echo "magmaticien";																			break;																																																					} ?>.php"> <strong> <?php echo $personnage['Libellé'] ?> 
																	</strong></a> </li>
	<?php
}
?>
		</ul>
	</nav>
</div>


