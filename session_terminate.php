<?php
session_start();
include("init_2.php");
session_destroy();
?>
<script>
    window.location.href = 'reader.php';
</script>