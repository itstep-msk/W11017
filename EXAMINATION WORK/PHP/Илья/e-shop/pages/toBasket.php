<?php session_start();

	if(isset($_SESSION["user"])){
		// Если залогинен и нажал на "В корзину"
	
		$id = $_GET["i"];

		require("headerStyles.php");
		require_once("header.php");
		require_once("basket.php");

		// header("Location: ../product/?i=".$id);

	}else if(!isset($_SESSION["user"])){
		header("Location: ../pages/login.php");
	}



?>