<?php




include('BDD.php');



// SELECT o.*,te.*,ot.*,e.Puissance_effet FROM Personnage p, objets o, type_effet te, type_objet ot, inventorie i, effectue e 
// WHERE p.Libellé= 'Magmaticien'
// AND p.Id_Personnage= i.ID_Personnage 
// and i.ID_Objet = o.ID_Objet
// and o.ID_Type_Objet = ot.ID_Type_Objet
// and o.ID_Objet = e.ID_Objet
// and e.ID_Type_Effet = te.ID_Type_Effet


$Objets = $bdd->query('SELECT distinct o.*
FROM personnage p, objets o, type_effet te, type_objet ot, inventorie i, effectue e
WHERE p.Libellé= \''.$personnage.'\'
AND p.Id_Personnage= i.ID_Personnage 
and i.ID_Objet = o.ID_Objet
and o.ID_Type_Objet = ot.ID_Type_Objet
and o.ID_Objet = e.ID_Objet
and e.ID_Type_Effet = te.ID_Type_Effet
order by o.longueur DESC,o.largeur DESC') or die(print_r($bdd->errorInfo()));
// $objet=$Objets->fetchAll();
// print_r($objet);
$nblignes=6;
$nbcolonnes=6;
$nbcases=$nblignes*$nbcolonnes;

?>

<html xmlns="//www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href='//fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="inventaire/inventaire.css">

    </head>
<body>
<?php
$tableau=[[0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0]];
$objetsatraiter=[];

// $objet['Longueur'] $objet['Largeur']


$nbObjets=0;
while($objet=$Objets->fetch()){

	$objettraite=false;
	for($i=0;$i<$nblignes;$i++){
		for($j=0;$j<$nbcolonnes;$j++){
			if($tableau[$i][$j]==0 && $objettraite==false){

				if($objet['Longueur']+$i<$nblignes && $objet['Largeur']+$j < $nbcolonnes){
					for($k=$i;$k-$i<$objet['Longueur'];$k++)
						$tableau[$k][$j] = $objet['ID_Objet'];
					for($l=$j;$l-$j<$objet['Largeur'];$l++){
						$tableau[$i][$l] = $objet['ID_Objet'];
						for($k=$i;$k-$i<$objet['Longueur'];$k++)
							$tableau[$k][$l] = $objet['ID_Objet'];
					}
					$objettraite=true;
				}
			}
		}
	}
	$objetsatraiter[''.$objet['ID_Objet'].'']='test';
	$nbObjets++;
}


$Objets->closeCursor();

$Objets = $bdd->query('SELECT distinct o.*
FROM personnage p, objets o, type_effet te, type_objet ot, inventorie i, effectue e
WHERE p.Libellé= \''.$personnage.'\'
AND p.Id_Personnage= i.ID_Personnage 
and i.ID_Objet = o.ID_Objet
and o.ID_Type_Objet = ot.ID_Type_Objet
and o.ID_Objet = e.ID_Objet
and e.ID_Type_Effet = te.ID_Type_Effet
order by o.longueur DESC,o.largeur DESC') or die(print_r($bdd->errorInfo()));

?>

<div  id="sac_a_dos"><img src="../../images/Objets/JLwU1KoXyqQ.jpg" onclick="cacher_afficher_avec_class('inventaire','normal','cache')"></div>
<table id="inventaire" class="inventaire normal">

<?php


while(count($objetsatraiter)!=0){
	
	for($i=0;$i<$nblignes;$i++){
		?><tr><?php
		for($j=0;$j<$nbcolonnes;$j++){
			if($tableau[$i][$j]==0){

				?><td></td><?php
			}elseif(isset($objetsatraiter[''.$tableau[$i][$j].''])){

				
				?>
				
						<?php afficher_objet($tableau[$i][$j],$bdd);?>
				
				
					
				<?php

			unset($objetsatraiter[''.$tableau[$i][$j].'']);

			}
			
			
		}
		?></tr><?php
	}
	
	
	
	
}

?>
</table>
<?php

$Objets->closeCursor();	






/*

?>





<div  id="sac_a_dos"><img src="../../images/Objets/JLwU1KoXyqQ.jpg" onclick="cacher_afficher_avec_class('inventaire','normal','cache')"></div>
<table id="inventaire" class="inventaire">
	<tr>
		<td><img src="../../images/Objets/mysterious_potion_by_mireland_art_d86o05r-pre - Copie.jpg"></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>

</table>


<script type="text/javascript" src="statistiques.js"></script>
    </body>
</html>

<?php */ 

function afficher_equipement(){
	
	
	
	
	
}





function afficher_objet($id_Objet,$bdd){
	
	$Nombre_Effets = $bdd->query('SELECT COUNT(*) as NB
					FROM objets o, type_effet te, effectue e
					WHERE  o.ID_Objet = '.$id_Objet.'
					and o.ID_Objet = e.ID_Objet
					and e.ID_Type_Effet = te.ID_Type_Effet');
	$nb_effet=$Nombre_Effets->fetch();
	$Nombre_Effets->closeCursor();
	
	$Objetscourrant = $bdd->query('SELECT o.*,te.*,ot.Libellé_Type_Objet,e.Puissance_effet,i.Nb_exemplaire
					FROM objets o, type_effet te, type_objet ot, inventorie i, effectue e
					WHERE  o.ID_Objet = '.$id_Objet.'
					and i.ID_Objet = o.ID_Objet
					and o.ID_Type_Objet = ot.ID_Type_Objet
					and o.ID_Objet = e.ID_Objet
					and e.ID_Type_Effet = te.ID_Type_Effet
					order by o.longueur DESC,o.largeur DESC');
					$objetencourt=$Objetscourrant->fetch();
					$prix = $objetencourt['Prix'];
	?>
	<td colspan="<?= $objetencourt['Longueur']?>" rowspan="<?= $objetencourt['Largeur']?>" class="emplacement_objet">
		<div class="cadres">
			<div class="div_image_objet"> <img src="../<?= $objetencourt['Image']?>"> </div>
			<span class="attributs_objet" style="left : <?= $objetencourt['Longueur']*2.9?>em">
				<div class="<?= $objetencourt['Rareté_Objet']?> nom_objet"> <?= $objetencourt['Libellé']?></div>
				<div class="type_objet"><?= $objetencourt['Libellé_Type_Objet']?>
					<?php 
						liste_ingredients($id_Objet,$bdd);
					?>
					
				</div>
				<div class="information_objet">
					<div class="Description"> 
						<?= $objetencourt['Description']?> 
					</div>
					<div class="liste_effets"> Effets : 
						<ul >
							<?php
							if($nb_effet['NB']>1){
								// echo '<script> alert("'.$nb_effet['NB'].' caca");</script>';
								do{
									 ?><li><?php
									type_effet_objet($objetencourt['Libellé_Type_Effet'],$objetencourt['Puissance_effet']);
									 ?></li><?php
								}while($objetencourt=$Objetscourrant->fetch());
							}else{
								type_effet_objet($objetencourt['Libellé_Type_Effet'],$objetencourt['Puissance_effet']);
							} ?> 
						</ul>
					</div>
					
				</div>
				<div class="Cout_PO"> Coût en PO : <?= $prix?> <img class="Piece_Or" src="inventaire/PO.png"></div>
			</span>
		</div>
	</td>
	<?php
	$Objetscourrant->closeCursor();
}

function type_effet_objet($type_effet,$puissance_effet){
	switch($type_effet){
		case 'Soin' :
			echo 'Rend <span class="vie">'.$puissance_effet.' points de vie</span>.';
			break;
		case 'Degat' :
			echo 'Inflige <span class="red">'.$puissance_effet.' points de dégâts</span>.';
			break;
		case 'Boost_Degats_Magiques' :
			echo 'Les dégâts magiques augmentent de <span class="red">'.$puissance_effet.' points</span>.';
			break;
		case 'Boost_Degats_Physiques' :
			echo 'Les dégâts physiques augmentent de <span class="red">'.$puissance_effet.' points</span>.';
			break;
	}
}


function liste_ingredients($id_Objet,$bdd){
	$NBIngredients = $bdd->query('SELECT o.Libellé, c.nb_Ingredient,o.Image 
								from objets o, compose c 
								where c.ID_Objet='.$id_Objet.' 
								and c.Ingredient = o.ID_Objet
								order by o.ID_Type_Objet ');
	if($NBIngredients->rowCount()!=0){
		?>
			<div class="ingredients">Ingrédients 
				<div  class="liste_ingredients">
					<ul>
						<?php
							while($ingredient=$NBIngredients->fetch()){
								?>
									<li>
										<?php
											echo $ingredient['nb_Ingredient'].' '.$ingredient['Libellé'];
											if(!empty($ingredient['Image'])){
												?> <img src="../<?= $ingredient['Image']?>" ><?php
											}
										?>
									</li>
								<?php
							}
							$NBIngredients->closeCursor();
						?>
					</ul>
				</div>
			</div>
		<?php
	}
}

?>
































