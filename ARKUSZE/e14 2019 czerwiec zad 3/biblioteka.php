<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'biblioteka');
?>
<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<title>Biblioteka miejska</title>
	<link rel='stylesheet' href='style.css'>
</head>
<body>
	<div id='baner'>
		<h2>Miejska Biblioteka Publiczna w Książkowicach</h2>
	</div>
	<div id='lewy'>
		<h3>W naszych zbiorach znajdziesz dzieła następujących autorów:</h3>
		<ul>
			<?php
				$zapytanie1 = mysqli_query($polaczenie, "select imie, nazwisko from autorzy;");
				while ($dane1 = mysqli_fetch_array($zapytanie1)) {
					echo "<li>$dane1[0] $dane1[1]</li>";
				}
			?>
		</ul>
	</div>
	<div id='srodkowy'>
		<h3>Dodaj nowego czytelnika</h3>
		<form method='post' action='biblioteka.php'>
			<label for='name'>imię: </label>
			<input type='text' id='name' name='name'>
			<br>
			<label for='nazwisko'>nazwisko: </label>
			<input type='text' id='nazwisko' name='nazwisko'>
			<br>
			<label for='rok'>rok urodzenia: </label>
			<input type='number' id='rok' name='rok'>
			<br>
			<input type='submit' value='DODAJ'>
		</form>
		<?php
			$imie = @$_POST['name'];
			$nazwisko = @$_POST['nazwisko'];
			$rok = @$_POST['rok'];
			$imie2 = strtoupper(substr($imie, 0, 2));
			$nazwisko2 = strtoupper(substr($nazwisko, 0, 2));
			$rok2 = substr($rok, -2);
			$kod_uzytkownika = $imie2.$nazwisko2.$rok2;
			mysqli_query($polaczenie, "insert into czytelnicy values (null, '$imie', '$nazwisko', '$kod_uzytkownika');");
			if (isset($imie)) {
				echo "Czytelnik $imie $nazwisko został dodany do bazy danych";
			}
		?>
	</div>
	<div id='prawy'>
		<img src='biblioteka.png' alt='książki'>
		<h4>ul. Czytelnicza 25 <br> 12-120 Książkowice <br> tel.: 123123123 <br>e-mail: <a href='mailto:biuro@biblioteka.pl'>biuro@biblioteka.pl</a></h4>
	</div>
	<div id='stopka'>
		<p>Projekt strony: 00000000000</p>
	</div>
</body>
</html>
<?php
	mysqli_close($polaczenie);
?>