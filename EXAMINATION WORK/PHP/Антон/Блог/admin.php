<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css\bulma.min.css">
</head>
<body>
<div class = "title">Welcome to admin page</div>	
<form action = "" method = "POST">
	<textarea class = "input is-primary" style="width: 500px; resize: none; margin-top: 10px; margin-bottom: 10px;" name = "header" placeholder = "name of news"></textarea>
	<textarea class = "textarea is-warning" style="width: 650px; height: 300px; resize: none; margin-bottom: 10px;" name="news" placeholder = "Enter news here"></textarea>
	<input class="button is-primary is-outlined" type="submit" value="Create">
</form>
<?
	include("db.php");
	$header = $_POST["header"];
	$news = $_POST["news"];
	$time = date('h:i:s A');



	if(!empty($header) && !empty($news)){
		mysql_query("INSERT INTO homework_blog(header, news, time) VALUES ('$header', '$news', '$time')");
	}







?>
</body>
</html>