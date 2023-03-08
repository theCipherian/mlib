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
     <div class='cont'>
      <div class="sikes">
<div class="label-float">
<input id='search_1' type="text" placeholder="Enter student email"/>
<label>Enter student email</label>
</div>
<br/>
</div>
<br>
<div class="btn search_1">Search</div>
    </div>
  <?php
   
}
?>

<script>
    $(".search_1").click(function(){
        let data = document.getElementById("search_1");
        $(".morph").css("display","flex");
        var uri  = "view_student.php?data="+data.value+"";
        var encoded = encodeURI(uri);
        $("#nl3").load(encoded);
    })
</script>
