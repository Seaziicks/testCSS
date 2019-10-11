
function modification_calcul(idAModifier,objActuel,idObjetBis,typeCalcul,numero,stats){
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
						}
						var a1 = +document.getElementById('newCalcul'+numero+'a').value;
						var b1 = +document.getElementById('newCalcul'+numero+'b').value;
						
	;
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
						}
						switch(document.getElementById('newStatistique'+(numero+1)).value){
							case 'intelligence':
								stat1=stats['intelligence'];
								break;
							case 'force':
								stat2=stats['force'];
								break;
							case 'agilite':
								stat2=stats['agilite'];
								break;
						}
						var a1 = +document.getElementById('newCalcul'+numero+'a').value;
						var b1 = +document.getElementById('newCalcul'+numero+'b').value;
						var b2 = +document.getElementById('newCalcul'+(numero+1)+'b').value;
						
	;
						//document.getElementById('resultat'+numero).textContent=a1+stat1/b1
						alert(document.getElementById('resultat'+numero).textContent);
						document.getElementById('resultat'+numero).textContent = Math.floor(a1+stat1/b1);
						alert(Math.floor(a1+stat1/b1+stat2/b2));
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
	function modification_calcul(idAModifier, objActuel,personnage,idCompetence,typeCalcul,numéro,stats){
		
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
	function modification_calcul(idAModifier, objActuel,personnage,idCompetence,typeCalcul,numéro){
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