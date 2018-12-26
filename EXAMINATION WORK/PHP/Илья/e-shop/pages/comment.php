<?php  session_start();
	require "db.php";

	$user = $_SESSION["user"];
	$message = $_POST["message"];
	$short = $_POST["shortMsg"];
	$rate;
	$product = $_GET["i"];


	mysql_query("INSERT INTO comments(user, rate, shortMsg, message, productId) VALUES('$user','$rate','$short','$message','$product')");

	header("Location: /product/?i=$product");
	exit;
?>