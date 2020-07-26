// retourne un objet xmlHttpRequest.
// m?thode compatible entre tous les navigateurs (IE/Firefox/Opera)
function getXMLHTTP() {

    var xhr = null;

    if (window.XMLHttpRequest) { // Firefox et autres
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // Internet Explorer
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e1) {
                xhr = null;
            }
        }
    } else { // XMLHttpRequest non support? par le navigateur
        alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
    }
    return xhr;
}



//Objet XMLHTTPRequest

var XHR = null;


//Fonction de sauvegarde des modifications apport?es

function displayItemToDiv(idItem, characterID, characterLevel, componentIDToDisplayIn) {
    //Si l'objet existe d?j? on abandonne la requ?te et on le supprime
    if (XHR && XHR.readyState !== 0) {
        XHR.abort();
        XHR = null;
        delete XHR;
    }


    //Cr?ation de l'objet XMLHTTPRequest
    XHR = getXMLHTTP();

    if (!XHR) {
        return false;
    }

    //URL du script de sauvegarde auquel on passe la valeur ? modifier
    XHR.open("GET", "Rest/itemRest?idItem=" + idItem + "&asHTML=" + true + "&characterID=" + characterID + "&characterLevel=" + characterLevel, true);

    //On se sert de l'?v?nement OnReadyStateChange pour supprimer l'input et le replacer par son contenu
    XHR.onreadystatechange = function () {

        //Si le chargement est termin?
        if (XHR.readyState === 4) {
            //On recupere les donnees
            const data = JSON.parse(XHR.responseText);

            let componentToDisplayIn = document.getElementById(componentIDToDisplayIn);
            // On les places dans l'element qui correcpond
            componentToDisplayIn.innerHTML = "";
            componentToDisplayIn.innerHTML = data.itemAsHTML;
        }
    }

    //Envoi de la requ?te
    XHR.send(null);

}

function displayCompetenceToDiv(idCompetence, characterID, componentIDToDisplayIn) {
    //Si l'objet existe d?j? on abandonne la requ?te et on le supprime
    if (XHR && XHR.readyState !== 0) {
        XHR.abort();
        XHR = null;
        delete XHR;
    }


    //Cr?ation de l'objet XMLHTTPRequest
    XHR = getXMLHTTP();

    if (!XHR) {
        return false;
    }

    //URL du script de sauvegarde auquel on passe la valeur ? modifier
    XHR.open("GET", "Rest/competenceRest?idCompetence=" + idCompetence + "&asHTML=" + true + "&characterID=" + characterID, true);

    //On se sert de l'?v?nement OnReadyStateChange pour supprimer l'input et le replacer par son contenu
    XHR.onreadystatechange = function () {

        //Si le chargement est termin?
        if (XHR.readyState === 4) {
            //On recupere les donnees
            const data = JSON.parse(XHR.responseText);

            let componentToDisplayIn = document.getElementById(componentIDToDisplayIn);
            // On les places dans l'element qui correcpond
            componentToDisplayIn.innerHTML = "";
            componentToDisplayIn.innerHTML = data.competenceAsHTML;
        }
    }

    //Envoi de la requ?te
    XHR.send(null);

}

function displayCompetenceTreeToDiv(treeName, characterID, componentToUpdateForCompetences, componentIDToDisplayIn) {
    //Si l'objet existe d?j? on abandonne la requ?te et on le supprime
    if (XHR && XHR.readyState !== 0) {
        XHR.abort();
        XHR = null;
        delete XHR;
    }


    //Cr?ation de l'objet XMLHTTPRequest
    XHR = getXMLHTTP();

    if (!XHR) {
        return false;
    }

    //URL du script de sauvegarde auquel on passe la valeur ? modifier
    XHR.open("GET", "Rest/simpleCompetenceTree?treeName=" + treeName + "&asHTML=" + true + "&characterID=" + characterID
        + "&componentToUpdateForCompetences=" + componentToUpdateForCompetences, true);

    //On se sert de l'?v?nement OnReadyStateChange pour supprimer l'input et le replacer par son contenu
    XHR.onreadystatechange = function () {

        //Si le chargement est termin?
        if (XHR.readyState === 4) {
            //On recupere les donnees
            const data = JSON.parse(XHR.responseText);

            let componentToDisplayIn = document.getElementById(componentIDToDisplayIn);
            // On les places dans l'element qui correcpond
            componentToDisplayIn.innerHTML = "";
            componentToDisplayIn.innerHTML = data.simpleCompetenceTree;
        }
    }

    //Envoi de la requ?te
    XHR.send(null);

}


function display(data, componentToDisplayIn) {
    componentToDisplayIn.innerHTML = "";
    componentToDisplayIn.innerHTML = data.itemAsHTML;
}