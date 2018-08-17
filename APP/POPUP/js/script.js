$(".test-link").on("click", function() {
	$(".popup").show();
	$(".popup").wrap("<div class='popup-wrap'></div>")
})

$(".popup__close").on("click", function() {
	$(this).closest(".popup").unwrap().hide();
})
