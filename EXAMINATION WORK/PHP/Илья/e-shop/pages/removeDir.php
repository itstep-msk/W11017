<?php 
// session_start(); 

	include("db.php");

	$select = $_POST["select"];
	$action = $_GET["action"];
	
	mysql_query("DELETE FROM direction WHERE name = '$select'");


	header("Location: adminPanel.php");
 ?>