<?php
/*Configuration Settings*/
/*MySQL Settings*/

//DB name
define ('DB_NAME', 'ics491');
//DB user
define ('DB_USER', 'root');
//DB user password
define ('DB_PASSWORD', '');
//DB Host
define ('DB_HOST', 'localhost');
//DB character set
define ('DB_CHARSET', 'utf8');
//DB  collation
define ('DB_COLLATE', '');

//Function that connects to our database
function f_sqlConnect($user, $pass, $db) {
    //Logging in to the computer, and storing the connection into a variable
    $link = mysql_connect('localhost', $user, $pass);
    //Error Catching, to check that the connection/link is good (returns a true value)
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }
    //Connecting to the Database dbtest
    $db_selected = mysql_select_db($db, $link);
    //Error checking
    if (!$db_selected) {
        die('Can\'t use ' . $db . ': ' . mysql_error());
    }
}

//Function that Cleans an array to protecct against injection attacks
function f_clean($array) {
    return array_map('mysql_real_escape_string', $array);
}

?>