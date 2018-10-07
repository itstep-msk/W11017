var canvas = document.getElementById('canvas');
var ctx = canvas.getContext("2d");

// Установка размера холста
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Стили квадрата
var rectStyle = {
	width: 50,
	height: 50
}

var coord = {
	x: canvas.width - rectStyle.width,
	y: canvas.height - rectStyle.height
}

// Массив с X-координатами
var x = [coord.x+rectStyle.width];

// Массив с Y-координатами
var y = [coord.y]
// Установка цвета квадрата
ctx.fillStyle = "#0F0083";

function draw(step) {
	// Очистка холста
	ctx.clearRect(0, 0, canvas.width, canvas.height);

	// Цикл для избирательного отношения к блокам
	for (var i = 0; i < x.length; i++) {

		// Отрисовывает квадрат по своим координатам (из массива x)
		ctx.fillRect(x[i], y[i], rectStyle.width, rectStyle.height);

		// Добавляет новое значение в массив X и Y, если квадрат достигает 901 пиксель по ширине
		x[i] == 906 && y[i] > 50 ? x.push(coord.x+rectStyle.width) : false;
		x[i] == 906 ? y.push(coord.y) : false;

		// Удаляет первый элемент массива X, когда квадрат полностью уходит с экрана
		if(x[i] >= coord.x+rectStyle.width && y[i] <= 50){
			y.shift()
			x.shift();
		}

		// Передвигает блок вверх, когда тот достигает левой границы
		x[i] == -1 ? y[i]-=1 : false;

		// Передвигает блок вправо, когда тот достигает верхней границы
		y[i] > 0 && y[i] < 1 ? x[i]+=1 : false;

		// Шаг квадрата
		x[i] >= (50 - rectStyle.width) && y[i] >= 1 ? x[i]-=1 : false;
	}

	// Обновление, отрисовка
	requestAnimationFrame(draw)
}


draw();