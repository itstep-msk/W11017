# DOCS JS
## Создание переменных
`var a;`<br>
`a = 5;`<br>
`var b = 10;`<br>
`var c = d = e = 15`<br>
`var element = "<div class='box'></div>"`<br>

## Типы данных
`var string = "Привет мир";`<br>
`var number = 10;>`<br>
`var boolean = true;`<br>
`var varNull = null;`<br>
`var varUndefined = undefined;`<br>
`var object = {};`<br>

## Оператов typeof
`typeof string // string`
`typeof 10 // number`
`typeof typeof 10 // string`

## Объекты
#### обычная переменная - одно значение
var a = 10;
### Когда нужно больше одного значения
var arr = [10,15,20];
arr[0] // 10

### Стандартный метод
arr[5] = 100
// [10,15,20,,,100]

### Нормальный метод
arr.push(150,200,250);
// [10,15,20,,,100,150,200,250]

var multyArr = [[10,20,20],[[1,2,3],[4,5,6]]]
multyArr[1][1][0] // 4

var multyObj = {
	floor: [10,20,20],
	door: {
		left: [1,2,3],
		right: [4,5,6]
	},
	"Привет мир": "какой-то текст",
	myFunc: function() {
		return 123
	},
	badFunc: 123+1234 // Ошибка
	goodFunc: function() {
		return 123+1234
	},
	greeting: function(name) {
		return "Привет " + name;
	}
}

multyObj.greeting("Дима") // "Привет Дима"

multyObj.door.right[0] // 4
multyObj.window = [7,8,9]

multyObj.window // [7,8,9]
multyObj["window"] // [7,8,9]
multyObj["Привет мир"] // "какой-то текст"

multyObj.myFunc() // 123
multyObj.myFunc // function() { return 123 }

## Функции
alert("Привет мир"); // "Привет мир"
confirm("Вопрос ?") // Да или нет
prompt("Вопрос ?") // Да или нет, поле для ввода текста

var question = prompt("Вопрос ?");
var conf = confirm("Вопрос ?") // true/false;

### Синтаксис
function myFuncName() {
	alert("Привет мир")
}

function myFuncNorm() {
	return "Привет мир"
}

var myVar = myFuncNorm(); // "Привет мир"
alert(myFuncNorm())
console.log(myFuncNorm());

myFuncName(); // "Привет мир"
myFuncName(); // "Привет мир"

### Локальные/Глобальные переменные

var q = 10;

function e() {
	return q = 20;
}
e();

console.log(q) // 20

function w() {
	var b = 30;
	return b = 40;
}
w();

console.log(b) // ошибка

### Аргументы функции

function hello(name) {
	return "Привет " + name;
}

hello("Дима") // "Привет Дима"
hello("Маша") // "Привет Маша"
hello("Оля")  // "Привет Оля"

function checkAge(age) {
	if (age >= 18) {
		return true 
	} else {
		return false
	}
}

function showMovie(age) {
	if (checkAge(age)) {
		alert("YES")
	} else {
		alert("NO")
	}
}

showMovie(20)

## Циклы

for(Счетчик;Условие;Шаг) {
	// Тело цикла
}

for (var i = 0; i < 10; i++) {
	console.log(i)
}
console.log(i)

var arrayNum = [1,2,3,4,5,6,7,8,9,10]
for (var i = 0; i < arrayNum.length; i++) {
	console.log(arrayNum[i])
}

for (var i = 0; i < arrayNum.length; i++) {
	if (arrayNum[i] == 5) {
		alert("Найдено число 5")
	}
}

for (var i = arrayNum.length-1; i >= 0; i--) {
	if (arrayNum[i] == 5) {
		alert("Найдено число 5")
	}
}

while(checkAge(age)) {
	//
}

while(i<10) {
	i++;
}

## Функция конструктор

function PERSON(name) {
	this.userName = name;
}
// Обычный способ
var DIMA = {
	userName: "Дима"
}
var MASHA = {
	userName: "Маша"
}
### Создание через функцию констурктор.
var DIMA = new PERSON("Дима");
var MASHA = new PERSON("Маша");
DIMA.userName // "Дима"
MASHA.userName // "Маша"


## DOM Document Object Model

document - эта наша верстка

### Методы и свойства
1) Поиск элемента
2) Изменение элемент
3) Обработка событий

### Поиск элемента
document.getElementById("ID") // Найти по ID

document.getElementByClass("CLASSNAME") // Поиск по классу

document.querySelector(".block > div"); //
Поиск первого элемента и возврат его

document.querySelectorAll(".block") // 
Поиск всех элементов и возврат массива
["<div>1</div>", "<div>2</div>","<div>3</div>",]

<div class="block">
	<div>1</div>
	<div>2</div>
	<div>3</div>
</div>

### Изменение элемент
<div class="box">Привет мир</div>
var box = document.querySelector(".box")
box.innerHTML = "Пока <b>мир</b>";

<div class="box">Пока <b>мир</b></div>

console.log(box.innerHTML) // Пока <b>мир</b>
box.innerHTML = box.innerHTML + " Привет мир"
console.log(box.innerHTML) // Пока <b>мир</b> Привет мир

box.setAttribute("Где меняем","на что меняем")
box.setAttribute("id","123");
box.setAttribute("style","color:red;");
box.style.color = "red";

for (i=0;i<10;i++) {
	box.style.borderRadius = i + "px";
}
// https://jsfiddle.net/d4v1bcuf/12/
<input class="myInput" />
document.querySelector(".myInput").value // Забираю значение
document.querySelector(".myInput").value = "123" // Присваиваю значение к input

### Обработка событий
box.addEventListener("click", function() {
	console.log("Сработало событие click")
})

1) click
2) keydown, keyup, keypress
3) mousemove, mousedown, mouseover

box.addEventListener("click", function(abc) {
	console.log(abc)
})
//https://jsfiddle.net/xp9teh4z/1/
box.addEventListener("keydown", function(abc) {
	console.log(abc.keyCode)
})
