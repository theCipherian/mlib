<?php
include("init.php");

if(isset($_GET['data'])){
    $data = $_GET['data'];
    $query = mysqli_query($init, "SELECT * FROM material WHERE unique_id = '$data'");
    $arr = mysqli_fetch_array($query);
    $material_name = $arr['material_name'];
    $material_status = $arr['status'];
    $material_note = $arr['note'];
}
?>
<style>

</style>

<div class='cont'>
<h1><?php  echo $material_name ?></h1>
<br>
<select name="" id="data01">
    <option value="Live">Status - Live</option>
    <option value="Hidden">Status - Hidden</option>
</select>
<br>
<br>
<div class="sikes">
<div class="label-float">
<input id='data02' type="text" value='<?php echo $material_name  ?>' placeholder="Material name"/>
<label>Material name</label>
</div>
<br/>
</div>
<br>
<textarea class='comment' name="" id="data03" cols="30" rows="10"><?php echo $material_note  ?>
</textarea>
<br>
<div class="btn create_3">Create</div>
</div>
<script>
    $(".create_3").click(function(){
        var data_1 = document.getElementById("data01");
        var data_2 = document.getElementById("data02");
        var data_3 = document.getElementById("data03");
        if(data_2.value.length < 1){
            flow("Set material_name");
        }else{
            $.ajax({
            url:"parser.php",
            type:"post",
            async:false,
            data:{
            "id":"<?php echo $data  ?>",
            "data01":data_1.value,
            "data02":data_2.value,
            "data03":data_3.value
            },success:function(data){
                flow(data);
                $("#get_data_3432").load("edit_materials.php?data="+<?php echo $data  ?>+"");
            }
            })
        }
    })
</script>