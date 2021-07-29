var politicianSize;
var currentIndex;
var politicianSource;

var theParty;

var usedPoliticiansSrc = [];
var usedPoliticiansSrcIndex = 0;

function setParty(myParty){
    theParty = myParty;
}

// Function used when play is pressed at the beginning
function playGame(){
    // Play button disappears
    document.getElementsByClassName('playButton')[0].style = "display: none;";
    // Democrat, Republican, Neither buttons are visible
    document.getElementsByClassName('buttonRow')[0].style = "visibility: visible;";
    // document.getElementById('currentCaption').style = "visibility: visible;";
    // Score and streaks are set to 0
    document.getElementsByClassName('scoreNum')[0].innerHTML = "0";
    document.getElementsByClassName('streakNum')[0].innerHTML = "0";

    // code inside nextPic()
    politicianSize = politicians.length;
    currentIndex = Math.floor(Math.random() * politicianSize);
    politicianSource = politicians[currentIndex]['src'];
    document.getElementById('currentImg').src = politicianSource;
    document.getElementById('currentCaption').innerHTML = politicians[currentIndex]['name'];
}


function addPoint(){
    // get the political party from the array of dictionaries using the src of the img
    // in the html, if equal bottom code.
    console.log(theParty);
    console.log(politicians[currentIndex]['name'] + " " + politicians[currentIndex]['party']);
    if(politicians[currentIndex]['party'] == theParty){
        console.log(true);
        console.log(document.getElementsByClassName('scoreNum')[0].innerHTML);

        // Turns the img border green for correct
        // document.getElementById('currentCaption').style = "color: green; transition: 0.3s";

        // The reason why we don't use currentScore is because it will not change var
        document.getElementsByClassName('scoreNum')[0].innerHTML = parseInt(document.getElementsByClassName('scoreNum')[0].innerHTML) + 1;
        document.getElementsByClassName('streakNum')[0].innerHTML = parseInt(document.getElementsByClassName('streakNum')[0].innerHTML) + 1;
    }else{
        // Turns the img border red for incorrect and thh streak is reset to 0
        // document.getElementById('currentCaption').style = "color: red; transition: 0.3s";
        document.getElementsByClassName('streakNum')[0].innerHTML = "0";
    }
}


//Gets an index from the politicians array and puts the src of the politicain into a variable
function getPoliticianSource(){
    // console.log(usedPoliticiansSrc.length)
    // console.log(politicians.length);
    // if(usedPoliticiansSrc.length == politicians.length){
    //     for(var zz = 0; zz<usedPoliticiansSrc.length; zz = zz + 1){
    //         usedPoliticiansSrc.pop();
    //     }
    // }

    politicianSize = politicians.length;
    currentIndex = Math.floor(Math.random() * politicianSize);
    politicianSource = politicians[currentIndex]['src'];
    return politicianSource;
}

var nextPicCount = 0;
function nextPic(party){
    // setTimeout(function() {console.log("Time Delay for next Picture")}, 2500);
    // document.getElementById('currentCaption').style = "color: unset; transition: 0.3s";
    // document.getElementById('currentImg').style.borderColor = "#FF5700";

    // Currentsource will be a source not in the used politican src array. So no repeated Politicians will
    // appear
    // var currentSource;
    // while(true){
    //    currentSource = getPoliticianSource();
    //    if(usedPoliticiansSrc.includes(currentSource) === false){
    //        break;
    //    }
    // }
    var myScores = document.body.getElementsByClassName('scoreCountSWection');
    document.body.classList.toggle('changeBackground');
    if(nextPicCount % 2 == 0){
        document.body.getElementsByTagName('footer')[0].style = 'background-image: linear-gradient(-45deg, blue 0 50%, red 50% 100%);';

        for(let sC = 0; sC < myScores.length; sC++){
            myScores[sC].style.backgroundColor = 'blue';
        }

        nextPicCount++;
    }else{
        document.body.getElementsByTagName('footer')[0].style = 'background-image: linear-gradient(-45deg, red 0 50%, blue 50% 100%);';
        
        for(let sC = 0; sC < myScores.length; sC++){
            myScores[sC].style.backgroundColor = 'red';
        }
        
        nextPicCount++;
    }
    

    // the current img src is the new index politician's src, and current caption is new index politician's name
    var currentSource = getPoliticianSource();
    document.getElementById('currentImg').src = currentSource;
    document.getElementById('currentCaption').innerHTML = politicians[currentIndex]['name'];

    usedPoliticiansSrc[usedPoliticiansSrcIndex] = currentSource;
    usedPoliticiansSrcIndex = usedPoliticiansSrcIndex + 1;
}