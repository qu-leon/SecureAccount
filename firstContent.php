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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <!-- <script src="firstJavaScript.js"></script> -->
    <script src="loginVerify.js"></script>
</head>
<body>

<?php
session_start();

$user_name =  $_SESSION["user_name"];

?>

<h1 id="title" style="margin: 3.25% 0% 3.25% 0%">Generic Park</h1>
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
        <div id=col1 class="col-md-3" style="background-color: white">Welcome to this website, <?php echo "$user_name";?>!
        </div>
        <div id=fill class="col-md-1"></div>
        <div id=col2 class="col-md-8" style="background-color: white;>
      <div class="container">
        <h2>Content</h2>
    </div>
</div>
</div>
<div class="row">
    <div id=footer class="col-md-11" style="background-color: lightgrey">(C) Zeta 2016</div>
    <div class="col-md-1"></div>
</div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>