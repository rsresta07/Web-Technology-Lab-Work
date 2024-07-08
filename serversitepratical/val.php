<?php
    //checking for emptyness
    if(empty($_POST['user']) || empty($_POST['pass']) || empty($_POST['repass']) || 
    !isset($_POST['gender']) || empty($_POST['dob']) || !isset($_POST['degree']) || 
    !isset($_POST['grade']) || !isset($_POST['course'])) {
        echo "Please fill all the fields"; 
    } else if ($_POST['pass']!=$_POST['repass']) {
        echo "passwords are not same";
    } else {
        //retrieving all the form data and saving in variable
        include "connection.php";
        $name =  $_POST['user'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $degree = $_POST['degree'];
        $grade = $_POST['grade'];
        $course = $_POST['course'];
        //inserting data into db table
        $insertQuery = "insert into std_reg values ('$name','$pass','$repass','$gender','$dob','$degree','$grade','$course')";
        $inserExe = mysqli_query($conn,$insertQuery);
    }
?>
