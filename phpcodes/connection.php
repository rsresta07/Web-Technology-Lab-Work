<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="db_company";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);

    // Check connection
    if ($conn) {
        echo"Connected!!!";
    }else{
        echo "Not Connected!!!";
    }   
?>