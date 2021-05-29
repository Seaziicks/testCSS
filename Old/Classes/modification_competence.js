
function modification_calcul(objActuel,idObjetBis,typeCalcul,numero,stats){
					if(typeCalcul==1){
						var stat1;
						
						switch(document.getElementById('newStatistique'+numero).value){
							case 'intelligence':
								stat1=stats['intelligence'];
								break;
							case 'force':
								stat1=stats['force'];
								break;
							case 'agilite':
								stat1=stats['agilite'];
								break;
							case 'ressource':
								stat1=stats['ressource'];
								break;
							case 'niveau':
								stat1=stats['niveau'];
								break;
						}
						var a1 = +document.getElementById('newCalcul'+numero+'a').value;
						var b1 = +document.getElementById('newCalcul'+numero+'b').value;
						
	
						//document.getElementById('resultat'+numero).textContent=a1+stat1/b1
						
						document.getElementById('resultat'+numero).textContent = Math.floor(a1+stat1/b1);
						
					}
			
					if(typeCalcul==2){
						var stat1;
						switch(document.getElementById('newStatistique'+numero).value){
							case 'intelligence':
								stat1=stats['intelligence'];
								break;
							case 'force':
								stat1=stats['force'];
								break;
							case 'agilite':
								stat1=stats['agilite'];
								break;
							case 'ressource':
								stat1=stats['ressource'];
								break;
							case 'niveau':
								stat1=stats['niveau'];
								break;
						}
						
						// alert((numero+1));
						// alert(document.getElementById('newStatistique'+(numero+1)));
						// alert(document.getElementById('newStatistique'+(numero+1)).value);
						
						switch(document.getElementById('newStatistique'+(numero+1)).value){
							case 'intelligence':
								stat2=stats['intelligence'];
								break;
							case 'force':
								stat2=stats['force'];
								break;
							case 'agilite':
								stat2=stats['agilite'];
								break;
							case 'ressource':
								stat2=stats['ressource'];
								break;
							case 'niveau':
								stat1=stats['niveau'];
								break;
						}
						var a1 = +document.getElementById('newCalcul'+numero+'a').value;
						var b1 = +document.getElementById('newCalcul'+numero+'b').value;
						var b2 = +document.getElementById('newCalcul'+(numero+1)+'b').value;
						
	
						//document.getElementById('resultat'+numero).textContent=a1+stat1/b1
						// 	(document.getElementById('resultat'+numero).textContent);
						document.getElementById('resultat'+numero).textContent = Math.floor(a1+stat1/b1+stat2/b2);
						// alert(Math.floor(a1+stat1/b1+stat2/b2));
					}
					if(idObjetBis!=null){
						if(isNaN(+objActuel.value)){
							document.getElementById(idObjetBis).innerHTML=objActuel.value;
						}else{
							document.getElementById(idObjetBis).innerHTML=+objActuel.value;
						}
					}
	
	}





