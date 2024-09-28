function oblicz() {
    let krotkie = document.getElementById("krotkie").checked;
    let srednie = document.getElementById("srednie").checked;
    let poldlugie = document.getElementById("poldlugie").checked;
    let dlugie = document.getElementById("dlugie").checked;

    let koszt = 0;
    let wynik = document.getElementById("wynik");


    if (krotkie) {
        koszt = 25;
    }
    else if (srednie) {
        koszt = 30;
    }
    else if (poldlugie) {
        koszt = 40;
    }
    else if (dlugie) {
        koszt = 50;
    };

    wynik.innerHTML="Cena strzyżenia: " + koszt;
}