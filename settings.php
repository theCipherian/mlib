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
    .cl{
     display:flex;
     align-items: center;
     cursor:pointer;
     justify-content: center;
     height:100%;
    }
    .cl i{
        font-size:1.5rem;
        margin:10px;
    }
    .error{
        color:red !important;
    }
    .active{
        color:limegreen !important;
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
<br>
        <div class="label-float">
        <div class='cl'>Change logo <i class='bx bx-cloud-upload'></i></div>
        <input class='pro' style='display:none' type="file">
        </div>
<br/>
</div>
<br>
<div class="btn create_1">Update</div>
<div class="note">Institution name appears accros the platform, same as logo.</div>
</div>
</div>
<script>
     var file_type = '';
     var selection = '';
    $(".cl").click(function(){
        $(".pro").click();
    })
    $(".pro").on('change',function(){
        var property = document.getElementById('pro').files[0];
        var text_name = property.name;
        var text_extension = text_name.split('.').pop().toLowerCase();
        if(jQuery.inArray(text_extension,['pdf','docx']) == -1){
          flow("Invalid file extention");
           $(".pro").text("Invalid file");
           $(".pro").addClass("error");
           file_type = '';
        }else{
          flow("File gotten");
          $(".pro").text("File gotten");
          $(".pro").addClass("active");
          $(".pro").removeClass("error_button");
          file_type = 'text'
        }
              $(".send").unbind("click").click(function(){
             let data_1 = document.querySelector(".data_1");
             let data_2 = document.querySelector(".data_2");
                    var form_data = new FormData();
                    form_data.append("file",property);
                    form_data.append("data_1",data_1.value);
                    form_data.append("data_2",data_2.value);
                    $.ajax({
                    url:'parser_3.php',
                    method:'POST',
                    data:form_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function(){
                     start_loader();
                    },
                    success:function(data){
                      flow(data);
                    }
                    });
             
           
          
          })
      });
</script>
