<?php
session_start();
include("init_2.php");
?>
<style>
    .list_2{
        font-size:1.2rem;
    }
</style>

<div class='cont'>
 <div style='display:flex;align-items:center;' class="list list_2 logout"><i style='margin-right:10px' class='bx bx-log-out'></i> Logout</div>
</div>
<script>
$(".logout").click(function(){
    flow("Logging you out");
    window.location.href = "session_terminate.php";
})
</script>