<?php
session_start();
include("init.php");

$n=10;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
 
$uni = getName($n);

if(isset($_POST['create_1'])){
    $department = trim($_POST['create_1']);
    if(strlen($department) > 0){
    $query = mysqli_query($init, "SELECT * FROM departments WHERE naming = '$department'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
      echo "Already exists";
    }else{
        $query = mysqli_query($init, "INSERT INTO departments  VALUES ('$uni', '$department')");
        echo "Created";
    }
    }else{
        echo "Check input";
    }
}
if(isset($_POST['create_2'], $_POST['target'])){
    $department = trim($_POST['create_2']);
    $id = trim($_POST['target']);
    if(strlen($department) > 0){
    $query = mysqli_query($init, "SELECT * FROM departments WHERE unique_id = '$department'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
         $query = mysqli_query($init, "UPDATE departments SET naming = '$department' WHERE unique_id = '$id'");
    }else{  
        echo "Some error occured";
    }
    }else{
        echo "Check input";
    }
}