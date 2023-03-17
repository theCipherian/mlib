<?php
session_start();
include("init.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="style.css">
    <!-- END STYLESHEETS -->
      <!-- SCRIPTS --> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- END SCRIPTS -->
    <title>mlib</title>
    <style>
    
    :root {
    --accent: #0094ff;	
    --main: #ffffff;
    }

    .icon {
        cursor: pointer;
        height: 30px;
        width: 35px;
        margin-right: 4px;
        margin-left: 4px;
        border: none;
        background: none;
        filter: invert(100%) sepia(0%) saturate(1%) hue-rotate(92deg) brightness(104%) contrast(101%);
    }

   
  
  .other_cont{


  }
  .other_cont img{
    
  }

  .item_holder_98{
      max-width:90%;
      font-size:1.1rem;
      display:flex;
      flex-direction:column;
  }
  .item_holder_98 div{
      margin:10px;
  }
  .head_98{
      font-weight:bold;
      font-size:1.2rem;
      color:grey;
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
  .button {

  }
  #loader {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -2.7em;
  margin-left: -2.7em;
  width: 5.4em;
  height: 5.4em;
}

#hill {
  position: absolute;
  width: 7.1em;
  height: 7.1em;
  top: 1.7em;
  left: 1.7em;
  background-color: transparent;
  border-left: .25em solid #fff;;
  transform: rotate(45deg);
}

#hill:after {
  content: '';
  position: absolute;
  width: 7.1em;
  height: 7.1em;
  left: 0;
}

#box {
  position: absolute;
  left: 0;
  bottom: -.1em;
  width: 1em;
  height: 1em;
  background-color: transparent;
  border: .25em solid #fff;
  border-radius: 15%;
  transform: translate(0, -1em) rotate(-45deg);
  animation: push 2s cubic-bezier(.79, 0, .47, .97) infinite;
}

@keyframes push {
  0% {
    transform: translate(0, -1em) rotate(-45deg);
  }
  5% {
    transform: translate(0, -1em) rotate(-50deg);
  }
  20% {
    transform: translate(1em, -2em) rotate(47deg);
  }
  25% {
    transform: translate(1em, -2em) rotate(45deg);
  }
  30% {
    transform: translate(1em, -2em) rotate(40deg);
  }
  45% {
    transform: translate(2em, -3em) rotate(137deg);
  }
  50% {
    transform: translate(2em, -3em) rotate(135deg);
  }
  55% {
    transform: translate(2em, -3em) rotate(130deg);
  }
  70% {
    transform: translate(3em, -4em) rotate(217deg);
  }
  75% {
    transform: translate(3em, -4em) rotate(220deg);
  }
  100% {
    transform: translate(0, -1em) rotate(-225deg);
  }
}
.noner{
    display:none;
    opacity:0;
    visibility:hidden;
}
.loader_main{
    position:fixed;
    left:0;
    right:0;
    bottom:0;
    top:0;
    width:100%;
    height:100%;
    margin: auto;
    display:flex;
    align-items:center;
    justify-content:center;
    z-index:9999;
    background-color:rgba(0,0,0,0.80);
}
.action_384{
    display:flex;
}
.button{
    margin:10px;
}
.p-34923-3{
    width:12rem !important;
}
.p-34923-1{
    width:8rem !important;
}
.p-34923-2{
    width:8rem !important;
}
 .lineloader{
  /* width:100%;
  max-height:4px !important;
  height:4px !important;
  background:linear-gradient(to right, #ADD8E6, #ADD8E6);
  position:fixed;
  top:0;
  left:0;
  z-index:999 !important;
  margin:0;
background-size: 20%;
background-repeat:repeat-y;
background-position:-25% 0;
border-radius:30px;
animation: scroll 1.3s linear infinite; */
position:fixed;
top:0;
left:0;
width:100vw;
height:100vh;
display:flex;
align-items:center;
justify-content:center;
z-index:9999 !important;
background-color:rgba(255,255,255,0.80);
}
@keyframes scroll{
  50%{
    background-size:70%;
  }
  100%{
    background-position:125% 0;
  }
}
#loading {
  display: inline-block;
  width: 50px;
  height: 50px;
  border: 3px solid transparent;
  border-radius: 50%;
  border-top-color:#ADD8E6;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}
@-webkit-keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}

.sidepart{
    animation: sikes 1s ease;
    position:fixed;
    right:0;
    bottom:0;
    width:45%;
    background-color:#fff;
    padding:1rem;
    transform:translateX(0%);
    height:100%;
    z-index:999 !important;
    box-shadow: -5px 0 5px -5px rgba(0,0,0,.1);
}

