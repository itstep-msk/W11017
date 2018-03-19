# JQuery
## DOM Document Object Model

document - эта наша верстка

### Методы и свойства
1) Поиск элемента
2) Изменение элемент
3) Обработка событий

### Поиск элемента

document.querySelector(".class") == $(".class")
jQuery(".class") == $(".class")

### Переименовать функцию jQuery для избежания конфликта.
var hellowWorld = jQuery.noConflict();
hellowWorld(".class").hide().show()

### Популярные методы
$(".class").hide()- скрывает найденый элементы, в качестве аргумента можно передавать число. Элемент будет скрываться плавно. 1000 = 1сек.

$(".class").show() - показывает найденый элемент, в качестве аргумента можно передавать число. Элемент будет скрываться плавно. 1000 = 1сек.

$(".class").val() - забирает вводные данные у элементов, которые имеют поле для ввода. Input, textarea, select. Является getter'ом и setter'ом. 
$(".class").val() - забираем
$(".class").val("Привет мир!") - присваиваем

$(".class").html() - забирает содержимое у элементов целиком. Даже если есть врутри теги.
<div class="block">Привет<br/>Мир</div>
$(".block").html() // Привет<br/>Мир

$(".class").text() - забирает только текст внутри элеменита обрезая теги если они есть.

<div class="block">Привет<br/>Мир</div>
$(".block").text() // ПриветМир

$(".class").append() - добавялент текст в конец элемента.
<div class="block">Привет<br/>Мир</div>
$(".block").append(" Hola")
<div class="block">Привет<br/>Мир Hola</div>

$(".class").prepend() - добавялент текст в начало элемента.
<div class="block">Привет<br/>Мир</div>
$(".block").append("Hola ")
<div class="block">Hola Привет<br/>Мир</div>

$(".class").on() == document.addEventListener()
Метод для создания событий, принимает такие же аргнументы как и стандартный addEventListener
$(".class").on("click", function() {})

$(".class").attr() - добавляет атрибут в элемент
<div class="block"></div>
$(".block").attr("id","block777")
<div class="block" id="block777"></div>

<div class="block"></div>
$(".block").attr("class") // block

$(".class").removeAttr() - удаляет атрибут в элементе
<div class="block"></div>
$(".block").removeAttr("class")
<div></div>

$(".class").before() / .after() - добавляет перед или после элемента

<div class="block"></div>
$(".block").before("Привет мир").after("Пока мир")

Привет мир
<div class="block"></div>
Пока мир

$(".class").wrap() - оборачивает элемент в теги, которые указанны в качестве атрибута
<div class="block"></div>
$(".block").wrap("<h1></h1>")
<h1><div class="block"></div></h1>

$(".class").unwrap() - удаляет обертку у элемента
<h1><div class="block"></div></h1>
$(".block").unwrap()
<div class="block"></div>

$(".class").css() - добавляет в элемент css стили. Стили добавляются в атрибут style. Записываются ввиде объекта. Ключ - css свойство. Значение ключа - css значение. Все ввиде строки.
<div class="block"></div>
$(".block").css({ "width": "100px", "height": "100px" })
<div class="block" style="width:100px;height:100px"></div>

$(".class").animation() - тоже самое, что и .css() только переход от стандартного значение до нового анимируется. Время анимации регулируется через второй аргумент
$(".class").animation({ "width": "100px", "height": "100px" }, 5000)

$(".class").addClass() / .removeClass() - добавляет или удаляет класс у элемента.

$(".class").clone() - клонирует найденый элемент целиком.
