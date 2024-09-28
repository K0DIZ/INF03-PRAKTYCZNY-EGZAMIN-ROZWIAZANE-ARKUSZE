<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "dane3");
?>
<?php
if (!mysqli_error($polaczenie)) {
    $nazwa = @$_POST["number"];
    if ($nazwa != "") {
        mysqli_query($polaczenie, "delete from produkty where id = '$nazwa';");
    }
}
        ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="baner-lewy">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div id="baner-prawy">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>
    <div id="blok-listy-1">
        <h3>Polecamy</h3>
        <?php
            if (!mysqli_error($polaczenie)) {
                $sql1 = 'select id, nazwa, opis, zdjecie from produkty where id in (18, 22, 23, 25);';
                $zapytanie1 = mysqli_query($polaczenie, $sql1);
                while ($dane1 = mysqli_fetch_array($zapytanie1)) {
                    echo "<div class='film'>";
                    echo "<h4>$dane1[0]. $dane1[1]</h4>";
                    echo "<img src='$dane1[3]' alt='film'>";
                    echo "<p>$dane1[2]</p>";
                    echo "</div>";
                }
            }
        ?>
        <div class="clear"></div>
    </div>
    <div id="blok-listy-2">
        <h3>Filmy fantastyczne</h3>
        <?php
          if (!mysqli_error($polaczenie)) {
            $sql2 = 'select id, nazwa, opis, zdjecie from produkty where Rodzaje_id = 12;';
            $zapytanie2 = mysqli_query($polaczenie, $sql2);
            while ($dane2 = mysqli_fetch_array($zapytanie2)) {
                echo "<div class='film'>";
                echo "<h4>$dane2[0]. $dane2[1]</h4>";
                echo "<img src='$dane2[3]' alt='film'>";
                echo "<p>$dane2[2]</p>";
                echo "</div>";
            }
        }
        ?>
        <div class="clear"></div>
    </div>
    <div id="stopka">
        <form action="video.php" method="post">
            <label for="number">Usuń film nr.: </label>
            <input type="number" name="number" id="number">
            <input type="submit" value="Usuń film">
        </form>
        <p>Stronę wykonał: <a href="mailto:ja@poczta.com">00000000000</a></p>
    </div>
</body>
</html>
<?php
    if (!mysqli_error($polaczenie)) {
        mysqli_close($polaczenie);
    }
?>