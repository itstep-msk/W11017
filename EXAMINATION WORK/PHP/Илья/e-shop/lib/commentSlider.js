el.comment.eq(0).addClass("active-comment");




el.nextComment.on("click", function () {
	var parent = $(this).parent();


	if(parent.next().hasClass("product-comments")){
		el.comment.removeClass("active-comment");

		parent.next().addClass("active-comment");
	}


})

el.prevComment.on("click", function () {
	var parent = $(this).parent().parent();

	if(parent.prev().hasClass("product-comments")){
		el.comment.removeClass("active-comment");
		parent.prev().addClass("active-comment");
	}

	console.log(parent);
})