//Mêmechose, mais pour les effets, car il faut rajouter 'Bis', et j'ai la flemme d'adapter le code. Donc je copie/colle la fonction, en mettant le 'Bis'.
function modification_calculBis(objActuel,idObjetBis,typeCalcul,numero,stats){
					if(typeCalcul==1){
						var stat1;
						
						switch(document.getElementById('newStatistiqueBis1').value){
							case 'intelligence':
								stat1=stats['intelligence'];
								break;
							case 'force':
								stat1=stats['force'];
								break;
							case 'agilite':
								stat1=stats['agilite'];
								break;
							case 'ressource':
								stat1=stats['ressource'];
								break;
							case 'niveau':
								stat1=stats['niveau'];
								break;
						}
						var a1 = +document.getElementById('newCalculBis1a').value;
						var b1 = +document.getElementById('newCalculBis1b').value;
						
	
						//document.getElementById('resultat'+numero).textContent=a1+stat1/b1
						
						document.getElementById('resultatBis1').textContent = Math.floor(a1+stat1/b1);
						
					}
			
					if(typeCalcul==2){
						var stat1;
						switch(document.getElementById('newStatistiqueBis1'.value)){
							case 'intelligence':
								stat1=stats['intelligence'];
								break;
							case 'force':
								stat1=stats['force'];
								break;
							case 'agilite':
								stat1=stats['agilite'];
								break;
							case 'ressource':
								stat1=stats['ressource'];
								break;
							case 'niveau':
								stat1=stats['niveau'];
								break;
						}
						switch(document.getElementById('newStatistique2').value){
							case 'intelligence':
								stat2=stats['intelligence'];
								break;
							case 'force':
								stat2=stats['force'];
								break;
							case 'agilite':
								stat2=stats['agilite'];
								break;
							case 'ressource':
								stat2=stats['ressource'];
								break;
							case 'niveau':
								stat1=stats['niveau'];
								break;
						}
						var a1 = +document.getElementById('newCalculBis1a').value;
						var b1 = +document.getElementById('newCalculBis1b').value;
						var b2 = +document.getElementById('newCalculBis2b').value;
						
	
						//document.getElementById('resultat'+numero).textContent=a1+stat1/b1
						// alert(document.getElementById('resultatBis1').textContent);
						document.getElementById('resultatBis1').textContent = Math.floor(a1+stat1/b1);
						// alert(Math.floor(a1+stat1/b1+stat2/b2));
					}
					if(idObjetBis!=null){
						if(isNaN(+objActuel.value)){
							document.getElementById(idObjetBis).innerHTML=objActuel.value;
						}else{
							document.getElementById(idObjetBis).innerHTML=+objActuel.value;
						}
					}
	
	}



































	/*
	function modification_calcul(objActuel,personnage,idCompetence,typeCalcul,numéro,stats){
		
		var xhr = new XMLHttpRequest();
	  

	
		// On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
		xhr.open('GET', "test/recuperation_stats.php?id=" + idCompetence +"&personnage="+personnage, true);

		
	  
	  
		xhr.onreadystatechange = function() { // On gère ici une requête asynchrone	
		
			if (xhr.readyState == 4) { // Si les fichiers sont chargés sans erreur
				var stats = JSON.parse(xhr.responseText);
					if(typeCalcul==1){
						var a1 = +document.getElementById('newCalcul'+numéro+'a').value;
						var b1 = +document.getElementById('newCalcul'+numéro+'b').value;
						var statname1 = document.getElementById('newStatistique'+numéro).value;
						var stat1= window['stats.' + statname1];
						//document.getElementById('resultat'+numéro).textContent=a1+stat1/b1
						alert(['stats.' + statname1]);
						alert('stats.' + statname1);
						alert(window['stats.' + statname1]);
						alert(statname1);
						alert(stat1);
						alert(a1+stat1/b1);
					}
			}
		}
		xhr.send(null); // La requête est prête, on envoie tout !
	
	}
	
	*/
	
	
	
	
	
	/*
	function modification_calcul(objActuel,personnage,idCompetence,typeCalcul,numéro){
		if(typeCalcul==1){
			
			var a1 = +document.getElementById('newCalcul'+numéro+'a').value;
			var b1 = +document.getElementById('newCalcul'+numéro+'b').value;
			var stat1 = document.getElementById('newStatistique'+numéro);
			document.getElementById('resultat'+numéro).textContent=a1+stat1/b1
			
			+document.getElementById('newCalcul'+1+'a').value+1
		}
	
	}
	*/
	
	
	
	
	
	
	
	
	
function modification_description(idAModifier, objActuel){
		document.getElementById(idAModifier).innerHTML = objActuel.value;	
}

	/*
	var i = 0;
    window['salut' + i] = "myvarololoolo";
    alert(salut0);
	*/
	
	