.sidepart2{
    animation: sikes2 1s ease;
    position:fixed;
    left:0;
    bottom:0;
    width:52%;
    background-color:#fff;
    padding:1rem;
    transform:translateX(0%);
    height:100vh;
    z-index:999 !important;
      box-shadow:  5px 0 5px -5px rgba(0,0,0,.1);
}
.sidepart3{
    animation: sikes2 1s ease;
    position:fixed;
    left:0;
    bottom:0;
    width:52%;
    background-color:#fff;
    padding:1rem;
    transform:translateX(0%);
    height:100vh;
    z-index:999 !important;
      box-shadow:  5px 0 5px -5px rgba(0,0,0,.1);
}
.sidepart_items{
   overflow-x:hidden;
   overflow-y:scroll;
   bottom:0;
   left:0;
   position:absolute;
   right:1rem;
   height:90%;
   bottom:0;
   padding:10px;

}
.sidepart_items2{
   overflow-x:hidden;
   overflow-y:scroll;
   bottom:0;
   left:0;
   position:absolute;
   right:1rem;
   height:90%;
   bottom:0;
   padding:10px;
}
.sidepart_items3{
   overflow-x:hidden;
   overflow-y:scroll;
   bottom:0;
   left:0;
   position:absolute;
   right:1rem;
   height:90%;
   bottom:0;
   padding:10px;
}

.sidepart_items::-webkit-scrollbar{
    background-color:rgba(255, 166, 0, 0.01);
}

.sidepart_items::-webkit-scrollbar-thumb{
    border-radius:30px;
    background-color:rgba(138, 43, 226, 0.09);
}
.sidepart_items2::-webkit-scrollbar{
    background-color:rgba(255, 166, 0, 0.01);
}

.sidepart_items2::-webkit-scrollbar-thumb{
    border-radius:30px;
    background-color:rgba(138, 43, 226, 0.09);
}
.sidepart_items3::-webkit-scrollbar{
    background-color:rgba(255, 166, 0, 0.01);
}

.sidepart_items3::-webkit-scrollbar-thumb{
    border-radius:30px;
    background-color:rgba(138, 43, 226, 0.09);
}
@keyframes sikes {
    0%{
        transform:translateX(100%);
    }
    100%{
        transform:translateX(0%);
    }
}
@keyframes sikes2 {
    0%{
        transform:translateX(-100%);
    }
    100%{
        transform:translateX(0%);
    }
}
.sidepart_header{
    position:absolute;
    left:0;
    padding:1rem;
    font-size:15px;
    width:100%;
    flex-direction:row-reverse;
    background-color:#fff;
    top:5px;
    display:flex;
    height:10%;
    justify-content:space-between;
    align-items:center;
}
.sidepart_header2{
    position:absolute;
    left:0;
    padding:1rem;
    font-size:15px;
    width:100%;
    flex-direction:row-reverse;
    background-color:#fff;
    top:5px;
    display:flex;
    height:10%;
    justify-content:space-between;
    align-items:center;
}
.sidepart_header3{
    position:absolute;
    left:0;
    padding:1rem;
    font-size:15px;
    width:100%;
    flex-direction:row-reverse;
    background-color:#fff;
    top:5px;
    display:flex;
    height:10%;
    justify-content:space-between;
    align-items:center;
}
.sidepart_header i{
    color:#ddd;
    margin-right:2rem;
    font-size:3rem;
    cursor:pointer;
}
.sidepart_header2 i{
    color:#ddd;
    margin-right:2rem;
    font-size:3rem;
    cursor:pointer;
}
.sidepart_header3 i{
    color:#ddd;
    margin-right:2rem;
    font-size:3rem;
    cursor:pointer;
}
.logout{
    z-index:99 !important;
}
.department_add{
    display:flex;
    width:100%;
    flex-direction:column;
}
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
.changes_pop, .changes_pop_wrong{
    top:0;
    position:fixed;
    z-index:99999;
    left:0;
    width:100%;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    background-color:rgba(255,255,255,0.80);
}
#text_34322, #text_3432299{
    margin:1rem;
    color:grey;
}
.form_2934{
    display:flex;
    width:100%;
    flex-direction:column;
}

.form_2934 div{
    margin:1rem;
    display:flex;
    flex-direction:column;
    width:60%;
}

.form_2934 div label{
    color:grey;
}
.form_2934 div textarea, .textarea{
    width:95%;
    border:2px dashed #ddd;
    margin:1rem;
    border-radius:5px;
    resize:none;
    height:4.2rem;
    padding:10px;
}
.form_2934 div textarea:focus{
    outline:none;
    border:2px dashed #ddd;
}
.textarea:focus{
    outline:none;
    border:2px dashed #ddd;
}
.thing_345, .thing_3455{
    font-weight:bold !important;
}
.thing_345, .thing_34555{
    font-weight:bold !important;
}
.msg{
    width:max-content;
    height:max-content;
    padding:1rem;
    border-radius:10px;
    margin-bottom:10px;
    color:blueviolet;
    background-color:rgba(255,255,0,0.30);
}
.other_sidepart{
    position:fixed;
    left:0;
    top:0;
    display:flex;
    align-items:center;
    justify-content:center;
    font-family: 'Josefin Sans', sans-serif;
    width:55%;
    height:100vh;

}
.other_sidepart_main h2{
    font-size:4rem;
    color:#454545;
}
.other_sidepart_main{
    display:flex;
    align-items:center;
    flex-direction:column;
}
.other_sidepart_main p{
   
    font-size:1.2rem;
}
.in_text{
     font-weight:bold;
     text-align:center;
}
.icon_hover{
    transition:.3s ease;
}

