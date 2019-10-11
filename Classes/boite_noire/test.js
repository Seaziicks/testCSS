function fonctiontest(elem){
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