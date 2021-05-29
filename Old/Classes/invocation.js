

	function invocation(libellé){
	
		var xhr = new XMLHttpRequest();
	  

	
	
		// On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
		xhr.open('GET', "invo.php?libellé=" + libellé , true);
	
		
		
		
		xhr.onreadystatechange = function() { // On gère ici une requête asynchrone
			if (xhr.readyState == 4) { // Si les fichiers sont chargés sans erreur
				
				var stats = JSON.parse(xhr.responseText);
				
				$('body').children().addClass( "myClass" );
				
				var Invo = document.createElement('div');
				Invo.classList.add('invo');
				Invo.style.transition = "all 2s";
				Invo.id="Invocation";
				
				var blocOpaque = document.createElement('div');
				blocOpaque.classList.add('blocOpaque');
				
				var resistant = document.createElement('div');
				resistant.classList.add('infoinvo');
				
				var imgInvo = new Image();
				imgInvo.classList.add('imginvo');
				imgInvo.src =stats.Image;
				resistant.appendChild(imgInvo);
				
				var nomInvo = document.createElement('div');
				nomInvo.classList.add('nominvo');
				nomInvo.innerHTML = stats.Nom;
				resistant.appendChild(nomInvo);
				
				var DescriptionInvo = document.createElement('div');
				DescriptionInvo.classList.add('textinvo');
				DescriptionInvo.innerHTML = stats.Description;
				resistant.appendChild(DescriptionInvo);
				
				
				
				// Création du tableau des caractéristiques
				var statsInvo = document.createElement('table');
				statsInvo.classList.add('statsinvo');
				
				var ligne1 = statsInvo.insertRow(-1);
				ligne1.classList.add('vie');
				ligne1.insertCell(0).innerHTML='Points de vie :';
				var colonne2_ligne1 = ligne1.insertCell(1);
				colonne2_ligne1.innerHTML=stats.PDV;
				
				
				
				var ligne2 = statsInvo.insertRow(-1);
				ligne2.insertCell(0).innerHTML='PA :';
				ligne2.classList.add('PA');
				var colonne2_ligne2 = ligne2.insertCell(1);
				colonne2_ligne2.innerHTML=stats.PA;
				
				var ligne3 = statsInvo.insertRow(-1);
				ligne3.insertCell(0).innerHTML='Dégâts par coup :';
				ligne3.classList.add('red');
				var colonne2_ligne3 = ligne3.insertCell(1);
				colonne2_ligne3.innerHTML=stats.Dégâts;
				
				var ligne4 = statsInvo.insertRow(-1);
				ligne4.insertCell(0).innerHTML='PM :';
				ligne4.classList.add('PM');
				var colonne2_ligne4 = ligne4.insertCell(1);
				colonne2_ligne4.innerHTML=stats.PM;
				
				var ligne5 = statsInvo.insertRow(-1);
				ligne5.insertCell(0).innerHTML='Armure :';
				ligne5.classList.add('armure');
				var colonne2_ligne5 = ligne5.insertCell(1);
				colonne2_ligne5.classList.add('Armure');
				colonne2_ligne5.innerHTML=stats.Armure;
				
				resistant.appendChild(statsInvo);
				
				Invo.appendChild(blocOpaque);
				Invo.appendChild(resistant);
				
				
				
				document.body.insertBefore(Invo,document.body.firstChild);
			}
		}
		xhr.send(null); // La requête est prête, on envoie tout !
		
		
	}
	
	/*
	$(document.body).click(function(e) {
		alert("Ok");
		var div_cliquable = $('#Invocation');
		document.body.innerHTML=1;
		// Si ce n'est pas #ma_div ni un de ses enfants
		if( !$(e.target).is(div_cliquable) && !$.contains(div_cliquable[0],e.target) ) {
			div_cliquable.remove(); // masque #ma_div en fondu
		}

	});
	*/
	
	$(document).click(function(event) { 
		if(!$(event.target).closest('#Invocation').length) {
			$('#Invocation').remove(); // masque #ma_div en fondu
			$('body').children().removeClass( "myClass" );
		} 
	});