
function addRow() {
	var templateStart = "<div class='checklist__row'>";
	var templateEnd = "</div>";
	var input = $(".checklist__input");
	var inputArr = input.val().split(",");
	
	for (var i = 0;i<inputArr.length;i++) {
		if (inputArr[i] == " ") continue
		if (inputArr[i] == "")	continue
		
		$(".checklist__rows").append(templateStart + inputArr[i] + templateEnd);
	}
	
	input.val("")
}

$(".checklist__button").on("click", function() {
	addRow();
})

$(".checklist__input").on("keydown", function(e) {
	if (e.keyCode == 13) {
		addRow()
	}
})