<?php
/**
 * Created by IntelliJ IDEA.
 * User: sam
 * Date: 7/24/2016
 * Time: 12:51 PM
 */

$name = $_POST['postname'];
$pass = $_POST['postpass'];
$anArray = [];
$iterator = 0;
$match = 99999;

if($name == "sam"){
   // echo "1";
}

$handle = fopen("data.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $anArray[0] = $line;
        $anArray[1] = fgets($handle);
        $anArray[2] = fgets($handle);
        $anArray[3] = fgets($handle);
        $anArray[4] = fgets($handle);
        $anArray[5] = fgets($handle);
        $anArray[6] = fgets($handle);
        $anArray[7] = fgets($handle);
        $anArray[8] = fgets($handle);
        $anArray[9] = fgets($handle);

        if(rtrim($anArray[0]) == $name){//if the user name matches a name
            if(trim($anArray[1]) == $pass) {//if the password matches
                $match = $iterator;
            }
        }
        $iterator = $iterator + 1;

    }
    echo $match;
    fclose($handle);
} else {
    // error opening the file.
}



?>