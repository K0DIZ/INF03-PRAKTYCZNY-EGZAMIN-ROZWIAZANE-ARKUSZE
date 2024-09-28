<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "hurtownia");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="baner">
        <h1>Hurtownia spożywcza</h1>
    </div>
    <div id="glowny">
        <h2>Opinie naszych klientów</h2>
        <!-- skrypt1 -->
        <?php
            if (!mysqli_error($polaczenie)) {
                $sql1 = 'select klienci.zdjecie, klienci.imie, opinie.opinia from klienci, opinie, typy where klienci.id = opinie.klienci_id and typy.id = klienci.typy_id and typy.id in (2, 3);';
                $zapytanie1 = mysqli_query($polaczenie, $sql1);
                while ($dane1 = mysqli_fetch_array($zapytanie1)) {
                    echo "<div class='blok'>";
                    echo "<img src='$dane1[0]' alt='klient'>";
                    echo "<cite>$dane1[2]</cite>";
                    echo "<h4>$dane1[1]</h4>";
                    echo "</div>";
                }
            }
        ?>
    </div>
    <div id="stopka1">
        <h3>Współpracują z nami</h3>
        <a href="http://sklep.pl/">Sklep 1</a>
    </div>
    <div id="stopka2">
        <h3>Nasi top klienci</h3>
        <!-- skrypt2 -->
        <?php
            if (!mysqli_error($polaczenie)) {
                $sql2 = 'select imie, nazwisko, punkty from klienci order by punkty desc limit 3;';
                $zapytanie2 = mysqli_query($polaczenie, $sql2);
                echo "<ol>";
                while ($dane2 = mysqli_fetch_array($zapytanie2)) {
                    echo "<li>$dane2[0] $dane2[1], $dane2[2] pkt.</li>";
                }
                echo "</ol>";
            }
        ?>
    </div>
    <div id="stopka3">
        <h3>Skontaktuj się</h3>
        <p>telefon: 111222333</p>
    </div>
    <div id="stopka4">
        <h3>Autor: 00000000000</h3>
    </div>
    <div class="clear"></div>
</body>
</html>
<?php
    if (!mysqli_error($polaczenie)) {
        mysqli_close($polaczenie);
    }
?>