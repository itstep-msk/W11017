<?php 
	
	include("db.php");

	$name = $_POST["name"];
	$whereList = $_POST["whereList"];

	mysql_query("INSERT INTO direction(name, whereList) VALUES('$name','$whereList')");

	header("Location: adminPanel.php");

?>