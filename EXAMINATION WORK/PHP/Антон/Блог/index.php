<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	

<?
	include("db.php");
	$template =  file_get_contents("template.html");
	$keywords_arr = ["%header%", "%time%", "%news%"];
	$request = mysql_query("SELECT * FROM homework_blog");

	while ($request_arr = mysql_fetch_assoc($request)) {
		//var_dump($request_arr);
		//echo($request_arr[header]);
		$result_arr = [$request_arr[header], $request_arr[time], $request_arr[news]];

		$template_new = str_replace($keywords_arr, $result_arr, $template);

		echo $template_new."<br>";
	}
?>

</body>
</html>