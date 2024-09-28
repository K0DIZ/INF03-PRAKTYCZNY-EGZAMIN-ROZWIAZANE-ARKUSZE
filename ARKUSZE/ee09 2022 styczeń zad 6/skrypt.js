function buttonClick(kolor) {
	let tlo = document.getElementById('prawy');
	tlo.style.backgroundColor = kolor;
}

function czcionka() {
	let value = document.getElementById('select1').value; 
	let tlo = document.getElementById('prawy');
	console.log(value);
	tlo.style.color = value;
	tlo.style.overflow = 'auto';
}

function procent() {
	let procent1 = document.getElementById('procent').value;
	let tlo = document.getElementById('prawy');
	tlo.style.fontSize = procent1+'%';
}

function checkboxClick() {
	let checkbox1 = document.getElementById('checkbox').checked;
	let obraz = document.getElementsByTagName('img');
	if (checkbox1 == false) {
		obraz[0].style.border = 'none';
	}
	else {
		obraz[0].style.border = '1px solid white';
	}
}

function zmianaListy(styl) {
	let lista = document.getElementsByTagName('ul');
	lista[0].style.listStyleType = styl;
}