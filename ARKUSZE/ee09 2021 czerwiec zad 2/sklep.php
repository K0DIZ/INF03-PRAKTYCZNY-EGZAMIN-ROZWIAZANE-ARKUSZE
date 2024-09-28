<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "produkty");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzywniak</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="baner1">
        <h1>Internetowy sklep z eko-warzywami</h1>
    </div>
    <div id="baner2">
        <ol>
            <li>warzywa</li>
            <li>owoce</li>
            <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
        </ol>
    </div>
            <!-- skrypt2 -->
            <?php
            $nazwa = @$_POST['nazwa'];
            $cena = @$_POST['cena'];
            if (!mysqli_error($polaczenie) && $nazwa != '' && $cena != '') {
                $sql2 = "INSERT INTO produkty VALUES (NULL, 1, 4, '$nazwa', 10, '', '$cena', 'owoce.jpg');";
                mysqli_query($polaczenie, $sql2);
            }
        ?>
    <div id="glowny">
        <!-- skrypt1 -->
        <?php
            if (!mysqli_error($polaczenie)) {
                $sql1 = "select nazwa, ilosc, opis, cena, zdjecie from produkty where rodzaje_id in (1, 2);";
                $zapytanie1 = mysqli_query($polaczenie, $sql1);
                while ($dane1 = mysqli_fetch_array($zapytanie1)) {
                    echo "<div class='produkt'>";
                    echo "<img src='$dane1[4]' alt='warzywniak'>";
                    echo "<h5>$dane1[0]</h5>";
                    echo "<p>opis: $dane1[2]</p>";
                    echo "<p>na stanie: $dane1[1]</p>";
                    echo "<h2>$dane1[3] zł</h2>";
                    echo "</div>";
                }
            }
        ?>
    </div>
    <div id="stopka">
        <form action="sklep.php" method="post">
            <label for="nazwa">Nazwa:</label>
            <input type="text" name="nazwa" id="nazwa">
            <label for="cena">Cena:</label>
            <input type="text" name="cena" id="cena">
            <input type="submit" name="submit" id="submit" value="Dodaj produkt">
        </form>
        <p>Stronę wykonał: 00000000000</p>
    </div>
</body>
</html>
<?php
    if (!mysqli_error($polaczenie)) {
        mysqli_close($polaczenie);
    }
?>