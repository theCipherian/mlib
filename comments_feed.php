<?php 
include("init_2.php");

$query = mysqli_query($init, "SELECT * FROM comments");
$is_it = mysqli_num_rows($query);
if($is_it > 0){
while($arr = mysqli_fetch_array($query)){
    $comment_text = $arr['comment_text'];
    ?> 
    <div class='list'>
        <?php echo $comment_text ?>
    </div>
    <?php
}
}else{
    echo "No news yet";
}