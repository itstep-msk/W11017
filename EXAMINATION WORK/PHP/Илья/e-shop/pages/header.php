<meta charset="utf-8">

<div class="header">
		<div class="container">
			<div class="header-name"><a href="../index.php">E-shop</a></div>
			<form class="header-search" action="/pages/search.php">
				<input class="uk-input uk-form-width-medium" type="text" name="item" placeholder="Вы ищите..">
				<input class="uk-button uk-button-default" type="submit" name="" value="Искать">
			</form>
			<div class="header-ico">
				<a href="/pages/toBasket.php"><div class="header-basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div></a>
				<ul>
					<li class="header-user header-list"><i class="header-user__ico fa fa-user-circle-o" aria-hidden="true"></i>
						<?php 
							if(!$_SESSION["user"]){
								echo '<ul><li><a href="/pages/login.php">Войти</a></li><li><a href="/pages/registration.php">Регистрация</a></li></ul>';

							} else if(isset($_SESSION["user"])){
								echo '<ul><li class="user">'.$_SESSION["user"].'</li>';
								if($_SESSION["user"]=="admin")echo '<li class="adminPanel"><a href="../pages/adminPanel.php">Панель</a></li>';
								echo '<li><a href="../pages/settings.php" class="header-settings">Настройки</a></li><li><a href="?exit">Выйти</a></li></ul>';
							}
						?>

					</li>
				</ul>
			</div>
		</div>
	</div>