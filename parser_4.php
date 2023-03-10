<?php
include("init.php");

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
