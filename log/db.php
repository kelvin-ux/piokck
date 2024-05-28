<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kck_pio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        dir("connection failed:" . $conn->connect_error);
    }
?>