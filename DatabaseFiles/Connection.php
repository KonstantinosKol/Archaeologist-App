<?php

    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "something_db";

    if (!$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname)) {
        die("Failed to connect.");
    }


?>