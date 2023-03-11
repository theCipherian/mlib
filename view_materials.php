<?php
include("init.php");
?>

<style>
.hel{
    margin:10px;
    font-weight:bold;
    font-size:20px;
}
.listo{
    margin-left:10px;
    padding:1rem;
    margin-bottom:5px;
    border-left:1px solid #121212;
    display:flex;
    align-items: center;
    justify-content: space-between;
}
.listo:hover{
    background-color: rgba(0,0,0,0.02);
    cursor:pointer;
}
.row_icons{
    display:flex;
    padding-top:10px;
    border-top:1px solid #ddd;
    max-width:min-content;
    align-items: center;
}
.row_icons span{
    margin-right:1rem;
}
.row_icons i{
    font-size:1.5rem;
    margin-right:1rem;
}
.row_icons i:hover{
  color:green;
}
.row_icons span:hover{
    color:green;
}
</style>

<?php

function formatSizeUnits($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}

$query = mysqli_query($init, "SELECT * FROM material");
$is_it = mysqli_num_rows($query);

if($is_it < 0){
    ?>
      <div class='hel'>NO - MATERIALS</div>
    <?php
}else{
    while($arr = mysqli_fetch_array($query)){
         $uni_material = $arr['unique_id'];
         $material_name = $arr['material_name'];
         $material_file = $arr['material_file'];
         $the_department = $arr['department'];
         $status = $arr['status'];
         $date_ = $arr['date_'];
         $note = $arr['note'];
         $get_query = mysqli_query($init, "SELECT naming FROM departments WHERE unique_id = '$the_department'");
         $get_ = mysqli_fetch_array($get_query);
         $naming_dep = $get_['naming'];
         ?>
         <div class='listo'>
            <div>
            <div style='display:flex;align-items:center;'>
             <i style='font-size:1.5rem' class='bx bx-book'></i>
                <div style='margin-left:1rem'><?php echo $material_name ?></div>
            </div>
            <br>
                <div><?php  echo $naming_dep ?></div>
                <br>
                <div class='row_icons'>
             <i data-target='<?php echo $uni_material ?>' class='bx bx-trash'></i>
             <span>Edit</span>
             <span>View</span>
             </div>
             </div>
             <br>
             <div>
                <div style='color:green;'>
                File size
                <?php    
                $byt  = filesize("file_uploads/".$material_file);
                echo formatSizeUnits($byt);
                ?>
                </div>
                <br>
                <div>
                    <?php  echo $date_ ?>
                </div>
             </div>
         </div>
         <?php
    }
}
?>

<script>
    $(".delete_material").click(function(){
     var data_1 = $(this).attr("data-target");
     $(".confirm").css("display","flex");
      $(".yes").unbind("click").click(function(){
        
      })
      setTimeout(() => {
         $(".confirm").css("display","none");
      }, 3000);
    });
</script>