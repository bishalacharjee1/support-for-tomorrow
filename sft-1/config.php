<?php

    $serverName ="localhost";
    $userName = "root";
    $password = "";
    $dbname = "sft";

    $conn =mysqli_connect($serverName,$userName,$password,$dbname);

    if(!$conn){
        die("connection error" .mysqli_connect_errno());
    }
    