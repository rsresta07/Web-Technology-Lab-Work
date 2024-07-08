<?php
    $fp=fopen("abc.txt","r");
    $a=fread($fp,filesize("abc.txt"));
    echo $a;
    fclose($fp);
?>