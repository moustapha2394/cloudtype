var btnNewF = document.querySelector('.newfunc');
var boite = document.querySelector('.boite');
var closebtn = document.querySelector('.boite .fermer');
var codepart = document.querySelector('.boite .codepart');
var table = document.querySelector('.table');
var container = document.querySelector('.container' ,'nav' ,'header');
var nav = document.querySelector('nav');
	function cc(){
		boite.style.display='block';
		table.style.display='none';
		container.style.filter='blur(2px)';
		nav.style.filter='blur(2px)';
	}
	function close(){
		boite.style.display='none';
		codepart.value="";
		table.style.display='contents';
		container.style.filter='blur(0)';
		nav.style.filter='blur(0)';
	}
	closebtn.addEventListener('click',close);
	btnNewF.addEventListener('click',cc);