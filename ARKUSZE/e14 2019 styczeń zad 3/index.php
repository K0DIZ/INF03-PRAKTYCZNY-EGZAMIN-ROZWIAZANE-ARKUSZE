<?php
	require_once 'connect.php';
	$polaczenie = mysqli_connect($host, $user, $pass, $dbname) or die ('Nie udało się połączyć!');
?>
<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<title>Filmoteka</title>
	<link rel='stylesheet' href='styl3.css'>
</head>
<body>
	<div id='baner1'>
		<img src='klaps.png' alt='Nasze filmy'>
	</div>
	<div id='baner2'>
		<h2>BAZA FILMÓW</h2>
	</div>
	<div id='baner3'>
		<form method='post' action='index.php'>
			<select id='sel' name='sel'>
				<option value='1'>Sci-Fi</option>
				<option value='2'>animacja</option>
				<option value='3'>dramat</option>
				<option value='4'>horror</option>
				<option value='5'>komedia</option>
			</select>
			<input type='submit' value='Filmy'>
		</form>
	</div>
	<div id='baner4'>
		<img src='gwiezdneWojny.jpg' alt='szturmowcy'>
	</div>
	<div class='clear'></div>
	<div id='lewy'>
		<h2>Wybrano filmy</h2>
		<?php
			if ($polaczenie) {
					$filmy = $_POST['sel'];
					$filmy = intval($filmy);
					@$sql1 = "select tytul, rok, ocena from filmy where gatunki_id=". $filmy.";";
					$zapytanie1 = mysqli_query($polaczenie, $sql1);
					while ($dane1 = mysqli_fetch_row($zapytanie1)) {
						echo "<p>Tytuł: $dane1[0], Rok produkcji: $dane1[1], Ocena: $dane1[2]</p>";
					}
				}
		?>
	</div>
	<div id='prawy'>
		<h2>Wszystkie filmy</h2>
		<?php
			$zapytanie2 = mysqli_query($polaczenie, "select filmy.id, filmy.tytul, rezyserzy.imie, rezyserzy.nazwisko from filmy, rezyserzy where rezyserzy.id = filmy.rezyserzy_id;");
				while ($dane2 = mysqli_fetch_row($zapytanie2)) {
						echo "<p>$dane2[0]. $dane2[1], reżyseria: $dane2[2] $dane2[3]</p>";
				}
		?>
	</div>
	<div class='clear'></div>
	<div id='stopka'>
		<p>Autor: 00000000000</p>
		<a href='kwerendy.txt'>Zapytania do bazy</a>
		<a href='filmy.pl' target='_blank'>Przejdź do filmy.pl</a>
	</div>
</body>
</html>
<?php 
	if ($polaczenie) {
		mysqli_close($polaczenie);
	}
?>