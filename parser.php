<?php
session_start();
include("init.php");

if(isset($_GET['manage_departments'])){
   $query = mysqli_query($init, "SELECT * FROM departments");
   $is_it = mysqli_num_rows($query);
   
}