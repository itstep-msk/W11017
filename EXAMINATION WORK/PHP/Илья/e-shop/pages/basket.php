<?php 
	

?>

<link rel="stylesheet" href="/style/basket.css">

<div class="basket--wrapper">
	<form method="" action="productForm.php">
		<table class="basket--table">
			<tr>
				<th>Номер товара</th>
				<th>Название</th>
				<th>Цена</th>
				<th>Количество</th>
			</tr>
			

			<?php  
				basketProducts();
			?>
		</table>
		<button id="buy">Продолжить покупку</button>
	</form>
	
</div>

		

<?php  

	function basketProducts(){

		require_once("db.php");

		$_SESSION["activeProducts"] = [];

		// Перебор продуктов в корзине ($_SESSION["products"])
		if (!empty($_SESSION["products"])) {
		foreach ($_SESSION["products"] as $product) {

			$count = 0;
			$curActive = array();
			$activeFlag = true;
				

			// Флаг для проверки наличия выбранного товара в списке
			foreach ($_SESSION["activeProducts"] as $selected) {
				if($product == $selected){
					$activeFlag = false;
				}
			}

			// Добавление товара в списов в зависимости от флага
			if ($activeFlag) {
				foreach ($_SESSION["activeProducts"] as $key) {
					array_push($curActive, $key);
				}
				
				array_push($curActive, $product);

				$_SESSION["activeProducts"] = $curActive;
			}



			// Счётчик количества товаров
			foreach ($_SESSION["products"] as $curProduct) {
				if($curProduct == $product){
					$count++;

					if(isset($id) && $id == $product){
						$count++;
					}
				}
			}



			if($activeFlag){

				$query = mysql_query("SELECT * FROM products WHERE id = '$product'");

				while ($tr = mysql_fetch_assoc($query)) {
					echo '
							<tr>
								<td><input type="text" name="id[]" value="' . $tr["id"] . '" /></td>
								<td><input type="text" value="' . $tr["name"] . '" /></td>
								<td><input type="text" value="' . $tr["price"] . ' ' . $tr["currency"] . '" /></td>
								<td><input min="0" max="50" type="number" name="countPr[]" value="' . $count . '"/></td>
							</tr>
					';
				}

			} // is activeFlag end
		}

		}

	}  // basketProducts() end
?>