<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'sklep');
?>

<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<title>Sklep papierniczy</title>
	<link rel='stylesheet' href='styl.css'>
</head>
<body>
	<div id='baner'>
		<h1>W naszym sklepie internetowym kupisz najtaniej</h1>
	</div>
	<div id='lewy'>
		<h3>Promocja 15% obejmuje artykuły:</h3>
		<ul>
			<?php
				$zapytanie1 = mysqli_query($polaczenie, "select nazwa from towary where promocja = 1;");
				while ($dane1 = mysqli_fetch_array($zapytanie1)) {
					echo "<li>$dane1[0]</li>";
				}
			?>
		</ul>
	</div>
	<div id='srodkowy'>
		<h3>Cena wybranego artykułu w promocji</h3>
		<form method='post' action='index.php'>
			<select id='wybor' name='wybor'>
				<option value='Gumka do mazania'>Gumka do mazania</option>
				<option value='Cienkopis'>Cienkopis</option>
				<option value='Pisaki 60 szt.'>Pisaki 60 szt.</option>
				<option value='Markery 4 szt.'>Markery 4 szt.</option>
			</select>
			<input type='submit' value='WYBIERZ'>
		</form>
		<?php
			$wartosc = @$_POST['wybor'];
			$zapytanie2 = mysqli_query($polaczenie, "select cena from towary where nazwa = '$wartosc';");
			$dane2 = mysqli_fetch_array($zapytanie2);
			$cena = $dane2[0] * 0.85;
			$cena_zaokr = round($cena, 2);
			echo $cena_zaokr;
		?>
	</div>
	<div id='prawy'>
		<h3>Kontakt</h3>
		<p>telefon: 123123123 <br> e-mail: <a href='mailto:bok@sklep.pl'>bok@sklep.pl</a></p>
		<img src='promocja2.png' alt='promocja'>
	</div>
	<div id='stopka'>
		<h4>Autor strony: 00000000000</h4>
	</div>
</body>
</html>
<?php
	mysqli_close($polaczenie);
?>