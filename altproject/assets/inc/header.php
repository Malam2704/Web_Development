<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo $page; ?></title> 
        <link href="assets/css/project1.css" rel="stylesheet" type="text/CSS">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">
        <script src="assets/scripts/scripts.js"></script>
        <!-- Captcha API -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <!-- Google Maps API -->
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    </head>
    <body>
        <!-- Top Nav bar to goto the links for projects -->
        <nav id="navigation">
            <ul class="menu">
                <li class="inner_nav"><a class="underliner" href="index.php">Home</a></li>
                <li class="inner_nav"><span class="menu_description">Color Modes</span>
                    <ul>
                        <li onclick="changeBlack();"><a >Dark Mode</a></li>
                        <li onclick="changeRed();"><a >Red Mode</a></li>
                        <li onclick="changeGreen();"><a >Green Mode</a></li>
                    </ul>
                </li>
                <li class="inner_nav"><span class="menu_description">Demographic & Historic</span>
                    <ul>
                        <li ><a href="food.php">Food Spots</a></li>
                        <li ><a href="tourists.php">Places to go</a></li>
                    </ul>
                </li>
                <li class="inner_nav"><span class="menu_description">Places to Visit</span>
                    <ul>
                        <li ><a href="origins.php">Origins</a></li>
                        <li ><a href="immigration.php">Wave of Immigration</a></li>
                    </ul>
                </li>
                <li class="inner_nav"><span class="menu_description">New Features to the City</span>
                    <ul>
                        <li ><a href="burroughs.php">Actual Burroughs</a></li>
                        <li ><a href="skyscrapers.php">New Skyscrapers</a></li>
                        <li ><a href="expansion.php">Manhattan expansion</a></li>
                    </ul>
                </li>
                <li class="inner_nav"><span class="menu_description">Grading Material</span>
                    <ul>
                        <li ><a href="grading.php">Grading</a></li>
                        <li ><a href="references.php">References</a></li>
                        <li ><a href="comments.php">Comment Section</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="wrapper">
            <!-- Your basic heading found on all pages -->
            <h2><?php echo $page; ?></h2>