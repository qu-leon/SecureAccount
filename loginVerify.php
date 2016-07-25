<?php

session_start();
$name = $_POST['postname'];
$pass = $_POST['postpass'];
$anArray = [];
$iterator = 0;
$match = 99999;

if($name == "sam"){//test for creation
   // echo "1";
}

$handle = fopen("data.txt", "r");//opens file for reading
if ($handle) {
    while (($line = fgets($handle)) !== false) {//while line read is not false
        // process the line read.
        $anArray[0] = $line;
        $anArray[1] = fgets($handle);//reading in 9 more lines
        $anArray[2] = fgets($handle);
        $anArray[3] = fgets($handle);
        $anArray[4] = fgets($handle);
        $anArray[5] = fgets($handle);
        $anArray[6] = fgets($handle);
        $anArray[7] = fgets($handle);
        $anArray[8] = fgets($handle);
        $anArray[9] = fgets($handle);

        if(rtrim($anArray[0]) == $name){//if the user name matches a name
            if(rtrim($anArray[1]) == $pass) {//if the password matches
                $match = $iterator;//match is what number user was matched
                $_SESSION["user_name"] = rtrim($anArray[0]);//store username that was matched in session
            }
        }
        $iterator = $iterator + 1;

    }
    echo $match;
    fclose($handle);
} else {
    // error opening the file.
}


