<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "contractdatabase";
    $conn = new mysqli($servername, $username, $password, $db);
    if($conn->connect_error){
        die("Error connecting: " .$conn->connect_error);
    }else{

    }
