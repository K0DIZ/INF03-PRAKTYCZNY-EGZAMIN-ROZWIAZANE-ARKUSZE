<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div id="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <!-- skrypt1 -->
            <?php
                $polaczenie = mysqli_connect("localhost", "root", "", 'wedkowanie');
                if (!mysqli_error($polaczenie)) 
                {
                    $zapytanie = mysqli_query($polaczenie, "select nazwa, wystepowanie from ryby where styl_zycia = 1;");
                    while ($dane = mysqli_fetch_array($zapytanie)) 
                    {
                        echo "<li>$dane[0], występowanie: $dane[1]</li>";
                    }
                    mysqli_close($polaczenie);
                }
            ?>
        </ul>
    </div>
    <div id="prawy">
        <img src="ryba1.jpg" alt="Sum">
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="stopka">
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>