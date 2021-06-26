<?php
    include "assets/inc/header.php";
?>
        <div id="header" class="header">
            <!-- Logo goes here -->
            <img id="logo" class="logo" src="shoftechlogo.png"/><br/>
            
            <!-- Menu goes here -->
            <div id="menu-bar" class="menu-bar">
                <span id='menu-item' class="menu-item" onmouseover="changeYellow()" onmouseout="changeWhite()">   
                    Menu
                </span> 
            </div>
        </div>
        <div id="scholarship-calculator" class="scholarship-calculator">
               
                <h2>Scholarship Calculator</h2>
                 <!-- Javascript Scholarship calculator goes below here -->
                 <form id="myForm" name='myForm'> 
                    <label for="income">Income: </label> <input type="text" name="num"> <input type="button" value="Check if Qualified!" onclick="validate()">
                 </form>
                <p id="scholarshipStatement"></p>
            </div>
            <div id="inquiry-form" class="inquiry-form">
                <h2>Inquiry Form</h2>
                
                <!-- Inquiry form for prospective students goes below here (hint you have to complete the attributes for the form element too! and then add elements-->
                <form action="process.php" id="IQform" name="iqForm" method="post" onsubmit=" return inquiryCheck()">
                    Name: <input type="text" name="name"><br>
                    Email: <input type="text" name="email"><br>
                    <input type="submit" value="Submit!" name="submitButton">
                </form>
            </div>
        <?php
            include "assets/inc/footer.php";
        ?>