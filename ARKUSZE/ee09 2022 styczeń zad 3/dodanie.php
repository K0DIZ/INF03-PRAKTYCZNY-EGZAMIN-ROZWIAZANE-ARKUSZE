<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'ee09');
	if (!mysqli_error($polaczenie)) {
		$nr_karetki = @$_POST['nr_karetki'];
		$ratownik1 = @$_POST['ratownik1'];
		$ratownik2 = @$_POST['ratownik2'];
		$ratownik3 = @$_POST['ratownik3'];
		
		if ($nr_karetki != '' || ($ratownik1 != '' || $ratownik2 != '' || $ratownik3 != '')) {
			$sql = "insert into ratownicy values (NULL, '$nr_karetki', '$ratownik1', '$ratownik2', '$ratownik3');";	
			mysqli_query($polaczenie, $sql);
			echo "Do bazy zostało wysłane zapytanie: $sql";
		}
		mysqli_close($polaczenie);
	}
?>