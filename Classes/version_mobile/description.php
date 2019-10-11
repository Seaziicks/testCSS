<?php
$f=1;
$g=1;


?> 
<div class="description_competence">
<div id="nom_competence" class="competence" style="text-align:center;"></div><br>

<?php
for($g=1;$g<=5;$g++){
		
		
		
		
		
		
		
			
				
				
				
				
				
				?>
				
				<span id="Description<?php echo $g?>"></span>
				<span class="voir"><span class="">
				
				<span id="Resultat<?php echo $f?>"></span>
				<span id="Detail<?php echo $f?>"></span>
				<span id="Des<?php echo $f?>"></span> 
				
				
				
				</span></span>
						
						
					
				
				
				
				<?php
				$f++;
}
?> <span id="Description6"></span> <?php
$f=1;
for($g=1;$g<=3;$g++){	
				
				
				?>
				<br><br>
				<span id="Effet<?php echo $g?>" style="color : white;"></span>
				<span class="voir"><span class="">
				
				<span id="ResultatEffet<?php echo $f?>"></span> 
				<span id="DesEffet<?php echo $f?>"></span>
				<span id="DetailBis<?php echo $f?>"></span>		
				<span id="Effet<?php echo $f?>Bis"></span> 
				
				</span></span>
						
						
					
				
				
				
				<?php
				$f++;
}

//Avec la modification de "$stata" et "$statb" respectivement en "${'stat'.$f}" et "${'stat'.($f+1)}", il n'y a plus besoin de 'merde.php'. Mais je le laisse quand même(ou pas).
// En tout cas, vive la création de variable par concaténation de string et d'autres variables ! :D

?>
</div>