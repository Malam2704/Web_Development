// Create the script tag, set the appropriate attributes
var script = document.createElement('script');
script.src = 'https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap';
script.async = true;

let map;

// Attach your callback function to the `window` object
window.initMap = function() {
  // JS API is loaded and availablelet map;
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 40.716421, lng: -73.951735 },
    zoom: 11,
  });
};

// Append the 'script' element to 'head'
document.head.appendChild(script);