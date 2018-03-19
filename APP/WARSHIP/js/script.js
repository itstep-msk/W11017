var water = "<div class = 'water'></div>";
var ship = "<div class = 'ship'></div>";
var shipBot = "<div class = 'ship-bot'></div>";
var fieldBot = $(".field-bot");
var field = $(".field");
var myMap = [0,0,0,0,0,0,0,1,0,0,
		     0,1,1,1,1,0,0,0,0,0,
		     0,0,0,0,0,0,0,0,1,0,
		     0,0,1,0,0,0,0,0,0,0,
		     0,0,1,0,0,0,1,1,0,0,
		     0,0,1,0,1,0,0,0,0,0,
		     0,0,0,0,1,0,0,1,1,1,
		     0,0,0,0,0,0,0,0,0,0,
		     0,0,0,1,0,0,0,1,0,0,
		     1,0,0,1,0,0,0,0,0,0]
		   
var mapBot = [0,0,0,0,0,0,0,1,0,0,
		     0,1,1,0,1,1,0,0,0,0,
		     0,0,0,0,0,0,0,0,1,0,
		     0,0,1,0,0,0,0,0,0,0,
		     0,0,1,0,0,0,1,1,0,0,
		     0,0,1,0,1,0,0,0,0,0,
		     0,0,1,0,1,0,0,1,1,1,
		     0,0,0,0,0,0,0,0,0,0,
		     0,0,0,1,0,0,0,1,0,0,
		     1,0,0,1,0,0,0,0,0,0]		   


function createMap(mapArray, fieldArray, ships) {
	for (var i = 0; i < mapArray.length; i++) {
		if (mapArray[i] == 0) {
			fieldArray.append(water);
		}
		if (mapArray[i] == 1) {
			fieldArray.append(ships);
		}
	}
}

createMap(myMap, field, ship)
createMap(mapBot, fieldBot, shipBot)

fieldBot.on("click","div", function() {
	if ($(this).attr("class") == "water") {
		$(this).addClass("miss")
	}
	if ($(this).attr("class") == "ship-bot") {
		$(this).addClass("hit")
	}	
})

var newMap = [
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0,0,0,0]
]

var shipObject = {
	4: ["v", "h"],
	3: ["v", "h"],
	2: ["v", "h"]
}

var randomShip = (Math.random()).toFixed();
var resultShip = "v" // shipObject["4"][randomShip];
var randomVX = (Math.random()*10).toFixed();
var randomVY = (Math.random()*6).toFixed();
var randomHX = (Math.random()*6).toFixed();
var randomHY = (Math.random()*10).toFixed();
var startX2, startY2;

function generateLocation() {
	randomVX = (Math.random()*10).toFixed();
	randomVY = (Math.random()*6).toFixed();
}
//
if (resultShip == "v") {
	for (var i = 0; i < 4 ;i++) {
		startX2 = randomVY;
		startY2 = randomVX;
		newMap[randomVY++][randomVX] = 1;
	}
}
//
if (resultShip == "h") {
	for (var i = 0; i < 4 ;i++) {
		newMap[randomHY][randomHX++] = 1;
	}
}
//

function checkEmpty() {
	while(newMap[randomVY][randomVX] != 0) {
		generateLocation()
	}
	return false;
}
if (resultShip == "v") {
	for (var j = 0; j < 3 ;j++) {
		newMap[randomVY+j][randomVX] = 1;
	}
}
//
if (resultShip == "h") {
	for (var i = 0; i < 3 ;i++) {
		newMap[randomHY][randomHX++] = 1;
	}
}

console.log(newMap)
/*
1) Последовательное размешение кораблей
1-ый 4-х палубный.
Случаынй выбор вертикальный или горизонтальный
Если вертикальный не можем опускатся ниже 6-ого массива
Если горизонтальный не можем общашатся к индексу выше 6-ого массива


2) Поиск стартовой точки, если 1 то ищем дальше
3) Расставляем следующие корабли(3-х палубный)

*/