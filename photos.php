<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Photos</title>
    <link rel="icon" href="img/logo2.png" type="image/png">
    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- header -->
    <div id="header">
      <?php 
        include("./share/head.php");
      ?>
    </div>
    <?php
      $imagesTotal=20;
    ?>
    <!-- main -->
    <div id="main-wrapper">  
      <div id="main">
        <div class="container">
          <div class="col-md-4">
            <div class="title-background"><br></div>
          </div>
          <div class="col-md-4 middle-title">
            <div class="title1"><h2>Photo</h2></div>
          </div>
          <div class="col-md-4">
            <div class="title-background"><br></div>
          </div>

         <div class="galleryContainer">
          <h1> Sharing Happiness </h1>
          <div class="galleryThumbnailsContainer">
            <div class="galleryThumbnails">
              <?php 
                for($t=1; $t<$imagesTotal;$t++){
                  echo'<a herf="javascript: changeimage('.$t.')"class="thumbnailsimage'.$t.'"><img src="img/photos/photo'.$t.'.jpg"width="auto" height="100"alt=""/></a>';
                }
              ?>
            </div>
          </div>
          <div class="gallerypreviewcontainer">
            <div class="gallerypreviewimage">
              <?php 
                for($i=1;$i<=$imagesTotal; $i++){
                  echo '<img class="previewimage'.$i.'"src="img/photos/photo'.$i.'.jpg"width="900" height="auto" alt=""/>';
                }
                ?>
            </div>
            <div class="gallerypreviewarrows">
              <a href="#" class="previousslidearrow"><</a>
              <a href="#" class="nextslidearrow">&gt;</a>
            </div>
          </div>
          <div class="gallerynavigationbullets">
            <?php
              for($b=1; $b<=$imagesTotal;$b++){
                echo '<a href="javascript: changeimage('.$b.')"class =gallerybullet'.$b.'"><span>&rarr;（Click）</a>';
              }
            ?>
          </div>
        </div>
      </div>
    </div><!-- wrapper -->
    <!-- footer -->
    <?php 
      include("./share/footer.php");
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>-->
    <!--<script src="./js/model.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript">

    //variable
    var imagesTotal = <?php echo $imagesTotal;?>;
    var currentImage = 1;
    var thumbsTotalWidth = 0;

    $('a.gallerybullet'+currentImage).addClass("active");
    $('a.thumbnailsimage'+currentImage).addClass("active");

    //calculate width of thumb
    $(window).load(function(){
      $('.galleryThumbnails a img').each(function(){
        thumbsTotalWidth+=$(this).width()+10+8;
      });
      $('.galleryThumbnails').width(thumbsTotalWidth);
    })


    $("a.previousslidearrow").click(function(){
      $('img.previewimage' + currentImage).hide();
      $('a.gallerybullet'+currentImage).removeClass("active");
      $('a.thumbnailsimage'+currentImage).removeClass("active");
      
      currentImage--;
      if(currentImage==0){
        currentImage=imagesTotal;
      }
      $('img.previewimage'+currentImage).show();
      $('a.gallerybullet'+currentImage).addClass("active");
      $('a.thumbnailsimage'+currentImage).addClass("active");

      return false;

    });
    // next arrow

    $('a.nextslidearrow').click(function(){
      $('img.previewimage' + currentImage).hide();
      $('a.gallerybullet'+currentImage).removeClass("active");
      $('a.thumbnailsimage'+currentImage).removeClass("active");
      currentImage++;
      if(currentImage==imagesTotal+1){
        currentImage=1;
      }
      $('img.previewimage'+currentImage).show();
      $('a.gallerybullet'+currentImage).addClass("active");
      $('a.thumbnailsimage'+currentImage).addClass("active");

      return false;

    });

    //Bullet Code
    function changeimage(imageNumber){
      $('img.previewimage'+currentImage).hide();
      currentImage = imageNumber;
      $('img.previewimage'+currentImage).show();

      $('gallerynavigationbullets a').removeClass("active");
      $('galleryThumbnails a').removeClass("active");

      $('a.gallerybullet'+imageNumber).addClass("active");
      $('a.thumbnailsimage'+currentImage).addClass("active");

    }

    function autoChangeSlides(){
       $('img.previewimage' + currentImage).hide();
      $('a.gallerybullet'+currentImage).removeClass("active");
      $('a.thumbnailsimage'+currentImage).removeClass("active");
      currentImage++;
      if(currentImage==imagesTotal+1){
        currentImage=1;
      }
      $('img.previewimage'+currentImage).show();
      $('a.gallerybullet'+currentImage).addClass("active");
      $('a.thumbnailsimage'+currentImage).addClass("active");

    }
    var slideTimer = setInterval(function(){autoChangeSlides();},10000);

    </script>

  </body>
</html>
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><! /.modal-content 
      </div><!- /.modal-dialog 
    </div><!- /.modal -->