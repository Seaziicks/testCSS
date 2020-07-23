(function () {

    let searchElement = document.getElementById('search'),
        results = document.getElementById('results'),
        selectedResult = -1, // Permet de savoir quel résultat est sélectionné : -1 signifie "aucune sélection"
        previousRequest, // On stocke notre précédente requête dans cette variable
        previousValue = searchElement.value; // On fait de même avec la précédente valeur


    function getResults(keywords) { // Effectue une requête et récupère les résultats

        const xhr = new XMLHttpRequest();
        xhr.open('GET', './nouveau_test.php?s=' + encodeURIComponent(keywords));

        xhr.addEventListener('readystatechange', function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200)
                displayResults(xhr.responseText);
        });
        xhr.send(null);
        return xhr;

    }

    function displayResults(response) { // Affiche les résultats d'une requête

        results.style.display = response.length ? 'block' : 'none'; // On cache le conteneur si on n'a pas de résultats

        if (response.length) { // On ne modifie les résultats que si on en a obtenu
            let parsedResponse = JSON.parse(response);
            const responseLen = Object.keys(parsedResponse).length;
            results.innerHTML = ''; // On vide les résultats

            for (let i = 0; i < responseLen; i++) {

                const divNom = results.appendChild(document.createElement('div'));
                divNom.innerHTML = parsedResponse[i]['Competence'];
                divNom.id = 'Competence_recherche_' + i;
                divNom.classList.add('Competence_recherche');

                if (parsedResponse[i]['Image']) {
                    const divImage = divNom.appendChild(document.createElement('div'));
                    const img = divImage.appendChild(document.createElement('img'));
                    img.src = '../../' + parsedResponse[i]['Image'];
                    img.id = 'Image_recherche_' + i;
                    divImage.classList.add('Image_recherche');
                }

                if (parsedResponse[i]['PA']) {
                    const divPA = divNom.appendChild(document.createElement('div'));
                    divPA.innerHTML = 'Coût en PA : ' + parsedResponse[i]['PA'];
                    divPA.id = 'PA_recherche_' + i;
                    divPA.classList.add('PA_recherche');
                }

                divNom.addEventListener('click', function (e) {
                    chooseResult(e.target);
                });
            }
        }
    }

    function chooseResult(result) { // Choisi un des résultats d'une requête et gère tout ce qui y est attaché
        searchElement.value = previousValue = result.firstChild.textContent; // On change le contenu du champ de recherche et on enregistre en tant que précédente valeur
        results.style.display = 'none'; // On cache les résultats
        result.className = ''; // On supprime l'effet de focus
        selectedResult = -1; // On remet la sélection à "zéro"
        searchElement.focus(); // Si le résultat a été choisi par le biais d'un clique alors le focus est perdu, donc on le réattribue
    }


    searchElement.addEventListener('keyup', function (e) {
        // alert(document.getElementById('search').value);
        let divs = results.querySelectorAll("#results>div");
        if (e.code === "ArrowUp" && selectedResult > -1) { // Si la touche pressée est la flèche "haut"
            divs[selectedResult--].classList.remove('result_focus');
            if (selectedResult > -1)  // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
                divs[selectedResult].classList.add('result_focus');
        } else if (e.code === "ArrowDown" && selectedResult < divs.length - 1) { // Si la touche pressée est la flèche "bas"
            results.style.display = 'block'; // On affiche les résultats
            if (selectedResult > -1)  // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
                divs[selectedResult].classList.remove('result_focus');
            divs[++selectedResult].classList.add('result_focus');
        } else if (e.code === "Enter" && selectedResult > -1) { // Si la touche pressée est "Entrée"
            chooseResult(divs[selectedResult]);
        } else if (searchElement.value !== previousValue) { // Si le contenu du champ de recherche a changé
            previousValue = searchElement.value;
            if (previousRequest && previousRequest.readyState < XMLHttpRequest.DONE)
                previousRequest.abort(); // Si on a toujours une requête en cours, on l'arrête
            if(previousValue.length > 0)
                previousRequest = getResults(previousValue); // On stocke la nouvelle requête
            else {
                results.innerHTML = '';
                results.style.display = 'none'; // On cache les résultats
            }
            selectedResult = -1; // On remet la sélection à "zéro" à chaque caractère écrit
        } else if (e.code === "Escape") {
            results.innerHTML = '';
            results.style.display = 'none'; // On cache les résultats
        }
    });
})();
