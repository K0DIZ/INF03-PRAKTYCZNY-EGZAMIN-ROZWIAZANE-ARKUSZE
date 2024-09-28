function Oblicz() {
    let rodzaj = document.getElementById("rodzaj").value;
    let litrow = document.getElementById("litrow").value;
    let wynik = document.getElementById("wynik");

    let litr1 = 0;

    if (rodzaj == 1) {
        litr1 = 4;
    }
    else if (rodzaj == 2) {
        litr1 = 3.5;
    }
    wartosc = litr1 * litrow;
    wynik.innerHTML="koszt paliwa: " + wartosc +"zł";
}