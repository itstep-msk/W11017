var ul = document.querySelector("ul");
var main = document.querySelector("main");
var inputList = document.querySelectorAll('.board--list > input');
var inputName = document.querySelectorAll('.board--name > input');
var formName = document.getElementsByClassName('board--form__name');
var formList = document.getElementsByClassName('board--form__list');
var closeBoard = document.getElementsByClassName("board--remove");
var successBtn = document.getElementsByClassName("li--left");
var successLi = document.getElementsByClassName("success");
var removeBtn = document.getElementsByClassName("li--right");
var addCard = document.getElementById('addCard');
var boardName;

boardsUpdate();
createBoard();


// Навешивание обработчика события на все доски

function boardsUpdate() {
	for (var i = 0; i < formName.length; i++) {

	// Создание названия доски
	formName[i].addEventListener('submit', function (e) {

			e.preventDefault();

			var searchName;


			// Определение индекса родителя инпата board--name в коллекции
			for(var k = 0; k < this.childNodes.length; k++){
				if(this.childNodes[k].className == "board--name"){
					searchName = k;
				}
			}


			boardName = this.childNodes[searchName].childNodes[0].value;

		if(boardName != ""){
			// Следующий этап создания доски
			this.style.display = "none";
			this.previousElementSibling.innerHTML = boardName;
			this.previousElementSibling.className = "board--name";
			this.nextElementSibling.style.display = "block";
			this.nextElementSibling.childNodes[0].childNodes[0].focus();
		}
	});
	// end-Создание названия доски


	// Добавление задания
	formList[i].addEventListener('submit', function(e) {
		
		e.preventDefault();

		var searchName;
		var aim;
		var li = document.createElement("li");
		var liLeft = document.createElement("div");
		var liRight = document.createElement("div");

		liLeft.className = "li--left";
		liLeft.title = "ready";
		liRight.className = "li--right";
		liRight.title = "remove";

		// Определение индекса родителя инпата board--name в коллекции
		for(var k = 0; k < this.childNodes.length; k++){
			if(this.childNodes[k].className == "board--list"){
				searchName = k;
			}
		}

		aim = this.childNodes[searchName].childNodes[0].value;
		li.innerHTML = aim;

		if(this.childNodes[searchName].childNodes[0].value !== ""){
			li.appendChild(liLeft);
			li.appendChild(liRight);
			// this.nextElementSibling.appendChild(li);
			this.nextElementSibling.insertBefore(li, this.nextElementSibling.firstChild);
			removeBtn = document.getElementsByClassName("li--right");
		}

		this.childNodes[searchName].childNodes[0].value = "";


		
		// Удаление элемента списка
		removeItem();

		// Установка успешного выполнения задания
		successAim();


	});
	// end-Добавление задания

	

	// Удаление доски
	boardExplode();
}
}


function successAim() {
	for (var i = 0; i < successBtn.length; i++) {
		successBtn[i].addEventListener('click', function() {
			var parent = this.parentNode;

			parent.childNodes[2].remove();
			parent.childNodes[1].remove();

			parent.className = "success";

			cancelSuccess();

		});
	}	
}

function cancelSuccess() {
	for (var i = 0; i < successLi.length; i++) {
		successLi[i].addEventListener('dblclick', function() {
			
			if(this.childNodes.length == 1){
				var leftEl = document.createElement("div");
				var rightEl = document.createElement("div");

				leftEl.title = "ready";
				leftEl.className = "li--left";
				rightEl.className = "li--right";
				rightEl.title = "remove";

				this.appendChild(leftEl);
				this.appendChild(rightEl);
				this.classList.remove("success");

				removeItem();

				successAim();
			}


		});
	}
}

// Тотальное уничтожение доски :(
function boardExplode() {
	for (var j = 0; j < closeBoard.length; j++) {
		closeBoard[j].addEventListener('click', function() {
			this.parentNode.remove();

		});
	}
}


// Удаление цели
function removeItem() {
	for (var l = 0; l < removeBtn.length; l++) {
		removeBtn[l].addEventListener('click', function() {
			this.parentNode.remove();
		});
	}
}


// Создание доски
function createBoard() {
	var newBoard = document.createElement("article");
	var h3 = document.createElement("h3");
	var boardFormName = document.createElement("form");
	var bfnDiv = document.createElement("div");
	var boardRemove = document.createElement("div");
	var bfnDivInput = document.createElement("input");
	var ul = document.createElement("ul");

	var boardFormList = document.createElement("form");
	var bflDiv = document.createElement("div");
	var bflDivInput = document.createElement("input");

	ul.className = "board--aim";
	h3.className = "board--article board--article__none";
	boardFormName.className = "board--form__name";
	boardFormList.className = "board--form__list";
	newBoard.className = "board";
	bfnDiv.className = "board--name";
	bflDiv.className = "board--list";
	boardRemove.className = "board--remove";
	
	boardRemove.innerHTML = "X";

	bfnDivInput.setAttribute("placeholder", "Название доски");
	bflDivInput.setAttribute("placeholder", "Что надо сделать?")

	bflDiv.appendChild(bflDivInput);
	boardFormList.appendChild(bflDiv);

	bfnDiv.appendChild(bfnDivInput);
	boardFormName.appendChild(bfnDiv);


	newBoard.appendChild(h3)
	newBoard.appendChild(boardFormName);
	newBoard.appendChild(boardFormList);
	newBoard.appendChild(ul);
	newBoard.appendChild(boardRemove);

	addCard.addEventListener('click', function(e) {
		var newBoardClone = newBoard.cloneNode(1); // 1 (true) для того, чтобы копировался с доч. эл-ми
		this.parentNode.insertBefore(newBoardClone, this.parentNode.firstChild);
		this.parentNode.firstChild.childNodes[1].childNodes[0].childNodes[0].focus();
		boardsUpdate();
	});

}
