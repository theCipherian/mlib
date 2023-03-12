<?php
include("init.php");
?>
<div class='cont'>
<h1>Department</h1>
<br>
<select class='v' id="department">
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
<br>
<br>
<div class="btn fetch_1">Fetch all</div>
</div>
<script>
    $(".fetch_1").click(function(){
        var data = document.getElementById("department");
        $(".trophy").load("fetch_by_departments.php?department="+data.value+"");
    })
</script>