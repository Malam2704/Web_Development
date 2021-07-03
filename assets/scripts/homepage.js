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
function darkMode() {
  document.body.classList.toggle("dark-mode");

  if(darkModeCount % 2 == 0){
    for(let ap = 0; ap<document.body.getElementsByClassName('aProject').length; ap++){
      document.body.getElementsByClassName('aProject')[ap].style = "box-shadow: unset";
    }
    for(let alinks = 3; alinks<document.body.getElementsByTagName('a').length; alinks++){
        document.body.getElementsByTagName('a')[alinks].style.color = 'dark-grey';
    }
    document.body.style.backgroundColor = 'black';
    document.getElementById('myPic').style = 'box-shadow: unset';
    document.getElementById('slideShowBox').style = 'box-shadow: unset';
    darkModeCount++;
  }else{
    for(let ab = 0; ab<document.body.getElementsByClassName('aProject').length; ab++){
      document.body.getElementsByClassName('aProject')[ab].style = "box-shadow: 15px 10px #223031";
    }
    for(let alinks = 3; alinks<document.body.getElementsByTagName('a').length; alinks++){
        document.body.getElementsByTagName('a')[alinks].style.color = '#005C61';
    }
    document.body.style.backgroundColor = '#01D6E0';
    document.getElementById('myPic').style = 'box-shadow: 20px 20px 20px #223031';
    document.getElementById('slideShowBox').style = 'box-shadow: 0px 5px 10px #223031';
    darkModeCount++;
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