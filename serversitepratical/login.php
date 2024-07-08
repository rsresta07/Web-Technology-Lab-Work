<?php
//implementing session
session_start();
    if(!isset($_SESSION['user'])) {
 
        if(empty($_POST['logname']) || empty($_POST['logpass'])){
            echo "please fill all the fields of login form";
        } else {
            include "connection.php";
            $logname = $_POST['logname'];
            $logpass = $_POST['logpass'];
            //setting the session variable
            $_SESSION['user'] = $logname;
            $_SESSION['pass'] = $logpass;
            //writing query to check whether uname and pass is correct
            $loginQuery = "select * from std_reg where name='$logname' and password='$logpass'";
            $res = mysqli_query($conn,$loginQuery);
            echo mysqli_num_rows($res);
            if(mysqli_num_rows($res)==1) {
                header('location:display.php');
            } else {
                echo " Username or password not valid";
            }
        }
    } else {
        header("location:display.php");
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <fieldset>
        <legend align="center">Login</legend>
        <label>Username</label>
        <input type="text" name="logname"/><br/>
        <label>Password</label>
        <input type="password" name="logpass"/><br/>
        <input type="submit" name="submit" value="submit"/>&nbsp;
        <input type="reset" name="reset" value="reset"/>
        </fieldset>
    </form>
</body>
</html>
