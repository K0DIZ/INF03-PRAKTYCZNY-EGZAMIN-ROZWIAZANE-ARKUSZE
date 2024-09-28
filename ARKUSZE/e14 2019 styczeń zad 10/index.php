<?php 
	$polaczenie = mysqli_connect('localhost', 'root', '', 'baza');
?>

<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<title>Odżywianie zwierząt</title>
	<link rel='stylesheet' href='style4.css'>
</head>
<body>
	<div id='baner'>
		<h2>DRAPIEŻNIKI I INNE</h2>
	</div>
	<div id='formularz'>
		<h3>Wybierz styl życia:</h3>
		<form method='post' action='index.php'>
			<select id='select' name='select'>
				<option value='1'>Drapieżniki</option>
				<option value='2'>Roślinożerne</option>
				<option value='3'>Padlinożerne</option>
				<option value='4'>Wszytkożerne</option>
			</select>
			<input type='submit' value='Zobacz'>
		</form>
	</div>
	<div id='lewy'>
		<h3>Lista zwierząt<h3>
		<?php
			$sql1 = "select zwierzeta.gatunek, odzywianie.rodzaj from zwierzeta, odzywianie where zwierzeta.Odzywianie_id = odzywianie.id;";
			$zapytanie1 = mysqli_query($polaczenie, $sql1);
			echo '<ul>';
			while ($dane1 = mysqli_fetch_array($zapytanie1)) {
				echo "<li>$dane1[0] -> $dane1[1]</li>";
			}
			echo '</ul>';
		?>
	</div>
	<div id='srodkowy'>
		<?php
			$wybor = @$_POST['select'];
			if ($wybor == '1') {
				echo '<h3>Drapieżnik</h3>';
			}
			else if ($wybor == '2') {
				echo '<h3>Roślonożerne</h3>';
			}
			else if ($wybor == '3') {
				echo '<h3>Padlinożerne</h3>';
			}
			else if ($wybor == '4') {
				echo '<h3>Wszystkożerne</h3>';
			}
			$sql2 = "select id, gatunek, wystepowanie from zwierzeta where Odzywianie_id = '$wybor';";
			$zapytanie2 = mysqli_query($polaczenie, $sql2);
			while ($dane2 = mysqli_fetch_array($zapytanie2)) {
				echo "<p>$dane2[0]. $dane2[1], $dane2[2]</p>";
			}
		?>
	</div>
	<div id='prawy'>
		<img src='drapieznik.jpg' alt='Wilki'>
	</div>
	<div id='stopka'>
		<a href='pl.wikipedia.org' target='_blank'>Poczytaj o zwierzętach na Wikipedii</a>
		autor strony: 00000000000
	</div>
</body>
</html>
<?php
	mysqli_close($polaczenie);
?>