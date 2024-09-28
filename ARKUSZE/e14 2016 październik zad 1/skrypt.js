function sprawdzHaslo() {
    let haslo = document.getElementById("haslo").value;
    let dlugoscHasla = haslo.length;
    let wynik = document.getElementById("result");
    let czyLiczba = false;
    for (i=0; i < dlugoscHasla; i++) {
        if (!isNaN(haslo[i])) {
            czyLiczba = true;
        };
    };
    if (haslo=="") {
        wynik.innerHTML="WPISZ HASŁO!";
        wynik.style.color="red";
    }
    else if (dlugoscHasla >= 7 && czyLiczba) {
        wynik.innerHTML="DOBRE";
        wynik.style.color="green";
    }
    else if (dlugoscHasla >= 4 && dlugoscHasla <= 6 && czyLiczba) {
        wynik.innerHTML="ŚREDNIE";
        wynik.style.color="blue";
    }
    else {
        wynik.innerHTML="SŁABE";
        wynik.style.color="yellow";
    };
};