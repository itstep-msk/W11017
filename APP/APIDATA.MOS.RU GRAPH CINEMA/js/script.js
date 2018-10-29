var apikey = "?api_key=14829ea065bd232db3c4f1796acecbf3";
var link = "https://apidata.mos.ru/v1/datasets/";
var id = "495";
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

var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [],
        datasets: [{
            label: "My First dataset",
            borderColor: 'rgb(255, 99, 132)',
            data: [],
        }]
    },

});

function getCinema() {
	for(var i = 0; i < result.features.length; i++) {
		chart.data.labels.push(result.features[i].properties.Attributes.CommonName);
		chart.data.datasets[0].data.push(result.features[i].properties.Attributes.TotalSeatsAmount);
	}

	chart.update();
}

getCinema();