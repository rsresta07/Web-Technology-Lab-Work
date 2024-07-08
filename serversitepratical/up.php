<?php
    include "connection.php";
    $name = $_POST['uname'];
        $password = $_POST['pass'];
        $repassword = $_POST['repass'];
        $gender = $_POST['gender'];
       // $dob = $_POST['dob'];
        $degree = $_POST['deg'];
        $grade = $_POST['grd'];
        $course = $_POST['crs'];
    //query for update
    $updateQuery = "update std_reg set name='$name',password='$password', repassword='$repassword', gender='$gender', degree='$degree', grade='$grade', course='$course'where name='$name'";
    $updateExe = mysqli_query($conn,$updateQuery);
    if($updateExe){
        echo "record updated";
        header('location:display.php');
    }else{
        echo "error on updation";
    }
    ?>

