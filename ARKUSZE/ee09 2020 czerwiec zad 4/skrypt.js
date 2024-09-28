function sumaZabiegow() {
    let piling = document.getElementById("piling");
    let maska = document.getElementById("maska");
    let masaz = document.getElementById("masaz_twarzy");
    let regulacjaBrwi = document.getElementById("regulacja_brwi");
    let wynik = document.getElementById("wynik");
    let suma = 0;

    if (piling.checked == true) {
        suma = suma + 45;
    };
    if (maska.checked == true) {
        suma = suma + 30;
    };
    if (masaz.checked == true) {
        suma = suma + 20;
    };
    if (regulacjaBrwi.checked == true) {
        suma = suma + 5;
    };
    console.log(suma);
    wynik.innerHTML="Cena zabiegów: " + suma;
}
