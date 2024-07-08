<?php
/**checking if the username and password is corrrect or not */
//implementing
session_start();
//if(!isset($_SESSION['username'])) {
    if(empty($_POST['username']) || empty($_POST['pass'])) {
        echo "please fill all the field of login form";
    } else {
        include "connection.php";
        $logname = $_POST['username'];
        $logpass = $_POST['pass'];
        //setting the session variable 
        $_SESSION['username'] = $logname;
        $_SESSION['pass'] = $logpass;
        //writing query to check whether the username and password is correct with record
        $loginQuery = "SELECT * FROM tbl_info WHERE username='$logname' AND pass='$logpass'";
        $res = mysqli_query($conn,$loginQuery);
        echo mysqli_num_rows($res);
        if(mysqli_num_rows($res)==1) {
            header("location:display.php");
        } else {
            echo "username or password incorrect";
        }
    }
/*} else {
   header("Location:display.php");
}*/
?>