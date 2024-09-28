<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    <div id="glowny">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $polaczenie = mysqli_connect("localhost", "root", "", "dane");
            if (!mysqli_error($polaczenie))
            {
                $zapytanie = mysqli_query($polaczenie, "SELECT osoby.imie, osoby.nazwisko, osoby.opis, osoby.zdjecie FROM osoby, hobby WHERE osoby.hobby_id = hobby.id AND hobby.id IN (1,2,6);");

                while ($dane = mysqli_fetch_array($zapytanie)) 
                {
                    echo "<div class='zdjecie'><img src='$dane[3]' alt='przyjaciel'></div>";
                    echo "<div class='opis'><h3>$dane[0] $dane[1]</h3><p>Ostatni wpis: $dane[2]</p></div>";
                    echo "<div class='linia'><hr></div>";
                }
                mysqli_close($polaczenie);
            }
        ?>
    </div>
    <div id="stopka1">
        Stronę wykonał: 00000000000
    </div>
    <div id="stopka2">
        <a href="mailto:ja@portal.pl">napisz do mnie</a> 
        <!-- WAZNE -->
    </div>
    <div style="clear: both;"></div>
</body>
</html>