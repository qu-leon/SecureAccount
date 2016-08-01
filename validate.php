<html>
<body>

<?php
require_once('Config.php');
//Open conenction to out database useing the config file
$link = f_sqlConnect (DB_USER, DB_PASSWORD, DB_NAME);

//Clean out POST to prevent attacks
$_POST = f_clean($_POST);

//Retreave the information from POST
$name = $_POST['postname'];
$pass = $_POST['postpass'];



//insert data into database table
$sql = "INSERT INTO first (username, password) VALUES ('$name', '$pass')";
//Error check to make sure that the data was put in
if (!mysql_query($sql)) {
    die('Error: ' . mysql_error());
}



//echo 'Connection successfully';

?>


</body>
</html>