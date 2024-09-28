let id_zamowienia = 0;
braki();

// dość ciężkie zadanie

function aktualizuj1() {
    let nowa_wartosc = prompt("Podaj nową wartość");
    let id = 0;
    let braki1 = document.getElementsByClassName('ilosc');
    braki1[id].innerHTML = nowa_wartosc;
    braki();
}
function zamow1() {
    id_zamowienia += 1;
    let produkty1 = document.getElementsByClassName('produkty');
    let id = 0;
    alert('Zamówienie nr: ' + id_zamowienia + ' Produkt: ' + produkty1[id].innerHTML);
}
function aktualizuj2() {
    let nowa_wartosc = prompt("Podaj nową wartość");
    let id = 1;
    let braki1 = document.getElementsByClassName('ilosc');
    braki1[id].innerHTML = nowa_wartosc;
    braki();
}
function zamow2() {
    id_zamowienia += 1;
    let produkty1 = document.getElementsByClassName('produkty');
    let id = 1;
    alert('Zamówienie nr: ' + id_zamowienia + ' Produkt: ' + produkty1[id].innerHTML);
}

function aktualizuj3() {
    let nowa_wartosc = prompt("Podaj nową wartość");
    let id = 2;
    let braki1 = document.getElementsByClassName('ilosc');
    braki1[id].innerHTML = nowa_wartosc;
    braki();
}
function zamow3() {
    id_zamowienia += 1;
    let produkty1 = document.getElementsByClassName('produkty');
    let id = 2;
    alert('Zamówienie nr: ' + id_zamowienia + ' Produkt: ' + produkty1[id].innerHTML);
}

function aktualizuj4() {
    let nowa_wartosc = prompt("Podaj nową wartość");
    let id = 3;
    let braki1 = document.getElementsByClassName('ilosc');
    braki1[id].innerHTML = nowa_wartosc;
    braki();
}
function zamow4() {
    id_zamowienia += 1;
    let produkty1 = document.getElementsByClassName('produkty');
    let id = 3;
    alert('Zamówienie nr: ' + id_zamowienia + ' Produkt: ' + produkty1[id].innerHTML);
}

function braki() {
    let braki1 = document.getElementsByClassName('ilosc');
    for (let i = 0; i < braki1.length; i += 1) {
        if (parseInt(braki1[i].innerHTML) == 0) {
            braki1[i].style.backgroundColor = 'red';
        } 
        else if (parseInt(braki1[i].innerHTML) >= 1 && (parseInt(braki1[i].innerHTML) <= 5)) {
            braki1[i].style.backgroundColor = 'yellow';
        }    
        else {
            braki1[i].style.backgroundColor = 'honeydew';
        };
    };
};