<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "sefu";
    $conn = new mysqli($servername, $username, $password, $db_name, 3300);
    if ($conn->connect_error) {
        die("Conncetion failed".$conn->connect_error);
    }
    echo "Connection Succeful";