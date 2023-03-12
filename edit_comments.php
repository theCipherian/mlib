<?php
include("init.php");
?>
<div class='cont'>
<h1>Comments</h1>
<br>
<div style='width:100%;'>
<label for="">Write comment to students here</label>
<br>
<br>
    <textarea class='comment' name="" id="" cols="30" rows="10"></textarea>
    <br>
    <div id='send' class="btn">Send</div>
</div>
</div>
<script>
    $("#send").click(function(){
        let comment = document.querySelector(".comment");
        if(comment.value == ''){
            flow("Check field");
        }else{
        $.ajax({
          url:"parser.php",
          type:"post",
          async:false,
          data:{
              "comment":comment.value
          },success:function(data){
           flow(data);
          }
      })
    }
    })

</script>