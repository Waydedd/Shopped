<?php

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "shopped";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Database connection failed");
    }


?>