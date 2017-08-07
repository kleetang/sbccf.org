<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Helen's Office Hour</title>
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
          <!-- title -->
          <div class="row">
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
              <div class="col-md-4 middle-title">
                <div class="title2"><h2>Helen座談</h2></div>
              </div>
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
          </div>
          <div class="teaback1">
            <!-- first pic -->
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="row">
                  <div class="col-xs-12 teapic1">
                    <div class="helentail">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 teainside">
                <div class="insidetitle">
                  <h1>Office Hour</h1>
                </div>
              </div>
            </div>
            <!-- line -->
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 topline"></div>
            </div>
            <!-- content, second pic -->
            <div class="row helenback2">
              <div class="col-xs-12 col-md-6 col-md-push-6 helencontent">
              <div class="profilepic margin_b_20">
                <img class="img-responsive center-block" src="img/pic/helen.jpg">
              </div>              
                  <h3>
                    Every Tue and Thus 11:00AM - 4:00PM
                  </h3>
                <p>
                 如你有任何生活上的難題，甚至學習上的壓力，都可以來找我們Helen姐來談話哦！她會輔導我們如何去解決問題，并把我們引領到上帝面前向祂祈求禱告。所以，不管有什麼事情，都可以在Helen姐的office hour來她哦！
                </p>
                </h1>
              </div>
              <div class="col-xs-12 col-md-6 col-md-pull-6 teapic2 margin_t_160">
                <div class="helentai2">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
  </body>
</html>