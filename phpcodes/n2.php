<?php
    $fp=fopen("abc.txt","w");
    $text="This is content";
    fwrite($fp,$text);
    fclose($fp);
?>