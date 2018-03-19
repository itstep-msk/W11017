var templateStart = '<div class="chat__row"><div class="chat__wrapper clearfix"><div class="chat__user-pic"></div><div class="chat__message">';
var templateEnd = '</div></div></div>';
var count = 0;

$(".chat__textarea").on("keydown", function(e) {
	if (e.keyCode == 13) {
		$(".chat__rows").append(templateStart + $(this).val() + templateEnd);
		$(this).val("");
		return false;
	}
})