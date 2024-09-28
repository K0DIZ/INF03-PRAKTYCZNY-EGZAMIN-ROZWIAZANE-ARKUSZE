<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "baza");
    if (!mysqli_error($polaczenie)) {
        $data = $_POST["1"];
        $l_osob = $_POST["l_osob"];
        $numer_tel = $_POST["numer_tel"];
        $checkbox = $_POST["checkbox"];

        $zapytanie = mysqli_query($polaczenie, "INSERT INTO rezerwacje VALUES (NULL, NULL, '$data', '$l_osob', '$numer_tel');");
        echo "Dodano rezerwację do bazy";
        mysqli_close($polaczenie);
    }
?>