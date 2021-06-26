function goHome(){
    window.open('http://solace.ist.rit.edu/~ma3655/240/','_blank');
}

function changeText(){
    document.getElementsByClassName('titleAuthor')[0].style.color = 'blue';
}

function imgHover(){
    document.getElementById("myimg").src="assets/images/raven2.jpg";
}
function imgLeave(){
    document.getElementById("myimg").src="assets/images/raven1.jpg";
}

var count = 1;
function formRed(){
    document.getElementById('formed').style.background = 'salmon';
    if(count % 2 == 0){
        document.getElementById('myForm').style.visibility = 'hidden';
        count++;
    }else{
        document.getElementById('myForm').style.visibility = 'visible';
        count++;
    }
}
function showForm(){
    document.getElementById('myForm').style.visibility = 'hidden';
    document.getElementById('formed').style.background = 'white';
}

function validate(){
    var x = document.forms["myForm"]["yName"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    return false;
}