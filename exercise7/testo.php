<?php
    include "../../../dbconn.php";
    $stmt = $mysqli->prepare("INSERT INTO exercise07 (`name`,`comment`) VALUES (?, ?)");
    $stmt->bind_param("ss", $firstname, $lastname);

    // set parameters and execute
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $conn->close();
?>