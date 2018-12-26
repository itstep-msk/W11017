<!-- Правая часть шаблона -->

<!-- внутри productWrap -->
<?php  


function getComments()
{
	global $name;
	global $description;
	global $id;

	$lastId = mysql_fetch_assoc(mysql_query("SELECT id FROM comments ORDER BY id DESC LIMIT 1"));
	$qq = mysql_query("SELECT * FROM comments");
	$q = mysql_query("SELECT * FROM comments");

	$maxComments = 0;

	// Счётчик комментариев
	// Нужен для корректного отображения кол-ва комментариев
	$countComment = 1;

		// var_dump($a);
		echo '
	<div class="product-right">
		
		<div class="product-name">';

		echo $name;

		echo '</div>

		<div class="product-description">';

		echo $description;

		echo '</div>

		<div class="product-characteristic">Характеристики</div>

		<div class="product-rating">
			<div class="product-rating__stars">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</div>
		</div>';



	// Счётчик общего количества подходящих комментариев
	while ($b = mysql_fetch_assoc($qq)) {
		if ($b["productId"] == $id) {
			$maxComments++;
		}
	}


	while ($a = mysql_fetch_assoc($q)) {

		if ($a["productId"] == $id) {

			echo '<div class="product-comments" data-commentId=';

			echo $a["id"].'';

			echo '>

				<div class="product-comments__header">
					<div class="prev-comment"><i class="fa fa-angle-left" aria-hidden="true"></i></div>

					<div class="product-comments__name">';

					echo $a["user"];


					echo '</div>

					<div class="product-comment__page">';

					// echo $a["id"];
					echo $countComment;

					echo '/';

					// echo intval($lastId["id"]);
					echo $maxComments;

					echo '</div>
				
					<div class="product-comments__rating">
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star" aria-hidden="true"></i>
					</div>

				</div>

				<div class="product-comments__shortComment">';
				
				echo $a["shortMsg"];

				echo '</div>

				<div class="product-comments__comment">';

				echo $a["message"];

				echo '</div>

				<div class="next-comment"><i class="fa fa-angle-right" aria-hidden="true"></i></div>

			</div>';

			$countComment++;

		}


	}
		
		




	echo '</div>

</div>	<!-- productWrap -- end -->


<script type="text/javascript" src="../lib/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../lib/el.js"></script>
<script type="text/javascript" src="../lib/productSlider.js"></script>
<script type="text/javascript" src="../lib/commentSlider.js"></script>

</body>
</html>';




}	// getComments end


	getComments();





?>
