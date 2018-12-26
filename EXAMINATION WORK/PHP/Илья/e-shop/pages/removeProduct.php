<?php  
	include ("db.php");

	$id = $_POST["id"];

	$query = mysql_query("DELETE FROM products WHERE id = '$id'");

	header("Location: http://localhost/pages/adminPanel.php");
?>