<?php
session_start();
include("init.php");
?>
<style>
    .label-float{
        margin-right:10px;
    }
    .v{
        font-size:18px;
    }
</style>
<div class='cont'>
    <h1>Configurations</h1>
    <div class="sikes">
<div class="label-float">
<input id='data_1' type="text" placeholder="Login key"/>
<label>Login key</label>
</div>
<div class="label-float">
<input id='data_2' type="text" placeholder="Institution name"/>
<label>Institution name</label>
</div>
<div class="note">Institution name appears accros the platform, same as logo.</div>
<br/>
</div>
<br>
<div class="btn create_1">Update</div>
</div>
</div>
