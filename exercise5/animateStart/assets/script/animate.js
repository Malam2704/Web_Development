var moving;

function $(id){
    return document.getElementById(id);
}

function right(id){
    // console.log(document.getElementById(id).style.left);
    // document.getElementById(id).style.left = parseInt(document.getElementById(id).style.left) + 1 + "px";
    stopMoving();
    $(id).style.left = parseInt($(id).style.left) + 1 + "px";
    moving = setTimeout(function(){right(id);},10);
}

function left(id){
    stopMoving();
    $(id).style.left = parseInt($(id).style.left) - 1 + "px";
    moving = setTimeout(function(){left(id);},10);
}

function fadeOut(id){
    if(parseFloat($(id).style.opacity) >= 0){
        $(id).style.opacity = parseFloat($(id).style.opacity) - .01;
        moving = setTimeout(function(){fadeOut(id);},10);
        // disabled the fade in button
        document.getElementsByTagName('button')[4].disabled = true;
    }else{
        // allows the fade in
        document.getElementsByTagName('button')[4].disabled = false;
    }
}

function fadeIn(id){
    if(parseFloat($(id).style.opacity) <= 1){
        $(id).style.opacity = parseFloat($(id).style.opacity) + .01;
        moving = setTimeout(function(){fadeIn(id);},10);
        // disabled the fade out button
        document.getElementsByTagName('button')[3].disabled = true;
    }else{
        // allows the fade out
        document.getElementsByTagName('button')[3].disabled = false;
    }
}

function resetOpacity(id){
    window.clearTimeout(moving);
    $(id).style.opacity = 1;
}

function stopMoving(){
    window.clearTimeout(moving);
}

