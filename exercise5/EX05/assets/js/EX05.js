// First exercise's js file where I set a global variable
// and I HAVE AN IF ELSE CONDITIONAL to see if the variable is even or odd
//  basically incrementing when the button is pressed, reverting the 
// style back and forth towards the change

// A fucntion to shorten the ID calling 
function $(id){
    return document.getElementById(id);
}

// each time thi is activated an id lis moved left by 10 pixels
function right(id){
    // console.log(document.getElementById(id).style.left);
    // document.getElementById(id).style.left = parseInt(document.getElementById(id).style.left) + 1 + "px";
    $(id).style.left = parseInt($(id).style.left) + 10 + "px";
	console.log($(id).style.left)
}

// counts the number of inpouts spcifically in the form named regForm
function howmany(){
	alert(document.getElementById('regForm').getElementsByTagName('input').length);
}

// FInds the vlaue of the selector input type, and whatever that value
//  will be the backround color of the entire 3rd div/exercise
function colorChanger(){
	document.getElementById('tres').style.backgroundColor = document.getElementById('mySelect').value;
}

// changes teh text color to whatever the slector back in exercise 3 was.
function changer(){
	document.getElementById('rb').style.color = document.getElementById('mySelect').value;
}
// reverts the text in exercise 4 to black
function blackker(){
    document.getElementById('rb').style.color = "black";
}

// same thing as before, btu isntead we are creating a new 
// variable out of the span, and replacing it's child with a created
// text Node, where a new node is the result, either multiplyign or dividing.
function multiply(){
	var firsty = document.getElementById('firstoperand').value;
	var secondy = document.getElementById('secondoperand').value;
	var result = firsty * secondy;
	var answerText = document.getElementById('result');
	answerText.replaceChild(document.createTextNode(result),answerText.childNodes[0]);
	return result;
}
function divide(){
	var firsty = document.getElementById('firstoperand').value;
	var secondy = document.getElementById('secondoperand').value;
	var result = firsty / secondy;
	var answerText = document.getElementById('result');
	answerText.replaceChild(document.createTextNode(result), answerText.childNodes[0]);
	return result;
}