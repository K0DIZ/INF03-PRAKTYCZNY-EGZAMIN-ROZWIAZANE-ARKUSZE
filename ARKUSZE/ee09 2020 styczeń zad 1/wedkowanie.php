<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h2>Wędkuj z nami!</h2>
    </div>
    <div id="lewy">
        <img src="ryba2.jpg" alt="Szczupak">
    </div>
    <div id="prawy">
        <h3>Ryby spokojnego żeru (białe)</h3>
        <!-- skrypt -->
        <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "wedkowanie2");
            if (!mysqli_error($polaczenie)) {
                $zapytanie = mysqli_query($polaczenie, "SELECT id, nazwa, wystepowanie FROM ryby where styl_zycia = 2;");
                while ($dane = mysqli_fetch_row($zapytanie)) {
                    echo "<p>$dane[0]. $dane[1], występuje w: $dane[2]</p>";
                }
                
            }
            mysqli_close($polaczenie);
        ?>
        <ol>
            <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
            <li><a href="http://www.pzw.or.pl/" target="_blank">Polski Związek Wędkarski</a></li>
        </ol>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>