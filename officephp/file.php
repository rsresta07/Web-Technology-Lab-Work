<?php
    //opening a file in write mode
    $fp = fopen("nccs.txt", "w");
    $content = "this is file handling example";
    fwrite($fp, $content);
    $size = filesize("nccs.txt");
    echo "$size <br/>";
    fclose($fp);

    //opening the nccs.txt file in read mode
    $fp1 = fopen("nccs.txt", "r");
    $size = filesize("nccs.txt");
    $str = fread($fp1, $size);
    echo $str . "<br/>";
    echo "size of file : $size bit";
    fclose($fp1);

    //opening file in write+ mode
    $fp2 = fopen("nccs.txt", "w+");
    //using $content pointer to write "hello"
    $content = "hello";
    fwrite($fp2, $content);
    $size = filesize("nccs.txt");
    $str = fread($fp2, $size);
    echo $content;
    fclose($fp2);

    //opening file in append+ mode
    $fp3 = fopen("nccs.txt", "a+");
    $size = filesize("nccs.txt");
    $str = fread($fp3, $size);
    echo $str;
    //using $content pointer to write " people"
    $content = " people";
    fwrite($fp3, $content);
    $str1 = fread($fp3, $size);
    echo $str1;
    fclose($fp3);

?>