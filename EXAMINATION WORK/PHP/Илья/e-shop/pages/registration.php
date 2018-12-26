<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/style/uikit-rtl.css">
	<link rel="stylesheet" type="text/css" href="/style/uikit.css">
	<link rel="stylesheet" type="text/css" href="/style/registration.css">
	<link rel="stylesheet" type="text/css" href="/style/header.css">
	<link rel="stylesheet" type="text/css" href="/style/header-min.css">
	<meta charset="utf-8">
	<title>Регистрация</title>
</head>
<body>

	<? include("header.php"); ?>

	<div class="regWrap">
		<form class="regForm" action="" method="post">
			<div>
				Имя
				<input class="uk-input" type="text" name="name">
			</div>
			<div>
				Фамилия
				<input class="uk-input" type="text" name="surname">
			</div>
			<div>
				Пароль
				<input class="uk-input" type="password" name="password">
			</div>
			<div>
				E-mail
				<input class="uk-input" type="text" name="eMail">
			</div>
			<div>
				Телефон
				<input class="uk-input" type="text" name="number">
			</div>
			<div>
				Год рождения
				<select name="year" class="reg__age"></select>
			</div>
			<input class="uk-button  registration-submit" type="submit" name="">
					

					<?php 
						include ("db.php");

						$name = $_POST["name"];
						$surname = $_POST["surname"];
						$password = $_POST["password"];
						$eMail = $_POST["eMail"];
						$number = $_POST["number"];
						$year = $_POST["year"];
						$date = date("d.m.Y");
						$query = mysql_query("SELECT eMail, number FROM users");
						$list = mysql_fetch_array($query, MYSQL_ASSOC);

						if($eMail!=$list["eMail"] && $number!=$list["number"] && !empty($name)&&!empty($surname)&&!empty($password)&&!empty($eMail)&&!empty($number)&&!empty($year)){
							mysql_query("INSERT INTO users(name, surname, password, eMail, number, year, registrationDate) VALUES ('$name','$surname','$password','$eMail','$number','$year','$date')");
							echo "<div class='reg-success'>Регистрация завершена!</div>";
						}else{
							if($eMail==$list["eMail"]){
								echo "<div class='reg-warning'>Почта уже занята!</div>";
							}else if($number==$list["number"]){
								echo "<div class='reg-warning'>Номер уже занят!</div>";
							}else{
								echo "<div class='reg-warning'>Заполните все поля*</div>";
							}
						}
					?>


		</form>
	</div>



	<script type="text/javascript" src="../lib/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../lib/reg-select.js"></script>
	<script type="text/javascript" src="../lib/registration-fixHeight.js"></script>
	
</body>
</html>