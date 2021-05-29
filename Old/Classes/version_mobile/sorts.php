<?php 



	$competences = $bdd->query('SELECT * 
								FROM arbres 
								WHERE Personnage = \'' . $personnage . '\' 
								ORDER BY Spécialité, Rang DESC');									// Je récupère toutes les compétences de voleur, triées par Spécialité, puis Rang, puis Ordre.

	$i=1;																							// Je considère la première Spécialité en train de se faire. Initialisation de la boucle des Spécialité.
	$resultat = $competences->fetch();																// Je récupère la première valeur de ma table pré sélectionnée => Ma première Compétence.
	$specialite = $resultat['Spécialité'];															// Je récupère la Spécialité de la première Compétence.
	
	
	$nb_specialites= $bdd->query('SELECT count(DISTINCT Spécialité)
								FROM arbres 
								WHERE Personnage = \'' . $personnage . '\' 
								ORDER BY Spécialité');
	$nb_specialite=$nb_specialites->fetch();
	
if(!empty($resultat)){
	while ($i<= $nb_specialite[0])																					// Tant qu'il reste une spécialité à faire, je créé une table, dans un div.
	{
		?>

		<div class="aligner" > 
		<div class="titre" onclick="cacher_afficher('<?php echo $resultat['Spécialité']; ?>')"> <?php echo $resultat['Spécialité']; ?> </div>
		<div id ="<?php echo $resultat['Spécialité']; ?>" class="cache table_competence">
		<table >
		<td colspan=100 style="text-align : center">  </td>

		<?php
			while ($resultat['Spécialité'] ==  "$specialite")											// Tant que la compétence en cours est bien de la même spécialité que la précédente, je crée une nouvelle ligne.
			{	
				?>

				<tr>
				

				<?php

				for ($j=3;$j<=11;$j++) 																	// Tant que la compétence en cours est de même rang que la précédente, je l'implémente au tableau.
				{
					if (!is_null($resultat[$j]))
					{
						$fin = $bdd->query('SELECT * 
									FROM competence
									WHERE  Id_Competence = \'' . $resultat[$j] . '\'');					// Sélection de la compétence correspondante dans la table des Compétences.

						$competence = $fin->fetch();
			
						if($competence['Libellé']=='vide' )												// Si la compétence est une case de remplissage.
						{
							?><td class="cadre2"> </td><?php
						}
						else if($competence['Niveau']>0)																			// Sinon, créer la case de la compétence correspondante. 
						{
						$colspan=1;																		
						while ($resultat[$j]==$resultat[$j+1])											// Gestion du Colspan. Tant que la compétence dans la casee suivante est la même que celle de la case en cours. 
						{
								$colspan=$colspan+1;													// J'ajoute 1 au colspan, et je passe à la case suivante.
								$j=$j+1;
						}
						?>										<!-- Création de la cellule du tableau-->
						
							<td <?php if($colspan > 1){ echo "colspan=$colspan";} ?>  class="test <?php if($competence['Niveau']>0) {echo 'pulse';}?>" style="text-align : center" onclick="afficher_competence(<?php echo $competence['Id_Competence'];?>,'<?php echo $personnage;?>')"> 

							<div class="cadre ">

								<div <?php /* $dégradé=$competence['Niveau']*10; echo 'style="-webkit-mask: linear-gradient(to top,white '.$dégradé.'%, rgba(255,255,255,0.15) '.$dégradé.'%)"';*/ ?>><img  src="../<?php echo $competence['Image']; ?>"></div>

								
							</div>
							</td>
							<?php
						}
						$fin->closeCursor();
					}				
				}
				?>
				</tr>
				<?php
				$resultat = $competences->fetch();														// Je passe à la ligne de compétences suivante.
			}
			$specialite = $resultat['Spécialité'];														// J'actualise la nouvelle Spétialité, celle qui a fait sortir de la boucle.
			?>
		</table>
		</div>
		</div>
		<br>
		<br>
		<?php
		$i=$i+1;																						// J'incrémente le nombre de Spécialité faite de 1.
	}
}
$competences->closeCursor();
		?>

