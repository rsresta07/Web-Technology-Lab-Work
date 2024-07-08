<?php 
    include "connection.php";
    $delid = $_GET['id'];
    $delQuery = "DELETE FROM tbl_info where id='$delid'";
    $delExe = mysqli_query($conn, $delQuery);
    if($delExe) {
        header('location:display.php');
    } else {
        echo"Cannot Delete";
    }
?>