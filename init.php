<?php
$url = "localhost";
$username = "root";
$password = "";
$database = "mlib";
$init = mysqli_connect($url, $username, $password, $database);
date_default_timezone_set("UTC");
$date = date('Y-m-d H:i:s ', time());

