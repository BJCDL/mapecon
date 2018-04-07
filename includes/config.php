<?php
$dbhost = "localhost";
$dbname = "mapecon_new";
$dbuser = "root";
$dbpass = "";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die(mysqli_error());
date_default_timezone_set("Asia/Manila");

$date_time_now = date("Y-m-d H:i:s", time());
?>