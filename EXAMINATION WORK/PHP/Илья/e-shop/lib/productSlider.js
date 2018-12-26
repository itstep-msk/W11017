// Движение слайдера вправо
el.rightArrow.on("click", function(){
	toSlide("right");
})

// Движение слайдера влево
// el.leftArrow.on("click", function(){
// 	toSlide("left");
// });

el.leftArrow.on("click", toSlide.bind(null, "left"))





// Отображение кликнутого изображения

el.slide.on("click", function () {
	var active = "product-img__slider-element--active";
	var currentSrc = $(this).children().attr("src");
	var avatar = el.avatarSlide.children();
	var curEl = $(this);


	el.slide.removeClass(active);
	curEl.addClass(active);

	avatar.attr("src", currentSrc);
})



function toSlide(direction) {
	// Список направлений: left, right

	// Получение ширины окна слайда (в нём находятся все потенциальные фотки)
	var wrapWidth = parseInt($(".product-img__slider-wrapWindow").css("width"));

	// Текущий отступ
	var margin = parseInt($(".product-img__slider-Window").css("margin-left"));

	// Ширина картинки в слайдБаре
	var widthEl = parseInt($(".product-img__slider-element").css("width"));

	// Кол-во картинок
	var length = $(".product-img__slider-element").length;

	// Длина отступа
	var slide = wrapWidth / 100 * 35;

	// Общая ширина всех картинок в сайдБаре вместе с отступами
	var photosWidth = ((widthEl * length)+(length*4))*(-1);

	if (direction == "right") {

		if( (margin-slide-wrapWidth) > photosWidth ){

			$(".product-img__slider-Window").animate({

				marginLeft: margin-slide

			}, 280);

		} else {

			$(".product-img__slider-Window").animate({

				marginLeft: photosWidth + wrapWidth

			}, 280);

		}

	} else if(direction == "left"){

		if((margin+slide) < -1){
			$(".product-img__slider-Window").animate({
				marginLeft: margin+slide
			}, 300)
			
		} else {
			$(".product-img__slider-Window").animate({
				marginLeft: 0
			}, 300)
		}

	} else {
		console.log("Unknown direction!");
	}
}