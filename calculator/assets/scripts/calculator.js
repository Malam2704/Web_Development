var currentNum = 0;
var firstNum = 0;
var secondNum = 0;
var currentOperand;

// Clearing the calculator, renamed clearCalc() from clear(),
// because clearCalc() is another js function
function clearCalc(){
    currentNum = 0;
    firstNum = 0;
    document.getElementById("screen").innerHTML = "";
}

// Inputting severl numbers on the calc
function enterNum(value){
    var textSoFar = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = textSoFar + value;
    currentNum = textSoFar + value;
}

// One function for each operand, sets firNum var to whatever is on
// the screen, then clears screen, settignt he way for the next operand
// and sets the currentOperand to +,-,*, or /
function addNum(){
    firstNum = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = "";
    currentOperand = "+";
}
function subNum(){
    firstNum = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = "";
    currentOperand = "-";
}
function mulNum(){
    firstNum = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = "";
    currentOperand = "*";
}
function divNum(){
    firstNum = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = "";
    currentOperand = "/";
}
function powNum(){
    firstNum = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = "";
    currentOperand = "^";
}
function modNum(){
    firstNum = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = "";
    currentOperand = "MOD";
}

// When the enter key is pressed, checks what the current operand is,
// and sets the screen innerHTML to whatever the equation is.
function calcEnter(){
    secondNum = document.getElementById("screen").innerHTML;
    if(currentOperand == "+"){
        document.getElementById("screen").innerHTML = parseFloat(firstNum) + parseFloat(secondNum);
    }else if(currentOperand == "-"){
        document.getElementById("screen").innerHTML = parseFloat(firstNum) - parseFloat(secondNum);
    }else if(currentOperand == "*"){
        document.getElementById("screen").innerHTML = parseFloat(firstNum) * parseFloat(secondNum);
    }else if(currentOperand == "/"){
        document.getElementById("screen").innerHTML = parseFloat(firstNum) / parseFloat(secondNum);
    }else if(currentOperand == "^"){
        document.getElementById("screen").innerHTML = parseFloat(firstNum) ** parseFloat(secondNum);
    }else if(currentOperand == "MOD"){
        document.getElementById("screen").innerHTML = parseFloat(firstNum) % parseFloat(secondNum);
    }
}