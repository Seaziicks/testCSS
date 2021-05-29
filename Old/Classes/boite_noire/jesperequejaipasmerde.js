

	function loadCD(id,idCompetence,idImage) {

	  var xhr = new XMLHttpRequest();

	  

		
	  // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
	  xhr.open('GET', "CD.php?id=" + idCompetence , true);

	  
	  
			
			xhr.onreadystatechange = function() { // On gère ici une requête asynchrone
			
				if (xhr.readyState == 4) { // Si les fichiers sont chargés sans erreur
				
					var stats = JSON.parse(xhr.responseText);
					if(stats.TempsRechargement) {
						
						document.getElementById(id).classList.remove('nocooldown');
						var newSpan = document.createElement('span');
						newSpan.innerHTML = stats.TempsRechargement;
						document.getElementById(id).appendChild(newSpan);
						
						var newSpan2 = document.createElement('span');
						newSpan2.innerHTML = stats.Durée;
						document.getElementById(id).appendChild(newSpan2);
					
					}
				}
			}
		xhr.send(null); // La requête est prête, on envoie tout !
		

	}