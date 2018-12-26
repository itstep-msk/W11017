<div class="productsWrap">

	<?php 
		include("db.php");


		$query = mysql_query("SELECT * FROM products");
		$dir = $_GET["list"];

		// Список найденных товаров (если был поиск)
		$searchArr = [];


		if(isset($_GET["exit"])){
			session_destroy();
			header("Location: http://eShop/index.php");
			exit;
		}




		if(isset($_GET["search"])){
			$findItems = unserialize($_GET["search"]);

			foreach ($findItems as $item) {
				$q = mysql_fetch_assoc(mysql_query("SELECT * FROM products WHERE id = '$item'"));	

				echo'
				<a class="product-link" href="product?i='.$q["id"].'">
					<div class="product">
						<img src="products/'.$q["id"]."/".$q["avatar"].'">
						<div class="product-name">'.$q["name"].' <span class="product-price">'.$q["price"].' '.$q["currency"].'</span></div>
						<div class="productDescription">'.$q["type"].'</div>
					</div>
				</a>
				';
			}
		} else {

			while($translate = mysql_fetch_array($query, MYSQL_ASSOC)){


				if(isset($_GET["i"])){
					// Если был выбор товара, то закрывать цикл, поскольку будет перенаправление
					// и не было бы помех
					break;

				} else if($translate["type"]==$dir){
					echo'
					<a class="product-link" href="product?i='.$translate["id"].'">
						<div class="product">
							<img src="products/'.$translate["id"]."/".$translate["avatar"].'">
							<div class="product-name">'.$translate["name"].' <span class="product-price">'.$translate["price"].' '.$translate["currency"].'</span></div>
							<div class="productDescription">'.$translate["type"].'</div>
						</div>
					</a>
					';
				} else if($dir == ""){
					echo'
					<a class="product-link" href="product?i='.$translate["id"].'">
						<div class="product">
							<img src="products/'.$translate["id"]."/".$translate["avatar"].'">
							<div class="product-name">'.$translate["name"].' <span class="product-price">'.$translate["price"].' '.$translate["currency"].'</span></div>
							<div class="productDescription">'.$translate["type"].'</div>
						</div>
					</a>
					';
				}

			} // end of While()

		} // end of inspect
	?>
</div>