<?php
include("init.php");

?>
<style>
    .course_add{
    display:flex;
    width:100%;
    flex-direction:column;
}
.department_add input{
    width:95%;
    border:2px dashed #ddd;
    margin:1rem;
    border-radius:5px;
    height:4.2rem;
    padding:10px;
}
.course_add input, .material_add input, .input{
    width:95%;
    border:2px dashed #ddd;
    margin:1rem;
    border-radius:5px;
    height:4.2rem;
    padding:10px;
}
.department_add input:focus{
    outline:none;
    border:2px dashed #ddd;
}
 .input:focus{
    outline:none;
    border:2px dashed #ddd;
}
.course_add input:focus{
    outline:none;
    border:2px dashed #ddd;
}
.material_add input:focus{
    outline:none;
    border:2px dashed #ddd;
}
.active_button{
    border-color:limegreen;
    color:limegreen;
}
.error_button{
    border-color:red;
    color:red;
}
.o_2344 div{
 margin:10px;    
}
.p_3422{
    color:grey;
    padding:10px;
}
.thing_345{
    border-radius:7px;
    height:3rem;
    background-color:rgba(255,255,0,0.30);
    display:flex;
    width:max-content;
    padding:1rem;
    align-items:center;
    justify-content:center;
}
.thing_3455, .thing_34555{
    border-radius:7px;
    height:3rem;
    background-color:rgba(255,255,0,0.30);
    display:flex;
    width:max-content;
    padding:1rem;
    align-items:center;
    justify-content:center;

}

.button{
      width:8rem;
      height:3.8rem;
      display:flex;
      align-items:center;
      justify-content:center;
      background-color:#fff;
      border:2px dashed grey;
      cursor:pointer;
      color:grey;
      border-radius:5px;
  }
  .button{
   border:2px solid #eee !important;
}
</style>
<form class='material_add'>
<input type="text" id='material_data' placeholder='material name'>
<p class='p_3422'>Material type</p>
<div class='o_2344' style='display:flex;align-items:center;width:100%;'>
  <div  class='button ' id='chose_text_file'>Text file  &nbsp <i class='bx bx-file-blank'></i></div>
    <div> <i class='bx bx-radio-circle' ></i></div>
   <div style='' class='button ' id='chose_video_file'>Video file  &nbsp <i class='bx bx-file-blank'></i></div>
</div>
<p class='p_3422'>Material data</p>
<div class='o_2344 video_35302 noner' style='display:flex;align-items:center;width:100%;'>
  <div  class='button ' id='upload_video_btn'>Upload file  &nbsp <i class='bx bx-upload' ></i></div>
   <input style='display:none;' type="file" id='video_file'>
    <div> <i class='bx bx-link-alt' ></i> </div>
   <input style='max-width:40%;' class='input' type="text" id='url_data_yt' placeholder='youtube link'>
</div>
<div class='o_2344 text_34322 noner' style='display:flex;align-items:center;width:100%;'>
  <div  class='button ' id='upload_text_btn'>Upload file  &nbsp <i class='bx bx-upload' ></i></div>
     <input style='display:none;' type="file" id='text_file'>
    <div> <i class='bx bx-link-alt' ></i> </div>
   <input style='max-width:40%;' class='input' type="text" id='url_data_ebook' placeholder='ebook link'>
</div>
<input type="text" id='material_data_note' placeholder='Leave a note'>
<div class='button noner btn_0731' id='add_to_material_1'>Done  </div>
</form>
<script>
     $("#upload_text_btn").click(function(){
          var text_file = document.getElementById("text_file");
          text_file.click();
        })
             let url_data_text = document.getElementById("url_data_ebook");
               let material_data = document.getElementById("material_data");
             let material_data_note = document.getElementById("material_data_note");
           if(file_type == '' && url_data_text !== ''){
             if(material_data.value == ''){
               flow("Please enter material name");
             }else{
                start_loader();
                $.ajax({
                  url:"parser_2.php",
                  type:"post",
                  async:false,
                  data:{
                      "material_data":material_data.value,
                      "data_text": url_data_text.value,
                      "material_data_note":material_data_note.value,
                      "data_go": data_go,
                      "type": "ebook_link"
                  },success:function(data){
                    $("#data_change_232").text("Course materials");
                    $("#get_data_3432").load("add_course_material.php",function(){
                    stop_loader();
                    $(".sidepart").removeClass("noner");
                     flow(data);
                    })
               
                  }
                })
             }
           }
           $("#text_file").on('change',function(){
        var property = document.getElementById('text_file').files[0];
        var text_name = property.name;
        var text_extension = text_name.split('.').pop().toLowerCase();

        if(jQuery.inArray(text_extension,['pdf','docx']) == -1){
          show_pop_wrong("Invalid file extention");
           $("#upload_text_btn").text("Invalid file");
           $("#upload_text_btn").removeClass("active_button");
           $("#upload_text_btn").addClass("error_button");
           file_type = '';
        }else{
          show_pop("File gotten");
          $("#upload_text_btn").text("File gotten");
          $("#upload_text_btn").addClass("active_button");
          $("#upload_text_btn").removeClass("error_button");
          file_type = 'text'
        }
              $("#add_to_material_1").unbind("click").click(function(){
             let material_data = document.getElementById("material_data");
             let url_data_text = document.getElementById("url_data_ebook");
             let material_data_note = document.getElementById("material_data_note");
          if(selection == 'text'){
           if(!file_type && url_data_text.value == ''){
             show_pop_wrong("Some error occured");
           }else if(file_type == 'text' && url_data_text.value == ''){
             if(material_data.value == ''){
               show_pop_wrong("Please enter material name");
             }else{
                    var form_data = new FormData();
                    form_data.append("file",property);
                    form_data.append("material_data",material_data.value);
                    form_data.append("material_data_note",material_data_note.value);
                    form_data.append("data_go",data_go);
                    form_data.append("type","text");
                    $.ajax({
                    url:'cloud_cat_2.php',
                    method:'POST',
                    data:form_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function(){
                     start_loader();
                    },
                    success:function(data){
                    $("#data_change_232").text("Course materials");
                    $("#get_data_3432").load("add_course_material.php",function(){
                    stop_loader();
                    $(".sidepart").removeClass("noner");
                     show_pop(data);
                    })
                      $("#data_change_2322").text("Course materials");
                  $("#get_data_34322").load("see_materials.php",function(){
                  $(".sidepart2").removeClass("noner");
                  })
                    }
                    });
             }
           }else if(file_type == '' && url_data_text !== ''){
             if(material_data.value == ''){
               show_pop_wrong("Please enter material name");
             }else{
                start_loader();
                $.ajax({
                  url:"cloud_cat_4.php",
                  type:"post",
                  async:false,
                  data:{
                      "material_data":material_data.value,
                      "data_text": url_data_text.value,
                      "material_data_note":material_data_note.value,
                      "data_go": data_go,
                      "type": "ebook_link"
                  },success:function(data){
                    $("#data_change_232").text("Course materials");
                    $("#get_data_3432").load("add_course_material.php",function(){
                    stop_loader();
                    $(".sidepart").removeClass("noner");
                     show_pop(data);
                    })
                   
                  $("#data_change_2322").text("Course materials");
                  $("#get_data_34322").load("see_materials.php",function(){
                  $(".sidepart2").removeClass("noner");
                  })
                  }
                })
             }
           }
          }
          })
      });
      $(".button").click(function(){
    var button = document.querySelectorAll(".button");
    button.forEach((btn) => {
    btn.classList.remove("button_active");
    this.classList.add("button_active");
    })
    })
</script>