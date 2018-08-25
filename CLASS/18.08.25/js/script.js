$(".accordion__item").on("click", function() {
	// Если класс active присутствует
	if($(this).hasClass("active")) {
		// Текущий внутренни content скрыть
		$(this).find(".accordion__content").slideUp();
		// У текушего элемента удалить класс active
		$(this).removeClass("active");
	} 
	
	// Если класс active отсутствует
	else {
		// Все content'ы скрыть
		$(".accordion__content").slideUp();
		// Всем accordion__item удалить класс active
		$(".accordion__item").removeClass("active")
		// От текущего элемента обратится к content и показать его
		$(this).find(".accordion__content").slideDown();
		// Текущему элементу добавить класс active
		$(this).addClass("active");
	}
})