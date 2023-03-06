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
    <link rel="stylesheet" href="stylesheets/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link type="image/png" rel="icon" href="assets/icons8-cells-basicons-—-line-32.png">
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
    display:none;
}
.list{
  padding:1rem;
  border-bottom:1px solid #ddd;
  cursor:pointer;
}
    </style>
</head>
<body>
    <div class="top_area">
       <div class="alpha"><h1>Mocklib</h1></div>
       <div class="beta">
        <div class="one"><img src="assets/icons8-cells-basicons-—-line-32.png" alt=""></div>
        <div><i class='bx bx-cog'></i></div>
       </div>
    </div>
    <div class="lib_holder">
        <div class="lib_ l01">Departments <div><i class='bx bx-pencil' ></i></div> </div>
        <div class="lib_">Students <div><i class='bx bx-pencil' ></i></div> </div>
        <div class="lib_">Comments <div><i class='bx bx-pencil' ></i></div> </div>
    </div>
    <br>
    <div class="logs">
        <div class="log_item">
            <div class="head_items">
                <div class="matt"><i class='bx bx-collection'></i> Materials</div>
                <div class="matt matt2"><i class='bx bx-plus'></i></div>
                <div class="matt"><select size="1">
                    <option value="">Sort by</option>
                    <option value="1">Latest commits</option>
                    <option value="2">Oldest commits</option>
                    <option value="2">Departments</option>
                  </select></div>
            </div>
        </div>
        <div class="log_item" style="border-left:1px solid #eee;padding-left:20px;">
            <div class="head_items">
                <div class="matt"><i class='bx bx-collection'></i> Recently added</div>
            </div>
        </div>
    </div>
    <div class='sidepart noner'>
        <div class='sidepart_header'> <span class='thing_345' id='data_change_232'></span> <div id='sidepart_terminate'> <i class='bx bx-chevron-right icon_hover'></i></div> </div>
        <div class='sidepart_items' id='get_data_3432'>
  
        </div>
    </div>
    <div class="flow">Hello world</div>
</body>
<script>
    let flow = (text) =>{
        $(".flow").text(text);
        $(".flow").css("display","flex");
        setTimeout(() => {
         $(".flow").css("display","none");
        }, 2000);
    }
      $("#sidepart_terminate").click(function(){
            $(".sidepart").addClass("noner");
        })
        $(".l01").click(function(){
           $(".sidepart").removeClass("noner");
           $("#data_change_232").text("");
           $("#get_data_3432").load("departments.php");
        });
</script>
</html>