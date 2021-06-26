function changeRed(){
    document.body.style.backgroundColor = "#F73011";
    document.getElementsByClassName('menu')[0].style.backgroundColor = "#7B1809";
    for(var i = 0; i< document.getElementsByTagName("img").length; i++){
        document.getElementsByTagName("img")[i].style.borderColor = "#C4260E";
    }
    // document.getElementById('weather').style.backgroundColor = "orangered";
    document.getElementById('weather').style.borderColor = "#C2260E";
    for(var j = 0; j< document.getElementsByClassName("commentUL")[0].getElementsByTagName("li").length; j++){
        document.getElementsByClassName("commentUL")[0].getElementsByTagName("li")[j].style.backgroundColor = "#F9715C";
        document.getElementsByClassName("commentUL")[0].getElementsByTagName("li")[j].style.borderColor = "#7B1809";
    }
    // for(var j = 0; j< document.getElementsByClassName("inner_nav")[0].getElementsByTagName("li").length; j++){
    //     document.getElementsByClassName("inner_nav")[j].style.borderColor = "#C4260E";
    //     document.getElementsByClassName("inner_nav")[0].getElementsByTagName("li")[j].style.backgroundColor = "#7B1809";
    // }
    for(j = 0; j< document.getElementsByTagName("iframe").length; j++){
        document.getElementsByTagName("iframe")[j].style.borderColor = "#C4260E";
    }
    for(j = 0; j< document.getElementsByClassName("menu_description").length; j++){
        document.getElementsByClassName("menu_description")[j].style.backgroundColor = "#7B1809";
    }
}

function changeBlack(){
    document.body.style.backgroundColor = "#3B3B3B";
    document.getElementsByClassName('menu')[0].style.backgroundColor = "#000000";
    document.body.style.color = "#E6E6E6";
    for(var i = 0; i< document.getElementsByTagName("img").length; i++){
        document.getElementsByTagName("img")[i].style.borderColor = "grey";
    }
    for(var j = 0; j< document.getElementsByClassName("commentUL")[0].getElementsByTagName("li").length; j++){
        document.getElementsByClassName("commentUL")[0].getElementsByTagName("li")[j].style.backgroundColor = "#F9715C";
        document.getElementsByClassName("commentUL")[0].getElementsByTagName("li")[j].style.borderColor = "#7B1809";
    }
    // for(var j = 0; j< document.getElementsByClassName("inner_nav").length; j++){
    //     document.getElementsByClassName("inner_nav")[j].style.borderColor = "#C4260E";
    // }
    for(j = 0; j< document.getElementsByTagName("iframe").length; j++){
        document.getElementsByTagName("iframe")[j].style.borderColor = "#C4260E";
    }
    for(j = 0; j< document.getElementsByClassName("menu_description").length; j++){
        document.getElementsByClassName("menu_description")[j].style.backgroundColor = "#7B1809";
    }
}

function changeGreen(){
    document.body.style.backgroundColor = "#00C79E";
    document.getElementsByClassName('menu')[0].style.backgroundColor = "#247867";
    for(var i = 0; i< document.getElementsByTagName("img").length; i++){
        document.getElementsByTagName("img")[i].style.borderColor = "#007A62";
    }
    document.getElementById('weather').style.borderColor = "#007A62";
    for(var j = 0; j< document.getElementsByClassName("commentUL")[0].getElementsByTagName("li").length; j++){
        document.getElementsByClassName("commentUL")[0].getElementsByTagName("li")[j].style.backgroundColor = "#4BF9D6";
        document.getElementsByClassName("commentUL")[0].getElementsByTagName("li")[j].style.borderColor = "#00F7C6";
    }
    // for(var j = 0; j< document.getElementsByClassName("inner_nav").length; j++){
    //     document.getElementsByClassName("inner_nav")[j].style.borderColor = "#C4260E";
    // }
    for(j = 0; j< document.getElementsByTagName("iframe").length; j++){
        document.getElementsByTagName("iframe")[j].style.borderColor = "#247867";
    }
    for(j = 0; j< document.getElementsByClassName("menu_description").length; j++){
        document.getElementsByClassName("menu_description")[j].style.backgroundColor = "#7B1809";
    }
}

// -----------------------------------------------------------------------
// Open weather API
function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function weatherBalloon( cityID ) {
    var key = 'dcd5a01685803cf65da8d4d80ae4ec11';
    fetch('https://api.openweathermap.org/data/2.5/weather?q=New York,US' + '&appid=' + key)  
    .then(function(resp) { return resp.json() }) // Convert data to json
    .then(function(data) {
        drawWeather(data);
    })
    .catch(function() {
    // catch any errors
    });
}

