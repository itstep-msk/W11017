var list = [];
var addListForm = $(".addListForm");
var addListInput = $(".addListInput");
var count = 0;
var listVal = localStorage.getItem("list");
list.push(listVal)

addListForm.on("submit", function(e){
	var form = $(this);
	// console.log(listVal)

	e.preventDefault();
	if(addListInput.val()!=""){
		$.ajax({
			// type: form.attr("method"),
			type: form.attr("post"),
			url: form.attr("action"),
			data: form.serialize(),
			success: function(result){
				count = localStorage.getItem("count");
				count++;
				localStorage.setItem("count", count);

				list.push({"list":addListInput.val(), "directions":[]});
				localStorage.setItem("list", list);

				addListInput.val("");
			}
		})
	}
})
