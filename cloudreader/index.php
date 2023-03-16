<?php
session_start();
include("../init_2.php");

if(isset($_GET['data'])){
    $m_data = $_GET['data'];

    $query = mysqli_query($init, "SELECT * FROM last_read WHERE user = '$key' AND book = '$m_data'");
    $is_it = mysqli_num_rows($query);
    if($is_it > 0){
      $arr = mysqli_fetch_array($query);
      $current_page = $arr['page'];
    }
}
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>PDF Viewer</title>
    <style>
        .button{
      width:8rem !important;
      height:3.8rem !important;
      display:flex !important;
      align-items:center !important;
      justify-content:center !important;
      background-color:#fff !important;
      border:2px dashed grey !important;
      cursor:pointer !important;
      color:grey !important;
      border-radius:5px !important; 
  }
  canvas{
    margin-top:12vh;
    max-width:100%;
    width:55%;

  }
  body{
    display:flex;
    align-items:center;
    justify-content:center;
    width:100%;
    height:max-content;
  }
  @media screen and (max-width:900px){
      body{
    display:flex;
    align-items:center;
    justify-content:center;
    width:100%;
    height:max-content;
  }
  canvas{
    margin-top:12vh;
    max-width:100%;
    width:100%;

  }
  }
    </style>
  </head>
  <body>

<nav>
    <div style='width:100%' class='p-34923'>
<div class='button ' id="prev-page"> Prev Page <i class='bx bx-book' ></i></div>
<span class="page-info">
    Page <span id="page-num"></span> of <span id="page-count"></span>
  </span>
<div class='button '  id="next-page">Next Page  &nbsp <i class='bx bx-book' ></i></div>
    </div>
</nav>

    <canvas id="pdf-render"></canvas>

    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
   <script>
     var url = '../file_uploads/<?php echo $m_data  ?>';

      let pdfDoc = null,
        pageNum = <?php if($current_page){
          echo "$current_page";
        }else{
          ?>
         1
          <?php
        }  ?>,
        pageIsRendering = false,
        pageNumIsPending = null;

      const scale = 1.5,
        canvas = document.querySelector('#pdf-render'),
        ctx = canvas.getContext('2d');

      // Render the page
      const renderPage = num => {
        pageIsRendering = true;

        // Get page
        pdfDoc.getPage(num).then(page => {
          // Set scale
          const viewport = page.getViewport({ scale });
          canvas.height = viewport.height;
          canvas.width = viewport.width;

          const renderCtx = {
            canvasContext: ctx,
            viewport
          };

          page.render(renderCtx).promise.then(() => {
            pageIsRendering = false;

            if (pageNumIsPending !== null) {
              renderPage(pageNumIsPending);
              pageNumIsPending = null;
            }
          });

          // Output current page
          document.querySelector('#page-num').textContent = num;
        });
      };

      // Check for pages rendering
      const queueRenderPage = num => {
        if (pageIsRendering) {
          pageNumIsPending = num;
        } else {
          renderPage(num);
        }
      };

      // Show Prev Page
      const showPrevPage = () => {
        if (pageNum <= 1) {
          return;
        }
        pageNum--;
        queueRenderPage(pageNum);
        var current_page = pageNum;
        $.ajax({
                  url:"../parser_6.php",
                  type:"post",
                  async:false,
                  data:{
                      "current_page":current_page,
                      "book": "<?php echo $m_data  ?>"
                  },success:function(data){
                  }
                })
      };

      // Show Next Page
      const showNextPage = () => {
        if (pageNum >= pdfDoc.numPages) {
          return;
        }
        pageNum++;
        var current_page = pageNum;
        queueRenderPage(pageNum);
        $.ajax({
                  url:"../parser_6.php",
                  type:"post",
                  async:false,
                  data:{
                      "current_page":current_page,
                      "book": "<?php echo $m_data  ?>"
                  },success:function(data){
                  }
                })
      };

      // Get Document
      pdfjsLib
        .getDocument(url)
        .promise.then(pdfDoc_ => {
          pdfDoc = pdfDoc_;

          document.querySelector('#page-count').textContent = pdfDoc.numPages;

          renderPage(pageNum);
        })
        .catch(err => {
          // Display error
          const div = document.createElement('div');
          div.className = 'error';
          div.appendChild(document.createTextNode(err.message));
          document.querySelector('body').insertBefore(div, canvas);
          // Remove top bar
          document.querySelector('.top-bar').style.display = 'none';
        });

      // Button Events
      document.querySelector('#prev-page').addEventListener('click', showPrevPage);
      document.querySelector('#next-page').addEventListener('click', showNextPage);

   </script>
  </body>
</html>
