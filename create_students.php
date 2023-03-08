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
<div class="label-float">
<select  id="data_2">
    <option value="unset">UNSET</option>
    <?php 
      $query = mysqli_query($init, "SELECT * FROM departments");
      $is_it = mysqli_num_rows($query);
      if($is_it > 0){
        while($arr = mysqli_fetch_array($query)){
            $unique_naming = $arr['unique_id'];
            $naming = $arr['naming'];
        ?>
            <option value="<?php   echo $unique_naming ?>"><?php echo $naming  ?></option>
        <?php
       } 
     }
    ?>
</select>
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