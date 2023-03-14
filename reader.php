<?php
session_start();
include("init.php");

if(!isset($_SESSION['key_2'])){
    ?>
<script>
    window.location.href = 'lib_passage_2.php';
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://api.fontshare.com/v2/css?f[]=supreme@100,500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <title>Mocklib</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            transition: all .5s ease;
        }
        html{
            font-family: 'Supreme', sans-serif;
        }
        
        .alpha{
            font-family: 'Pacifico', cursive;
        }
        .top_area{
            display:flex;
            align-items: center;
            width:100%;
            height:5rem;
            justify-content:space-between;
            padding-left:2rem;
            padding-right:2rem;
        }
        
        .one{
          background-color:#ffffffee;
          border-radius:50%;
          border:1px solid #eeee;
          width:50px;
          display:flex;
          align-items: center;
          justify-content: center;
          height:50px;
          padding:5px;
        }
        .one img{
            width:100%;
            height:auto;
            object-fit: cover;
        }
        .one:hover{
            cursor:pointer;
            background-color:#fcfcfcee;
            scale:1.05;
        }
        .beta i{
            margin-left:1.5rem;
            font-size:2.2rem;
            cursor:pointer;
        }
        
        .beta i:hover{
            color:grey;
        }

        .beta{
            display:flex;
            align-items: center;

        }
        .lib_holder{
            padding-left:2rem;
            padding-right:2rem;
            display:flex;
        }
        .lib_{
            margin:1rem;
            padding:1rem;
            min-width:7rem;
            width:max-content;
            height:3rem;
            border:2px solid #121121;
            border-radius:5px;
            display:flex;
            align-items: center;
            justify-content: center;
        }
        .lib_ div{
            padding:5px;
        }
        .lib_:hover{
            background-color:rgba(0,0,0,0.02);
            cursor:pointer;
        }
        .logs{
            display:flex;
            width:100%;
            padding-left:2rem;
            padding-right:2rem;
            justify-content:space-between;
        }
        .log_item{
            width:100%;
            margin:10px;
            height:100vh;
        }
        .head_items i{
            font-size:2rem;
        }
        .head_items{
            font-size:18px;
            display:flex;
            width:100%;
            justify-content: space-between;
            align-items: center;
        }
        .matt{
            display:flex;
            align-items: center;
            margin-right:10px;
        }
        .matt i{
            padding:5px;
            cursor:pointer;
        }
        .matt2{
            display:flex;
            align-items: center;
            justify-content: center;
            background-color:#eee;
            border-radius:50%;
        }
        select{
            border:none;
            cursor:pointer;
            outline:none;
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
        height:100vh;
        z-index:999 !important;
        box-shadow: -5px 0 5px -5px rgba(0,0,0,.1);
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
.sidepart_items::-webkit-scrollbar{
    background-color:rgba(255, 166, 0, 0.01);
}

.sidepart_items::-webkit-scrollbar-thumb{
    border-radius:30px;
    background-color:rgba(138, 43, 226, 0.09);
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
@media screen and (max-width:800px){
    .sidepart{
        width:95%;
    }
    .other_sidepart_main{
     display:none;
}
}
@keyframes sikes {
    0%{
        transform:translateX(100%);
    }
    100%{
        transform:translateX(0%);
    }
}
.icon_hover{
    color:#ddd;
    cursor: pointer;
    font-size:3rem;
}
.noner{
    display: none;
}
input{
    width:95%;
    border:2px dashed #ddd;
    border-radius:5px;
    height:4.2rem;
    padding:10px;
    font-family: 'Supreme', sans-serif;
}
.label-float{
  position: relative;
  padding-top: 13px;
}

.label-float input{
  border: 1px solid lightgrey;
  border-radius: 5px;
  outline: none;
  min-width: 250px;
  padding: 15px 20px;
  font-size: 16px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  -webkit-appearance:none;
}

.label-float input:focus{
  border: 2px solid #9b59b6;
}

.label-float input::placeholder{
  color:transparent;
}

.label-float label{
  pointer-events: none;
  position: absolute;
  top: calc(50% - 8px);
  left: 15px;
  transition: all .1s linear;
  -webkit-transition: all .1s linear;
  -moz-transition: all .1s linear;
  background-color: white;
  padding: 5px;
  box-sizing: border-box;
}

.label-float input:required:invalid + label{
  color: red;
}
.label-float input:focus:required:invalid{
  border: 2px solid red;
}
.label-float input:required:invalid + label:before{
  content: '*';
}
.label-float input:focus + label,
.label-float input:not(:placeholder-shown) + label{
  font-size: 13px;
  top: 0;
  color: #9b59b6;
}
.sikes{
    display:flex;
    flex-wrap:wrap;
}
.label-float{
   
}
.btn{
  display:flex;
  width:6rem;
  height:3rem;
  padding:10px;
  background-color:black;
  color:#fff;
  align-items:center;
  cursor:pointer;
  justify-content: center;
}
.btn:hover{
    background-color:grey;
}
.cont{
  padding:1rem;
}
.flow{
    position:fixed;
    bottom:0;
    left:0;
    right:0;
    background-color:black;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content: center;
    height:10%;
    z-index:999 !important;
    display:none;
}
.list{
  padding:1rem;
  border-bottom:1px solid #ddd;
  cursor:pointer;
}
.list:hover{
    background-color:rgba(0,0,0,0.01);
}
.morph{
    position:absolute;
    right:0;
    bottom:0;
    width: 100%;
    background-color:#fff;
    height:50%;
    display:none;
    margin:0 auto;
    border-top:1px solid #ddd;
    z-index:9999 !important;
} 
.closer{
    margin:1rem;
    float:right;
    width:50px;
    height:50px;
    border-radius:50%;
    background-color:#eee;
    display:flex;
    align-items:center;
    cursor:pointer;
    justify-content: center;
    font-size:1.5rem;
}
select{
    font-size:18px;
}
.note{
    margin-top:10px;
    padding:10px;
    border-radius:8px;
    background-color:rgba(50,205,50,0.09);
    color:green;
}
.lineloader{
  width:100%;
  max-height:4px !important;
  height:4px !important;
  background:linear-gradient(to left, green, limegreen);
  position:fixed;
  top:0;
  left:0;
  z-index:999 !important;
  margin:0;
background-size: 20%;
background-repeat:repeat-y;
background-position:-25% 0;
border-radius:30px;
animation: scroll 1.3s linear infinite;

}
@keyframes scroll{
  50%{
    background-size:70%;
  }
  100%{
    background-position:125% 0;
  }
}
.active_button{
    border-color:limegreen !important;
    color:limegreen !important;
}
.button_active{
    border-color:limegreen !important;
    color:limegreen !important;
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
      margin:10px;
  }
  .confirm{
  position:fixed;
  right:10px;
  box-shadow: 0 1px 5px rgba(0,0,0,0.05), 0 1px 4px rgba(0,0,0,0.05);
  border-radius:5px;
  top:10px;
  display:flex;
  padding:10px;
  cursor:pointer;
  align-items:center;
  justify-content:space-around;
  width:10rem;
  background-color:#fff;
  z-index:999999999;
  height:3rem;
  display:none;
}

.bounce-in-right {
  animation: bounce-in-right 1s ease;
}
@keyframes bounce-in-right {
  0% {
    opacity: 0;
    transform: translateX(2000px);
  }
  60% {
    opacity: 1;
    transform: translateX(-30px);
  }
  80% { transform: translateX(10px); }
  100% { transform: translateX(0); }
}
.yes{
  width:100%;
  background:rgba(251,251,251);
  padding:10px;
  border-radius:5px;
  cursor:pointer;
  text-align:center;
}
.comment{
        width:95%;
        padding:1rem;
        min-height:10rem;
        border:2px solid #121212;
        font-family: 'Supreme', sans-serif;
        border-radius:8px;
        
    }
    .search_prompt{
        top:0;
        position:fixed;
        left:0;
        right:0;
        width:40%;
        margin:auto;
        background-color: #fff;
        padding:1rem;
        height:5rem;
        transition:none !important;
    }
    .search_prompt input{
        border:2px solid #121121;
        border-radius:30px;
        padding:20px;
        height:3rem;
    }
    </style>
</head>
<body>
    <div class="search_prompt">
        <input id='text_search' type="text" placeholder='search for material'>
    </div>
<div class='lineloader'></div>
<div class='confirm bounce-in-right'>
  <div class="yes">Confirm</div>
</div>
    <div class="top_area">
       <div class="alpha"><h1><?php echo $naming ?></h1></div>
       <div class="beta">
        <div class="one">
            <?php
              if($logo){
                ?>
                <img src="profiles/<?php echo $logo ?>" alt="">
                <?php
              }else{
                ?>
                <img src="assets/icons8-cells-basicons-—-line-32.png" alt="">
                <?php
              }
            ?>
        </div>
        <div class='settings'><i class='bx bx-cog'></i></div>
       </div>
    </div>
    <div class="lib_holder">
        <div class="lib_ l03">Comments <div><i style='font-size:1.5rem' class="uil uil-megaphone"></i></div> </div>
    </div>
    <br>
    <div class="logs">
        <div class="log_item">
            <div class="head_items">
                <div class="matt"><i class='bx bx-collection'></i> Materials</div>
                <div class="matt search_con">
                    Search <i class='bx bx-search-alt' ></i>
                </div>
            </div>
            <br>
            <div class='trophy'>
             
            </div>
        </div>
        <div class="log_item" style="border-left:1px solid #eee;padding-left:20px;">
            <div class="head_items">
                <div class="matt"><i class='bx bx-collection'></i> Recently read</div>
            </div>
            <br>
            <div class='trophy_2'>
             
             </div>
        </div>
    </div>
    <div class='sidepart noner'>
    <div class="morph">
    <div class="closer"><i class='bx bx-x' ></i></div>
      <div id='nl3' style='padding:1rem;'>
      </div>
    </div>
        <div class='sidepart_header'> <span class='thing_345' id='data_change_232'></span> <div id='sidepart_terminate'> <i class='bx bx-chevron-right icon_hover'></i></div> </div>
        <div class='sidepart_items' id='get_data_3432'>
        </div>
    </div>
    <div class="flow">Hello world</div>
</body>
<script>
    $(".search_con").click(function(){
        $(".search_prompt").toggle("noner");
    })
    $(".switch").change(function(){
        var data = document.querySelector(".switch");
        if(data.value == 1){
       $(".trophy").load("latest_commits.php");
       flow("fetching latest commits");
        }else if(data.value == 2){
            $(".trophy").load("oldest_commits.php");
            flow("fetching oldest commits");
        }else if(data.value == 3){
            $(".trophy").load("search_by_department.php");
            flow("searching by departments");
        }
    })
    let flow = (text) =>{
        $(".flow").text(text);
        $(".flow").css("display","flex");
        setTimeout(() => {
         $(".flow").css("display","none");
        }, 2000);
    }
      $("#sidepart_terminate").click(function(){
            $(".sidepart").addClass("noner");
            $(".morph").css("display","none");
        })
        $(".l01").click(function(){
           $(".sidepart").removeClass("noner");
           $("#data_change_232").text("Departments");
           $("#get_data_3432").load("departments.php");
           $(".morph").css("display","none");
        });
        $(".l02").click(function(){
           $(".sidepart").removeClass("noner");
           $("#data_change_232").text("Students");
           $("#get_data_3432").load("students.php");
           $(".morph").css("display","none");
        });
        $(".l03").click(function(){
           $(".sidepart").removeClass("noner");
           $("#data_change_232").text("Comment");
           $("#get_data_3432").load("edit_comments.php");
           $(".morph").css("display","none");
        });
        $(".add_material").click(function(){
           $(".sidepart").removeClass("noner");
           $("#data_change_232").text("Materials");
           $("#get_data_3432").load("add_material.php");
           $(".morph").css("display","none");
        });
        $(".settings").click(function(){
           $(".sidepart").removeClass("noner");
           $("#data_change_232").text("Settings");
           $("#get_data_3432").load("settings.php");
           $(".morph").css("display","none");
        });
        $(".trophy").load("material_list.php");
        $(".trophy_2").load("recent_materials.php");
        $(".closer").click(function(){
            $(".morph").css("display","none");
        })
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
</script>
</html>