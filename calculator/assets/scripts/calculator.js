var currentNum = 0;
var firstNum = 0;
var secondNum = 0;
var currentOperand;

function clear(){
    document.getElementById("screen").innerHTML = "";
}

function enterNum(value){
    var textSoFar = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = textSoFar + value;
    currentNum = textSoFar + value;
}

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

function calcEnter(){
    secondNum = document.getElementById("screen").innerHTML;
    if(currentOperand == "+"){
        document.getElementById("screen").innerHTML = parseInt(firstNum) + parseInt(secondNum);
    }else if(currentOperand == "-"){
        document.getElementById("screen").innerHTML = parseInt(firstNum) - parseInt(secondNum);
    }else if(currentOperand == "*"){
        document.getElementById("screen").innerHTML = parseInt(firstNum) * parseInt(secondNum);
    }else if(currentOperand == "/"){
        document.getElementById("screen").innerHTML = parseInt(firstNum) / parseInt(secondNum);
    }
}