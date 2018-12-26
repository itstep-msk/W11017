<?php 
		session_start();

	include_once("../pages/headerStyles.php");
	include("../pages/header.php");
	include("productPage.php");
	
	if(isset($_SESSION["user"])){
		include("../pages/commentForm.php"); 

	} else { 
		echo "<a href='../pages/login.php'>Войдите</a> для функции комментариев";
	}

 ?>