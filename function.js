var btnNewF = document.querySelector('.newfunc');
var boite = document.querySelector('.boite');
var closebtn = document.querySelector('.boite .fermer');
var codepart = document.querySelector('.boite .codepart');
	function cc(){
		boite.style.display='block';
	}
	function close(){
		boite.style.display='none';
		codepart.value="";
	}
	closebtn.addEventListener('click',close);
	btnNewF.addEventListener('click',cc);