function drawWeather( d ) {
    var celcius = Math.round(parseFloat(d.main.temp)-273.15);
    var fahrenheit = Math.round(((parseFloat(d.main.temp)-273.15)*1.8)+32); 
    
    document.getElementById('description').innerHTML = capitalizeFirstLetter(d.weather[0].description.split(" ")[0]) + " " + capitalizeFirstLetter(d.weather[0].description.split(" ")[1]);
    document.getElementById('temp').innerHTML = fahrenheit + '&deg;';
    document.getElementById('location').innerHTML = capitalizeFirstLetter(d.name.split(" ")[0]) + " " + capitalizeFirstLetter(d.name.split(" ")[1]) + " City, " + "USA";
    
    if( description.indexOf('rain') > 0 ) {
        document.body.className = 'rainy';
        document.getElementById('weather').style.backgroundColor = "darkgrey";
    } else if( description.indexOf('cloud') > 0 ) {
        document.body.className = 'cloudy';
        document.getElementById('weather').style.backgroundColor = "silver";
    } else if( description.indexOf('sunny') > 0 ) {
        document.body.className = 'sunny';
        document.getElementById('weather').style.backgroundColor = "skyblue";
    }
    alert("as");
}

window.onload = function() {
    weatherBalloon( 6167865 );
}

// ====================================================================
// Google Maps API

var coffeeShops = [
    {
        latitude:43.084156,
        longitude:-77.67514,
        title:"Artesano Bakery & Cafe"
    },
    
    {
        latitude:43.083866,
        longitude:-77.66901,
        title:"Beanz"
    },
    
    {
        latitude:43.082520,
        longitude:-77.67980,
        title:"Midnight Oil"
    },
    
    {
        latitude:43.086678,
        longitude:-77.669014,
        title:"The College Grind"
    },
    
    {
        latitude:43.082634,
        longitude:-77.68004,
        title:"The Cafe & Market at Crossroads"
    },
    
    {
        latitude:43.08382,
        longitude:-77.674805,
        title:"RITZ Sports Zone"
    },
    
    {
        latitude:43.086502,
        longitude:-77.66912,
        title:"The Commons"
    },
    
    {
        latitude:43.08324,
        longitude:-77.68105,
        title:"The Market at Global Village"
    },
    
    {
        latitude:43.08384,
        longitude:-77.67457,
        title:"Brick City Cafe"
    },
    
    {
        latitude:43.084904,
        longitude:-77.6676,
        title:"Corner Store"
    },
    
    {
        latitude:43.08464,
        longitude:-77.680145,
        title:"CTRL ALT DELi"
    },
    
    {
        latitude:43.08359,
        longitude:-77.66921,
        title:"Gracie's"
    }
    
    
    ];

var map;
var infowindow;

function addMarker(latitude,longitude,title) {  
    var position = {lat:latitude,lng:longitude};    
    var marker = new google.maps.Marker({position: position, map:map});    
    marker.setTitle(title); 

    //Add a listener for the click event 
    google.maps.event.addListener(marker, 'click', function(e){
            makeInfoWindow(this.position,this.title); 
    });
}

function makeInfoWindow(position,msg){     
    // Close old InfoWindow if it exists      
    // if(infowindow) infowindow.close();       
    // Make a new InfoWindow       
    infowindow = new google.maps.InfoWindow({                     
        map: map,                
        position: position,                
        content: "<b>" + msg + "</b>"       
    }); 
}

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: {lat:43.083848, lng:-77.6799},zoom: 16, mapTypeId: google.maps.MapTypeId.ROADMAP 
    });
    map.mapTypeId = 'satellite';
    map.setTilt(45);

    // One way to add a marker
    // new google.maps.Marker({
    //   position: {lat:43.083848, lng:-77.6799},
    //   map,
    //   title: "Hello World!",
    // });
    
    // Another way to add a
    // var position = {lat:43.082634, lng: -77.68004};  
    // var marker = new google.maps.Marker({position: position, map: map});  
    // marker.setTitle("Crossroads");
    for(var i=0; i<coffeeShops.length; i++){
        addMarker(coffeeShops[i]['latitude'],coffeeShops[i]['longitude'],coffeeShops[i]['title']);
    }
}