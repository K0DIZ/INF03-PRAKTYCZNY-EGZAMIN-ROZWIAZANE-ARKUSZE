<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "wedkowanie");
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Wędkowanie</title>
        <link rel="stylesheet" href="styl_1.css">
    </head>

    <body>
        <div id="baner">
            <h1>Portal dla wędkarzy</h1>
        </div>
        <div id="lewy1">
            <h3>Ryby zamieszkujące rzeki</h3>
            <ol>
                <?php
                    $zapytanie1 = mysqli_query($polaczenie, 'SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE ryby.id = lowisko.Ryby_id AND lowisko.rodzaj = 3;');
                    $lista = mysqli_fetch_row($zapytanie1);
                    while ($lista) {
                        echo "<li>$lista[0] pływa w rzece $lista[1], $lista[2]</li>";
                        $lista = mysqli_fetch_row($zapytanie1);
                    }
                ?>
            </ol>
        </div>
        <div id="prawy">
            <img src="ryba1.jpg" alt="Sum">
            <br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
        <div id="lewy2">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <tr>
                    <th>L.p.</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
              <?php
                $zapytanie2 = mysqli_query($polaczenie, 'SELECT ryby.id, ryby.nazwa, ryby.wystepowanie FROM ryby WHERE ryby.styl_zycia = 1;');
                $lista2 = mysqli_fetch_row($zapytanie2);
                while ($lista2) {
                    echo "<tr><td>$lista2[0]</td><td>$lista2[1]</td><td>$lista2[2]</td></tr>";
                    $lista2 = mysqli_fetch_row($zapytanie2);
                }
                mysqli_close($polaczenie);
              ?>
            </table>
        </div>
        <div id="stopka">
            <p>Stronę wykonał: 00000000000</p>
        </div>
    </body>
</html>