.icon_hover:hover{
    color:black;
    transition:.3s ease;
}
input::placeholder{
font-family: 'Maven Pro', sans-serif;
}
@media screen and (max-width:800px){
    .sidepart{
        width:95%;
    }
    .other_sidepart_main{
     display:none;
}
}
.loader3 {
   width:50px;
   height:50px;
   display:inline-block;
   padding:0px;
   text-align:left;
}
.loader3 span {
   position:absolute;
   display:inline-block;
   width:50px;
   height:50px;
   border-radius:100%;
   background:rgba(135, 211, 124,1);
   -webkit-animation:loader3 1.5s linear infinite;
   animation:loader3 1.5s linear infinite;
}
.loader3 span:last-child {
   animation-delay:-0.9s;
   -webkit-animation-delay:-0.9s;
}
@keyframes loader3 {
   0% {transform: scale(0, 0);opacity:0.8;}
   100% {transform: scale(1, 1);opacity:0;}
}
@-webkit-keyframes loader3 {
   0% {-webkit-transform: scale(0, 0);opacity:0.8;}
   100% {-webkit-transform: scale(1, 1);opacity:0;}
}
.loader4 {
   width:50px;
   height:50px;
   display:inline-block;
   padding:0px;
   text-align:left;
}
.loader4 span {
   position:absolute;
   display:inline-block;
   width:50px;
   height:50px;
   border-radius:100%;
   background:rgba(255, 0, 0,1);
   -webkit-animation:loader3 1.5s linear infinite;
   animation:loader4 1.5s linear infinite;
}
.loader4 span:last-child {
   animation-delay:-0.9s;
   -webkit-animation-delay:-0.9s;
}
@keyframes loader4 {
   0% {transform: scale(0, 0);opacity:0.8;}
   100% {transform: scale(1, 1);opacity:0;}
}
@-webkit-keyframes loader4 {
   0% {-webkit-transform: scale(0, 0);opacity:0.8;}
   100% {-webkit-transform: scale(1, 1);opacity:0;}
}
input{
    border:2px solid #eee !important;
}
.button{
   border:2px solid #eee !important;
}
.lock{
    width:100%;
    height:5rem !important;
    font-size:3rem !important;
    border:none !important;
    letter-spacing: 10px;
    font-family: monospace;
}
.lock::placeholder {
  font-family: monospace;
  letter-spacing: 10px;
}
.button:hover{
    border:2px solid #121212 !important;
    color:#fff !important;
    background-color:black !important;
}
.flow{
    position:fixed;
    bottom:0;
    left:0;
    right:0;
    background-color:black;
    color:#fff;
    display:flex;
    font-size:1.5rem;
    align-items:center;
    justify-content: center;
    height:10%;
    z-index:999999 !important;
    display:none;
}
    </style>
</head>
<body>
<div class="flow">Hello world</div>
        <div class='lineloader noner'>
    <div id="loading"></div>
    </div>
    <div class='other_sidepart'>
        <div class='other_sidepart_main'>
            <div style='width:200px;height: 200px;'>
            <img style='width:100%;height:100%;object-fit:contain' src="profiles/<?php echo $logo ?>" alt="">
            </div>
        <p><?php echo $naming ?></p>
        </div>
    </div>
    <!-- SIDE PARTS -->
     <div class='sidepart '>
         <div class='sidepart_header'> <span class='thing_345' id='data_change_232'>Administrator</span> <div id='sidepart_terminate'> <i class='bx bx-lock-alt icon_hover'></i></div> </div>
         <div class='sidepart_items' id='get_data_3432'>
         <form class='department_add'>
         <input type="password" class="lock" placeholder='Enter Key ####'>
         <div class='button ' id='data_verify'>Done  </div>
         <!-- <a style='text-decoration:none;color:unset' href='lib_passage1.php'> <div class='in_text'>- I'M A STUDENT -</div></a> -->
         </form>  
         <div>
         <!-- <img src="Flame_Sign_In_transparent_by_Icons8.gif" alt=""> -->
         </div>
         </div>
     </div>
<script>
$(document).ready(function(){

    let flow = (text) => {
        $(".flow").text(text);
        $(".flow").css("display","flex");
        setTimeout(() => {
         $(".flow").css("display","none");
        }, 2000);
    }
    
    $("#data_verify").click(function(){
        var key_ = document.querySelector(".lock");
        $.ajax({
        url:'parser.php',
        method:'POST',
        data:{
            "key":key_.value
        },
        beforeSend:function(){
            start_loader();
        },
        success:function(data){
            flow(data);
            setTimeout(() => {
                window.location.href = 'index.php';
            }, 2000);
        }
        });
    });
    start_loader = () => {
        document.querySelector(".lineloader").classList.remove("noner");
    }
    stop_loader = () => {
        document.querySelector(".lineloader").classList.add("noner");
    }
    start_loader();
    setTimeout(() => {
        stop_loader();
    }, 2000);
})

</script>    
</body>
</html>
