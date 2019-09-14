var btnNewF = document.querySelector('.butF');
var btnNewP = document.querySelector('.butP');
var boite = document.querySelectorAll('.boiteF, .boiteP');
var closebtn = document.querySelectorAll('.boite .fermer');
var codepart = document.querySelector('.boiteF .codepart');
var table = document.querySelector('.table');
var container = document.querySelectorAll(".container, nav, header");
var gris = document.querySelector('#wrapper');
var t=-1;
	function etat(l=0,o=-1) {        
		if (l==1) {
		boite[o].style.display='block';
		table.style.display='none';
		for (let i = 0; i < container.length; i++) {	
			container[i].style.filter='blur(2px)';
		}
		gris.style.display='block';
		}
		else {
			boite[o].style.display='none';
			table.style.display='contents';
			for (let i = 0; i < container.length; i++) {	
				container[i].style.filter='blur(0)';
			}
			gris.style.display='none';
		}
	}
	function cc(){
		etat(1,t);
		
	}
	function close(){
		codepart.value="";
		etat(0,t);
	}
	for (let i = 0; i < closebtn.length; i++) {
	closebtn[i].addEventListener('click',close);
	}
	btnNewF.addEventListener('click',
	function(){
		t=0;
		cc();
	  }
	);
	btnNewP.addEventListener('click',
	function(){
		t=1;
		cc();
	  }
	);
	gris.addEventListener('click',
	function () {
		etat(0,t);
	}
	);