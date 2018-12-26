<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/style/uikit-rtl.css">
	<link rel="stylesheet" type="text/css" href="/style/uikit.css">
	<link rel="stylesheet" type="text/css" href="/style/login.css">
	<link rel="stylesheet" type="text/css" href="/style/header.css">
	<link rel="stylesheet" type="text/css" href="/style/header-min.css">
	<meta charset="utf-8">
	<title>Вход</title>
</head>
<body>

	<? include("header.php"); ?>


	<div class="logWrap">
		<form action="" method="post">

		    <div class="uk-margin">
		        <div class="uk-inline">
		            <span class="uk-form-icon" uk-icon="icon: mail"></span>
		            <input class="uk-input uk-form-width-large" name="mail" type="text">
		        </div>
		    </div>

		    <div class="uk-margin">
		        <div class="uk-inline">
		            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
		            <input class="uk-input uk-form-width-large" name="password" type="password">
		        </div>
		    </div>

		    <div class="uk-margin" uk-margin>
		        <button class="uk-button uk-button-default uk-form-width-large">Войти</button>
		    </div>

		</form>
	<?php 
		include("db.php");

		$mail = $_POST["mail"];
		$password = $_POST["password"];

		$query = mysql_query("SELECT eMail, password FROM users");

		while($logSuccsess = mysql_fetch_array($query, MYSQL_ASSOC)){
			if($mail == $logSuccsess["eMail"] && $password == $logSuccsess["password"]){
				$_SESSION["user"] = $mail;
				echo "<div class='logSuccsess'>Вы зашли успешно!</div>";
			}
		}




	?>
	</div>




	<script type="text/javascript" src="../lib/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../lib/uikit.js"></script>
	<script type="text/javascript" src="../lib/uikit-icons.js"></script>
</body>
</html>