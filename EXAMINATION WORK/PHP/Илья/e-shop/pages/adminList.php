<?php 
	
	include ("db.php");
	
	$name = $_POST["name"];

	mysql_query("INSERT INTO list(name) VALUES('$name')");


	header("Location: adminPanel.php");
?>