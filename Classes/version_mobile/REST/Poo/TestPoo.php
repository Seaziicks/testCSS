<?php
// On enregistre notre autoload.
function chargerClasse($classname)
{
    if (is_file('Poo/'.$classname.'.php'))
        require 'Poo/'.$classname.'.php';
    elseif (is_file('Poo/Manager/'.$classname.'.php'))
        require 'Poo/Manager/'.$classname.'.php';
    elseif (is_file('Poo/Classes/'.$classname.'.php'))
        require 'Poo/Classes/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');

session_start(); // On appelle session_start() APRÈS avoir enregistré l'autoload.


include('BDD.php');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$manager = new PersonnageManager($bdd);

 $perso = $manager->get(6);


?>
<html>
    <head>
        <link rel="stylesheet" href="../../equipement.css" type="text/css" media="screen"/>

        <link rel="stylesheet" href="../../../css.css" type="text/css" media="screen"/>

        <link rel="stylesheet" href="../../../../Demoniste/css.css" type="text/css" media="screen"/>
    </head>
<body>

<table>

	<th colspan="2">
		<b><?php echo $perso->_Libellé ?> </b>
	</th>
	
	<th >
		Niveau : <b ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Niveau', 'nombre','personnage')"><?php echo $perso->_Niveau ?> </b>
	</th>
	
	<th >
		Points de vie : <b ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'PDV_Actuel', 'nombre','personnage')"><?php echo $perso->_PDV_Actuel ?> </b> / <b><?php echo ($perso->_Vitalité+$perso->_Bonus_Vitalité)*2 ?> </b>
	</th>
	
	<tr> 
		<td> <span class="force">Force</span> </td> 
		<td> <span class="force" ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Force', 'nombre','personnage')"><?php echo $perso->_Force ?> </span>+ <span class="force"><?php echo $perso->_Bonus_Force?></span> (<span class="force"><?php echo $perso->_Bonus_Force+$perso->_Force?></span>)</td> 
		<td>  </td> 
		<td> <span class="vie">Vitalité</span> </td> 
		<td><span class="vie"  ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Vitalité', 'nombre','personnage')"><?php echo $perso->_Vitalité ?> </span>+ <span class="vie"><?php echo $perso->_Bonus_Vitalité?></span> (<span class="vie"><?php echo $perso->_Bonus_Vitalité+$perso->_Vitalité?></span>)</td> 
		<td rowspan="5" ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Inventaire', 'texte-multi','personnage')"><span class="inventaire"> <?php echo $perso->_Inventaire ?> </span></td> 
	</tr>
	
	<tr> <td><span class="intelligence"> Intelligence </span></td> 
		<td><span class="intelligence" ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Intelligence', 'nombre','personnage')"><?php echo $perso->_Intelligence ?> </span>+ <span class="intelligence"><?php echo $perso->_Bonus_Intelligence?></span> (<span class="intelligence"><?php echo $perso->_Bonus_Intelligence+$perso->_Intelligence?></span>)</td>
		<?php if($perso->_Libellé=='Magmaticien'){$pointsCompétenceUtilisés--; /*Car j'ai "Jet de Lave" et "Canalisation" en sort de base.*/}?>
		<td> Points de compétence : <span class="<?php if(($perso->_Niveau+floor(($perso->_Niveau)/6))-$pointsCompétenceUtilisés>0){echo "pointsdispo";}elseif(($perso->_Niveau+floor(($perso->_Niveau)/6))-$pointsCompétenceUtilisés<0){echo "red";}?>"><?php echo ($perso->_Niveau+floor(($perso->_Niveau)/6))-$pointsCompétenceUtilisés ?>  </span></td> 
		<td> <span class="<?= $perso->_Type_Ressource;?>"><?php echo $perso->_Type_Ressource;?> </span></td> 
		<td><?php if (!empty($perso->_Type_Ressource)){?><span class="<?= $perso->_Type_Ressource;?>" ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Ressource', 'nombre','personnage')"> <?php echo $perso->_Ressource ?> </span>+ <span class="<?= $perso->_Type_Ressource;?>"><?php echo $perso->_Bonus_Ressource?></span> (<span class="<?= $perso->_Type_Ressource;?>"><?php echo $perso->_Bonus_Ressource+$perso->_Ressource?></span>)<?php } ?></td> 
	</tr>
	
	<tr> <td><span class="agilité"> Agilité </span></td> 
		<td><span class="agilité" ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Agilité', 'nombre','personnage')"> <?php echo $perso->_Agilité ?></span> + <span class="agilité"><?php echo $perso->_Bonus_Agilité?></span> (<span class="agilité"><?php echo $perso->_Bonus_Agilité+$perso->_Agilité?></span>)</td> 
		<td> <!--   test ... <!--?php echo $testcompetence['merde']; if(empty($testcompetence)){echo "raté!".$nbpointstestretourn;} ?-->   </td> 
		<td> <span class="réussite">Réussite </span></td> 
		<td><span class="réussite"><?php echo $perso->_Bonus_Réussite+$perso->_Réussite?></span> (<span class="réussite" ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Réussite', 'nombre','personnage')"><?php echo $perso->_Réussite ?> </span> + <span class="réussite"><?php echo $perso->_Bonus_Réussite?></span>)</td> 
	</tr>
	
	<tr> <td> - </td> <td> - </td> <td> </td> <td> - </td> <td> - </td> </tr>
	<tr> <td> Charisme </td> <td> Marchandage </td> <td>  </td> <td> Intimidation </td> <td> Chance </td> 
	</tr>
	
	<tr> 
		<td ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Charisme', 'nombre','personnage')"> <?php echo $perso->_Charisme?> </td> 
		<td ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Marchandage', 'nombre','personnage')"> <?php echo $perso->_Marchandage ?> </td> 
		<td>  </td> 
		<td ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Intimidation', 'nombre','personnage')"> <?php echo $perso->_Intimidation ?> </td> 
		<td ondblclick="inlineMod(<?php echo $perso->_Id_Personnage ?>, this, 'Chance', 'nombre','personnage')"> <?php echo $perso->_Chance ?> </td> 
	</tr>

</table>

</body>
</html>