var btnNewF = document.querySelector('.newfunc');
var boite = document.querySelector('.boiteF');
var closebtn = document.querySelector('.boiteF .fermer');
var codepart = document.querySelector('.boiteF .codepart');
var table = document.querySelector('.table');
var container = document.querySelectorAll(".container, nav, header");
var gris = document.querySelector('#wrapper');
	function etat(l=0) {
		if (l==1) {
		boite.style.display='block';
		table.style.display='none';
		for (let i = 0; i < container.length; i++) {	
			container[i].style.filter='blur(2px)';
		}
		gris.style.display='block';
		}
		else {
			boite.style.display='none';
			table.style.display='contents';
			for (let i = 0; i < container.length; i++) {	
				container[i].style.filter='blur(0)';
			}
			gris.style.display='none';
		}
	}
	function cc(){
		etat(1);
		
	}
	
	function close(){
		codepart.value="";
		etat(0);
	}
	closebtn.addEventListener('click',close);
	btnNewF.addEventListener('click',cc);
	gris.addEventListener('click',etat);