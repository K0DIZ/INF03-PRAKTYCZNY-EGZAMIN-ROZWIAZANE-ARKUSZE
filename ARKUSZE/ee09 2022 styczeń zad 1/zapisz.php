<?php
    if (isset($_POST["submit"])) {
        $polaczenie = mysqli_connect("localhost", "root", "", "wedkowanie");
        if (!mysqli_error($polaczenie)) {
            $imie = $_POST["imie"];
            $nazwisko = $_POST["nazwisko"];
            $adres = $_POST["adres"];

            mysqli_query($polaczenie, "INSERT INTO Karty_wedkarskie VALUES (NULL, '$imie', '$nazwisko', '$adres', NULL, NULL);");

            mysqli_close($polaczenie);
        }
    }   
?>