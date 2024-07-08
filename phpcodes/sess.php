<?php
    session_start();
    $_SESSION['name']='Ram';
    $_SESSION['age']=20;
    $name=$_SESSION['name'];
    $age=$_SESSION['age'];
    echo $name."\t";
    echo $age;
?>