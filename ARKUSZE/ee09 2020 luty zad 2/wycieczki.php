<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "egzamin3");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl3.css">
    <title>Wycieczki i urlopy</title>
</head>
<body>
    <div id="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>
    <div id="lewy">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wyczieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div id="srodkowy">
        <h2>GALERIA</h2>
        <!-- skrypt1 -->
        <?php
        if (!mysqli_error($polaczenie)) {
            $sql1 = 'select nazwaPliku, podpis from zdjecia order by podpis asc;';
            $zapytanie1 = mysqli_query($polaczenie, $sql1);
            while ($dane1 = mysqli_fetch_array($zapytanie1)) {
                echo "<img src='$dane1[0]' alt='$dane1[1]'>";
            }
        }
        ?>
    </div>
    <div id="prawy">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <th>Jesień</th>
                <th>Grupa 4+</th>
                <th>Grupa 10+</th>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </div>
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <!-- skrypt2 -->
        <?php
        if (!mysqli_error($polaczenie)) {
            $sql2 = 'select id, dataWyjazdu, cel, cena from wycieczki where dostepna = TRUE;';
            $zapytanie2 = mysqli_query($polaczenie, $sql2);
            while ($dane2 = mysqli_fetch_array($zapytanie2)) {
                echo "<p>$dane2[0]. $dane2[1], $dane2[2], cena: $dane2[3]</p>";
            }
        }
        ?>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>
<?php
    if (!mysqli_error($polaczenie)) {
          mysqli_close($polaczenie);  
    }
?>