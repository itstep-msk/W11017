<!DOCTYPE html>
<html>
<head>
	<title>Илья Овчинников</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/fonts/fonts.css">
	<link rel="stylesheet" type="text/css" href="styles/header.css">
	<link rel="stylesheet" type="text/css" href="styles/about.css">
	<link rel="stylesheet" type="text/css" href="styles/education.css">
	<link rel="stylesheet" type="text/css" href="styles/examples.css">
	<link rel="stylesheet" type="text/css" href="styles/work.css">
	<link rel="stylesheet" type="text/css" href="styles/skills.css">
	<link rel="stylesheet" type="text/css" href="styles/gallery.css">
	<link rel="stylesheet" type="text/css" href="styles/contacts.css">
	<link rel="stylesheet" type="text/css" href="styles/core/base.css">
	<link rel="stylesheet" type="text/css" href="styles/reverseForm.css">
	<link rel="stylesheet" type="text/css" href="styles/media.css">


	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<script type="text/javascript">
		$(function(){
		        $("a[href^='#']").click(function(){
		                var _href = $(this).attr("href");
		                $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		                return false;
		        });
		});
	</script>


</head>
<body>

	<header class="header">
		<div class="container">
		
			<nav>
				<a href="/"><span class="header__logo">Привет</span></a>
				
				<ul class="header__list">
					<a href="#"><li class="header__tab-active">Главная</li></a>
					<a href="#about"><li>Обо мне</li></a>
					<a href="#education"><li>Образование</li></a>
					<a href="#skills"><li>Умения</li></a>
					<a href="#examples"><li>Работы</li></a>
					<a href="#gallery"><li>Портфолио</li></a>
					<a href="#contacts"><li>Контакты</li></a>
				</ul>


				<!-- Блок для мобильной версии -->
				<div class="header__slideNav">
					<span>&#9776;</span>
				</div>

			</nav>

			<div class="header__welcome">
				Добро пожаловать <b>на</b>	
				
				<br>
				
				<b><span>Сайт-портфолио</span></b>

				<br>

				<span>Ильи Овчинникова</span>
			</div>

			<a href="#mail">
				<div class="header__mail-button">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					Отправить сообщение
				</div>
			</a>
		</div>
	</header>

	<main>
		
		<div class="container">

			<section class="about" id="about">
				<div class="about__img">
					<img width="100%" src="img/FWF46hmg49w.jpg">
				</div>

				<article>
					<h1>Обо мне</h1>


					<div class="about__text block-text">
						Увлекаюсь программированием, спокойно отношусь к чтению, люблю развивающие лекции.  
						<br>
						<br>
						Интроверт, однако люблю общение с эрудированными людьми, люблю работать в команде.
						<br>
						<br>
					</div>
				</article>
						<!-- <br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br> -->


				<article class="about__contacts">
					<span class="about__contacts-name about__contacts-item">Имя:</span> Илья Овчинников <br>
					<span class="about__contacts-mail about__contacts-item">Почта:</span> ovchildmy@gmail.com <br>
					<span class="about__contacts-number about__contacts-item">Телефон:</span> +79168616758
				</article>		

				<nav>
					<ul>
						<li>
							<a target="_blank" href="https://vk.com/ovchildmy">
								<i class="fa fa-vk" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="https://github.com/ovchildmy">
								<i class="fa fa-github" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</nav>

			</section>


			<section class="education" id="education">
				
				<article>
					<h1>Образование</h1>

					<div class="education__text block-text">

					</div>
				</article>

				<!-- Стили в двух файлах: core/info-block.css и education.css -->

				<div class="education__info-block info-block">

					<div class="education__info-block__item education__info-block__item-left">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							<!-- Идёт сокращение: education__info-block__item На e__i-b__i-text -->
							<div class="e__i-b__i-text">
								<h3>Web-дизайн</h3>
								<span><span class="e__i-b__i-text__name-header">ГЦДПО</span> - <span class="e__i-b__i-text-duration">1 месяц</span></span>
								<div class="block-text">Удостоверение о повышении квалификации в том, что он прошёл обучение в частном учреждении дополнительного профессионального образования &laquo;Городской центр дополнительного профессиоального образования&raquo; по программе <b>Web-дизайн</b></div>
							</div>

							<div class="education__info-block__item-arrow education__info-block__item-left-arrow">
								<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
							</div>
					</div>

					<div class="education__info-block__item education__info-block__item-right">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							<!-- Идёт сокращение: education__info-block__item На e__i-b__i-text -->
							<div class="e__i-b__i-text">
								<h3>Java</h3>
								<span><span class="e__i-b__i-text__name-header">Финансовый колледж №35 - </span><span class="e__i-b__i-text-duration">0.5 месяца</span></span>
								<div class="block-text">Прошёл учебную стажировку в ГБПОУ &laquo;Финансовый колледж №35&raquo; по программе &laquo;Основы программирования на языук Java&raquo;</div>
							</div>

							<div class="education__info-block__item-arrow education__info-block__item-right-arrow">
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</div>
					</div>

					<div class="education__info-block__item education__info-block__item-left education__info-block__item-left-last">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							<!-- Идёт сокращение: education__info-block__item На e__i-b__i-text -->
							<div class="e__i-b__i-text">
								<h3>Web-программирование</h3>
								<span><span class="e__i-b__i-text__name-header"> Академия ШАГ - </span><span class="e__i-b__i-text-duration">1 год</span></span>
								<div class="block-text">Компьютерные курсы по основам web-программирования</div>
							</div>

							<div class="education__info-block__item-arrow education__info-block__item-left-arrow">
								<i class="fa fa-long-arrow-left" aria-hidden="true"></i>
							</div>
					</div>

					<div class="education__info-block__center-block">
						<div class="ed-center-point"></div>
					</div>

				</div>

			</section>

			<section class="skills" id="skills">
			
				<article>
					<h1>Знания</h1>
				</article>

				<table>
					<tr>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							html/css/adaptive
						</td>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							JavaScript
						</td>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							Jquery
						</td>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							Vue Js
						</td>
					</tr>
					<tr>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							Bootstrap
						</td>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							PHP
						</td>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							MySql	
						</td>
						<td>
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
							Java
						</td>
					</tr>
				</table>

			</section>

			<!-- <section class="examples" id="examples">
				<h1>Примеры работ</h1>
			

				<div class="examples-list">
					<a href="http://citylocation.ru" target="_blank"><div class="examples-list__item"><img src="img/CityLocation.jpg"></div></a>
				</div>
			</section> -->

			<section class="gallery" id="gallery">
				<h1>Галерея</h1>


				<div class="gallery__photos">
					<div><img src="img/6B4_0AxCyRU.jpg"></div>
					<div><img class="gallery__photos--narrow" src="img/FWF46hmg49w.jpg"></div>
					<div><img src="img/KQZDgEBgTPw.jpg"></div>
					<!-- <div></div> -->
				</div>

			</section>


			<section class="contacts" id="contacts">
				<h1>Контакты</h1>
				
				<div class="contacts__items">
					<div>
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
						<!-- <center> -->
							<h3>Социальные сети</h3>
						<ul>
							<li>
								<a href="https://vk.com/ovchildmy" target="_blank">
									<i class="fa fa-vk" aria-hidden="true"></i> 
									Вконтакте
								</a>
							</li>
						</ul>
						<!-- </center> -->
					</div>
					<!-- <div></div> -->
					<div>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<!-- <center> -->
							<h3>Почта</h3>
						<ul>
							<li>
								ovchildmy@gmail.com
							</li>
						</ul>
						<!-- </center> -->
					</div>
				</div>
			</section>

			<section class="reverseForm" id="reverseForm">
				<center>
					<article>
						<h1>Оставьте сообщение</h1>
					</article>
				</center>

				<form action="mail.php" id="mail" method="post">
					<input type="text" name="name" placeholder="Ваше Имя">
					<input type="email" name="mail" placeholder="Ваша почта">
					<input type="text" name="subject" placeholder="Тема сообщения">
					<textarea name="message"></textarea>
					<input type="submit" value="Отправить">
				</form>
			</section>




		</div>

	</main>


	<script type="text/javascript">
		$(".header li").on("click", function(){
			$(".header li").removeClass("header__tab-active");
			$(this).addClass("header__tab-active");
		})
	
		document.onwheel = function(e){
			var height = window.pageYOffset;
			switch(true){
				case height > 3470: 
					$(".header li").removeClass("header__tab-active"); 
					$(".header li").eq(6).addClass("header__tab-active");
					break;
				case height > 2477: 
					$(".header li").removeClass("header__tab-active"); 
					$(".header li").eq(5).addClass("header__tab-active"); 
					break;
				case height > 2452: 
					$(".header li").removeClass("header__tab-active"); 
					$(".header li").eq(4).addClass("header__tab-active"); 
					break;
				case height > 2190: 
					$(".header li").removeClass("header__tab-active"); 
					$(".header li").eq(3).addClass("header__tab-active");
					break;
				case height > 1394: 
					$(".header li").removeClass("header__tab-active"); 
					$(".header li").eq(2).addClass("header__tab-active");
					break;
				case height > 694: 
					$(".header li").removeClass("header__tab-active"); 
					$(".header li").eq(1).addClass("header__tab-active");
					break;
				case height < 694: 
					$(".header li").removeClass("header__tab-active"); 
					$(".header li").eq(0).addClass("header__tab-active");
			}
		}


	</script>
</body>
</html>