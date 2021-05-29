

	function loadCD(id,idCompetence,idImage) {

	  var xhr = new XMLHttpRequest();
	  var xhr2 = new XMLHttpRequest();

	  

	
	  // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
	  xhr.open('GET', "CD.php?id=" + idCompetence , true);
	  xhr2.open('GET', "CD2.php?id=" + idCompetence , true);

	  
	  
		xhr2.onreadystatechange = function() { // On gère ici une requête asynchrone
			xhr.onreadystatechange = function() { // On gère ici une requête asynchrone	
				if (xhr2.readyState == 4 && xhr.readyState == 4) { // Si les fichiers sont chargés sans erreur
					if(xhr.responseText>0 && xhr2.responseText>0) {
						alert("Ok");
						document.getElementById(id).classList.remove('nocooldown');
						var newSpan = document.createElement('span');
						newSpan.classList.add('cddurée');
						newSpan.innerHTML = xhr2.responseText;
						document.getElementById(id).appendChild(newSpan);
						
						var newSpan2 = document.createElement('span');
						newSpan2.classList.add('cdrechargement');
						newSpan2.innerHTML = xhr.responseText;
						document.getElementById(id).appendChild(newSpan2);
						
						document.getElementById(idImage).style.opacity='0.2';
					}else if(xhr2.responseText>0){
						document.getElementById(id).innerHTML = xhr2.responseText; // Et on affiche !
						document.getElementById(id).classList.remove('nocooldown');
						document.getElementById(id).classList.add('durée');
						document.getElementById(idImage).style.opacity='0.2';
						
					}else if(xhr.responseText>0){
						document.getElementById(id).innerHTML = xhr.responseText; // Et on affiche !
						document.getElementById(id).classList.remove('nocooldown');
						document.getElementById(id).classList.add('rechargement');
						document.getElementById(idImage).style.opacity='0.2';
					}
				}
			}
		}
		xhr.send(null); // La requête est prête, on envoie tout !
		xhr2.send(null); // La requête est prête, on envoie tout !

	}


















	
/*	
function loadCD(id,idCompetence,idImage) {

  var xhr = new XMLHttpRequest();
  var xhr2 = new XMLHttpRequest();


  // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
  xhr.open('GET', "CD.php?id=" + idCompetence , true);
  xhr2.open('GET', "CD2.php?id=" + idCompetence , true);


	xhr2.onreadystatechange = function() { // On gère ici une requête asynchrone
  
  
		if (xhr2.readyState == 4) { // Si le fichier est chargé sans erreur
			if(xhr2.responseText>0){
				document.getElementById(id).innerHTML = xhr2.responseText; // Et on affiche !
				document.getElementById(id).classList.remove('nocooldown');
				document.getElementById(id).classList.add('durée');
				document.getElementById(idImage).style.opacity='0.2';
			}else{
				xhr.onreadystatechange = function() { // On gère ici une requête asynchrone

					if (xhr.readyState == 4) { // Si le fichier est chargé sans erreur
						if(xhr.responseText>0){
							document.getElementById(id).innerHTML = xhr.responseText; // Et on affiche !
							document.getElementById(id).classList.remove('nocooldown');
							document.getElementById(id).classList.add('rechargement');
							document.getElementById(idImage).style.opacity='0.2';
						}
					}
				}
			  xhr.send(null); // La requête est prête, on envoie tout !
			}
		}
	}
	xhr2.send(null);
}

*/
