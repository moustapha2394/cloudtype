var btnNewF = document.querySelector('.newfunc');
var boite = document.querySelector('.boite');
var closebtn = document.querySelector('.boite .fermer');
var codepart = document.querySelector('.boite .codepart');
var table = document.querySelector('.table');
	function cc(){
		boite.style.display='block';
		table.style.display='none';
	}
	function close(){
		boite.style.display='none';
		codepart.value="";
		table.style.display='block';
	}
	closebtn.addEventListener('click',close);
	btnNewF.addEventListener('click',cc);