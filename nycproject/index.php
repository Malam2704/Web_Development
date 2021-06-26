<?php
    $page = "Welcome to New York City";
    $path = "./";
    include $path . "assets/inc/header.php";
?>

        <!-- A lot of these pages have the same comments so I'll just not be redundant and do the home page 
        and one content page -->

        <!-- an image that is floated left of centered followed by content -->
        <img class="img_left" src="assets/images/about_nyc_view.jpg" alt="Skyline of nyc form a Helicopter" height="400" width="600">

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

        <!-- The grpahic map that shows the palces featured -->
        <div class="centered">
            <iframe src="https://www.google.com/maps/d/embed?mid=1X5yoP8lLk0xe3NIBQuWK7IIuCwFeTJb3&hl=en" width="1140" height="780"></iframe>
        </div>

    </body>
</html>