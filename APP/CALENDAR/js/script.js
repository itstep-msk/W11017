var currentCount = 0;
var currentYear = new Date().getFullYear();
var monthArray = ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"]
var weekday = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"];
var database = {}
var date = new Date(currentYear,0,1);
var currentDate = new Date().getMonth();
var thisDay;

// Получение дней текущего месяца
function daysInMonth (month, year) {
	return new Date(year, month, 0).getDate();
}

// Проверка на первый или последний месяц
function checkMonth(countMonth) {
	// Проверка на последний месяц
	if(countMonth == 12) {
		currentCount = 0;
		currentYear++;	
	} else if(countMonth >= 0) {
		currentCount = countMonth;
	// Проверка на первый месяц
	} else {
		currentCount = 11;
		currentYear--;
	}
}

// Очистка данных: календарь, дни недели, год
function clearData() {
	$(".box").empty();
	$(".week-days").empty();
	$(".month").html(monthArray[currentCount])
	$(".year").html(currentYear);
}

createCalendar(currentDate)

// Создание календаря
function createCalendar(count) {

	checkMonth(count)

	var dayInMonth = daysInMonth(date.getMonth()+1+currentCount,currentYear);
	var firstDay = new Date(currentYear,date.getMonth()+currentCount,1);

	clearData();

	// Создание пустых дней (белые кубы)
	for(var j = 0; j < firstDay.getDay();j++) {
		$(".box").append("<div class='empty-day'></div>")
	}
	// Создание дней
	for(var i = 1;i <= dayInMonth;i++) {
		$(".box").append("<div class='day'>" + i + "</div>")
	}
	// Создание название дней недель
	for(var i = 0;i < weekday.length;i++) {
		$(".week-days").append("<div class='week-day'>" + weekday[i] + "</div>")
	}

}

function getUndefined(year, month, thisDay) {
	if (database[year] == undefined) {
		database[year] = {}
	}
	if (database[year][month] == undefined) {
		database[year][month] = {}
	}
	if (database[year][month][thisDay] == undefined) {
		database[year][month][thisDay] = {}
	}
}

// Предыдущий месяц
$(".next").on("click", function() {
	createCalendar(currentCount+1);
})

// Следующий месяц
$(".prev").on("click", function() {
	createCalendar(currentCount-1);
})

// POPUP
$(document).on("click",".day", function() {
	$(".popup").show();
	$(".popup").wrap("<div class='popup-wrap'></div>")
	thisDay = $(this).html()
})

// POPUP CLOSE
$(".popup__close").on("click", function() {
	$(this).closest(".popup").unwrap().hide();
})

$(".popup__button").on("click", function() {
	var year = $(".year").html();
	var month = $(".month").html();
	var input = $(".popup__input")
	var textarea = $(".popup__textarea")

	getUndefined(year,month, thisDay)
	database[year][month][thisDay] = {"input":input.val(),"textarea": textarea.val()};
	input.val("");
	textarea.val("");
	console.log(database)
	$(this).closest(".popup").unwrap().hide();
	$(".day").filter(function() {
		return $(this).text() === thisDay;
	}).addClass("active-day")
})
