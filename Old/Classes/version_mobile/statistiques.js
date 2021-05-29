function cacher_afficher(elem){
	if(document.getElementById(elem).classList.contains('cache')){
		document.getElementById(elem).classList.remove('cache');
		document.getElementById(elem).classList.add('normal');
	}else{
		document.getElementById(elem).classList.add('cache');
		document.getElementById(elem).classList.remove('normal');
	}
}


function cacher_afficher_avec_class(elem,classe,classe_cachante){
	if(document.getElementById(elem).classList.contains(classe_cachante)){
		document.getElementById(elem).classList.remove(classe_cachante);
		document.getElementById(elem).classList.add(classe);
	}else{
		document.getElementById(elem).classList.add(classe_cachante);
		document.getElementById(elem).classList.remove(classe);
	}
}