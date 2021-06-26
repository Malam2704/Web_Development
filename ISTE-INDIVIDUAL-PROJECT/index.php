<?php
    $page = "Welcome to New York City";
    $path = "./";
    include $path . "assets/inc/header.php";
?>

    <!-- A lot of these pages have the same comments so I'll just not be redundant and do the home page 
    and one content page -->

    <!-- an image that is floated left of centered followed by content -->
        <img id='indexImage' class="img_left" src="assets/images/about_nyc_view.jpg" alt="Skyline of nyc form a Helicopter" height="400" width="600">

    <!-- Open weather API weather demonstration into an iamge next to the img on the right -->
        <div id="weather" class="img_right">
            <div id="description"></div>
            <h1 id="temp"></h1>
            <div id="location"></div>
        </div>

    <!-- description paragraphs -->
        <p>Well, I guarantee everyone in America has heard of this city, if not the whole world</p>
        <p>This is the best city in the world, and was rated an A++ by the globalization
            index, and I just can't call another place home. You have a core of the entire world
            where literally someone form all over the world resides, and spread their culture,
            so we can all live in a melting pot.
        </p>
        <p>Shown here is A lost view of the NYC skyline, despite the great picture quality a lot
            more skyscrapers have been created, such as the WTC.
        </p>

    <!-- Google Maps API Implementation -->
        <div id="map"></div>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuuz8RT6qPRfI1bO3R-rARHGIoZze0fx8&callback=initMap&libraries=&v=weekly"
        async>
        </script>


<?php
    include "assets/inc/footer.php";
?>