<?php
include("init.php");

$n=40;
function rand_id($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = ''; 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    return $randomString;
}
$uni = rand_id($n);
$r2 = mt_rand(000000000,999999999);
$data_1 = $_POST['data_1'];
$data_2 = $_POST['data_2'];
if($_FILES['file']['name'] != ''){
    $test = explode('.', $_FILES['file']['name']);
    $extension = end($test);    
    $name = $uni.'.'.$extension;
    $location = 'profiles/'.$name;
    move_uploaded_file($_FILES['file']['tmp_name'], $location);
    $query = mysqli_query($init, "UPDATE institute SET naming = '$data_2', key_ = '$data_1', institute_logo = '$name'");
    if($query){
        echo "Data saved";
    }
}
