<?php
session_start();
include("init.php");
session_destroy();
?>
<script>
    window.location.href = 'reader.php';
</script>