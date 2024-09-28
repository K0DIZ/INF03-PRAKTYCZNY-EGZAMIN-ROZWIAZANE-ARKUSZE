<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "forumpsy");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Forum miłośników psów</h1>
    </div>
    <div id="lewy">
        <img src="Avatar.png" alt="Użytkownik forum">
        <?php
            if (!mysqli_error($polaczenie))
            {
                $zapytanie1 = mysqli_query($polaczenie, "SELECT konta.nick, konta.postow, pytania.pytanie FROM konta, pytania WHERE pytania.konta_id = konta.id AND pytania.id = 1;");
                $dane1 = mysqli_fetch_array($zapytanie1);
                
                echo "<h4>Użytkownik: $dane1[0]</h4>";
                echo "<p>$dane1[1] postów na forum</p>"; 
                echo "<p>$dane1[2]</p>";
            }
        ?>
        <!-- WAŻNE -->
        <video controls autoplay loop>
            <source src="video.mp4" type="video/mp4">
        </video>
        <!-- WAŻNE -->
    </div>
    <div id="prawy">
        <form method="post">
            <textarea name="comment" id="comment" cols="40" rows="4"></textarea> <!-- WAŻNE -->
            <br>
            <!-- WAŻNE -->
            <input type="submit" id="submit" value="Dodaj odpowiedź" onclick="<?php 
            $klik = true;  
            if ((!mysqli_error($polaczenie)))
             {
  
                    $comment = $_POST["comment"];
                    if ($comment != "")
                    {
                        mysqli_query($polaczenie, "INSERT INTO odpowiedzi VALUES (NULL, 1, 5, '$comment');");
                    }
                }
            ?>">
            <!-- WAŻNE -->
        </form>
          <h2>Odpowiedzi na pytanie</h2>
          <?php
            $zapytanie3 = mysqli_query($polaczenie, "SELECT odpowiedzi.id, odpowiedzi.odpowiedz, konta.nick FROM odpowiedzi, konta WHERE konta.id = odpowiedzi.konta_id AND odpowiedzi.Pytania_id = 1;");
            echo "<ol>";
            while ($dane3 = mysqli_fetch_array($zapytanie3))
            {
                echo "<li>$dane3[1] <em>$dane3[2]</em></li>";
                echo "<hr>";
            }
            echo "</ol>";
          ?>
    </div>
    <div id="stopka">
        Autor: 00000000000 <a href="http://mojestrony.pl/" target="_blank">Zobacz nasze realizacje</a>
    </div>
</body>
</html>
<?php
    if (!mysqli_error($polaczenie))
    {
        mysqli_close($polaczenie);    
    }
?>