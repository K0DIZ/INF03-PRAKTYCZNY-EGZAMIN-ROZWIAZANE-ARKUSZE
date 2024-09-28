<?php
    $polaczenie = mysqli_connect("localhost", "root", "", "wedkarstwo");
    if (!mysqli_error($polaczenie)) 
    {
        $lowisko = $_POST["lowisko"];
        $data = $_POST["data"];
        $sedzia = $_POST["sedzia"];

        mysqli_query($polaczenie, "INSERT INTO zawody_wedkarskie VALUES (NULL, 0, '$lowisko', '$data', '$sedzia');");
        echo "Dodano do bazy";
        mysqli_close($polaczenie);
    }
?>