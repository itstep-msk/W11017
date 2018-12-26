<?php 
	if(isset($_GET["exit"])){
		session_destroy();
		// header("Location: ../index.php");
		exit;
	}
	
	require_once("../pages/db.php");

	$id = $_GET["i"];

	$query = mysql_query("SELECT * FROM products WHERE id='$id'");

	// t - сокращённое translate
	$t = mysql_fetch_array($query, MYSQL_ASSOC);

	for($i = 1; $i <= 10; $i++){
				
		if(!empty($t["photo".$i])){
			$img[$i] = '<div class="product-img__slider-element"><img src="../products/'.$t["id"]."/".$t["photo".$i].'"></div>';
		}
	}


	// Запрос на комментарии

	$avatar = '../products/'.$t["id"]."/".$t["photo1"];

	$name = $t["name"];
	$price = $t["price"];
	$currency = $t["currency"];
	$description = $t["description"];

	// Что менять
	$words = ["%title%","%id%","%img1%","%avatar%","%img2%","%img3%","%img4%","%img5%","%img6%","%img7%","%img8%","%img9%","%img10%","%price%","%currency%","%name%","%description%","%i%","%form%"];

	// НА что менять 
	$keys = [$name, $id, $img[1], $avatar, $img[2], $img[3], $img[4], $img[5], $img[6], $img[7], $img[8], $img[9], $img[10], $price, $currency, $name, $description, $id, $form];

	// Где менять
	$template = file_get_contents("../pages/templateProduct.php");


	$replace = str_replace($words, $keys, $template);

	echo $replace;
	require("../pages/showComment.php");
?>