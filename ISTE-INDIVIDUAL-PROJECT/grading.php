<?php
    $page = "Grading Comments";
    $path = "./";
    include $path . "assets/inc/header.php";
?>
        <h3>Final Project Requirements</h3>
            <h4>Requirements</h4>
            <ol>
                <li>I have made my project modular with the PHP for my header and footer. </li>
                <li>I have made my pages validate and work without errors.</li>
                <li>CRAP is used with the Adobe Color Scheme.</li>
                <li>It's all organized well in content structure.</li>
            </ol>

            <h4>Previous Project fixes</h4>
            <ol>
                <li>I did this before when you mentioned the media query extra credit fix for this project, but I should probably mention it again.</li>
                <li>Made a drop down that works pretty well</li>
                <li>Fixed all the spelling errors</li>
                <li>Fixed the broken page, now you can go to all pages with the nav.</li>
                <li>Made a unique title that comes with the PHP modularity</li>
            </ol>

            <h4>Java Script & DHTML</h4>
            <ol>
                <li>I used a lot of javascript here and many many things too.</li>
                <li>My first stuff would be a combiantion of both elements where I made a version 
                    switcher for the user where they can chagne the look of the webpage such as the colors
                    borders, background and font color, incase they want to see a nicer color, or need dark 
                    mode for their eyes.
                </li>
                <li>
                    I actually used 3 of these elements and it took a decent amount fo time with the adobe color
                    match here, and a specific dark mode.
                    <figure class="center_figure">
                        <img src="assets/images/abode_red_theme.png" alt="The red color theme" height="500" width="900">
                    </figure>
                    <figure class="center_figure">
                        <img src="assets/images/abode_green_theme.png" alt="The red color theme" height="500" width="900">
                    </figure>
                </li>
                <li>I had to use many document.get body tags and it was all hurtful becuase I had to orde them in 
                    specific ways so that it worked aon all pages, like calling the weather tag last ebcuase not all pages have 
                    the open weather API
                </li>
                <li>Many many more implementations seen in the API Section</li>
            </ol>

            <h4>Extras & APIs</h4>
            <ol>
                <li>I used a lot of API's and wanted to do a lot more so I can get all the requirements for the page. </li>
                <li>The Opaen Weather API: This API was used by myself, where I take the city, in tis case NY, and I put it in a box
                    in the home page with active weather calls, shwoing the User the current weather. I also added DHTML so that depending on the 
                    weather, the backgorund of this box for the weather will change such as blue for clear. This was all implemented through Javascript
                </li>
                <li>The Google Maps API: This API was esserntially my replacement for my iframe page and custom map graphic, pasted before.
                    So I added many markers, 18 infact getting the lat long and titles. I made my own function for implenting the markers, and
                    had to even follow the demonstatrion to do so.
                </li>
                <li>The ReCaptcha API: This API is a comment manager for me so it's bot proof and defends my SQL Server. This form is just a 
                    typical google Captcha, where you just click to prove you're not a robot. It needs to be pressed each time a user wants to implement
                    a comment into my comment Page.
                </li>
                <li>Favicon: I also decided to add a Favicon from favicon.io where it's just a nyc skyline.</li>
                <li>Responsive Web Design: I used way too many media Queries that make sense, different queries for above and below
                    the intervals of 600,1000, and 1300 pixels of width, where adaptations are amde upon it like nav changing
                    and img stacking.
                </li>
                <li>Spectacular Colors: Like mentioned above I used a monochromatic matching schema where different color variations 
                    of my webpage are implemented based on the input the user picks.
                </li>
            </ol>

        <br>

        <h3>Old: Project Part 1</h3>
        <ol>
            <li>For one I believe I haev the right amount of content, I summarized an experience
                well and, I know I got eveything done, about the basics of NYC.
            </li>
            <li>
                I used good CRAP Principles, so I have everything in the stly section used, 
                the formatting, and color scheme inspired by adobe-color.com in the monochromatic style.
            </li>
            <li>
                I used HTML5 and CSS all correctly, and used all specific needs correctly,
                external style sheet and divs.
            </li>
            <li>
                I have my references page, made through a table and used APA6 citations 
            </li>
            <li>
                My nav is all set up nice, so you know where you are at all times, with an indicated
                underline on the current page, and There's a shadow too to amke ti look more
                professional
            </li>
            <li>Also I have the basics such as good gramamr and correct spelling.</li>
            <li>
                I used a map to display all the places I shown.
            </li>
        </ol>

<?php
    include "assets/inc/footer.php";
?>