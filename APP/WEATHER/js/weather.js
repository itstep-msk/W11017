var city = $(".weather__city");
var temp = $(".weather__temp");
var icon = $(".weather__icon");
var background = $(".weather__background");

$.getJSON("https://api.openweathermap.org/data/2.5/weather?id=524901&APPID=ca8c2c7970a09dc296d9b3cfc4d06940", function(data) {
	city.html(data.name)
	temp.html((data.main.temp - 273).toFixed())
	icon.attr("src", "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png" )
	
	$.getJSON("https://pixabay.com/api/?key=7681448-16aa89fa97890cb6c6b5ca03b&q=" + city.html() + "+sight&image_type=photo&pretty=true", function(dataImg) {
		background.css({
			"background-image": "url(" + dataImg.hits[0].webformatURL + ")"
		})
		console.log(dataImg.hits[0])
	})
	
})
