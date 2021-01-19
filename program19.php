<?php
//program to copy the content from one file to another file
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
$txt = fread($myfile,filesize("webdictionary.txt"));
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
?>
