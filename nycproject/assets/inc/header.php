<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo $page; ?></title> 
        <link href="assets/css/project1.css" rel="stylesheet" type="text/CSS">
    </head>
    <body>
        <!-- Top Nav bar to goto the links for projects -->
        <nav id="navigation">
            <ul class="menu">
                <li class="inner_nav"><a class="underliner" href="index.php">Home</a></li>
                <li class="inner_nav"><span class="menu_description">Demographic & Historic</span>
                    <ul>
                        <li ><a href="food.html">Food Spots</a></li>
                        <li ><a href="tourists.html">Places to go</a></li>
                    </ul>
                </li>
                <li class="inner_nav"><span class="menu_description">Places to Visit</span>
                    <ul>
                        <li ><a href="origins.html">Origins</a></li>
                        <li ><a href="immigration.html">Wave of Immigration</a></li>
                    </ul>
                </li>
                <li class="inner_nav"><span class="menu_description">New Features to the City</span>
                    <ul>
                        <li ><a href="burroughs.html">Actual Burroughs</a></li>
                        <li ><a href="skyscrapers.html">New Skyscrapers</a></li>
                        <li ><a href="expansion.html">Manhattan expansion</a></li>
                    </ul>
                </li>
                <li class="inner_nav"><span class="menu_description">Grading Material</span>
                    <ul>
                        <li ><a href="grading.html">Grading</a></li>
                        <li ><a href="references.html">References</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Your basic heading found on all pages -->
        <h2><?php echo $page; ?></h2>