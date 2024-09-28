<?php
	$polaczenie = mysqli_connect('localhost', 'root', '', 'dane');
	$tytul = $_POST['tytul'];
	$gatunek = intval($_POST['gatunek']);
	$rok = intval($_POST['rok']);
	$ocena = intval($_POST['ocena']);
	
	mysqli_query($polaczenie, "insert into filmy values (null, $gatunek, 0, $tytul, $rok, $ocena);");
	echo "Film $tytul został dodany do bazy";
	mysqli_close($polaczenie);
?>