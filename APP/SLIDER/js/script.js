$(document).ready(function() {
	
	var slider_index = 0;
	var img = $(".slider__box img");
	var slider_container = $(".slider__container");
	var slider_count = img.length;
	
	slider_container.width(img.width())
	
	function slider(new_slider_index) {
		if (new_slider_index < 0 || new_slider_index > (slider_count -1)) return
		slider_index = new_slider_index;
		$(".slider__box").animate({
			"margin-left": (-100) * slider_index + "%"
		})
		console.log(slider_index)
	}
	
	$(".slider__prev").on("click", function() {
		slider(slider_index - 1);
	})
	
	$(".slider__next").on("click", function() {
		slider(slider_index + 1);
	})

})