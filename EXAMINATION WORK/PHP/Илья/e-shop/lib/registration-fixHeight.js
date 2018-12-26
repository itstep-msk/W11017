// Этот файл был создан для того, чтобы увеличивать высоту окна регистрации,
// когда заполнены не все поля и появляется предупреждение.

var regWarning = $(".reg-warning");
var regForm = $(".regForm");
var regWrap = $(".regWrap");
var regSuccess = $(".reg-success");

// regForm.on("submit", function(){

setInterval(function(){
	if(regWarning.css("display")=="block" || regSuccess.css("display")=="block"){
		regWrap.css({"height":"360px"});
	}

},1)

// })