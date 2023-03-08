<?php
session_start();
include("init.php");

   $query = mysqli_query($init, "SELECT * FROM students");
   $is_it = mysqli_num_rows($query);
   if($is_it < 1){
    ?>
    <span style='padding:1rem;'> NO ADDED STUDENTS</span>
    <?php
    }else{
   
     ?>
      <div class="sikes">
<div class="label-float">
<input id='data_2' type="text" placeholder="Enter email"/>
<label>Enter email</label>
</div>
<br/>
</div>
<br>
<div class="btn search_1">Create</div>
  <?php
   
}
?>

<script>
    $(".list").click(function(){
        let data = $(this).attr("data-target");
        let naming = $(this).attr("data-name");
        $(".morph").css("display","flex");
        var uri  = "update_department.php?department="+naming+"&id="+data+""
        var encoded = encodeURI(uri);
        $("#nl3").load(encoded);
    })
</script>
