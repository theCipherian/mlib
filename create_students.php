<?php
session_start();
include("init.php");
?>
<style>
    .label-float{
        margin-right:10px;
    }
    .v{
        font-size:18px;
    }
</style>
<div class='cont'>
<h1>Students</h1>
<br>
<div class="label-float">
<select class='v' id="data_4">
    <option value="unset">SELECT DEPARTMENT</option>
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
<div class="sikes">
<div class="label-float">
<input id='data_1' type="text" placeholder="Enter firstname"/>
<label>Enter firstname</label>
</div>
<div class="label-float">
<input id='data_2' type="text" placeholder="Enter lastname"/>
<label>Enter lastname</label>
</div>
<div class="label-float">
<input id='data_3' type="text" placeholder="Enter email"/>
<label>Enter email</label>
</div>
<div class="note">Students login details will be sent to them on creation. Click create to proceed.</div>
<br/>
</div>
<br>
<div class="btn create_1">Create</div>
</div>
<script>
  $(".create_1").click(function(){
    start_loader();
    let data_1 = document.getElementById("data_1");
    let data_2 = document.getElementById("data_2");
    let data_3 = document.getElementById("data_3");
    let data_4 = document.getElementById("data_4");
    if(data_1.value.length < 1 || data_2.value.length < 1 || data_3.value.length < 5){
        flow("Check input")
    }else if(data_4.value == 'unset'){
        flow("Select valid department");
    }else{
     
    $.ajax({
          url:"students_parser.php",
          type:"post",
          async:false,
          data:{
              "data_1":data_1.value,
              "data_2":data_2.value,
              "data_3":data_3.value,
              "data_4":data_4.value,
          },
          error:function(data){
              alert(data);
              setTimeout(() => {
            stop_loader();
        }, 2000);
          },
          success:function(data){
           flow(data);
           setTimeout(() => {
            stop_loader();
        }, 2000);
          }
      })
    }

  })
</script>