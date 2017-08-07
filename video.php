<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video</title>
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
    <!-- main -->
    <div id="main-wrapper">  
      <div id="main">
        <div class="container">
          <div class="col-md-4">
            <div class="title-background"><br></div>
          </div>
          <div class="col-md-4 middle-title">
            <div class="title1"><h2>Video</h2></div>
          </div>
          <div class="col-md-4">
            <div class="title-background"><br></div>
          </div>
          <div class = "videoback1">
          <div align="center"><h1>
                  2017 Semi-formal Vedio
          <P></P>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/bwTzDPBUz2w" frameborder="0" allowfullscreen></iframe>
          <P></P>
          <div align="center"><h1>
                  "WHERE IS YOUR HOME?"
          <P></P> 
          <iframe width="560" height="315" src="https://www.youtube.com/embed/eSMzucWJCPs" frameborder="0" allowfullscreen></iframe> 
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
  </body>
</html>