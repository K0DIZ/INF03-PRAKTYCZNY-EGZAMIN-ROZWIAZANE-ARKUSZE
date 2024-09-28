<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "firma");
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Sekretartiat</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <div id="lewy">
            <h1>Akta Pracownicze</h1>
            <?php
               if (!mysqli_error($polaczenie)) 
               {
                $zapytanie1 = mysqli_query($polaczenie, "SELECT imie, nazwisko, adres, miasto, czyRODO, czyBadania FROM pracownicy WHERE id = 2;");
                $dane1 = mysqli_fetch_array($zapytanie1);
                echo "<h3>dane</h3>";
                echo "<p>$dane1[0] $dane1[1]</p>";
                echo "<hr>";
                echo "<h3>adres</h3>";
                echo "<p>$dane1[2]</p>";
                echo "<p>$dane1[3]</p>";
                echo "<hr>";
                if ($dane1[4] == 1)
                {
                    echo "<p>RODO: podpisano</p>";
                }
                else
                {
                    echo "<p>RODO: niepodpisano</p>";
                }
                if ($dane1[5] == 1)
                {
                    echo "<p>Badania: aktualne</p>";
                }
                else
                {
                    echo "<p>Badania: nieaktualne</p>";
                }
               }
            ?>
            <hr>
            <h3>Dokumenty pracownika</h3>
            <a href="cv.txt">Pobierz</a>
            <h1>Liczba zatrudnionych pracowników</h1>
            <?php
                $zapytanie2 = mysqli_query($polaczenie, "SELECT COUNT(id) FROM pracownicy;");
                $dane2 = mysqli_fetch_array($zapytanie2);
                echo "<p>$dane2[0]</p>";
            ?>
        </div>
        <div id="prawy">
            <?php
            $zapytanie3 = mysqli_query($polaczenie, "SELECT id, imie, nazwisko FROM pracownicy WHERE id = 2;");
            $dane3 = mysqli_fetch_array($zapytanie3);
            $nazwa_pliku = "$dane3[0].jpg";
            echo "<img src=$nazwa_pliku alt='pracownik'>";
            echo "<h2>$dane3[1] $dane3[2]</h2>";
            $zapytanie4 = mysqli_query($polaczenie, "SELECT pracownicy.id, stanowiska.nazwa, stanowiska.opis FROM pracownicy, stanowiska WHERE stanowiska.id = pracownicy.stanowiska_id AND pracownicy.id = 2; ");
            $dane4 = mysqli_fetch_array($zapytanie4);
            echo "<h4>$dane4[1]</h4>";
            echo "<h5>$dane4[2]</h5>";
            ?>
        </div>
        <div id="stopka">
            Autorem aplikacji jest: 00000000000
            <ul>
                <li>skontaktuj się</li>
                <li>poznaj naszą firmę</li>
            </ul>
        </div>
    </body>
</html>
<?php
    if (!mysqli_error($polaczenie)) 
    {
        mysqli_close($polaczenie);   
    }
?>