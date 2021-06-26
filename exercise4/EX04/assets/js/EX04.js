// First exercise's js file where I set a global variable
// and I HAVE AN IF ELSE CONDITIONAL to see if the variable is even or odd
//  basically incrementing when the button is pressed, reverting the 
// style back and forth towards the change
var numero = 0;
function jsStyle() {
    // function to change style
    // Change the color and the size of the font
    // in the paragraph with id='text'
    if(numero % 2 == 0){
        document.getElementById('text').style.fontSize='35px';
        numero = numero + 1;
    }else{
        document.getElementById('text').style.fontSize='16px';
        numero = numero + 1;
    }
}

// 2nd js exercise where an alert is made throught the input type values
function getFormValues() {
    // function to send first and last names
    // to an 'alert' message.
    window.alert(document.getElementById('fname').value + " " + document.getElementById('lname').value);
}

// an alert amde by makign a intial string variable and adding each value of the array
//  made by creating the get elemetns by options tag, and adding that value to the stirng
//  and fianlly after the loop alerting that string
function getOptions() {
	// function to display the number of options in an alert()
	var my_string = "";
	for(var i=0; i<document.getElementsByTagName('option').length; i++){
		my_string += document.getElementsByTagName('option')[i].value + " ";
	}
	window.alert(my_string);
}

// belwo 2 fucntions are apart fo teh 4th exercise, so when there
// is a mouse over, you have a red font, and when it's onmouseout it truns the
//  style of the text color black
function redder(){
    document.getElementById('rb').style.color = "red";
}
function blackker(){
    document.getElementById('rb').style.color = "black";
}

// these 2 functions below are exercie 5's js so I can turn the vlaues
// submitted in inputs for number one and 2 into variables and multiply or divide
// them and cahnge the html of the result tag and replace them with the product or quotient
function multiply(){
	var firsty = document.getElementById('firstoperand').value;
	var secondy = document.getElementById('secondoperand').value;
	var result = firsty * secondy;
	document.getElementById('result').innerHTML = result;
	return result;
}
function divide(){
	var firsty = document.getElementById('firstoperand').value;
	var secondy = document.getElementById('secondoperand').value;
	var result = firsty / secondy;
	document.getElementById('result').innerHTML = result;
	return result;
}