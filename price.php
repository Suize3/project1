<?php 
	$link=mysqli_connect('127.0.0.1', 'root', '', 'dodo');
	$result = mysqli_query($link,'SELECT SUM(your_column_name) AS value_sum FROM  User_Table');
	//or like the query for return last row that indicate total number of record
	$result = mysqli_query($link,'SELECT * FROM bascket ORDER BY id DESC LIMIT 1;');
	$row = mysqli_fetch_assoc($result);
	$sum = $row['value_sum'];
	echo $sum;
?>