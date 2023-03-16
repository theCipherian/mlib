<?php

include("init.php");

if(isset($_GET['req'])){
    $req = trim($_GET[['req']]);
    $query = mysqli_query($init, "SELECT * FROM material material_name LIKE BINARY '%$req%'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
        while($arr = mysqli_fetch_array($query)){
            $uni = $arr['unique_id'];
            $material_name = $arr['material_name'];
            ?>
             
              <div>
                <?php echo $material_name;  ?>
              </div>

            <?php
        }
    }
}