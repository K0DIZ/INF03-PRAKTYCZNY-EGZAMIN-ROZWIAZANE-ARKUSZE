<?php
  $polaczenie = mysqli_connect("localhost", "root", "", "egzamin6");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Organizer</title>
  <link rel="stylesheet" href="styl6.css">
</head>
<body>
  <div id="baner1">
    <h2>MÓJ ORGANIZER</h2>
  </div>
  <div id="baner2">
    <form method="post" action="organizer.php">
      <label for="wpis">Wpis wydarzenia: </label>
      <input type="text" name="wpis" id="wpis">
      <input type="submit" id="submit" name="submit" value="ZAPISZ">
    </form>
    <?php
      if (!mysqli_error($polaczenie)) {
        $dane = @$_POST["wpis"];
        if ($dane != "") {
          mysqli_query($polaczenie, "UPDATE zadania SET wpis='$dane' WHERE dataZadania = '2020-08-27';");
        }
      }
    ?>
  </div>
  <div id="baner3">
    <img src="logo2.png" alt="Mój organizer">
  </div>
  <div id="glowny">
    <?php
     if (!mysqli_error($polaczenie)) {
      $zapytanie1 = mysqli_query($polaczenie, "SELECT dataZadania, miesiac, wpis FROM zadania where miesiac = 'sierpien';");
      while ($dane1 = mysqli_fetch_array($zapytanie1)) {
        echo "<div class='blok'><h6>$dane1[0], $dane1[1]</h6><p>$dane1[2]</p></div>";
      }
     }
    ?>
  </div>
  <div id="stopka">
    <?php
     if (!mysqli_error($polaczenie)) {
      $zapytanie2 = mysqli_query($polaczenie, "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01';");
      $dane2 = mysqli_fetch_array($zapytanie2);
      echo "<h1>miesiąc: $dane2[0], rok: $dane2[1]</h1>";
     }
    ?>
    <p>Stronę wykonał: 00000000000</p>
  </div>
</body>
</html>
<?php
  if (!mysqli_error($polaczenie)) {
    mysqli_close($polaczenie);
  }
?>