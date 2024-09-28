<?php
	require_once 'connect.php';
	$polaczenie = mysqli_connect($host, $user, $pass, $dbname) or die;
	
	$kategoria = $_POST['kategoria'];
	$podkategoria = $_POST['podkategoria'];
	$tytul = $_POST['tytul'];
	$tresc = $_POST['tresc'];
	
	$sql = "insert into ogloszenie values (NULL, 1, '$kategoria', '$podkategoria', '$tytul', '$tresc');";
	mysqli_query($polaczenie, $sql);
	echo 'DODANO OGŁOSZENIE';
	mysqli_close($polaczenie);
?>