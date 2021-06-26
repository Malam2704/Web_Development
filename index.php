<?php
    $path = "./";
    include $path."assets/inc/header.php";
?>
    <div class="topSection">
        <!-- Top Nav bar to goto the links for projects -->
        <nav id="navigation" class="header">
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#individual">Featured Projects</a></li>
                <li><a href="#other">Other Projects</a></li>
                <!-- <li ><a href="#exercises">Exercises</a></li> -->
                <li><a href="<?php echo $path . "emailform.php"; ?>">Contact Form</a></li>
                <li onclick="myFunction()" id="darkMode"><a>Dark Mode</a></li>
            </ul>
            <div class="progress-bar" id="myBar"></div>
        </nav>


        <!-- A description of me and 4 paragraphs entailing my eduction
        past prgramming knowledge, what my hobbies are, and my contact information -->
        <div id="about" >
            <h1 class="ht titleShadow">Mohammed Alam</h1>
            <p class="p1">
                Well, my name is Mohammed Alam, and I'm from New York City.
                I am currently a Computing Exploration Major at RIT, looking at either Software
                Engineering, Computer Science, or Web & Mobile Computing.
            </p>
            <p class="p2">
                My hobbies include playing video games, trading in the stock market, and 
                doing some general research about a few topics I feel are interesting, such as
                the elections, infastructure development, and any data that pertains to maps.
                I have thousands of hours of history on these maps alone. 
            </p>
            <p class="p3">For Programming, I have been doing so since my Sophmore Year fo Highschool
                Transitioning through the drag and drgo based programs in Scratch, in AP CS to
                Java in my Software Development Class. I've dabbled in Python the most, and I would
                say I'm the most confident using Python's Object Oriented framework. 
            </p>
            <p class="p4">My email is ma3655@rit.edu / ma3655@g.rit.edu , so if you have any questions ask away, or just click the <a href="emailform.php" style="text-decoration: none;">contact form</a></p>

            <figure class="picture">
                <img id='myPic' src="assets/images/my_photo.jpg" width="500" height="600" alt="A picture of myself">
            </figure>
        </div>
    </div>

    <div class="contentSection">
        <!-- Belwo are just a variety of links that will be edited in teh future as
        a goto for my projects in teh remainder fo this course. -->

        <div class="slideShowBox mySection" id="slideShowBox">
            <h1 style="text-align:center" class="titleShadow">View My Featured Projects</h1>

            <div class="container">
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <video controls width="100%" height='465px'>
                        <source src="assets/media/finalGP.mp4"
                                type="video/mp4">
                    
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <video controls width="100%" height='465px'>
                        <source src="assets/media/individualP.mp4"
                                type="video/mp4">
                    
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <video controls width="100%" height='465px' muted>
                        <source src="assets/media/gtp.mp4"
                                type="video/mp4">
                    
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <video controls width="100%" height='465px' muted>
                        <source src="assets/media/cyberpunk.mp4"
                                type="video/mp4">
                    
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>

                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <video controls width="100%" height='465px'>
                        <source src="assets/media/fakenews.mp4"
                                type="video/mp4">
                    
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>

                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <video controls width="100%" height='465px'>
                        <source src="assets/media/wyoming.mp4"
                                type="video/mp4">
                    
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption">Nothing Clicked Yet</p>
                </div>

                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="assets/images/CroppedGroupLogin.jpg" style="width:100%; height: 130px" onclick="currentSlide(1)" alt="The CSS Survival Guide">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="assets/images/CroppedIndividualPorject.jpg" style="width:100%; height: 130px" onclick="currentSlide(2)" alt="Welcome To NYC">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="assets/images/CroppedGTP.jpg" style="width:100%; height: 130px" onclick="currentSlide(3)" alt="My Game: Democrat or Republican">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="assets/images/CroppedCyberPunk.jpg" style="width:100%; height: 130px" onclick="currentSlide(4)" alt="CyberPunk 2077">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="assets/images/Croppedfakenews.jpg" style="width:100%; height: 130px" onclick="currentSlide(5)" alt="A Report I did about Fake News">
                    </div>   
                    <div class="column">
                        <img class="demo cursor" src="assets/images/CroppedWyomingReport.jpg" style="width:100%; height: 130px" onclick="currentSlide(6)" alt="My Report about the state of Wyoming">
                    </div>
                </div>
            </div>
        </div>

        <div id="individual" class="mySection">
            <h2>My Featured Projects</h2>
            <ol>
                <li ><a href="altgroup/index.php">The CSS Survival Guide (Non-SQL edition)</a></li>
                <li ><a href="ISTE240-Group-Project/index.php">The CSS Survival Guide</a> - <a href="#slideShowBox"><em>(Video shown above)</em></a>, a quick guide to help users learn CSS or get a resfresher and immedietly start programming.
                    <ul>
                        <li>We used basic Web Development principles with reponsive design to build a layout simple for users to know where they are and what to learn.</li>
                        <li>We also used Wireframes with Figma, and CSS transitions for added Pazazz.</li>
                        <li>JavaScript was used to make our side anv where users can skip each section in a chapter, and to validate our comments.</li>
                        <li>PHP, was used to modularize our 30 pages, and send our info packets into our SQL database.</li>
                        <li>MySQL was used to record data for our login so users have to create an account to access our site.</li>
                        <li>APIs were used such as ReCaptcha.</li>
                    </ul>
                </li>
                <li ><a href="nycproject/index.php">Welcome to NYC (Non-SQL edition)</a></li>
                <li ><a href="ISTE-INDIVIDUAL-PROJECT/index.php">Welcome to New York City</a> - <a href="#slideShowBox"><em>(Video shown above)</em></a>
                    <ul>
                        <li>DHTML & JavaScript used to change color of webpages, and validate the forms.</li>
                        <li>APIs used - OpenWeather for live weather updates of NYC, Google Maps to show the locations, and ReCaptcha for form submission</li>
                        <li>PHP to modularize all pages.</li>
                        <li>MySQL to record comments.</li>
                    </ul>    
                </li>
                <li ><a href="newGame/index.html">Democrat or Republican, The Game</a> - A game I made where users guess which political party a politican is a part of, this was inpsired by
                    the fact that we have stereotypical identities for each Political Party.</li>
                <li ><a href="last_semester/project3/index.html">My CyberPunk 2077 Website</a> - I created a website to showcase the release of CyberPunk 2077 and tell a user what it's all about</li>
                <li ><a href="last_semester/project2/index.html">A Guide About All The Fake News</a> - A website to introduce users on the plethora of fake news plagueing society, and why it's so harmful, and mopre importantly, how to avoid it.</li>
                <li ><a href="last_semester/midterm2201/index.html"> Welcome to Wyoming</a> - A guide about visitng the state of Wyoming and all the natural wonders hidden inside.</li>
            </ol>
        </div>

        <div id="other" class="mySection">
            <h2>Other Published Projects</h2>
            <ol>
                <li ><a href="final/startfiles-sec2/index.php"> Final Practical</a> - my final exam for the ISTE 240 class, where I have to make a webpage for the South Harmon Institute of Technology using MySQL, PHP, JavaScript, HTML, and CSS.</li>
                <li ><a href="last_semester/project1/index.html">My Extended Resume</a> - My resume and other information that is an extension of my resume and showcases what I've done, for my work experience.</li>
                <li ><a href="last_semester/pages/jojodoss/index.html"> Jojodoss's Webpage (In Progress)</a> - A introduction to my friend's Youtube Channel</li>
                <li ><a href="last_semester/pages/pokegar/index.html"> Pokegar's Webpage (In Progress)</a> - A introduction to my other friend's Youtube Channel</li>
                <li ><a href="last_semester/pages/atlantean_Empire/index.html"> The Atlantean Empire (In Progress)</a> - The video game website towards one of my organizations/guild's in this game AQW</li>
                <!-- <li ><a href="last_semester/myblog/index.html"> 1 State, 2 Stae, Red State, Blue State</a> - My Political blog which I update weekly. After the 2020 election, I was curious in the
                    world of politics which I always ignored because I didn't undertand it. After the ruish of the 2020 elections, Politics have been one of my key interests, and I have spent
                    my free time researchign details, the most famous of which are Demogrpahi and Political shifts found in the nation.</li> -->
            </ol>
        </div>

        <!-- <div id="group" class="mySection">
            <h2>Group Projects</h2>
            <ol>
                
            </ol>
        </div> -->

        <!-- <div id="exercises" class="mySection">
            <h2>Exercises</h2>
            <ol>
                <li ><a href="#navigation">Exercise 1</a> - My homepage website, literally this one you're looking at.</li>
                <li ><a href="exercise2/index.html">Exercise 2</a> - This is an excercise inclusing responsive web design, a placement of images, positions, and transitions</li>
                <li ><a href="exercise3/index.html">Exercise 3</a> - Forms example of creation</li>
                <li ><a href="exercise4/EX04/EX04.html">Exercise 4</a> - Forms and Javascript exercise</li>
                <li ><a href="exercise5/EX05/EX05.html">Exercise 5</a> - JavaScript part 2, where we delve into deeper topics such as simplifying the document calss and nodes.</li>
                <li ><a href="exercise6phpFormsStart/orderform.php">Exercise 6</a> - PHP Pizza Ordering Form</li>
                <li ><a href="http://solace.ist.rit.edu/~ma3655/240/exercise7/contact.php">Exercise 7</a> - Essentially a comment section made with the SQL database where your info is recorded and printed out in the comment section</li>
                <li ><a href="dbInsertStart/phpSelect.php"> PHP Data Selection Demo</a> - Where we can choose a pet of a type of fish and display it on an HTML table</li>
            </ol>
        </div> -->
    </div>

<?php
    include $path . "assets/inc/footer.php";
?>
