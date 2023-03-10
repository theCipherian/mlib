<?php
$url = "localhost";
$username = "root";
$password = "";
$database = "mlib";
$init = mysqli_connect($url, $username, $password, $database);
date_default_timezone_set("UTC");
$date = date('Y-m-d H:i:s ', time());


$query = mysqli_query($init, "SELECT * FROM institute");
$arr = mysqli_fetch_array($query);
$naming = $arr['naming'];
$logo = $arr['institute_logo'];
$key_ = $arr['key_'];