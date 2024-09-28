<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<title>Hurtownia</title>
	<link rel='stylesheet' href='styl1.css'>
</head>
<body>
	<div id='logo'>
		<img src='komputer.png' alt='hurtownia komputerowa'>
	</div>
	<div id='lista'>
		<ul>
			<li>Sprzęt
				<ol>
					<li>Procesory</li>
					<li>Pamięć RAM</li>
					<li>Monitory</li>
					<li>Obudowy</li>
					<li>Karty graficzne</li>
					<li>Dyski twarde</li>
				</ol>
			</li>
			<li>Oprogramowanie</li>
		</ul>
	</div>
	<div id='formularz'>
		<h2>Hurtownia komputerowa</h2>
		<form method='post' action='sklep.php'>
			<label for='kat'>Wybierz kategorię sprzętu</label>
			<input type='text' id='kat' name='kat'>
			<input type='submit' value='SPRAWDŹ'>
		</form>
	</div>
	<div id='glowny'>
		<h1>Podzespoły we wskazanej kategorii</h1>
		<?php 
			$polaczenie = mysqli_connect('localhost', 'root', '', 'sklep');
			$kat = @$_POST['kat'];
			if ($kat == '') {
				echo 'Wybierz poprawną kategorię sprzętu';
			}
			else {
				$sql = "select nazwa, opis, cena from podzespoly where typy_id = $kat;";
				$zapytanie = mysqli_query($polaczenie, $sql); 
				while ($dane = mysqli_fetch_array($zapytanie)) {
					echo "<p>$dane[0] $dane[1] CENA: $dane[2]</p>";
				}
			}
			mysqli_close($polaczenie);
		?>
	</div>
	<div id='stopka'>
		<h3>Hurtownia działa od poniedziałku do soboty w godzinach 7<sup>00</sup>-16<sup>00</sup></h3>
		<a href='mailto:bok@hurtownia.pl'>Napisz do nas</a>
		Partnerzy
		<a href='http://intel.pl/' target='_blank'>Intel</a>
		<a href='http://amd.pl/' target='_blank'>AMD</a>
		<p>Stronę wykonał: 00000000000</p>
	</div>
</body>
</html>