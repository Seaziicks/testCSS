<?php 



	$competences = $bdd->query('SELECT * 
								FROM arbres 
								WHERE Personnage = \'' . $personnage . '\' 
								ORDER BY Spécialité, Rang DESC');									// Je récupère toutes les compétences de voleur, triées par Spécialité, puis Rang, puis Ordre.

	$i=1;																							// Je considère la première Spécialité en train de se faire. Initialisation de la boucle des Spécialité.
	$resultat = $competences->fetch();																// Je récupère la première valeur de ma table pré sélectionnée => Ma première Compétence.
	$specialite = $resultat['Spécialité'];															// Je récupère la Spécialité de la première Compétence.
if(!empty($resultat)){
	while ($i<= 3)																					// Tant qu'il reste une spécialité à faire, je créé une table, dans un div.
	{
		?>

		<div class="aligner"> 
		<table>
		<td colspan=100 style="text-align : center"> <div class="titre"> <?php echo $resultat['Spécialité']; ?> </div> </td>

		<?php
			while ($resultat['Spécialité'] ==  "$specialite")											// Tant que la compétence en cours est bien de la même spécialité que la précédente, je crée une nouvelle ligne.
			{	
				?>

				<tr>
				<td class="blanc"> <?php switch ($resultat['Rang']){ case "0" : echo "Débutant"; break;case '1' : echo 'Apprenti'; break;case '2' : echo "Confirmé"; break;case "3" : echo "Maître"; break;case "4" : echo "God Tier"; break;} ?> </td>

				<?php

				for ($j=3;$j<=11;$j++) 																	// Tant que la compétence en cours est de même rang que la précédente, je l'implémente au tableau.
				{
					if (!is_null($resultat[$j]))
					{
						$fin = $bdd->query('SELECT * 
									FROM competence
									WHERE  Id_Competence = \'' . $resultat[$j] . '\'');					// Sélection de la compétence correspondante dans la table des Compétences.

						$competence = $fin->fetch();
			
						if($competence['Libellé']=='vide')												// Si la compétence est une case de remplissage.
						{
							?><td class="cadre2"> </td><?php
						}
						else																			// Sinon, créer la case de la compétence correspondante. 
						{
						$colspan=1;																		
						while ($resultat[$j]==$resultat[$j+1])											// Gestion du Colspan. Tant que la compétence dans la casee suivante est la même que celle de la case en cours. 
						{
								$colspan=$colspan+1;													// J'ajoute 1 au colspan, et je passe à la case suivante.
								$j=$j+1;
						}
						?>										<!-- Création de la cellule du tableau-->
						
							<td <?php if($colspan > 1){ echo "colspan=$colspan";} ?> style="text-align : center" class="test"> 

							<div class="cadre">

								<img src="<?php echo $competence['Image']; ?>">

								<span>

								<span class="competence"><?php echo $competence['Libellé']; ?></span></br></br>

								<div class="entete"><i><?php echo $competence['Entete']; ?></i></div>
									<br> Niveau actuel de la compétence : <b ondblclick="inlineMod2(<?php echo $competence['Id_Competence'] ?>, this, 'Niveau', 'nombre','competence')"><?php echo $competence['Niveau'];?></b><br>
									<?php include('projet1.php');?>
									<?php if (!empty($competence['Exemple'])){ ?><br><br></br><div class="exemple"><i><?php echo $competence['Exemple']; ?> </i></div><?php }?>
									
								</span>
							</div>
							</td>
							<?php
						}
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
		<?php
		$i=$i+1;																						// J'incrémente le nombre de Spécialité faite de 1.
	}
}
		?>

