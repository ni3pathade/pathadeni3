<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($host, $username, $password, $dbname);

    if($conn->connect_errno){
        echo "Connection Failed";
    }

?>