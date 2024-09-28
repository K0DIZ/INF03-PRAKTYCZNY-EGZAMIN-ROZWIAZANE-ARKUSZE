function obliczKoszt() {
    let liczbaGosci = document.getElementById("gosci").value;
    let czyPoprawiny = document.getElementById("czy_poprawiny");
    let wynik = document.getElementById("wynik");
    let poprawiny = 0;
    if (czyPoprawiny.checked == true) {
        poprawiny = 1;
    }
    let sumaOdOsob = liczbaGosci * 100;
    let sumaPoprawiny = poprawiny * sumaOdOsob * 0.3;

    let sumaCalkowita = sumaOdOsob + sumaPoprawiny;

    console.log(liczbaGosci);
    console.log(czyPoprawiny);

    wynik.innerHTML="Koszt Twojego wesela to " + sumaCalkowita + " złotych";
}