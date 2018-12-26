<!-- Нижняя часть шаблона - footer -->


<div class="product-footer">
	<form method="post" action="/pages/comment.php?i=<?=$id?>">
		<div class="footer-shortComment">
			Краткое мнение
			<input class="uk-input uk-form-width-large" type="text" name="shortMsg" required>
		</div>

		<div class="footer-rating">
			Оценка

			<div class="footer-stars">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</div>
		</div>

		<div class="footer-fullComment">
			Комментарий
			<textarea class="uk-textarea uk-form-width-large" rows="3" name="message" required></textarea>
		</div>

		<input type="submit" class="uk-button product-footer__submit uk-button-default">

	</form>
</div>