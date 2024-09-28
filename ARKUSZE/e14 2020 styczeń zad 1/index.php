<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UFT-8'>
	<title>Nasz sklep komputerowy</title>
	<link rel='stylesheet' href='styl8.css'>
</head>
<body>
	<div id='menu'>
		<a href='index.html'>Główna</a>
		<a href='procesory.html'>Procesory</a>
		<a href='ram.html'>RAM</a>
		<a href='grafika.html'>Grafika</a>
	</div>
	<div id='logo'>
		<h2>Podzespoły komputerowe</h2>
	</div>
	<div class='clear'></div>
	<div id='glowny'>
		<h1>Dzisiejsze promocje</h1>
		<table>
			<tr>
				<th>NUMER</th>
				<th>NAZWA PODZESPOŁU</th>
				<th>OPIS</th>
				<th>CENA</th>
			</tr>
			<?php
				$polaczenie = mysqli_connect('localhost', 'root', '', 'sklep');
				if (!mysqli_error($polaczenie)) {
					$zapytanie = mysqli_query($polaczenie, 'select id, nazwa, opis, cena from podzespoly where cena < 1000;');
					while ($dane = mysqli_fetch_array($zapytanie)) {
						echo "<tr>";
						echo "<td>$dane[0]</td><td>$dane[1]</td><td>$dane[2]</td><td class='td_prawa'>$dane[3]</td>";
						echo "</tr>";
					}
					mysqli_close($polaczenie);
				}
			?>
		</table>
	</div>
	<div id='stopka1'>
		<img src='scalak.jpg' alt='promocje na procesory'>
	</div>
	<div id='stopka2'>
		<h4>Nasz Sklep Komputerowy</h4>
		<p>Współpracujemy z hurtownią <a href='http://www.edata.pl/' target='_blank'>edata</a></p>
	</div>
	<div id='stopka3'>
		<p>zadzwoń: 601 602 603</p>
	</div>
	<div id='stopka4'>
		<p>Stronę wykonał: 00000000000</p>
	</div>
	<div class='clear'></div>
</body>

</html>