<?php
session_start();
include("init.php");

?>
<style>
.list{
  padding:1rem;
  border-bottom:1px solid #ddd;
  cursor:pointer;
}
</style>

<div class='list d_1'>
  Manage departments
</div>
<div class='list d_2'>
    Create new
</div>
<script>
  $(".d_1").click(function(){
    $("#get_data_3432").load("manage_departments.php");
  })
  $(".d_2").click(function(){
    $("#get_data_3432").load("create_departments.php");
  })
</script>