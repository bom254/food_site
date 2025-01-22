<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $number = $_POST['number'];

    // Database connection
    $conn = new \mysqli('localhost', 'root', '', 'sefu');
    if($conn ->connect_error){
        die('Connection Failed: '.$conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into register(fisrtName, lastName, email, dob, password, number)
        values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssi", $firstName, $lastName, $email, $dob, $password, $number);
        $stmt->execute();
        echo "registration successful...";
        $stmt -> close();
        $conn->close();
    }
