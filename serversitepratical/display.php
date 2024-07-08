<?php
session_start();
include "connection.php";
if(isset($_SESSION['user']) || isset($_SESSION['pass'])) {
    $disQuery = "select * from std_reg";
    $disExe = mysqli_query($conn,$disQuery);
    echo "<table border = 1>";
    echo "<tr>";
    echo "<th>name</th>";
    echo "<th>password</th>";
    echo "<th>repassword</th>";
    echo "<th>gender</th>";
    echo "<th>dateofbirth</th>";
    echo "<th>degree</th>";
    echo "<th>grade</th>";
    echo "<th>course</th>";
    echo "<th>operation</th>";
    echo "</tr>";
    if($disExe){
        while($row = mysqli_fetch_assoc($disExe)){
            $name = $row['Name'];
            $password = $row['Password'];
            $repassword = $row['Repassword'];
            $gender = $row['Gender'];
            $dateofbirth = $row['Date of Birth'];
            $degree = $row['Degree'];
            $grade = $row['Grade'];
            $course = $row['Course'];
            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>$password</td>";
            echo "<td>$repassword</td>";
            echo "<td>$gender</td>";
            echo "<td>$dateofbirth</td>";
            echo "<td>$degree</td>";
            echo "<td>$grade</td>";
            echo "<td>$course</td>";
            echo "<td><a href='edit.php?name=$name & password=$password & repassword=$repassword & 
            gender=$gender 
            & dateofbirth=$dateofbirth & degree=$degree & grade=$grade & course=$course'>Edit</a>&nbsp;
            <a href='del.php?name=$name'>Delete</a></td>";
            echo "</tr>";
            
        }
    }
    echo "</table>";

}else{
    header("location:login.php");
}
if(isset($_POST['logout'])){
    session_destroy();
    header("location:login.php");
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
        <input type="submit" name="logout" value="logout"/>
    </form>
</body>
</html>
