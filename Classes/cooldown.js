

	function loadCD(id,idCompetence,idImage,personnage) {

		var xhr = new XMLHttpRequest();
	  

	
	
		// On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
		xhr.open('GET', "CD.php?id=" + idCompetence +"&personnage="+personnage, true);


	  
	  
		xhr.onreadystatechange = function() { // On gère ici une requête asynchrone	
		
			if (xhr.readyState == 4) { // Si les fichiers sont chargés sans erreur
				var stats = JSON.parse(xhr.responseText);
					if (stats.Autorisation==true){
					if(stats.CD==0 && stats.PA_Actuel-stats.PA>=0 && (!document.getElementById(stats.Ressource+''+personnage) || parseInt(document.getElementById(stats.Ressource+''+personnage).innerText, 10)-stats.CoutRessource>=0) && personnage!='Manipulateur de Sang'){
						if(stats.TempsRechargement>0 && stats.Durée>0) {
							document.getElementById(id).classList.remove('nocooldown');
							var newSpan = document.createElement('span');
							newSpan.classList.add('cddurée');
							newSpan.innerHTML = stats.Durée;
							document.getElementById(id).appendChild(newSpan);
							
							var newSpan2 = document.createElement('span');
							newSpan2.classList.add('cdrechargement');
							newSpan2.innerHTML = stats.TempsRechargement;
							document.getElementById(id).appendChild(newSpan2);
							
							document.getElementById(idImage).style.opacity='0.2';
						}else if(stats.Durée>0){
							document.getElementById(id).innerHTML = stats.Durée; // Et on affiche !
							document.getElementById(id).classList.remove('nocooldown');
							document.getElementById(id).classList.add('durée');
							document.getElementById(idImage).style.opacity='0.2';
							
						}else if(stats.TempsRechargement>0){
							document.getElementById(id).innerHTML = stats.TempsRechargement; // Et on affiche !
							document.getElementById(id).classList.remove('nocooldown');
							document.getElementById(id).classList.add('rechargement');
							document.getElementById(idImage).style.opacity='0.2';
						}
						
						if(stats.Bonus){
							var div = ''+stats.Bonus+''+personnage;
							document.getElementById(div).innerHTML= parseInt(document.getElementById(div).innerText, 10)+stats.ValeurBonus;
						}
						if(stats.PA){
							var divPA = 'PA'+personnage;
							document.getElementById(divPA).innerHTML= parseInt(document.getElementById(divPA).innerText, 10)-stats.PA;
						}
						if(stats.Ressource){
							var divRessource = stats.Ressource+''+personnage;
							document.getElementById(divRessource).innerHTML= parseInt(document.getElementById(divRessource).innerText, 10)-stats.CoutRessource;
							// Cas du Démoniste : Si c'est le Démoniste && que ce n'est pas la compétence de réduction de mana && que la compétence de réduction de mana est active
							if(personnage=='Démoniste' && idCompetence!=93 && document.getElementById("Démoniste93").getElementsByClassName("cddurée")[0]){
								// On vérifie l'existence de la durée du sort. Sinon ça veut dire qu'il n'est plus actif.
								 if(document.getElementById("Démoniste93").getElementsByClassName("cddurée")[0]){
									 document.getElementById(divRessource).innerHTML= parseInt(document.getElementById(divRessource).innerText, 10)+Math.round(stats.CoutRessource*0.25);
								 }	 
							}
						}
						
						
						
																						// Cas du Manipulateur de Sang
					}else if(stats.CD==0 && stats.PA_Actuel-stats.PA>=0 && personnage=='Manipulateur de Sang' && parseInt(document.getElementById('PDV'+personnage).innerText, 10)-stats.CoutRessource>=0){
						if(stats.TempsRechargement>0 && stats.Durée>0) {
							document.getElementById(id).classList.remove('nocooldown');
							var newSpan = document.createElement('span');
							newSpan.classList.add('cddurée');
							newSpan.innerHTML = stats.Durée;
							document.getElementById(id).appendChild(newSpan);
							
							var newSpan2 = document.createElement('span');
							newSpan2.classList.add('cdrechargement');
							newSpan2.innerHTML = stats.TempsRechargement;
							document.getElementById(id).appendChild(newSpan2);
							
							document.getElementById(idImage).style.opacity='0.2';
						}else if(stats.Durée>0){
							document.getElementById(id).innerHTML = stats.Durée; // Et on affiche !
							document.getElementById(id).classList.remove('nocooldown');
							document.getElementById(id).classList.add('durée');
							document.getElementById(idImage).style.opacity='0.2';
							
						}else if(stats.TempsRechargement>0){
							document.getElementById(id).innerHTML = stats.TempsRechargement; // Et on affiche !
							document.getElementById(id).classList.remove('nocooldown');
							document.getElementById(id).classList.add('rechargement');
							document.getElementById(idImage).style.opacity='0.2';
						}
						
						if(stats.Bonus){
							var div = ''+stats.Bonus+''+personnage;
							document.getElementById(div).innerHTML= parseInt(document.getElementById(div).innerText, 10)+stats.ValeurBonus;
						}
						if(stats.PA){
							var divPA = 'PA'+personnage;
							document.getElementById(divPA).innerHTML= parseInt(document.getElementById(divPA).innerText, 10)-stats.PA;
						}
						if(stats.Ressource){
							var divRessource = stats.Ressource+''+personnage;
							if(parseInt(document.getElementById(divRessource).innerText, 10)-stats.CoutRessource>=0){
								document.getElementById(divRessource).innerHTML = parseInt(document.getElementById(divRessource).innerText, 10)-stats.CoutRessource;
							}else if(parseInt(document.getElementById(stats.Ressource+''+personnage).innerText, 10)-stats.CoutRessource<0){
								document.getElementById("PDV"+personnage).innerHTML = parseInt(document.getElementById("PDV"+personnage).innerText, 10) + (parseInt(document.getElementById(divRessource).innerText, 10)-stats.CoutRessource);
								document.getElementById(divRessource).innerHTML=0;
							}
						}
					}	
				
				
				
				
					// Gestion des Pa disponibles, de la resource et des PV si c'est le manipulateur de sang, et des ressource dans le reste des cas.
					else if(stats.PA_Actuel-stats.PA<0){
						var message = "Le "+personnage+" n'a pas assez de <span class ='PA'>PA</span> pour lancer <span class ='competence'>"+stats.Compétence+"</span>.";
						afficher_message(idImage,message);
					}
					else if(parseInt(document.getElementById(stats.Ressource+''+personnage).innerText, 10)-stats.CoutRessource<0 && personnage != 'Manipulateur de Sang'){
						var message = "Le "+personnage+" n'a pas assez de <span class ='"+stats.Ressource+"'>"+stats.Ressource+"</span> pour lancer <span class ='competence'>"+stats.Compétence+"</span>.";
						afficher_message(idImage,message);
					}
					else if(parseInt(document.getElementById('PDV'+personnage).innerText, 10)-stats.CoutRessource<0){
						var message = "Le "+personnage+" n'a pas assez de <span class ='vie'>PDV</span> pour lancer <span class ='competence'>"+stats.Compétence+"</span>.";
						afficher_message(idImage,message);
					}
				}else{
					var message = "Vous n'avez pas les droits pour gérer les CD.";
					afficher_message(idImage,message);
				}
			}
		}
		xhr.send(null); // La requête est prête, on envoie tout !

	}





function afficher_message(elem, message){
	
		var info = document.createElement('div');
		info.classList.add('info_incomplete');
		info.id='info';
		var sp2 = document.getElementById(elem).parentNode.parentNode;
	if(!document.getElementById('info')){
		
		
		insertAfter(info, sp2);
		info.innerHTML=message;
		window.setTimeout(joli_apparition,100,document.getElementById('info'),message);

		window.setTimeout(supprimer_element,5000,document.getElementById('info'));
	}else{
		supprimer_element(document.getElementById('info'));
	}
}

function insertAfter(newNode, referenceNode) {
    referenceNode.parentNode.insertBefore(newNode, referenceNode.nextSibling);
}


function supprimer_element(elt){
	elt.parentNode.removeChild(elt);
} 

function joli_apparition(elt){
	elt.classList.remove('info_incomplete');
	elt.classList.add('info');
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
