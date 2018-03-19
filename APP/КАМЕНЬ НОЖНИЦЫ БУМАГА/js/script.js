var valuesGame = ["Камень", "Ножницы", "Бумага"];
var gameResult = document.querySelector(".game__result");
var botWinElement = document.querySelector(".bot__win");
var userWinElement = document.querySelector(".user__win");
var rock = document.querySelector(".rock");
var papper = document.querySelector(".papper");
var scissors = document.querySelector(".scissors");
var resultBot;
var resultUser;
var botWin = 0;
var userWin = 0;

rock.addEventListener("click", clickValuesGame)
papper.addEventListener("click", clickValuesGame)
scissors.addEventListener("click", clickValuesGame)

function clickValuesGame() {
	resultUser = this.getAttribute("data-value");
	playGame()
}

function playBot() {
	var random = (Math.random()*2).toFixed();
	gameResult.innerHTML = valuesGame[random];
	resultBot = valuesGame[random];
}

function playGame() {
	playBot();
	сomparison(resultBot, resultUser)
	botWinElement.innerHTML = "Бот: " + botWin;
	userWinElement.innerHTML = "Пользователь: " + userWin;
	gameResult.innerHTML = "Результат бот: " + resultBot + " / " + "Результат пользователя: " + resultUser
}

function emulateUser() {
	var random = (Math.random()*2).toFixed();
	resultUser = valuesGame[random];
	playBot();
	сomparison(resultBot, resultUser)
	botWinElement.innerHTML = "Бот: " + botWin;
	userWinElement.innerHTML = "Пользователь: " + userWin;
}
setInterval(emulateUser, 10)

function сomparison(result_bot, result_user) {
	switch(result_bot) {
		case "Камень":
			if (result_user == "Камень") {
				console.log("Ничья");
			}
			if (result_user == "Ножницы") {
				console.log("USER FALSE")
				botWin++;
			}
			if (result_user == "Бумага") {
				console.log("USER TRUE")
				userWin++;
			}
			break;
		case "Ножницы":
			if (result_user == "Камень") {
				console.log("USER TRUE")
				userWin++;
			}
			if (result_user == "Ножницы") {
				console.log("Ничья")
			}
			if (result_user == "Бумага") {
				console.log("USER FALSE")
				botWin++;
			}
			break;
		case "Бумага":
			if (result_user == "Камень") {
				console.log("USER FALSE")
				botWin++;
			}
			if (result_user == "Ножницы") {
				console.log("USER TRUE")
				userWin++;
			}
			if (result_user == "Бумага") {
				console.log("Ничья")
			}
			break;
	}
}
