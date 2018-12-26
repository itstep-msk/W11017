<?php session_start(); 
	require_once("pages/db.php");
	// db::connect();
	if(isset($_GET["exit"])){
		session_destroy();
		header("Location: http://eShop/index.php");
		exit;
	}
		?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/uikit-rtl.css">
	<link rel="stylesheet" type="text/css" href="style/uikit.css">
	<link rel="stylesheet" type="text/css" href="style/core.css">
	<link rel="stylesheet" type="text/css" href="style/header.css">
	<link rel="stylesheet" type="text/css" href="style/header-min.css">
	<link rel="stylesheet" type="text/css" href="style/navBar.css">
	<link rel="stylesheet" type="text/css" href="style/productsWrap.css">
	<meta charset="utf-8">
	<title>E-Shop</title>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</head>
<body>

	<? require_once("pages/header.php"); ?>

	<div class="navBar">

		<ul>
			<li><div class="navBar-arrow"> <div><img src="img/navBar__arrow-right.png"></div> </div>
				<ul>
					<div class="shopList">
						<?php  
							$listQuery = mysql_query("SELECT * FROM list");

							while($listTranslate = mysql_fetch_array($listQuery, MYSQL_ASSOC)){
								echo '<div>
										<span>'.$listTranslate["name"].':</span>
										<ul>';
								$dirQuery = mysql_query("SELECT * FROM direction");
								while($dirTranslate = mysql_fetch_array($dirQuery, MYSQL_ASSOC)){
									
									if($dirTranslate["whereList"] == $listTranslate["name"]){
										echo "<li><a href='?list=".$dirTranslate["name"]."'>".$dirTranslate["name"]."</a></li>";
									}
								}
								


								echo '</ul></div>';
								unset($dirTranslate);
							}


						?>
					</div>
				</ul> 
			</li>
		</ul>

	</div>


	<?php  

		if($_GET[""] == ""){
			include("pages/products.php");
		}
		// }else if(isset($_GET["i"])){
		// 	include("pages/products.php");
		// }
	?>

	











	

	<script type="text/javascript" src="lib/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="lib/uikit.js"></script>
	<script type="text/javascript" src="lib/uikit-icons.js"></script>
	<script type="text/javascript" src="lib/el.js"></script>
	<script type="text/javascript" src="lib/core.js"></script>
	<script type="text/javascript" src="lib/productSlider.js"></script>
</body>
</html>