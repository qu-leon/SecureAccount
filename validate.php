<?php
//header('Content-type: text/plain');
/**
 * Created by IntelliJ IDEA.
 * User: sam
 * Date: 7/24/2016
 * Time: 2:09 AM
 */

$name = $_POST['postname'];
$pass = $_POST['postpass'];

if($name == "sam"){
    echo "1";
}

$myfile = fopen("data.txt", "a") or die("Unable to open file!");
$txt = $name;
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);

$txt = $pass;
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
$txt = "\r\n";
fwrite($myfile, $txt);
$txt = "\r\n";
fwrite($myfile, $txt);


fclose($myfile);

?>