<?php
session_start();
include("init.php");
if(isset($_GET['department'], $_GET['id'])){
?>

<div>Changing from <?php echo $_GET['department'];  ?></div>
<br>
<div>
    to
</div>
<br>
<div class="sikes">
<div class="label-float">
<input id='data_2'  type="text" placeholder="Enter department"/>
<label>Enter department</label>
</div>
<br/>
</div>
<br>
<div data-target = '<?php echo $_GET['id'] ?>' class="btn create_2">Update</div>

<?php
}
?>
<script>
   $(".create_2").click(function(){
     let data_2 = document.getElementById("data_2");
     let target = $(this).attr("data-target");
     $.ajax({
          url:"parser.php",
          type:"post",
          async:false,
          data:{
              "create_2":data_2.value,
              "target":target
          },success:function(data){
           flow(data);  
           $("#get_data_3432").load("manage_departments.php");
          }
      })
   })
</script>