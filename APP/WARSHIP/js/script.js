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

if (resultShip == "v") {
	generateLocation()
	for (var i = 0; i < 4 ;i++) {
		startX2 = randomVY;
		startY2 = randomVX;
		newMap[randomVY++][randomVX] = 1;
	}
}

if (resultShip == "v") {
	generateLocation()
	for (var i = 0; i < 4 ;i++) {
		startY2 = randomVY;
		startX2 = randomVX;
		newMap[startY2++][startX2] = 1;
	}
}

function checkEmpty() {
	while(newMap[randomVY][randomVX] != 0) {
		generateLocation()
	}
	return false;
}

console.log(newMap)
