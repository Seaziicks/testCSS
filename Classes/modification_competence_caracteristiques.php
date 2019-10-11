<?php 

?>

Libellé <br> <TEXTAREA style="text-align : center;"name="newLibelle" id="newLibelle" rows=1 cols=36 onblur="modification_description('Libelle', this)"><?php echo $competence['Libellé'];?></TEXTAREA><br>
Image <br> <TEXTAREA name="newImage" id="newImage" rows=3 cols=36 onblur="modification_description('Image', this)"><?php echo $competence['Image'];?></TEXTAREA><br>
Coût en PA <br> <input type="number" name="newCout_En_PA" id="newCout_En_PA" value="<?php echo $competence['Cout_En_PA'];?>" style="width:50px"><br>
Coût en Ressource <br> <input type="number" name="newCout_En_Ressource" id="newCout_En_Ressource" value="<?php echo $competence['Cout_En_Ressource'];?>" style="width:50px"><br>
Ressource <br> <TEXTAREA name="newRessource" style="text-align : center;" id="newRessource" rows=1 cols=15 onblur="modification_description('Ressource', this)"><?php echo $competence['Ressource'];?></TEXTAREA><br>
Entête <br> <TEXTAREA name="newEntete" id="newEntete" rows=3 cols=36 onblur="modification_description('Entete', this)"><?php echo $competence['Entete'];?></TEXTAREA><br>
Exemple <br> <TEXTAREA name="newExemple" id="newExemple" rows=3 cols=36 onblur="modification_description('Exemple', this)"><?php echo $competence['Exemple'];?></TEXTAREA><br>
Niveau Requis <br> <input type="number" name="newNiveau_Requis" id="newNiveau_Requis" value="<?php echo $competence['Niveau_Requis'];?>" style="width:50px"><br>
Temps de Rechargement <br> <input type="number" name="newTempsRechargement" id="newTempsRechargement" value="<?php echo $competence['TempsRechargement'];?>" style="width:50px"><br>
Durée <br> <input type="number" name="newDurée" id="newDurée" value="<?php echo $competence['Durée'];?>" style="width:50px"><br>
Bonus Temporaire <br> <TEXTAREA name="newBonus_Temporaire" id="newBonus_Temporaire" rows=3 cols=36 onblur="modification_description('Bonus_Temporaire', this)"><?php echo $competence['Bonus_Temporaire'];?></TEXTAREA><br>
Valeur Temporaire1 <br> <input type="number" name="newValeur_Temporaire1" id="newValeur_Temporaire1" value="<?php echo $competence['Valeur_Temporaire1'];?>" style="width:50px"><br>
Valeur Temporaire2 <br> <input type="number" name="newValeur_Temporaire2" id="newValeur_Temporaire2" value="<?php echo $competence['Valeur_Temporaire2'];?>" style="width:50px"><br>
Statistique Temporaire	 <br> <TEXTAREA name="newStatistique_Temporaire1" id="newStatistique_Temporaire1" rows=3 cols=36 onblur="modification_description('Statistique_Temporaire1', this)"><?php echo $competence['Statistique_Temporaire1'];?></TEXTAREA><br>	






<?php 
/*
				<span onclick="cacher_afficher('caracteristiques_competence')" class="titre_section">Caractéristiques</span><br><br><br><br>
				<div id="caracteristiques_competence" class="normal transition">
					<br><br> <?php include('modification_competence_caracteristiques.php');?><br><br><br>
				</div>
*/
?>









































