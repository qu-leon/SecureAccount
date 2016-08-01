<?php

//Starts session
session_start();

require_once('Config.php');
//Open conenction to out database useing the config file
$link = f_sqlConnect (DB_USER, DB_PASSWORD, DB_NAME);

//Clean out POST to prevent attacks
$_POST = f_clean($_POST);

//Retreave the information from POST
$phone = $_POST['phonenum'];
$address = $_POST['address'];
$bio = $_POST['bio'];

$name = $_SESSION["user_name"];

//look for username and password combination in database table
$sql = "UPDATE `first` SET `phonenumber`='$phone',`address`='$address',`bio`='$bio' WHERE `username`= '$name'";
//$sql = "UPDATE `first` SET `phonenumber`=12,`address`='3344',`bio`=11211 WHERE `username`= '$name'";

$results = mysql_query($sql);
if(!$results) {
    die('Invalid query: ' . mysql_error());
}

$sql = "SELECT * FROM `first` WHERE `username` = '$name'";

$results = mysql_query($sql);
if(!$results) {
    die('Invalid query: ' . mysql_error());
}

//if there is something that is returned (there is a user with the username already)
if($result = mysql_fetch_array($results)) {
    //set match to 1 (found a valid user)
    $match = 1;
    //store username that was matched in session (session variable = database column name)
    $_SESSION["phone_number"] = $result['phonenumber'];
    $_SESSION["address"] = $result['address'];
    $_SESSION["bio"] = $result['bio'];
    $_SESSION["extra_1"] = $result['extra1'];
    $_SESSION["activation"] = $result['activation'];
    $_SESSION["permissions"] = $result['permissions'];
    $_SESSION["creation_time"] = $result['creationtime'];

}

header("Location: forms.php");

?>