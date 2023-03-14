<?php 
include("init_2.php");

$query = mysqli_query($init, "SELECT * FROM comments");
$is_it = mysqli_num_rows($query);
if($is_it > 0){

}else{
    echo ""
}