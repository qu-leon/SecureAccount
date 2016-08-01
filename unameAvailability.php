
<?php
require_once('Config.php');
//Open conenction to out database useing the config file
$link = f_sqlConnect (DB_USER, DB_PASSWORD, DB_NAME);

//Clean out POST to prevent attacks
$_POST = f_clean($_POST);

//Retreave the information from POST
$name = $_POST['postname'];

//Set variables
$available = 0; //0 means availible, 1 means not availible


//look for username in database table
$sql = "SELECT * FROM `first` WHERE `username` = '$name'";
$results = mysql_query($sql);
if(!$results) {
    die('Invalid query: ' . mysql_error());
}

//if there is something that is returned (there is a user with the username already)
if(mysql_fetch_array($results) == true) {
    $available = 1;//set availability to not available (set it to 1)
}

echo $available;


//echo 'Connection successfully';

?>
