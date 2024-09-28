<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'dane4');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Panel administratora</title>
	<link rel='stylesheet' href='styl4.css'>
</head>
<body>
	<div id='baner'>
		<h3>Portal Społecznościowy - panel administratora</h3>
	</div>
	<div id='lewy'>
		<h4>Użytkownicy</h4>
		<?php
			if (!mysqli_error($polaczenie)) {
				$sql1 = "select id, imie, nazwisko, rok_urodzenia, zdjecie from osoby limit 30;";
				$zapytanie1 = mysqli_query($polaczenie, $sql1);
				while ($dane1 = mysqli_fetch_array($zapytanie1)) {
					$wiek = date('Y') - $dane1[3];
					echo "$dane1[0]. $dane1[1] $dane1[2], $wiek lat";
					echo "<br>";
				}
			}
		?>
		<a href='settings.html'>Inne ustawienia</a>
	</div>
	<div id='prawy'>
		<h4>Podaj id użytkownika</h4>
		<form method='post' action='users.php'>
			<input type='number' id='numer' name='numer'>
			<input type='submit' value='ZOBACZ'>
		</form>
		<hr>
		<?php
			$numer = @$_POST['numer'];
			if (!mysqli_error($polaczenie) && isset($numer) && $numer != '') {
				$sql2 = "select imie, nazwisko, rok_urodzenia, opis, zdjecie, nazwa from osoby, hobby where osoby.Hobby_id = hobby.id and osoby.id = '$numer';";
				$zapytanie2 = mysqli_query($polaczenie, $sql2);
				$dane2 = mysqli_fetch_array($zapytanie2);
				if ($dane2 != "") {
					echo "<h2>$numer. $dane2[0] $dane2[1]</h2>";
					echo "<img src='$dane2[4]' alt='$numer'>";
					echo "<p>Rok urodzenia: $dane2[2]</p>";
					echo "<p>Opis: $dane2[3]</p>";
					echo "<p>Hobby: $dane2[5]</p>";
				}
			}
		?>
	</div>
	<div id='stopka'>
		Stronę wykonał: 00000000000
	</div>
</body>
</html>
<?php
	if (!mysqli_error($polaczenie)) {
		mysqli_close($polaczenie);
	}
?>

