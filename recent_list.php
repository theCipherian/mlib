<?php
include("init_2.php");
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

$query = mysqli_query($init, "SELECT * FROM material ORDER BY date_ DESC LIMIT 1");
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
         <div class='listo' id='<?php echo $uni_material ?>'>
            <div>
            <div style='display:flex;align-items:center;'>
             <i style='font-size:1.5rem' class='bx bx-book'></i>
                <div style='margin-left:1rem'><?php echo $material_name ?></div>
            </div>
            <br>
                <div><?php  echo $naming_dep ?></div>
                <br>
                <div class='row_icons'>
             <i data-target='<?php echo $uni_material ?>' class='bx bx-trash delete_material'></i>
             <span data-target="<?php  echo $uni_material ?>" class='edit'>Edit</span>
             <span data-target="<?php echo $material_file  ?>" class='view'>View</span>
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
      $(".edit").click(function(){
        var edit = $(this).attr("data-target");
        $(".sidepart").removeClass("noner");
        $("#data_change_232").text("Edit");
        $("#get_data_3432").load("edit_materials.php?data="+edit+"");
      })
      $(".delete_material").click(function(){
      var data_1 = $(this).attr("data-target");
      $(".confirm").css("display","flex");
      $(".yes").unbind("click").click(function(){
      $("#"+data_1).css("display","none");
      $.ajax({
            url:"parser.php",
            type:"post",
            async:false,
            data:{
            "del_data":data_1
            },success:function(data){
                flow(data);
                $(".trophy_2").load("recent_materials.php"); 
            }
          })
        })
        setTimeout(() => {
              $(".confirm").css("display","none");
        }, 3000);
      });
      $(".view").click(function(){
        var data_1 = $(this).attr("data-target");
        flow("Fetching file...")
        setTimeout(() => {
            window.open('http://localhost/lib/file_uploads/'+data_1+'', '_blank');
            // window.open('http://127.0.0.1/lib/file_uploads/'+data_1+'', '_blank');
            // window.open('http://127.0.0.1:80/lib/file_uploads/'+data_1+'', '_blank');
            // window.open('http://127.0.0.1:8080/lib/file_uploads/'+data_1+'', '_blank');
        }, 2000);
      })
</script>