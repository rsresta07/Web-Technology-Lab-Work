<?php
    $fp=fopen("file.txt","r+");
    fwrite($fp,"Hello World");
    echo fread($fp,filesize("file.txt"));
    fclose($fp);
    $fp=fopen("file.txt","w+");
    fwrite($fp,"Hello World");
    echo fread($fp,filesize("file.txt"));
    fclose($fp);
    $fp=fopen("file.txt","a+");
    fwrite($fp,"Hello World");
    echo fread($fp,filesize("file.txt"));
    fclose($fp);
?>