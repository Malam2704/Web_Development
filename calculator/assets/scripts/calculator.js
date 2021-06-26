var equation;

function enterNum(value){
    var textSoFar = document.getElementById("screen").innerHTML;
    document.getElementById("screen").innerHTML = textSoFar + value;
    equation = textSoFar + value;
}

function calcEnter(){
    alert(equation);
}