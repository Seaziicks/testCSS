//On ne pourra ?diter qu'une valeur ? la fois
var editionEnCours = false;



//variable ?vitant une seconde sauvegarde lors de la suppression de l'input
var sauve = false;



//Fonction de modification inline de l'?l?ment double-cliqu?
function inlineMod2(id, obj, nomValeur, type, perso) {
	if (editionEnCours) {
		return false;
	} else {
		editionEnCours = true;
		sauve = false;
	}

	//Objet servant ? l'?dition de la valeur dans la page
	var input = null;

	//On cr?e un composant diff?rent selon le type de la valeur ? modifier
	switch (type) {
		//Valeur de type texte ou nombre
		case "texte":
		case "nombre":
			input = document.createElement("input");
			break;
		//Valeur de type texte multilignes
		case  "texte-multi":
			input = document.createElement("textarea");
			break;
	}

	//Assignation de la valeur
	if (obj.innerText)
		input.value = obj.innerText;
	else
		input.value = obj.textContent;

	input.value = trim(input.value);

	//On lui donne une taille un peu plus large que le texte ? modifier
	input.style.width = getTextWidth(input.value) + 30 + "px";

	//Remplacement du texte par notre objet input
	obj.replaceChild(input, obj.firstChild);

	//On donne le focus ? l'input et si on veut s?lectionne le texte qu'il contient on ajoute : input.select();
	input.focus();

	//Assignation des deux ?v?nements qui d?clencheront la sauvegarde de la valeur

	//Sortie de l'input
	input.onblur = function sortir() {
		sauverMod2(id, obj, nomValeur, input.value, type, perso);
		delete input;
	};

	//Appui sur la touche Entr?e
	input.onkeydown = function keyDown(event) {
        if (!event && window.event) {
            event = window.event;
        }
		if (getKeyCode(event) === 13) {
			sauverMod2(id, obj, nomValeur, input.value, type, perso);
			delete input;
		}
	};
}



//Objet XMLHTTPRequest
var XHR = null;



//Fonction de sauvegarde des modifications apport?es
function sauverMod2(id, obj, nomValeur, valeur, type, perso) {
	//Si on a d?j? sauv? la valeur en cours, on sort
	if(sauve) {
		return false;
	}

	else {
		sauve = true;
	}

	//Si l'objet existe d?j? on abandonne la requ?te et on le supprime
	if(XHR && XHR.readyState != 0) {
		XHR.abort();
		delete XHR;
	}

	//Cr?ation de l'objet XMLHTTPRequest
	XHR = getXMLHTTP();

	if(!XHR) {
		return false;
	}

  var sVar2 = encodeURIComponent(valeur);

	//URL du script de sauvegarde auquel on passe la valeur ? modifier
	XHR.open("GET", "modification2.php?id=" + id + "&champ=" + nomValeur + "&val=" + sVar2 + "&type=" + type + ieTrick() + "&perso=" + perso, true);

	//On se sert de l'?v?nement OnReadyStateChange pour supprimer l'input et le replacer par son contenu
	XHR.onreadystatechange = function() {
		//Si le chargement est termin?
		if (XHR.readyState == 4)
		{
			//R?initialisation de la variable d'?tat d'?dition
			editionEnCours = false;
			//Remplacement de l'input par le texte qu'il contient

			obj.replaceChild(document.createTextNode(valeur), obj.firstChild);
		}
	}

	//Envoi de la requ?te
	XHR.send(null);
}