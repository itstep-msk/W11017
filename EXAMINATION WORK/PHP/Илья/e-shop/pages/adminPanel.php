<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/style/uikit-rtl.css">
	<link rel="stylesheet" type="text/css" href="/style/uikit.css">
	<link rel="stylesheet" type="text/css" href="/style/adminPanel.css">
	<title>Admin Panel</title>
	<meta charset="utf-8">
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>

	
	<?php  
		require 'headerStyles.php';
		require 'header.php';
	?>


	<div class="addBody">
	
		<div class="addProduct">
			<div class="addProduct-headline">Добавить проект</div>
			<form enctype="multipart/form-data" action="newProduct.php" method="post">
				<div>Название <input class="uk-input" type="text" name="name" required></div>
				<div>Цена <input class="uk-input" type="text" name="price"></div>
				<div>Директория 
					<select class="typeSelect uk-select uk-form-width-small" name="type">
						<? 
							include("db.php");

							$dir = mysql_query("SELECT * FROM direction");


							while($dirTranslate = mysql_fetch_array($dir, MYSQL_ASSOC)){
								echo "<option>".$dirTranslate["name"]."</option>";
							}

						?>
					</select>
				</div>

				<div class="product-currency">Валюта 
					<select class="uk-select uk-form-width-small" name="currency">
						<option>руб</option>
						<option>$</option>
					</select>
				</div>

				<div class="productDescriprion">
					Описание
					<textarea class="uk-textarea" rows="3" placeholder="Textarea" name="description"></textarea>
				</div>

				<div class="avatarWrap" title="Главная картинка" uk-form-custom>
					Аватар
					<input accept=".png, .jpg, .jpeg" id="file" type="file" name="avatar">
		            <label for="file" class="avatar uk-button uk-button-default" type="button" tabindex="-1">Выбрать файл</label>
				</div>

				<div class="product-photosWrap">
					Фото(1) товара
					<input accept=".png, .jpg, .jpeg" class="photo1" id="photo1" type="file" name="photo1">
		            <label for="photo1" class="product-photos uk-button uk-button-default" type="button" tabindex="-1">Выбрать файлы</label>
				</div>

				<div class="product-photosWrap">
					Фото(2) товара
					<input accept=".png, .jpg, .jpeg" id="photo2" type="file" name="photo2">
		            <label for="photo2" class="product-photos uk-button uk-button-default" type="button" tabindex="-1">Выбрать файлы</label>
				</div>

				<div class="product-photosWrap">
					Фото(3) товара
					<input accept=".png, .jpg, .jpeg" id="photo3" type="file" name="photo3">
		            <label for="photo3" class="product-photos uk-button uk-button-default" type="button" tabindex="-1">Выбрать файлы</label>
				</div>

				<div class="product-photosWrap">
					Фото(4) товара
					<input accept=".png, .jpg, .jpeg" id="photo4" type="file" name="photo4">
		            <label for="photo4" class="product-photos uk-button uk-button-default" type="button" tabindex="-1">Выбрать файлы</label>
				</div>

				<div class="product-photosWrap">
					Фото(5) товара
					<input accept=".png, .jpg, .jpeg" id="photo5" type="file" name="photo5">
		            <label for="photo5" class="product-photos uk-button uk-button-default" type="button" tabindex="-1">Выбрать файлы</label>
				</div>

				<div class="product-photosWrap">
					Фото(6) товара
					<input accept=".png, .jpg, .jpeg" id="photo6" type="file" name="photo6">
		            <label for="photo6" class="product-photos uk-button uk-button-default" type="button" tabindex="-1">Выбрать файлы</label>
				</div>

				<input class="uk-button uk-button-default addProductSubmit" type="submit" name="">
			</form>
		</div>

		<div class="addNav">
			<div class="adminDir">
				<div class="addDir">
					<div>Создать директорию</div>
					<form action="adminDir.php" method="post">
						<div>
							Название <input class="uk-input" type="text" name="name">
						</div>
						<div>
							Где:
							<select class="addDirSelect uk-select uk-form-width-small" name="whereList">	
								<?php 

									$list = mysql_query("SELECT name FROM list");
									while($var = mysql_fetch_array($list, MYSQL_ASSOC)){
										echo "<option>".$var["name"]."</option>";
									}

								?>	
							</select>
						</div>
						<input class="uk-button uk-button-default navSubmitDir" type="submit" name="">
					</form>
				</div>
				<div class="removeDir">
					<div>Удалить директорию</div>
					<form action="removeDir.php" method="post">
						<div>
							Название:
							<select class="removeDirSelect uk-select uk-form-width-small" name="select">
								<?php 
								
									$removeDirSelect = mysql_query("SELECT * FROM direction");
									$removeDirSelectSec = mysql_query("SELECT * FROM direction");
									while($removeDirSelectWhere = mysql_fetch_array($removeDirSelect, MYSQL_ASSOC)){
										echo "<option>".$removeDirSelectWhere["name"]."</option>";
									}

									// echo '</select></div>';
									
								?>	
							</select>
						<input class="uk-button uk-button-default navSubmitDir" type="submit" name="">
						</div>
					</form>
				</div>
			</div>
	
			<!-- Удаление продукта -->

			<div class="removeProduct">
				<div>Удалить продукт</div>
				<form action="removeProduct.php" method="post">
					<div>
						ID продукта <input class="uk-input" type="text" name="id">
						
						<input class="uk-button uk-button-default navSubmit" type="submit" value="Отправить">
					</div>
				</form>
			</div>

			<div class="adminList">
				<div class="addList">
					<div>Создать Список</div>
					<form class="addListForm" action="adminList.php" method="post">
						<div>
							Название <input class="addListInput uk-input" type="text" name="name">
						</div>
						<input class="uk-button uk-button-default navSubmit" type="submit" name="">
					</form>
				</div>
				<div class="removeList">
					<div>Удалить Список</div>
					<form action="removeDir.php"  method="get">
						<div>
							Название 
							<select class="removeListSelect uk-select uk-form-width-small" name="select">
								<?php 

									$list = mysql_query("SELECT name FROM list");
									while($var = mysql_fetch_array($list, MYSQL_ASSOC)){
										echo "<option>".$var["name"]."</option>";
									}

								?>	
							</select>
						</div>

						<input class="uk-button uk-button-default navSubmit" type="submit" name="">
					</form>
				</div>
			</div>
		</div>

	<div class="orders--wrapper">
		<table class="orders--table">
			<tr>
				<th>Номер заказа</th>
				<th>Товары заказа</th>
				<th>Статус</th>
			</tr>

			<?php  

				$res = mysql_query("SELECT * FROM `orders`");
				$order = [];

				while ($key = mysql_fetch_assoc($res)) {
					array_push($order, $key);
				}
				
				$orderData = unserialize($order["data"]);



				
				for ($i=0; $i < count($order); $i++) { 
					$curData = unserialize($order[$i]["data"])["products"];
					$curCount = count($curData["id"]);


					echo "<tr>";

						echo "<td>";
						echo $order[$i]["id"];
						echo "</td>";

						echo "<td class='orders__infoPr'>";
						for ($k=0; $k < $curCount; $k++) { 

							$id = $curData["id"][$k];

							// Запрос на получение названия названия товара
							$name = mysql_fetch_assoc(
								mysql_query("SELECT `name` FROM products WHERE id = '$id'")
							)["name"]; 


							// echo "$name <span title='id'>($id)</span> - " . $curData["countPr"][$k] . " шт.";
							echo "<div class='orders__product'> $name ($id.<small>id</small>) - " . $curData["countPr"][$k] . " шт. </div>";


						}
						echo "</td>";

						echo "<td>";
						echo $order[$i]["status"];
						echo "</td>";

					echo "</tr>";
				}



			?>

		</table>
	</div>







	
	</div>
								
	<script type="text/javascript" src="../lib/jquery-3.3.1.min.js"></script>
	<!-- <script type="text/javascript" src="../lib/adminDirection.js"></script> -->
</body>
</html>