<?php
include "connection.php";
$deluname = $_GET['name'];
$delQuery = "Delete from std_reg where name ='$deluname'";
$delExe = mysqli_query($conn,$delQuery);
if($delExe){
    header('location:display.php');
}else{
    echo "connot delete";
}
?>