<style>
    .ll{
        padding:10px;
        border-bottom:1px solid #eee;
    }
</style>
<?php
session_start();
include("init.php");

if(isset($_GET['data'])){
    $student_email = $_GET['data'];
    $query = mysqli_query($init, "SELECT * FROM students WHERE email_address = '$student_email'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
        $arr = mysqli_fetch_array($query);
        $first_name  =  $arr['first_name'];
        $last_name   =  $arr['last_name'];
        $email_address = $arr['email_address'];
        $department = $arr['department'];
        $query_2 = mysqli_query($init, "SELECT naming FROM departments WHERE unique_id = '$department'");
        $is_it_2 = mysqli_num_rows($query_2);
        if($is_it_2 > 0){
            $arr_2  = mysqli_fetch_array($query_2);
            $department_name = $arr_2['naming'];
        }else{
            $department_name  = "NOT AVAILABLE";
        }
         ?>
         <br>
          <div class='ll'>Name  - <?php echo "$first_name $last_name"  ?></div>
          <br>
          <div class='ll'>Email address - <?php echo "$email_address";  ?></div>
          <br>
          <div class='ll'>Department - <?php  echo $department_name ?>  </div>
         <?php
        }else{
            echo "STUDENT DOES NOT EXIST";
        }
}