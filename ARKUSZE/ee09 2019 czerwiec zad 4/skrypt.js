function dodawanie() {
	wynik = document.getElementById('wynik');
	A = document.getElementById('a').value;
	B = document.getElementById('b').value;
	A = parseInt(A);
	B = parseInt(B);
	dzialanie = A + B;
	wynik.innerHTML = 'Wynik: ' + dzialanie;
}

function odejmowanie() {
	wynik = document.getElementById('wynik');
	A = document.getElementById('a').value;
	B = document.getElementById('b').value
	A = parseInt(A);
	B = parseInt(B);
	dzialanie = A - B;
	wynik.innerHTML = 'Wynik: ' + dzialanie;
}

function mnozenie() {
	wynik = document.getElementById('wynik');
	A = document.getElementById('a').value;
	B = document.getElementById('b').value;
	A = parseInt(A);
	B = parseInt(B);
	dzialanie = A * B;
	wynik.innerHTML = 'Wynik: ' + dzialanie;
}

function dzielenie() {
	wynik = document.getElementById('wynik');
	A = document.getElementById('a').value;
	B = document.getElementById('b').value;
	A = parseInt(A);
	B = parseInt(B);
	dzialanie = A / B;
	wynik.innerHTML = 'Wynik: ' + dzialanie;
}

function potegowanie() {
	wynik = document.getElementById('wynik');
	A = document.getElementById('a').value;
	B = document.getElementById('b').value;
	A = parseInt(A);
	B = parseInt(B);
	dzialanie = A ** B;
	wynik.innerHTML = 'Wynik: ' + dzialanie;
}