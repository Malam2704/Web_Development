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
                Hello, my name is Mohammed Alam, and I am currently a Software Engineering/ Computer 
                Science Major at RIT, looking to minor in Business & Web & Mobile Development.
                I am from the New York City area, where I still reside.
            </p>
            <p class="p2">
                Some of my hobbies include playing researching data, such as population statistics, 
                doing some general research about a few topics I feel are interesting, such as
                the U.S. elections, Advancements in modern architecture, and any data that pertains to maps.
                Infact I have some of my maps published on reddit, with over 100k likes(upvotes).
                I have thousands of hours of history on viewing maps and time spent on reddit learning new 
                things.
            </p>
            <p class="p3">
                For Programming, I have been doing so since my Sophmore Year of Highschool
                Transitioning through the drag and drop based programs in Scratch, in AP CS to
                Python & Java in Computer Science 1 & 2. 
            </p>
            <p class="p4">Some of my Java Projects are here <a href="https://github.com/Malam2704/Software-Engineering-Projects" style="text-decoration: none;"> at my Java github repo</a> </p>
            <p class="p5">Some of my Python Projects are here <a href="https://github.com/Malam2704/Python_Projects" style="text-decoration: none;"> at my Python repo</a> </p>
            <p class="p6">This Website was created to show off my Web Development projects.
            The ones made throught HTML,CSS,JS, along with some server-based projects 
            with PHP, utilizing the MySQL database.</p>
            <p class="p7">
                My email is ma3655@rit.edu / ma3655@g.rit.edu , so if you have any questions ask away, 
                or just click the 
                <a href="emailform.php" style="text-decoration: none;">contact form</a>
            </p>

            <figure class="picture">
                <img id='myPic' src="assets/images/my_photo.jpg" width="500" height="600" alt="A picture of myself">
            </figure>
        </div>
    </div>

    <div class="contentSection">
        <!-- Belwo are just a variety of links that will be edited in teh future as
        a goto for my projects in teh remainder fo this course. -->

        <div class="slideShowBox mySection" id="slideShowBox">
            <h1 style="text-align:center" class="titleShadow">Videos of My Projects</h1>

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

        <div id="projects" class="mySection">
            <h2 class="projectTitle">My Featured Projects</h2>
            <div class="project1 aProject" onclick="location.href='altgroup/index.php'" > <img src="assets/images/CroppedCommentSectionGroup.jpg"> <a href="altgroup/index.php">The CSS Survival Guide <br> (Non-SQL edition)</a></div>
            <div class="project2 aProject" onclick="location.href='ISTE240-ISTE240-Group-Project/index.php'" > <img src="assets/images/CroppedGroupLogin.jpg"> <a href="ISTE240-Group-Project/index.php">The CSS Survival Guide</a></div>
            <div class="project3 aProject" onclick="location.href='nycproject/index.php'" > <img src="assets/images/CroppedNonSQLIP.jpg"> <a href="project1/index.php">Welcome to NYC <br> (Non-SQL edition)</a></div>
            <div class="project4 aProject" onclick="location.href='ISTE-ISTE-INDIVIDUAL-PROJECT/index.php'" > <img src="assets/images/CroppedIndividualPorject.jpg"> <a href="ISTE-INDIVIDUAL-PROJECT/index.php">Welcome to New York City</a></div>
            <div class="project5 aProject" onclick="location.href='newGame/index.html'" > <img src="assets/images/CroppedGTP.jpg"> <a href="newGame/index.html">Democrat or Republican, The Game</a></div>
            <div class="project6 aProject" onclick="location.href='last_semester/project3/index.html'" > <img src="assets/images/CroppedCyberPunk.jpg"> <span> <a href="last_semester/project3/index.html">My CyberPunk 2077 Website</a> <span></div>
            <div class="project7 aProject" onclick="location.href='last_semester/project2/index.html'" > <img src="assets/images/Croppedfakenews.jpg"> <span> <a href="last_semester/project2/index.html">A Guide About All The Fake News</a> </span></div>
            <div class="project8 aProject" onclick="location.href='last_semester/midterm2201/index.html'" > <img src="assets/images/CroppedWyomingReport.jpg"> <span> <a href="last_semester/midterm2201/index.html"> Welcome to Wyoming</a> </span></div>
        </div>
    </div>

<?php
    include $path . "assets/inc/footer.php";
?>
