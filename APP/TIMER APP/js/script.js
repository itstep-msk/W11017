var minutes = $(".minutes");
var circle = $('.circle');
var propeller = new Propeller(circle);
var step = 6;
var i;

propeller.onRotate = function() {
	minutes.html(Math.floor(this.angle / step))
}

function startTimer() {
	if(propeller.angle <= step) {
		propeller.angle = step;
		clearInterval(i)
	}
	
	propeller.angle -= step;
	minutes.html(Math.floor(propeller.angle / step))
}

minutes.on("click", function() {
	i = setInterval(startTimer, 1000)
})