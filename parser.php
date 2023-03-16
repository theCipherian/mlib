<?php
session_start();
include("init.php");

$n=10;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
 
$uni = getName($n);

if(isset($_POST['create_1'])){
    $department = trim($_POST['create_1']);
    if(strlen($department) > 0){
    $query = mysqli_query($init, "SELECT * FROM departments WHERE naming = '$department'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
      echo "Already exists";
    }else{
        $query = mysqli_query($init, "INSERT INTO departments  VALUES ('$uni', '$department')");
        echo "Created";
    }
    }else{
        echo "Check input";
    }
}
if(isset($_POST['create_2'], $_POST['target'])){
    $department = trim($_POST['create_2']);
    $id = trim($_POST['target']);
    if(strlen($department) > 0){
    $query = mysqli_query($init, "SELECT * FROM departments WHERE unique_id = '$id'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
         $query = mysqli_query($init, "UPDATE departments SET naming = '$department' WHERE unique_id = '$id'");
         if($query){
         echo "Updated";
         }
    }else{  
        echo "Some error occured";
    }
    }else{
        echo "Check input";
    }
}
if(isset($_POST['comment'])){
    $comment = trim($_POST['comment']);
    $query = mysqli_query($init, "INSERT INTO comments VALUES ('$uni','$comment')");
    if($query){
        echo "Comment added";
    }
}
if(isset($_POST['id'], $_POST['data01'], $_POST['data02'], $_POST['data03'])){
    $post_id = $_POST['id'];
    $data01 = $_POST['data01'];
    $data02 = $_POST['data02'];
    $data03 = $_POST['data03'];
    $query = mysqli_query($init, "UPDATE material SET material_name = '$data02', status = '$data01', note = '$data03' WHERE unique_id = '$post_id'");
    if($query){
        echo "data changed";
    }
}

if(isset($_POST['key'])){
    $key = $_POST['key'];
    $query = mysqli_query($init, "SELECT key_ FROM institute WHERE key_ = '$key'");
    $num = mysqli_num_rows($query);
    if($num > 0){
        $_SESSION['key'] = $key;
        echo "Successful";
    }else{
        echo "Invalid key";
    }
}

if(isset($_POST['del_data'])){
    $del_data = $_POST['del_data'];
    $query = mysqli_query($init, "DELETE FROM material WHERE unique_id = '$del_data'");
    echo "Deleted";
}
