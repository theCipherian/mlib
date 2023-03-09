<?php
include("init.php");

$uni = mt_rand(000000000,999999999);
$material_data = $_POST['material_data'];
$material_data_note = $_POST['material_data_note'];
$type_of = $_POST['type'];
$data_text = $_POST['data_text'];
$query = mysqli_query($init, "INSERT INTO material  VALUES ('$uni','$material_data','$data_text','live','$date','$material_data_note')");
if($query){
    echo "Data saved";
}

