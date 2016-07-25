<?php
//header('Content-type: text/plain');


$name = $_POST['postname'];
$pass = $_POST['postpass'];

if($name == "sam"){
    echo "1";
}

$myfile = fopen("data.txt", "a") or die("Unable to open file!");//open file for writing
$txt = $name;               //writes username to file
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);

$txt = $pass;               //writes password to file
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);


$txt = "\r\n";              //8 empty lines for future data for each user
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);


fclose($myfile);

