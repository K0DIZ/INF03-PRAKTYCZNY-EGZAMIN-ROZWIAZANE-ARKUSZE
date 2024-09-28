function kontakt() {
    let wynik = document.getElementById("wynik_skryptu");
    let imie = document.getElementById("imie").value;
    let nazwisko = document.getElementById("nazwisko").value;
    let email = document.getElementById("email").value;
    let zgloszenie = document.getElementById("zgloszenie").value;
    let checkbox = document.getElementById("checkbox").checked;

    let pelne_imie = imie + " " + nazwisko;
    let email_malymi_literami = email.toLowerCase();
    let usluga = "Usługa: " + zgloszenie;

    if (checkbox == true) {
        wynik.innerHTML = "<hr><p>"+pelne_imie+"</p><p>"+email_malymi_literami+"</p><p>"+usluga+"</p>";
    }
}