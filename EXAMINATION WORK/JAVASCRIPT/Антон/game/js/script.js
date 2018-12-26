var main = $(".main");
var field = $(".field");
var character = "<div class = 'character'></div>";
var field_template = "<div class = 'field'></div>";
var field_template_active = "<div class = 'field active'></div>";
var field_template_non_active = "<div class = 'field non-active'></div>";
var field_template_start = "<div class = 'field start'>start</div>";
var field_template_finish = "<div class = 'field finish'>finish</div>";
var button = $(".button");
var result = $(".cube_result");
var player;
var start_game = $(".start_game");
var timer;
var r;
var hit = false;

var count_timer = 0;
var finish = false;


var left_access = false;
var down_access = false;
var right_access = false;
var up_access = false;


var cube = [1, 2, 3, 4, 5, 6];

var arr_field = [[2, 1, 1, 0, 0, 0, 0, 0, 0],
				 [0, 0, 1, 1, 1, 0, 0, 0, 0],
				 [0, 0, 0, 0, 1, 0, 0, 0, 0],
				 [0, 0, 1, 1, 1, 0, 0, 0, 0],
				 [0, 0, 1, 0, 0, 0, 0, 0, 0],
				 [0, 0, 1, 1, 1, 1, 0, 0, 0],
				 [0, 0, 0, 0, 0, 1, 1, 1, 0],
				 [0, 0, 0, 0, 0, 0, 0, 1, 0],
				 [0, 0, 0, 0, 0, 0, 0, 1, 3]]



function beginning(){
	main.empty();
	for(var i = 0; i < arr_field.length; i++){
		for(var j = 0; j < arr_field[i].length; j++){
			if (arr_field[i][j] == 2){
				main.append(field_template_start)
				}
			if (arr_field[i][j] == 3){
				main.append(field_template_finish)
				}
			if (arr_field[i][j] == 1){
				main.append(field_template_active)
				}
			if (arr_field[i][j] == 0){
				main.append(field_template_non_active)
				}
			}
		}
	main.append(character);

}
function coll(){
	for (k = 0; k < $(".field").length; k++) {
		if ($(".character").offset().left + $(".character").width() > $(".field").eq(k).offset().left
			&& $(".character").offset().top + $(".character").height() > $(".field").eq(k).offset().top
			&& $(".character").offset().left < $(".field").eq(k).offset().left + $(".field").eq(k).width()
			&& $(".character").offset().top < $(".field").eq(k).offset().top + $(".field").eq(k).height()){

			var thisLeft_bottom = $(".field").eq(k).offset().left;
			var thisTop_bottom = $(".field").eq(k).offset().top + $(".field").eq(k).height();

			var thisRight_right = $(".field").eq(k).offset().left + $(".field").eq(k).width();
			var thisTop_right = $(".field").eq(k).offset().top;

			var thisLeft_left = $(".field").eq(k).offset().left - $(".field").eq(k).width();
			var thisTop_left = $(".field").eq(k).offset().top;

			var UpLeft_Top = $(".field").eq(k).offset().left;
			var UpTop_Top = $(".field").eq(k).offset().top - $(".field").eq(k).height();

			findLeft(thisLeft_left, thisTop_left);
			findDown(thisLeft_bottom, thisTop_bottom);
			findRight(thisRight_right, thisTop_right);
			findUp(UpLeft_Top, UpTop_Top);

			if ($(".field").eq(k).hasClass("non-active")){
				hit = true;
				//console.log("collision");
				//console.log(hit);
			} else {
				hit = false;
				//console.log("collision: " + hit);
			}

			if($(".field").eq(k).hasClass("active")){
				$(".field").eq(k).removeClass("active");
				$(".field").eq(k).addClass("test");
			}

			if($(".field").eq(k).hasClass("finish")){
				finish = true; 
				console.log(123);
				$(".field").eq(k).addClass("finished");
			}

		} 
	}
}