function modification_personnage(personnage,statistiques){
		var xhr = new XMLHttpRequest();
	// On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
	xhr.open('GET', "statistiquepersonnage.php?personnage=" + personnage , true);
	xhr.onreadystatechange = function() { // On gère ici une requête asynchrone
		if (xhr.readyState == 4) { // Si les fichiers sont chargés sans erreur
			var stats = JSON.parse(xhr.responseText);
			
			statistiques.force=stats.force;
			statistiques.agilite=stats.agilite;
			statistiques.intelligence=stats.intelligence;
			statistiques.vitalite=stats.vitalite;
			if(stats.ressource){
				statistiques.ressource=stats.ressource;
			}
			recalcul(statistiques);
		}

	}
	xhr.send(null); // La requête est prête, on envoie tout !
}
	
	
function recalcul(stats){
	
	for(var numero=1;numero<6;numero++){
		if(document.getElementById('resultat'+numero)!=null){
			// alert("Recalcul de resultat"+numero);
			if(document.getElementById('newType_calcul'+numero).value==1){
							var stat1;
							// alert("Type de calcul : 1");
							switch(document.getElementById('newStatistique'+numero).value){
								case 'intelligence':
									stat1=stats['intelligence'];
									break;
								case 'force':
									stat1=stats['force'];
									break;
								case 'agilite':
									stat1=stats['agilite'];
									break;
								case 'ressource':
									stat1=stats['ressource'];
									break;
								case 'niveau':
									stat1=stats['niveau'];
									break;
							}
							// alert("Satistiques du calcul : "+document.getElementById('newStatistique'+numero).value);
							// alert("Valeur de cette statistique : "+stat1);
							var a1 = +document.getElementById('newCalcul'+numero+'a').value;
							var b1 = +document.getElementById('newCalcul'+numero+'b').value;
							// alert("Calcul1a : "+a1);
							// alert("Calcul1b : "+b1);
		;
							//document.getElementById('resultat'+numero).textContent=a1+stat1/b1
							// alert("Résultat du calcul : "+Math.floor(a1+stat1/b1));
							document.getElementById('resultat'+numero).textContent = Math.floor(a1+stat1/b1);
							
						}
				
						if(document.getElementById('newType_calcul'+numero).value==2){
							var stat1;
							switch(document.getElementById('newStatistique'+numero).value){
								case 'intelligence':
									stat1=stats['intelligence'];
									break;
								case 'force':
									stat1=stats['force'];
									break;
								case 'agilite':
									stat1=stats['agilite'];
									break;
								case 'ressource':
									stat1=stats['ressource'];
									break;
								case 'niveau':
									stat1=stats['niveau'];
									break;
							}
							
							// alert((numero+1));
							// alert(document.getElementById('newStatistique'+(numero+1)));
							// alert(document.getElementById('newStatistique'+(numero+1)).value);
							
							switch(document.getElementById('newStatistique'+(numero+1)).value){
								case 'intelligence':
									stat2=stats['intelligence'];
									break;
								case 'force':
									stat2=stats['force'];
									break;
								case 'agilite':
									stat2=stats['agilite'];
									break;
								case 'ressource':
									stat2=stats['ressource'];
									break;
								case 'niveau':
									stat1=stats['niveau'];
									break;
							}
							var a1 = +document.getElementById('newCalcul'+numero+'a').value;
							var b1 = +document.getElementById('newCalcul'+numero+'b').value;
							var b2 = +document.getElementById('newCalcul'+(numero+1)+'b').value;
							
		
							//document.getElementById('resultat'+numero).textContent=a1+stat1/b1
							// 	(document.getElementById('resultat'+numero).textContent);
							document.getElementById('resultat'+numero).textContent = Math.floor(a1+stat1/b1+stat2/b2);
							// alert(Math.floor(a1+stat1/b1+stat2/b2));
						}
		}
	}

}




















function cacher_afficher(elem){
	if(document.getElementById(elem).classList.contains('cache')){
		// document.getElementById(elem).style.transition = "all 0.5s ease 0.5s";
		document.getElementById(elem).classList.add('normal');
		document.getElementById(elem).classList.remove('cache');
		// document.getElementById(elem).style.transition = "all 1.5s";
		// alert('contenait');
	}else{
		// document.getElementById(elem).style.transition = "all 0.5s ease 0.5s";
		document.getElementById(elem).classList.add('cache');
		// document.getElementById(elem).style.transition = "all 1.5s";
		// alert('contenait pas');
		document.getElementById(elem).classList.remove('normal');
	}
}







	
	
	
	
	