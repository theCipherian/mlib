<?php
session_start();
include("init.php");

?>
<div class='list s_1'>
  Manage students
</div>
<div class='list s_2'>
    Add new
</div>
<script>
  $(".s_1").click(function(){
    $("#get_data_3432").load("manage_students.php");
  })
  $(".s_2").click(function(){
    $("#get_data_3432").load("create_students.php");
  })
</script>