function findDown(left, bottom){
	for (var k = 0; k < $(".field").length; k++){
		if ($(".field").eq(k).offset().left == left && $(".field").eq(k).offset().top - 2 == bottom){
			console.log($(".field").eq(k));

			if ($(".field").eq(k).hasClass("non-active")){
				//stop = true;
				down_access = false;
			}


			///////////////////

			if ($(".field").eq(k).hasClass("active") || $(".field").eq(k).hasClass("finish")){
				//stop = false;
				down_access = true;
			}
			if ($(".field").eq(k).hasClass("test")){
				down_access = false;
			}
			//////////////////
						
		}
	}
}

function findUp(left, bottom){
	for (var k = 0; k < $(".field").length; k++){
		if ($(".field").eq(k).offset().left == left && $(".field").eq(k).offset().top + 2 == bottom){
			console.log($(".field").eq(k));

			if ($(".field").eq(k).hasClass("non-active")){
				//stop = true;
				up_access = false;
			}
			///////////////////

			if ($(".field").eq(k).hasClass("active") || $(".field").eq(k).hasClass("finish")){
				//stop = false;
				up_access = true;
			}
			if ($(".field").eq(k).hasClass("test")){
				up_access = false;
			}
			//////////////////
			
		}
	}
}

function findRight(right, top){
	for (var k = 0; k < $(".field").length; k++){
		if ($(".field").eq(k).offset().left - 2 == right && $(".field").eq(k).offset().top == top) {
			console.log($(".field").eq(k));

			if ($(".field").eq(k).hasClass("non-active")){
				//stop = true;
				right_access = false;
			}
			///////////////////

			if ($(".field").eq(k).hasClass("active") || $(".field").eq(k).hasClass("finish")){
				//stop = false;
				right_access = true;
			}
			if ($(".field").eq(k).hasClass("test")){
				right_access = false;
			}
			//////////////////
		}
	}
}

function findLeft(left, top){
	for (var k = 0; k < $(".field").length; k++){
		if ($(".field").eq(k).offset().left + 2 == left && $(".field").eq(k).offset().top == top){
			console.log($(".field").eq(k));


		if ($(".field").eq(k).hasClass("non-active")){
				//stop = true;
				left_access = false;
			}
			///////////////////

			if ($(".field").eq(k).hasClass("active") || $(".field").eq(k).hasClass("finish")){
				//stop = false;
				left_access = true;
			}
			if ($(".field").eq(k).hasClass("test")){
				left_access = false;
			}
			//////////////////
	
		}		
	}
}


start_game.on("click", function(){
	beginning();
});

button.on("click", function(){
	button.attr('disabled','disabled');
	result.html("");
	r = cube[Math.floor(Math.random()*6)]
	result.append(r);
	
	timer = setInterval(auto_move, 500);
	
})
/* Buttons
var test_left = $(".test_left")
var test_right = $(".test_right")
var test_up = $(".test_up")
var test_down = $(".test_down")
*/
var count_ver = 25;
var count_hor = 25;

/* Buttons actions
test_right.on("click", function(){
	count_hor += 102;
	$(".character").css({"left": count_hor + "px"}); //867px лимит поля || left: 433px;
	//console.log(r);
	coll();
})

test_left.on("click", function(){
	count_hor -= 102;
	$(".character").css({"left": count_hor + "px"}); 
	//console.log(r);
	coll();
})

test_down.on("click", function(){
	count_ver += 102;
	$(".character").css({"top": count_ver + "px"}); 
	//console.log(r);
	coll();
})

test_up.on("click", function(){
	count_ver -= 102;
	$(".character").css({"top": count_ver + "px"}); 
	//console.log(r);
	coll();
})
*/

function auto_move(){
	count_timer++;
	if(count_timer == r){
		clearInterval(timer);
		button.removeAttr('disabled');
		count_timer = 0;
	}
	if (right_access == true){
		count_hor += 102;
		$(".character").css({"left": count_hor + "px"});
		right_access = false;
	}
	if (down_access == true){
		count_ver += 102;
		$(".character").css({"top": count_ver + "px"});
		down_access = false;
	}
	if (left_access == true){
		count_hor -= 102;
		$(".character").css({"left": count_hor + "px"});
		left_access = false;
	}
	if (up_access == true){
		count_ver -= 102;
		$(".character").css({"top": count_ver + "px"});
		up_access = false;
	}
	coll();
	console.log(finish)
}
