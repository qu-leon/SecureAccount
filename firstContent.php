<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FirstContent</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->

    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <!-- <script src="firstJavaScript.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="loginVerify.js"></script>
</head>
<body>

<?php
session_start();

$user_name =  $_SESSION["user_name"];
$phone_number =  $_SESSION["phone_number"];
$address =  $_SESSION["address"];
$bio =  $_SESSION["bio"];

?>
<h1 align="center">Information Application</h1>
<h1 id="title" style="margin: 3.25% 0 3.25% 0">Home</h1>
<hr> <!-- line -->

<nav class="navbar navbar-default navbar-static-top">
    <div class="conainer-fluid">
        <div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="firstContent.php">Home</a></li>
                <li><a href="forms.php">Forms</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div id=col1 class="col-md-3" style="background-color: white">Welcome to this website, <?php echo "$user_name";?>!</div>
        <div id=fill class="col-md-1"></div>
        <div id=col2 class="col-md-8" style="background-color: white;padding-bottom: 91px">
            <h3 align="center">Your Information</h3>
            <br>
            <h4 align="center">Phone number: </h4>
            <p align="center"><?php echo "$phone_number";?></p>

            <h4 align="center">Address: </h4>
            <p align="center"><?php echo "$address";?></p>

            <h4 align="center">Bio: </h4>
            <p align="center"><?php echo "$bio";?></p>
        </div>

    <div class="row">
        <div id=footer class="col-md-11" style="background-color: gainsboro">(C) Zeta 2016</div>
        <div class="col-md-1"></div>
    </div>
</div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<!-- Include all compiled plugins (below), or include individual files as needed -->

</body>
</html>