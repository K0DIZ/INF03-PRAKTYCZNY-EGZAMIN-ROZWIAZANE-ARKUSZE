function send() {
    let imie = document.getElementById('imie').value;
    let nazwisko = document.getElementById('nazwisko').value;
    let email = document.getElementById('email').value;
    let opisZgloszenia = document.getElementById('zgloszenie').value;
    let checkbox = document.getElementById('check').checked;
    let wynik = document.getElementById('wynik');
    let komunikat = '';

    if (!checkbox) {
        komunikat = 'Musisz zapoznać się z regulaminem';
        wynik.style.color = 'red';
    }
    else {
        imie = imie.toUpperCase();
        nazwisko = nazwisko.toUpperCase();
        komunikat = imie + ' ' + nazwisko + '<br>' + ' Treść Twojej sprawy: ' + opisZgloszenia;
        wynik.style.color = 'navy';
    }
    wynik.innerHTML = komunikat;
}