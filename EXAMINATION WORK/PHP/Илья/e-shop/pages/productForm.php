<style>
	.addressForm{
		width: 500px;
		margin: 100px auto;
		border: 1px solid black;
		box-shadow: 0 0 7px -1px #888888;
		padding: 10px;
	}

	.addressForm input, .addressForm button{
		display: block;
		margin: 10px auto 0;
	}
</style>


<?php  
	require("headerStyles.php");
	require("header.php");

	$productQuery = serialize($_GET);

echo " 
<form method='post' class='addressForm' action='successProduct.php?prQ=$productQuery'>
	<input class='uk-input uk-form-width-medium' type='text' name='city' placeholder='Город' required>
	<input class='uk-input uk-form-width-medium' type='text' name='street' placeholder='Улица' required>
	<input class='uk-input uk-form-width-medium' type='text' name='house' placeholder='Дом' required>
	<input class='uk-input uk-form-width-medium' type='text' name='flat' placeholder='Квартира' required>
	<input class='uk-input uk-form-width-medium' type='text' name='number' placeholder='Номер телефона'>
	<button class='uk-button'>Купить!</button>
</form>";

?>