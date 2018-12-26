<?php  
	session_start();


	
	// Поскольку при клике на "в корзину" возможным будет добавление только одного товара,
	// У $_GET["i"] ставим индекс массива 0

	$id = $_GET["i"][0];

	// Все добавленные товары
	$currentProducts = array();

	// Пуш всех добавленных товаров в переменную, если же был заказан хоть один
	if(!empty($_SESSION["products"])){

		foreach ($_SESSION["products"] as $product) {
			array_push($currentProducts, $product);
		}

	}

	// Пуш массива номером добавленного товара
	array_push($currentProducts, $id);


	$_SESSION["products"] = $currentProducts;

	// var_dump($_SESSION["products"]);




	if($_GET["page"] == "product"){
		header("Location: /product/?i=".$id);
		exit;
	} else {
		header("Location: /pages/toBasket.php");
		exit;
	}
?>