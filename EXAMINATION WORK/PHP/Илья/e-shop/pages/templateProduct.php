
<!DOCTYPE html>
<html>

<body>

	<div class="productWrap">

		<!-- Левая часть шаблона -->
		<div class="product-left">

			<div class="product-imgWrap">
				<div class="product-img__avatar"><img src="%avatar%"></div>

				<div class="product-img__slider">
					<div class="product-img__slider-left"><i class="fa fa-angle-left" aria-hidden="true"></i></div>

					<div class="product-img__slider-wrapWindow">
						<div class="product-img__slider-Window">
							%img1%
							%img2%
							%img3%
							%img4%
							%img5%
							%img6%
							%img7%
							%img8%
							%img9%
							%img10%
						</div>
					</div>

					<div class="product-img__slider-right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
				</div>
			</div>

			<div class="product-price">%price% %currency%</div>

			<!-- <form action="../pages/toBasket.php?i[]=%id%" method="post"> -->
			<!-- </form> -->
				<a class="buy-link" href="/pages/asyncBasket.php?i[]=%id%&page=basket"><input type="submit" name="buy" class="product-buyButton" value="Купить"></a>

				<a class="buy-link" href="/pages/asyncBasket.php?i[]=%id%&page=product"><input type="submit" name="basket" class="product-basketButton" value="В корзину"></a>

			

		</div>


		
	

