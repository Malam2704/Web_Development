function changeRed(){
    document.body.style = "background-color: #F73011; ";
    document.getElementsByClassName('menu')[0].style.backgroundColor = "#7B1809";
    document.getElementsByTagName('footer')[0].style.backgroundColor = '#7B1809';

    for(var j = 0; j< document.getElementsByClassName("comLi").length; j++){
        document.getElementsByClassName("comLi")[j].style.backgroundColor = "#F9715C";
        document.getElementsByClassName("comLi")[j].style.borderColor = "#7B1809";
    }

    for(var i = 0; i< document.getElementsByTagName("img").length; i++){
        document.getElementsByTagName("img")[i].style.borderColor = "#C4260E";
    }
    
    for(var j = 0; j< document.getElementsByClassName("inner_nav").length; j++){
        document.getElementsByClassName("inner_nav")[j].style.backgroundColor = "#7B1809";
    }

    document.getElementById('weather').style.borderColor = "#C2260E";
}

function changeBlack(){
    document.body.style.backgroundColor = "#3B3B3B";
    document.getElementsByClassName('menu')[0].style.backgroundColor = "#000000";
    document.getElementsByTagName('footer')[0].style.backgroundColor = '#000000';
    document.body.style.color = "#E6E6E6";
    
    for(var j = 0; j< document.getElementsByClassName("comLi").length; j++){
        document.getElementsByClassName("comLi")[j].style.backgroundColor = "grey";
        document.getElementsByClassName("comLi")[j].style.borderColor = "#000000";
    }
    
    for(var i = 0; i< document.getElementsByTagName("img").length; i++){
        document.getElementsByTagName("img")[i].style.borderColor = "grey";
    }

    for(var j = 0; j< document.getElementsByClassName("inner_nav").length; j++){
        document.getElementsByClassName("inner_nav")[j].style.backgroundColor = "#000000";
    }

    document.getElementById('weather').style.borderColor = "grey";
}

function changeGreen(){
    document.body.style.backgroundColor = "#00C79E";
    document.getElementsByClassName('menu')[0].style.backgroundColor = "#247867";
    document.getElementsByTagName('footer')[0].style.backgroundColor = '#247867';
    
    for(var j = 0; j< document.getElementsByClassName("comLi").length; j++){
        document.getElementsByClassName("comLi")[j].style.backgroundColor = "#4BF9D6";
        document.getElementsByClassName("comLi")[j].style.borderColor = "#00F7C6";
    }

    for(var i = 0; i< document.getElementsByTagName("img").length; i++){
        document.getElementsByTagName("img")[i].style.borderColor = "#007A62";
    }

    for(var j = 0; j< document.getElementsByClassName("inner_nav").length; j++){
        document.getElementsByClassName("inner_nav")[j].style.backgroundColor = "#247867";
    }

    document.getElementById('weather').style.borderColor = "#007A62";
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

var myLocations = [
    {
        latitude:40.704392,
        longitude:-73.996335,
        title:"Brooklyn Bridge"
    },

    {
        latitude:40.706734,
        longitude:-73.990930,
        title:"Manhattan Bridge"
    },
    
    {
        latitude:40.782864,
        longitude:-73.965355,
        title:"Central Park"
    },
    
    {
        latitude:40.6602, 
        longitude:-73.9690,
        title:"Prospect Park"
    },
    
    {
        latitude:40.689099,
        longitude:-73.982299,
        title:"Downtown Brooklyn"
    },
    
    {
        latitude:40.623986,
        longitude:-73.995939,
        title:"Utrecht Ave. Train Station"
    },
    
    {
        latitude:40.741530,
        longitude:-73.880013,
        title:"New Fu Fan Chinese Resturant"
    },
    
    {
        latitude:40.741063,
        longitude:-73.879713,
        title:"Famous's Pizza"
    },
    
    {
        latitude:40.746688,
        longitude:-73.850567,
        title:"Flushing Meadows Corona Park"
    },
    
    {
        latitude:40.758505,
        longitude:-73.828827,
        title:"Flushing Chinatown"
    },
    
    {
        latitude:40.708064,
        longitude:-73.802782,
        title:"Sagar Resturant"
    },
    
    {
        latitude:40.745079,
        longitude:-73.948286,
        title:"Long Island City"
    },
    
    {
        latitude:40.744428,
        longitude:-73.959096,
        title:"LIC Pier"
    },

    {
        latitude:40.715192,
        longitude:-74.002340,
        title:"Lower Manhattan"
    },
    
    {
        latitude:40.766298,
        longitude:-73.981054,
        title:"Central Park Tower"
    },

    {
        latitude:40.762130,       
        longitude:-73.962327,
        title:"Roosevelt Island TramWay"
    },

    {
        latitude:40.750248,
        longitude:-73.967067,
        title:"United Nations Secretariat Building"
    },

    {
        latitude:40.759383,        
        longitude:-73.987045,
        title:"An Halal Cart"
    },

    {
        latitude:40.758635,
        longitude:-73.995477,
        title:"Hudson Yards"
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
        center: { lat: 40.7128, lng: -74.0060 },
        zoom: 11, mapTypeId: google.maps.MapTypeId.ROADMAP 
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
    for(var i=0; i<myLocations.length; i++){
        addMarker(myLocations[i]['latitude'],myLocations[i]['longitude'],myLocations[i]['title']);
    }
}