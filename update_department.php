<?php
session_start();
include("init.php");
if(isset($_GET['department'], $_GET['id'])){
?>

<div>Changing from <?php echo $_GET['department'];  ?></div>
<br>
<div>
    to
</div>
<div class="sikes">
<div class="label-float">
<input id='data_1' type="text" placeholder="Enter department"/>
<label>Enter department</label>
</div>
<br/>
</div>
<br>
<div class="btn create_1">Update</div>

<?php
}
?>