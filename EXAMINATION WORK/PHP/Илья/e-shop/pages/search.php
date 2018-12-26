<?php  
	require ("db.php");

	searchItems();





	function searchItems()
	{
		$item = $_GET["item"];

		$q = mysql_query("SELECT id FROM products WHERE name LIKE '%$item%'");

		$search = [];

		while ($arr = mysql_fetch_assoc($q)) {
			array_push($search, $arr["id"]);
		}

		$search = serialize($search);

		header("Location: /?search=$search");
	}
?>