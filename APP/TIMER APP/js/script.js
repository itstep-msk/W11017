var el = {
	minutes: $(".minutes"),
	hours: $(".hours"),
	circle: $(".circle"),
	numbers: $(".numbers")
}
var counts = {
	minutes: 0,
	hours: 0
}
var incHours = 0;
var lastAngle = 0;
var access = true;
var propeller = new Propeller(el.circle);
var step = 6;
var timer;

el.minutes.html(counts.minutes);
el.hours.html(counts.hours);

// При вращении передаются цифры на элемент
propeller.onRotate = function() {
	var angleToMinutes = Math.floor(this.angle / step);

	checkHour(angleToMinutes);
	el.minutes.html(angleToMinutes)
}

function checkHour(min) {
	if(min == 59 && lastAngle == 58) {
		incHours++;
		setHour();
	} else if(min == 59 && lastAngle == 0){
		if(incHours > 0) {
			incHours--;
		}
		
		setHour();
	}

	lastAngle = min;
}

function setHour() {
	el.hours.html(incHours)
}

function startTimer() {
	if(propeller.angle <= step && incHours == 0) {
		propeller.angle = step;
		clearInterval(timer)
		access = true;
	}
	
	propeller.angle -= step;
	el.minutes.html(Math.floor(propeller.angle / step))
}

el.numbers.on("click", function() {
	if(access) {
		timer = setInterval(startTimer, 10)
		access = false;
	}
})