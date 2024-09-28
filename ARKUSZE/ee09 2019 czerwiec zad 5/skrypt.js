function generujCiag() {
	let numer1 = parseInt(document.getElementById('numer1').value);
	let roznica = parseInt(document.getElementById('roznica').value);
	let wyrazow = parseInt(document.getElementById('wyrazow').value);
	let wynik = document.getElementById('wynik');
	let tablica = [];
	let an = 0
	for (i=1; i<=wyrazow; i++) {
		tablica.push(numer1 + ((i - 1) * roznica));
	};
	wynik.innerHTML = 'Ciąg arytmetyczny zawiera wyrazy: ' + tablica;
};