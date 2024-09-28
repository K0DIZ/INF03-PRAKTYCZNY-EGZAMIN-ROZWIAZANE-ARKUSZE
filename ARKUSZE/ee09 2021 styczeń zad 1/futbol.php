<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "egzamin");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h2>Światowe rozgrywki piłkarskie</h2>
        <img src="obraz1.jpg" alt="boisko">
    </div>
    <div id="mecze">
        <?php
            if (!mysqli_error($polaczenie)) 
            {
                $zapytanie1 = mysqli_query($polaczenie, "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG'");
                while ($dane1 = mysqli_fetch_array($zapytanie1))
                {
                    $blok = "<div class='blok'><h3>$dane1[0] - $dane1[1]</h3><h4>$dane1[2]</h4><p>w dniu: $dane1[3]</p></div>";
                    echo $blok;
                }
            }
        ?>
    </div>
    <div id="glowny">
        <h2>Reprezentacja Polski</h2>
    </div>
    <div id="lewy">
        <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
        <form method="post" action="futbol.php">
            <input type="number" name="number" id="number">
            <input type="submit" name="submit" id="submit" value="Sprawdź">
                <?php
                    if (!mysqli_error($polaczenie)) 
                    {
                        $numer = @$_POST["number"];
                        if ($numer != "") {
                        $zapytanie2 = mysqli_query($polaczenie, "SELECT zawodnik.imie, zawodnik.nazwisko FROM zawodnik, pozycja WHERE zawodnik.pozycja_id = pozycja.id AND pozycja.id = $numer");
                        echo "<ul>";
                        while ($dane2 = mysqli_fetch_array($zapytanie2))
                        {
                            echo "<li>$dane2[0] $dane2[1]</li>";
                        }
                        echo "</ul>";
                    }
                    }
                ?>
        </form>
    </div>
    <div id="prawy">
        <img src="zad1.png" alt="piłkarz">
        <p>Autor: 00000000000</p>
    </div>
    <div style="clear:both"></div>
</body>
</html>
<?php           
    mysqli_close($polaczenie);
?>