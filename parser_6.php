<?php
session_start();
include("init_2.php");

$uni = mt_rand(000000,999999);

if(isset($_POST['current_page'], $_POST['book'])){
    $current_page = $_POST['current_page'];
    $book = $_POST['book'];
    $query = mysqli_query($init, "UPDATE last_read SET unique_id = '$uni', book = '$book', page = '$current_page', user = '$key' WHERE book = '$'");
}