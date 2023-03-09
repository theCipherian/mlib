<?php
session_start();
include("init.php");


?>
<div class="cont">
<h1>Configurations</h1>

<?php
   $query = mysqli_query($init, "SELECT * FROM departments");
   $is_it = mysqli_num_rows($query);
   if($is_it < 1){
    ?>
<span style='padding:1rem;'> NO EXISTING DEPARTMENTS</span>
   <?php
   }else{
    while($arr = mysqli_fetch_array($query)){
    $unique_naming = $arr['unique_id'];
    $naming = $arr['naming'];
     ?>
     <div class='list' data-target = '<?php echo $unique_naming  ?>' data-name = '<?php  echo $naming  ?>' style='display:flex;align-items:center'>
        <?php  echo $naming ?> &nbsp<i class='bx bx-pencil' ></i>&nbsp <div style='padding:10px;background-color:rgb(50,205,50,0.09);color:limegreen;border-radius:10px'>ID&nbsp<?php echo $unique_naming  ?></div>
     </div>
  <?php
   }
}
?>
</div>
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
