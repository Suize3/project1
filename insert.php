<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	$query= mysqli_query($connect, "SELECT * FROM pizza WHERE id = '{$_GET['id']}'");
	$stroka = $query->fetch_assoc();
	$text_zaprosa_vstavit = "INSERT INTO bascket ('tittle','img', 'price') VALUES ('" . $stroka["tittle"] . "', '" . $stroka["img"] . "', '" . $stroka["price"] . "')";
	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);
	header("Location: index.php");
?>
