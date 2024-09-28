<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'baza');
?>
<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<title>Restauracja Kulinaria.pl</title>
	<link rel='stylesheet' href='styl4.css'>
</head>
<body>
	<div id='baner'>
		<h2>Restauracja Kulinaria.pl Zaprasza!</h2>
	</div>
	<div id='lewy'>
		<?php
			$zapytanie1 = mysqli_query($polaczenie, "select min(cena) as min_cena from dania where typ = 2;");
			$dane1 = mysqli_fetch_row($zapytanie1);
			echo "<p>Dania mięsne zamówisz już od $dane1[0] złotych</p>";
		?>
		<img src='menu.jpg' alt='Pyszne spaghetti'>
		<a href='menu.jpg'>Pobierz obraz</a>
	</div>
	<div id='srodkowy'>
		<h3>Przekąski</h3>
		<?php
			$zapytanie2 = mysqli_query($polaczenie, "select id, nazwa, cena from dania where typ = 3;");
			while ($dane2 = mysqli_fetch_row($zapytanie2)) {
				echo "<p>$dane2[0] $dane2[1] $dane2[2]</p>";
			}
		?>
	</div>
	<div id='prawy'>
		<h3>Napoje</h3>
		<?php
			$zapytanie3 = mysqli_query($polaczenie, "select id, nazwa, cena from dania where typ = 4;");
			while ($dane3 = mysqli_fetch_row($zapytanie3)) {
				echo "<p>$dane3[0] $dane3[1] $dane3[2]</p>";
			}
		?>
	</div>
	<div id='stopka'>
		Stronę internetową opracował <i>00000000000</i>
	</div>
</body>
</html>
<?php
	mysqli_close($polaczenie);
?>