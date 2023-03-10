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
$material_data = $_POST['material_data'];
$material_data_note = $_POST['material_data_note'];
$department = $_POST['department'];

$type_of = $_POST['type'];
if($_FILES['file']['name'] != ''){
    $test = explode('.', $_FILES['file']['name']);
    $extension = end($test);    
    $name = $uni.'.'.$extension;
    $location = 'file_uploads/'.$name;
    move_uploaded_file($_FILES['file']['tmp_name'], $location);
    $query = mysqli_query($init, "INSERT INTO material  VALUES ('$uni','$material_data','$name','$department','live','$date','$material_data_note')");
    if($query){
        echo "Data saved";
    }
}
