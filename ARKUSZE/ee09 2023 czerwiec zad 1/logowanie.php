<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Forum o psach</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
        <div id="baner">
            <h1>Forum wielbicieli psów</h1>
        </div>
        <div id="lewy">
            <img src="obraz.jpg" alt="foksterier">
        </div>
        <div id="prawy1">
            <h2>Zapisz się</h2>
            <form method="post">
                <label for="login">login: </label>
                <input type="text" id="login" name="login">
                <br>
                <label for="haslo1">hasło: </label>
                <input type="password" id="haslo1" name="haslo1">
                <br>
                <label for="haslo2">powtórz hasło: </label>
                <input type="password" id="haslo2" name="haslo2">
                <br>
                <input type="submit" name="wyslij" id="wyslij" value="Zapisz">
            </form>
            <?php
                if (isset($_POST["wyslij"]))
                {
                    $polaczenie = mysqli_connect("localhost", "root", "", "psy");

                    $login1 = $_POST["login"];
                    $haslo1 = $_POST["haslo1"];
                    $haslo2 = $_POST["haslo2"];

                    if ($login1 == "" || $haslo1 == "" || $haslo2 == "")
                    {
                        echo "<p>wypełnij wszystkie pola</p>";
                    }
                    else
                    {
                        $zapytanie1 = mysqli_query($polaczenie,  "SELECT login FROM uzytkownicy;");
                        $login_zapytanie = mysqli_fetch_array($zapytanie1);
                        $same_login = false;
                
                        while ($login_zapytanie) 
                        {
                            if ($login_zapytanie[0] == $login1)
                            {
                                $same_login = true;
                                $login_zapytanie = mysqli_fetch_array($zapytanie1);
                            }
                            else 
                            {
                                $login_zapytanie = mysqli_fetch_array($zapytanie1);
                            }
                        }
                        if ($same_login) 
                        {
                            echo "<p>login występuje w bazie danych, konto nie zostało dodane</p>";
                        }
                        else if ($haslo1 != $haslo2)
                        {
                            echo "<p>hasła nie są takie same, konto nie zostało dodane</p>";
                        }
                        else
                        {
                            $haslo = sha1($haslo2);
                            mysqli_query($polaczenie, "INSERT INTO uzytkownicy VALUES (NULL, '$login1', '$haslo');");
                            echo "<p>Konto zostało dodane</p>";
                        };
                    }
                    mysqli_close($polaczenie);
                }
            ?>
        </div>
        <div id="prawy2">
            <h2>Zapraszamy wszystkich</h2>
            <ol>
                <li>właścicieli psów</li>
                <li>weterynarzy</li>
                <li>tych, co chcą kupić psa</li>
                <li>tych, co lubią psy</li>
                <a href="regulamin.html">Przeczytaj regulamin forum</a>
            </ol>
        </div>
        <div id="stopka">
            Stronę wykonał: 00000000000
        </div>
    </body>
</html>