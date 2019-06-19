<?php 
	include('conn.php');
	// $jumlah = mysql_query("SELECT * FROM users WHERE attendance = 'Y'");
	$query = mysql_query("select * from users where attendance = 'Y' ");
	$count=mysql_fetch_array($query);

	echo($count);
	echo $count[0]."AS";
?>