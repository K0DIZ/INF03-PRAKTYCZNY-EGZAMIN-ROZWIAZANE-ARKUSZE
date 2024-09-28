<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'portal');
?>
<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset='UTF-8'>
	<title>Portal społecznościowy</title>
	<link rel='stylesheet' href='styl5.css'>
</head>
<body>
	<div id='baner-lewy'>
		<h2>Nasze osiedle</h2>
	</div>
	<div id='baner-prawy'>
		<?php
		if (!mysqli_error($polaczenie)) {
			$sql1 = "select count(id) from dane;";
			$zapytanie1 = mysqli_query($polaczenie, $sql1);
			$dane1 = mysqli_fetch_array($zapytanie1);
			echo "<h5>Liczba użytkowników portalu: $dane1[0]</h5>";
		}
		?>
	</div>
	<div class='clear'></div>
	<div id='lewy'>
		<h3>Logowanie</h3>
		<form method='post' action='uzytkownicy.php'>
			<label for='login'>login</label>
			<input type='text' id='login' name='login'>
			<label for='password'>haslo</label>
			<input type='password' id='password' name='password'>
			<input type='submit' value='Zaloguj'>
		</form>
	</div>
	<div id='prawy'>
		<h3>Wizytówka</h3>
		<?php
			$year = date("Y");
			$login = @$_POST['login'];
			$haslo = @$_POST['password'];
			if (!mysqli_error($polaczenie)) {
				if ($login != '' && $haslo != '') {
					$sql2 = "select haslo from uzytkownicy where login = '$login';";
					$zapytanie2 = mysqli_query($polaczenie, $sql2);
					$dane2 = mysqli_fetch_array($zapytanie2);
					if (isset($dane2[0])) {
						if ($dane2[0] == sha1($haslo)) {
							$sql3 = "select uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie from uzytkownicy, dane where uzytkownicy.id = dane.id and uzytkownicy.login = '$login';";
							$zapytanie3 = mysqli_query($polaczenie, $sql3);
							$dane3 = mysqli_fetch_array($zapytanie3);
							echo "<div class='wizytowka'>";
							
							echo "<img src='$dane3[4]' alt='osoba'>";
							echo "<h4>$dane3[0] (".($year - $dane3[1]).")</h4>";
							echo "<p>hobby: $dane3[3]</p>";
							echo "<h1><img src='icon-on.png'>$dane3[2]</h1>";
							echo "<a href='dane.html'><button>Więcej informacji</button></a>";
							echo "</div>";
						}
						else {
							echo 'haslo nieprawidłowe';
						}
					}
					else {
						echo 'login nie istnieje';
					}
				}
		}
		?>
	</div>
	<div class='clear'></div>
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