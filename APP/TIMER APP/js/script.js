var el = {
	minutes: $(".minutes"),
	hours: $(".hours"),
	circle: $(".circle"),
	numbers: $(".numbers")
}
var incHours = 0;
var lastAngle = 0;
var access = true;
var propeller = new Propeller(el.circle);
var step = 6;
var timer;

propeller.inertia = 0.9;

propeller.getMinutes = function() {
	return Math.floor(this.angle / step);
}

el.minutes.html(0);
el.hours.html(0);
checkNumber();

// При вращении передаются цифры на элемент
propeller.onRotate = function() {
	checkHour(propeller.getMinutes());
	el.minutes.html(propeller.getMinutes())
	checkNumber();
}

// Проверка является ли число с однйо цифрой. Если да то добавляется ноль
function checkNumber() {
	if(el.hours.html().length < 2) {
		el.hours.prepend("0");
	}
	if(el.minutes.html().length < 2) {
		el.minutes.prepend("0");
	}
}

function checkHour(min) {
	if(min >= 0 && min <= 5 && lastAngle <= 59 && lastAngle >= 50) {
		incHours++;
		setHour();
	} else if(min <= 59 && min >= 55 && lastAngle >= 0 && lastAngle <= 10){
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
	if(propeller.getMinutes() == 0 && incHours == 0) {
		propeller.angle = step;
		clearInterval(timer);
		access = true;
		propeller.inertia = 0.99;
	}

	if(propeller.getMinutes() == 0) {
		callback(incHours);
	}
	
	setHour();
	propeller.inertia = 0; 
	propeller.angle -= step;
	el.minutes.html(propeller.getMinutes())
	checkNumber();
}

el.numbers.on("click", function() {
	if(access) {
		timer = setInterval(startTimer, 10)
		access = false;
	}
})

// TEST

function callback(value) {
	if(value == 0) {
		console.log("Function stop")
		return;
	} else {
		value--;
		console.log("Vibrate: " + value);
		// navigator.vibrate(1000)
		return callback(value);
	}
}

function setTimer() {
	el.minutes.html("00");
	el.hours.html("10");
	incHours = 10;
}

setTimer();