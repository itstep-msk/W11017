var apikey = "?api_key=14829ea065bd232db3c4f1796acecbf3";
var link = "https://apidata.mos.ru/v1/datasets/";
var id = "916";
var param = "&$top=1";
var geo = "/features/";
var result;

var query = link + id + geo + apikey + param;

function getResult() {
	var res = $.ajax({
				url: query,
				async: false
			}).responseText

	res = JSON.parse(res);
	return res;
}

result = getResult();
console.log(result)
/*
1) Проверяем версию API
https://apidata.mos.ru/version // {"Version":1}
2) Базовый URL https://apidata.mos.ru/v1/
3) Запрос к ресурсу /datasets возвращает список наборов данных.
 URL для запроса данных https://apidata.mos.ru/v1/datasets/
4) Получение ID категории в разделе паспорт у категории "Идентификатор набора данных:"
*/

   	// Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);

    function init(){
    	// Создание карты
        var myMap = new ymaps.Map("map", {
            center: [55.76, 37.64],
            zoom: 7
        });

        for(var i = 0; i < result.features.length ; i++) {
        	// Создание точки
	        var point = new ymaps.GeoObject({
	        	geometry:{
	        		type: "Point",
	        		coordinates: [
	        			result.features[i].geometry.coordinates[1],
	        			result.features[i].geometry.coordinates[0]
	        		]
	        	}
	        })

	        // Добавление точки
	        myMap.geoObjects.add(point);
        }
    }