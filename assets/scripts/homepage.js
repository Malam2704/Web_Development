// When the page laods, video player with first video opens
window.onload = function() {currentSlide(1)}

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

var darkModeCount = 0;
var element;
function myFunction() {
    // document.getElementById('darkMode').style.color = 'lightblue';
    if(darkModeCount % 2 == 0){
        element = document.body;
        // Changes body color to blakc and text color to black
        element.style.backgroundColor = "black";
        element.style.color = "	#C0C0C0";
        element.getElementById('about').style = "box-shadow: unset";
        element.getElementsByClassName('topSection')[0].style = "box-shadow: unset"
        element.getElementById('slideShowBox').style = "box-shadow: unset";
        darkModeCount = darkModeCount + 1;
        console.log(darkModeCount);
    }else{
        element = document.body;
        // Changes body color to blakc and text color to black
        element.style.backgroundColor = "#01D6E0";
        element.style.color = "	#E6E6E6";
        darkModeCount = darkModeCount + 1;
        console.log(darkModeCount);
    }   
}

function addTextBox() {
    document.getElementById['otherEmailSubject'].style = "visibility: visible;";
}

function backHome(){
    window.location.href = "https://people.rit.edu/ma3655/ISTE240/";
}

// --------------------------------------------------
// Slide show gallery
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
}
// --------------------------------------------------