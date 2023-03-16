<?php
$url = "localhost";
$username = "root";
$password = "";
$database = "mlib";
$init = mysqli_connect($url, $username, $password, $database);
date_default_timezone_set("UTC");
$date = date('Y-m-d H:i:s ', time());


if(isset($_SESSION['key_2'])){
$key = $_SESSION['key_2'];
$query = mysqli_query($init, "SELECT * FROM students WHERE unique_id = '$key'");
$arr = mysqli_fetch_array($query);
$first_name = $arr['first_name'];
$last_name = $arr['last_name'];
$email_address = $arr['email_address'];
$department = $arr['department'];
}

$query_2 = mysqli_query($init, "SELECT * FROM institute");
$arr_2 = mysqli_fetch_array($query_2);
$naming = $arr_2['naming'];
$logo = $arr_2['institute_logo'];