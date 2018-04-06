/* Print numbers and operator on screen */
var screen = document.getElementById("printScreen");
	screen.innerHTML= "";

var showScreen = document.getElementById("showScreen");
	showScreen.innerHTML= "";

/* Calculate Answer */
var num1 = 0;
var num2 = 0;
var result = 0;
var operator;
var after = '';


function getNumbers(elem) {
	screen.innerHTML += elem.value;
	showScreen.innerHTML += elem.value;
	getnum1();
}

function getOperators(opt) {
	showScreen.innerHTML += opt.value;
	screen.innerHTML = opt.value;
	after = getopt();
	if(num1 != 0) {
		screen.innerHTML = '';
	}	  
}

function getnum1() {
	if(after ==''){
		num1 = parseInt(screen.innerHTML);
		console.log("here is num1 " + num1);
		//temp = num1;
	}else {
		num2 = parseInt(screen.innerHTML);
		console.log("here is num2 " + num2);
	}
}

function getopt() {
	operator = screen.innerHTML;
	console.log("here is opt " + operator);
	screen.innerHTML = "";
	getresult();
	return operator;
}

function getresult(){
	switch(after) {
		case '+':
			result = num1 + num2;
			num1 = result;
			num2 = 0;
			screen.innerHTML = num1;
			console.log("here is num1 " + num1 + " here is num2 " + num2 + " result " + result);
			break;
		case '-':
			result = num1 - num2;
			num1 = result;
			num2 = 0;
			screen.innerHTML = num1;
			console.log("here is num1 " + num1 + " here is num2 " + num2 + " result " + result);
			break;
		case '*':
			result = num1 * num2;
			num1 = result;
			num2 = 0;
			screen.innerHTML = num1;
			console.log("here is num1 " + num1 + " here is num2 " + num2 + " result " + result);
			break;
		case '/':
			result = num1 / num2;
			num1 = result;
			num2 = 0;
			screen.innerHTML = num1;
			console.log("here is num1 " + num1 + " here is num2 " + num2 + " result " + result);
			break;
	}
}



/* Delete Text */
function del() {
	screen.innerHTML = "";
	showScreen.innerHTML = "";
	after = '';
	num1 = 0;
	num2 = 0;
	result = 0;
	//var delet = screen.value.substring(0, screen.value.length - 1);
	//screen.value = screen.value.slice(0, - 1);
	//screen.innerHTML = screen.value;
}