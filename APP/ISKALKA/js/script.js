var card = "<div class='js-card uk-background-cover uk-card uk-card-default uk-width-1-5 uk-padding-remove uk-margin-remove uk-height-small'></div>";
var cards = $(".js-cards");
var input = $(".js-input");
var button = $(".js-button");
var apikey = "f6a6b2640636bffe9c10ae6d0a95d870e991967c68f28ec83bf46a4d29cfb7ca";
var link = "https://api.unsplash.com/search/photos/?client_id=";
var param = "&query=";

button.on("click", function() {
	if(input.val() != "") {
		var query = link + apikey + param + input.val()

		$.getJSON(query, function(data){
			for(var i = 0; i < data.results.length; i++) {
				var img = data.results[i].urls;

				cards
				.append(card)
				.find(".js-card")
				.last()
				.css({"background-image": "url(" + img.thumb + ")"});
			}
		})
	}
})