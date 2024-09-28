function kolory() {
    let wartosc = document.getElementById("input_numer").value;
    let kolory = document.getElementsByTagName("td");

    
    if (wartosc <= 360) {
        kolory[0].style.background="hsl("+wartosc+",100%,50%";
        kolory[1].style.background="hsl("+wartosc+",80%,50%";
        kolory[2].style.background="hsl("+wartosc+",60%,50%";
        kolory[3].style.background="hsl("+wartosc+",40%,50%";
        kolory[4].style.background="hsl("+wartosc+",20%,50%";
    }
}