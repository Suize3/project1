<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "dodo");
	$text_delete = "DELETE FROM bascket WHERE id = '{$_GET['id']}'";
	mysqli_query($connect, $text_delete);
	header('Location: index.php');
?>
