<?php
include("init.php");

if(isset($_POST['data_1'], $_POST['data_2'])){
$data_1 = $_POST['data_1'];
$data_2 = $_POST['data_2'];

    $query = mysqli_query($init, "UPDATE institute SET naming = '$data_2', key_ = '$data_1'");
    if($query){
        echo "Data saved";
    }
}
?>