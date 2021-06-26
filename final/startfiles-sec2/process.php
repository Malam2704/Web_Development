<?php
//This file will be used to insert the data from the inquiry form into the database!

//Hints:
//get the variables, ensuring they are provided or die() 
//Sanitize the data if you can for full credit
//mysql: connect to the database
//mysql: Prepare the mysql
//mysql: bind
//mysql: executre
//mysql: close


//if successfull print out a success message that includes the persons name!

    function sanitize($str,$length=100){
        //trim the stirng gettin rid of leading and trailing blank spaces.
        $str = trim($str);
        // gets rid of all the html elements, and changes them
        $str = htmlentities($str, ENT_QUOTES);
        return substr($str,0,$length);
    }

    include "../../../../dbconn.php";
    if($mysqli){
        if(empty($_POST["email"]) == false && empty($_POST["name"]) == false){
            $stmt = $mysqli->prepare("INSERT INTO `inquiry-forms` (`name`, `email`) VALUES (?,?)");
            $cleanName = sanitize($_POST["name"]);
            $cleanEmail = sanitize($_POST["email"]);
            $stmt->bind_param("ss",$cleanName,$cleanEmail);
            $stmt->execute();
            $stmt->close();

            echo "Thank you for submitting an inquiry!" ;
        }else{
            ?>
                <script>
                    alert("Fill in both fields for the Inquiry form");
                    sleep(5000);
                </script>
            <?php
            header("Location: index.php");
        }
    }
?>