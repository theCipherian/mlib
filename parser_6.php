<?php
session_start();
include("init_2.php");

$uni = mt_rand(000000,999999);

if(isset($_POST['current_page'], $_POST['book'])){
    $current_page = $_POST['current_page'];
    $book = $_POST['book'];
    $query = mysqli_query($init, "SELECT unique_id FROM last_read WHERE user = '$key' AND book = '$book'");
    $is_it  = mysqli_num_rows($query);
    if($is_it > 0){
        $query_2 = mysqli_query($init, "UPDATE last_read SET book = '$book', user = '$key', page = '$current_page', date_ = '$date' WHERE book = '$book' AND user = '$key'");
    }else{
        $query_3 = mysqli_query($init, "INSERT INTO last_read VALUES ('$uni','$book','$current_page','$key','$date')");
    }
}