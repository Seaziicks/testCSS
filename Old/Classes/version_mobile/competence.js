


function afficher_competence(idCompetence,personnage){
	var xhr = new XMLHttpRequest();
	
	
		
	  

	
	
		// On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
		xhr.open('GET', "competence.php?id=" + idCompetence + "&perso=" + personnage , true);
	
		
		
		xhr.onreadystatechange = function() { // On gère ici une requête asynchrone

			if (xhr.readyState == 4) {

				var stats = JSON.parse(xhr.responseText);
				
				document.getElementById('nom_competence').innerHTML=stats.Nom_Competence;
				
				document.getElementById('Description1').innerHTML=stats.Description1;
				document.getElementById('Description2').innerHTML=stats.Description2;
				document.getElementById('Description3').innerHTML=stats.Description3;
				document.getElementById('Description4').innerHTML=stats.Description4;
				document.getElementById('Description5').innerHTML=stats.Description5;
				document.getElementById('Description6').innerHTML=stats.Description6;
				
				document.getElementById('Resultat1').innerHTML=stats.Resultat1;
				document.getElementById('Resultat2').innerHTML=stats.Resultat2;
				document.getElementById('Resultat3').innerHTML=stats.Resultat3;
				document.getElementById('Resultat4').innerHTML=stats.Resultat4;
				document.getElementById('Resultat5').innerHTML=stats.Resultat5;
				
				document.getElementById('Detail1').innerHTML=stats.Detail1;
				document.getElementById('Detail2').innerHTML=stats.Detail2;
				document.getElementById('Detail3').innerHTML=stats.Detail3;
				document.getElementById('Detail4').innerHTML=stats.Detail4;
				document.getElementById('Detail5').innerHTML=stats.Detail5;
				
				

				document.getElementById('Des1').innerHTML=stats.Des1;
				document.getElementById('Des2').innerHTML=stats.Des2;
				document.getElementById('Des3').innerHTML=stats.Des3;
				document.getElementById('Des4').innerHTML=stats.Des4;
				document.getElementById('Des5').innerHTML=stats.Des5;
				
				document.getElementById('Des1').className = "";
				document.getElementById('Des2').className = "";
				document.getElementById('Des3').className = "";
				document.getElementById('Des4').className = "";
				document.getElementById('Des5').className = "";
				
				document.getElementById('Des1').classList.add(stats.CouleurDe1);
				document.getElementById('Des2').classList.add(stats.CouleurDe2);
				document.getElementById('Des3').classList.add(stats.CouleurDe3);
				document.getElementById('Des4').classList.add(stats.CouleurDe4);
				document.getElementById('Des5').classList.add(stats.CouleurDe5);
				
				
				document.getElementById('Resultat1').className = "";
				document.getElementById('Resultat2').className = "";
				document.getElementById('Resultat3').className = "";
				document.getElementById('Resultat4').className = "";
				document.getElementById('Resultat5').className = "";
				if(stats.Impact1){document.getElementById('Resultat1').classList.add(stats.Impact1);}
				if(stats.Impact2){document.getElementById('Resultat2').classList.add(stats.Impact2);}
				if(stats.Impact3){document.getElementById('Resultat3').classList.add(stats.Impact3);}
				if(stats.Impact4){document.getElementById('Resultat4').classList.add(stats.Impact4);}
				if(stats.Impact5){document.getElementById('Resultat5').classList.add(stats.Impact5);}
				
				if(stats.Detail1){document.getElementById('Detail1').classList.add('detail');}
				if(stats.Detail2){document.getElementById('Detail2').classList.add('detail');}
				if(stats.Detail3){document.getElementById('Detail3').classList.add('detail');}
				if(stats.Detail4){document.getElementById('Detail4').classList.add('detail');}
				if(stats.Detail5){document.getElementById('Detail5').classList.add('detail');}
				
				
				
				
				
				if(stats.NumEffet==1){
					document.getElementById('Effet1').innerHTML=stats.Effet1;
					document.getElementById('ResultatEffet1').innerHTML=stats.ResultatBis;
					document.getElementById('DetailBis1').innerHTML=stats.DetailBis;
					document.getElementById('DetailBis1').classList.add('detail');
					document.getElementById('Effet1Bis').innerHTML=stats.Effet1Bis;
					if(stats.ImpactBis){document.getElementById('ResultatEffet1').classList.add(stats.ImpactBis);}
				}else{document.getElementById('Effet1').innerHTML=stats.Effet1; document.getElementById('ResultatEffet1').innerHTML="";document.getElementById('DetailBis1').innerHTML="";document.getElementById('Effet1Bis').innerHTML="";}
				
				if(stats.NumEffet==2){
					document.getElementById('Effet2').innerHTML=stats.Effet2;
					document.getElementById('ResultatEffet2').innerHTML=stats.ResultatBis;
					document.getElementById('DetailBis2').innerHTML=stats.DetailBis;
					document.getElementById('DetailBis2').classList.add('detail');
					document.getElementById('Effet2Bis').innerHTML=stats.Effet2Bis;
					if(stats.ImpactBis){document.getElementById('ResultatEffet2').classList.add(stats.ImpactBis);}
				}else{document.getElementById('Effet2').innerHTML=stats.Effet2;document.getElementById('ResultatEffet2').innerHTML="";document.getElementById('DetailBis2').innerHTML="";document.getElementById('Effet2Bis').innerHTML="";}
				
				if(stats.NumEffet==3){
					document.getElementById('Effet3').innerHTML=stats.Effet3;
					document.getElementById('ResultatEffet3').innerHTML=stats.ResultatBis;
					document.getElementById('DetailBis3').innerHTML=stats.DetailBis;
					document.getElementById('DetailBis3').classList.add('detail');
					document.getElementById('Effet3Bis').innerHTML=stats.Effet3Bis;
					if(stats.ImpactBis){document.getElementById('ResultatEffet3').classList.add(stats.ImpactBis);}
				}else{document.getElementById('Effet3').innerHTML=stats.Effet3;document.getElementById('ResultatEffet3').innerHTML="";document.getElementById('DetailBis3').innerHTML="";document.getElementById('Effet3Bis').innerHTML="";}

				
			}
	
		}
		xhr.send(null);
}