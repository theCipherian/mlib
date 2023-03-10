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
  
    .seize{
        width:100%;
        height:auto;
        object-fit: cover;
    }
    </style>

    <div class='cont'>
    <h1>Configurations</h1>
    <div class="sikes">
    <div class="label-float">
    <input class='data_1' type="text" value='<?php echo $key_  ?>' placeholder="Login key"/>
    <label>Login key</label>
    </div>
    <div class="label-float">
    <input class='data_2' type="text" value='<?php echo $naming  ?>' placeholder="Institution name"/>
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
    <div>
          <?php
             if($logo == 'none'){
                ?>
                    <img src='profiles/logo.png' alt="">
                <?php
             }else{
                ?>
                <div style='width:200px;height:200px;'>
                <img class='seize' src="profiles/<?php echo $logo ?>" alt="">
                </div>
                <?php
             }
          ?>
    </div>
    <br>
    <div class="btn send create_1">Update</div>
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
        var property = document.querySelector('.pro').files[0];
        var text_name = property.name;
        var text_extension = text_name.split('.').pop().toLowerCase();
        if(jQuery.inArray(text_extension,['jpg','png','jpeg']) == -1){
          flow("Invalid file extention");
           $(".cl").text("Invalid file");
           $(".cl").css("color","red");
           file_type = '';
        }else{
          flow("File gotten");
          $(".cl").text("File gotten");
          $(".cl").css("color","limegreen");
      
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
                    url:'parser_4.php',
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
                      stop_loader();
                      $("#get_data_3432").load("settings.php");
                    }
                    });
             
           
          
          })
      });
      $(".send").click(function(){
        let data_1 = document.querySelector(".data_1");
             let data_2 = document.querySelector(".data_2");
             if(data_1.value.length < 5){
                flow("Key is not long enough");
             }else if(data_2.value == ''){
                flow("Institute name")
             }else{
                    $.ajax({
                    url:'parser_5.php',
                    method:'POST',
                    data:{
                        "data_1":data_1.value,
                        "data_2":data_2.value
                    },
                    beforeSend:function(){
                     start_loader();
                    },
                    success:function(data){
                      flow(data);
                      stop_loader();
                      $("#get_data_3432").load("settings.php");
                    }
                    });
                  }
               })
             </script>