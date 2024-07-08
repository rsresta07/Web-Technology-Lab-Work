<?php
    $fp=fopen("abc.txt","r");
    copy("abc.txt","xyz.txt");
    fclose($fp);
    $fp=fopen("xyz.txt","r");
    while(!feof($fp)){
        echo fgets($fp);
    }
?>