<?php  
	session_start();
	require 'db.php';

	$prQ = unserialize($_GET["prQ"]);
	$city = $_POST["city"];
	$street = $_POST["street"];
	$house = $_POST["house"];
	$flat = $_POST["flat"];
	$numb = $_POST["number"];

	$order = array(
		"city" => $city,
		"house" => $house,
		"street" => $street,
		"flat" => $flat,
		"number" => $numb,
		"products" => $prQ
	);

	$order = serialize($order);

	// status в orders нужен для проверки на оплату
	// Допустим, что оплата всегда производилась,
	// Поэтому status == true
	mysql_query("INSERT INTO `orders` (data, status) VALUES ('$order','true')");

	// Очищение всех выбранных товаров
	unset($_SESSION["products"]);

	header("Location: /");
?>