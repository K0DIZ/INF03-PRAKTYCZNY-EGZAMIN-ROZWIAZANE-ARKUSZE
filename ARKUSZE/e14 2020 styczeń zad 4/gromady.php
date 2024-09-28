<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'baza');
?>
<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<link rel='stylesheet' href='style2.css'>
	<title>Gromady kręgowców</title>
</head>
<body>
	<div id='menu'>
		<a href='gromada-ryby.html'>gromada ryb</a>
		<a href='gromada-ptaki.html'>gromada ptaków</a>
		<a href='gromada-ssaki.html'>gromada ssaków</a>
	</div>
	<div id='logo'>
		<h2>GROMADY KRĘGOWCÓW</h2>
	</div>
	<div class='clear'></div>
	<div id='lewy'>
	<?php
		if(!mysqli_error($polaczenie)) {
			$zapytanie1 = mysqli_query($polaczenie, "select id, Gromady_id, gatunek, wystepowanie from Zwierzeta where Gromady_id = 4 or Gromady_id = 5;");
			while ($dane1 = mysqli_fetch_array($zapytanie1)) {
				echo "<p>$dane1[0]. $dane1[2]</p>";
				if ($dane1[1] == 4) {
					$gromada = 'ptaki';
				}
				else if ($dane1[1] == 5) {
						$gromada = 'ssaki';
				}
				echo "<p>Występowanie: $dane1[3], gromada $gromada</p>";
				echo '<hr>';
			}
		}
	?>
	</div>
	<div id='prawy'>
		<h1>PTAKI</h1>
		<ol>
			<?php
				if(!mysqli_error($polaczenie)) {
					$zapytanie2 = mysqli_query($polaczenie, "select gatunek, obraz from zwierzeta where Gromady_id = 4;");
					while ($dane2 = mysqli_fetch_array($zapytanie2)) {
						echo "<li><a href='$dane2[1]'>$dane2[0]</a></li>";
					}
				}
			?>
		</ol>
		<img src='sroka.jpg' alt='sroka zwyczajna, gromada ptaki'>
	</div>
	<div class='clear'></div>
	<div id='stopka'>
		Stronę o kręgowcach przygotował: 00000000000
	</div>
</body>
</html>
<?php
	if(!mysqli_error($polaczenie)) {
		mysqli_close($polaczenie);
	}
?>