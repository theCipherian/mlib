<?php 
session_start();
include("init_2.php");

if(isset($_POST['email'],$_POST['key'])){
    $email = $_POST['email'];
    $key = $_POST['key'];
    $query = mysqli_query($init, "SELECT unique_id FROM students WHERE email_address = '$email' AND passkey = '$key'");
    $num = mysqli_num_rows($query);
    if($num > 0){
        $arr = mysqli_fetch_array($query);
        $unique = $arr['unique_id'];
        $_SESSION['key_2'] = $unique;
        echo "Successful";
    }else{
        echo "Invalid key";
    }
}