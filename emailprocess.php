<?php
    $path = "./";
    include $path."assets/inc/header.php";
?>
<?php
$pName = $_POST['personName'];
$message = $_POST['Message'];
$subject = $_POST['emailSubject'];
$theirEmail = $_POST['theirEmail'];
if(empty($theirEmail)){
    // if ID is empty, force the browser to go back to
    // the orderform page, but with the name the user entered
    // appended to the url.
    header('Location: emailform.php?name='.$pName);
}else{
    mail("mohammedal2144@gmail.com", $subject ,$message . " by " .$theirEmail);
}
?>
<body class="emailprocess contactWrapper">
    <h2 style="text-align: center;">Your message has been successfully sent, you will hear back from me within 24 hours</h2>
    <p style="text-align: center;"><input type="button" name="goBack" value=" Go back " onclick="backHome()"></p>
</body>