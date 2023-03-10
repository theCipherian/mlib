<?php
include("init.php");
?>

<style>
.hel{
    margin:10px;
    font-weight:bold;
    font-size:20px;
}
</style>

<?php
$query = mysqli_query($init, "SELECT * FROM material");
$is_it = mysqli_num_rows($query);

if($is_it > 0){
    ?>
      <div class='hel'>NO - MATERIALS</div>
    <?php
}
