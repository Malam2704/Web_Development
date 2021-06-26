<?php
    //$_SERVER[" "]
    // echo $_GET['name'];

    // $name = $_GET['name'];
    if(!isset($_GET['name']) || $_GET['name'] == ""){
        die('Error your name provided!');
    }else{
        $name = $_GET['name'];
    }

    if(!isset($_GET['email']) || $_GET['email'] == ""){
        die('Error your email provided!');
    }else{
        $email = $_GET['email'];
    }

    if(!isset($_GET['message']) || $_GET['message'] == ""){
        die('Error your message provided!');
    }else{
        $message = $_GET['message'];
    }
    
    $newmessage = "A person named: " . $name . "With an email address: " . $email . " With 
    a form with the message: " . $message;

    // Sends an actual email to an address, subject, with a message
    mail($email,"The form you submitted",$message);
    // redirects the user to another page.
    header("Location: store.php")
?>