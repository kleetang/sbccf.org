<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Fellowship</title>
    <link rel="icon" href="img/logo2.png" type="image/png">
    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link media="all" rel="stylesheet" href="./css/style.css" type="text/css">
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
    <!-- main -->
    <div id="main-wrapper">  
      <div id="main2">
        <div class="container">
          <!-- title -->
          <div class="row">
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
              <div class="col-md-4 middle-title">
                <div class="title2"><h2>Events</h2></div>
              </div>
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
          </div>
          <div class="row">
            <div class="selectStyle nav-wrapper">
              <nav style="display:none">
                <ul>
                  <li class="nav1">
                    <a href="#">退休會</a>
                  </li>
                  <li class="nav2">
                    <a href="#">福音營</a>
                  </li>
                  <li class="nav3">
                    <a href="#">其他活動</a>
                  </li>
                  <li class="nav3">
                    <a href="#">其他活動</a>
                  </li>
                </ul>
              </nav>
              <div id="pic-wrapper">
                <div class="col-xs-3 about1">
                  <a href="#" data-bg="1"><span></span></a>
                </div>
                <div class="col-xs-3 about2">
                  <a href="#" data-bg="2"><span></span></a>
                </div>
                <div class="col-xs-3 about3">
                  <a href="#" data-bg="3"><span></span></a>
                </div>
                <div class="col-xs-3 about4">
                  <a href="#" data-bg="4"><span></span></a>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="back">
        <a href="#" class="back-to-top">Top</a>
      </div>
    </div><!-- wrapper -->
    <!-- footer -->
    <?php 
      include("./share/footer.php");
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
  </body>
</html>