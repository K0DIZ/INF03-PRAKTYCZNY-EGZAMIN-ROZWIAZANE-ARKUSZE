<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'egzamin');
?>
<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<link rel='stylesheet' href='styl6.css'>
	<title>Odloty samolotów</title>
</head>
<body>
	<div id='baner-lewy'>
		<h2>Odloty z lotniska</h2>
	</div>
	<div id='baner-prawy'>
		<img src='zad6.png' alt='logotyp'>
	</div>
	<div class='clear'></div>
	<div id='glowny'>
		<h4>tabela odlotów</h4>
		<table>
			<tr>
				<th>lp.</th>
				<th>numer rejsu</th>
				<th>czas</th>
				<th>kierunek</th>
				<th>status</th>
			</tr>
			<?php
				if (!mysqli_error($polaczenie)) {
					$sql1 = "select id, nr_rejsu, czas, kierunek, status_lotu from odloty order by czas desc;";
					$zapytanie1 = mysqli_query($polaczenie, $sql1);
					while ($dane1 = mysqli_fetch_array($zapytanie1)) {
						echo "<tr>";
						echo "<td>$dane1[0]</td>";
						echo "<td>$dane1[1]</td>";
						echo "<td>$dane1[2]</td>";
						echo "<td>$dane1[3]</td>";
						echo "<td>$dane1[4]</td>";
						echo "</tr>";
					}
					mysqli_close($polaczenie);
				}
			?>
		</table>
	</div>
	<div id='stopka-lewa'>
		<a href='kwerendy.txt' target='_blank'>Pobierz obraz</a>
	</div>
	<div id='stopka-srodkowa'>
		<?php
			if (!isset($_COOKIE['wejscie'])) {
				setcookie('wejscie', 'wejscie', time() + (60 * 60), '/', 'localhost', false, false);
				echo '<p><b>Dzień dobry! Sprawdź regulamin naszej strony</p></b>';
			}
			else {
				echo '<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>';
			}	
		?>
	</div>
	<div id='stopka-lewa'>
		Autor: 00000000000
	</div>
	<div class='clear'></div>
</body>
</html>