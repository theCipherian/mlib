<?php
session_start();
include("init.php");
?>
<div class='cont'>
<div class="sikes">
<div class="label-float">
<input id='data_1' type="text" placeholder="Enter department"/>
<label>Enter department</label>
</div>
<br/>
</div>
<br>
<div class="btn create_1">Create</div>
</div>
<script>
  $(".create_1").click(function(){
    let data_1 = document.getElementById("data_1");
    $.ajax({
          url:"parser.php",
          type:"post",
          async:false,
          data:{
              "create_1":data_1.value
          },success:function(data){
           flow(data);
           
          }
      })
  })
</script>