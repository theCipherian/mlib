<?php
session_start();
include("init.php");



   $query = mysqli_query($init, "SELECT * FROM departments");
   $is_it = mysqli_num_rows($query);
   if($is_it < 1){
    ?>
<span style='padding:1rem;'>   NO EXISTING DEPARTMENTS</span>
   <?php
   }else{
    $arr = mysqli_fetch_array($query);
    $unique_naming = $arr['unique_id'];
    $naming = $arr['naming'];
     ?>
  <?php
   }
