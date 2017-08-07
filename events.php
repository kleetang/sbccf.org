<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
    <link rel="icon" href="img/logo2.png" type="image/png">
    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/select.css">
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
    </div><!-- header -->

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
                <div class="title2"><h2>活動</h2></div>
              </div>
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
          </div><!-- row -->
        </div><!-- container -->

        
        <div class="container whole">
          <div class="row eventlink"> 
            <a href="retreat.php">
              <div class="hidden-md hidden-lg col-xs-12 smcol" id="smretreat">
                <div id="smretreattitle"></div>
              </div>
            </a>
            <a href="gc.php">
            <div class="hidden-md hidden-lg col-xs-12 smcol" id="smgc">
              <div id="smgctitle"></div>
            </div>
            </a>
            <a href="otherevents.php">
            <div class="hidden-md hidden-lg col-xs-12 smcol" id="smother">
              <div id="smothertitle"></div>
            </div>
            </a>

          <!-- only visible to with md and lg screen -->
            <!-- first three pic -->
            <div class="hidden-xs hidden-sm col-md-4 col" id="bgretreat">
                <div class="retreatlink">
                </div>
            </div>
            <div class="hidden-xs hidden-sm col-md-4 col" id="bggc">
                <div class="gclink">
                </div>
            </div>
            <div class="hidden-xs hidden-sm col-md-4 col" id="bgother">
                <div class="otherlink">
                </div>
            </div>
            <!-- title word -->
            <div class="hidden-xs hidden-sm col-md-12" id="eventword">
            </div>
            <div class="hidden-xs hidden-sm col-md-12" id="retreattitle">
            </div>
            <div class="hidden-xs hidden-sm col-md-12" id="gctitle">
            </div>
            <div class="hidden-xs hidden-sm col-md-12" id="othertitle">
            </div>
            <!-- wholepic -->
            <div class="hidden-xs hidden-sm col-md-12" id="wholeretreat">
                <div class="row">
                    <a href="retreat.php">
                      <div class="col-md-4 cover">
                        <div class="enterlink">
                        </div>
                      </div>
                    </a>
                </div>
            </div>
            <div class="hidden-xs hidden-sm col-md-12" id="wholegc">
                <div class="row">
                  <a href="gc.php">
                    <div class="col-md-4 col-md-offset-4 cover">
                      <div class="enterlink">
                      </div>
                    </div>
                  </a>
                </div>
            </div>
            <div class="hidden-xs hidden-sm col-md-12" id="wholeother">
                <div class="row">
                  <a href="otherevents.php">
                    <div class="col-md-4 col-md-offset-8 cover">
                        <div class="enterlink">
                        </div>
                    </div>
                  </a>
                </div>
            </div>
          </div><!-- row eventlink -->
        </div><!-- container whole -->
        </div><!-- main2 -->
      </div><!-- main-wrapper -->
      <!-- back-to-top -->
      <div class="back">
        <a href="#" class="back-to-top">Top</a>
      </div><!-- backtotop -->
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
    <script src="./js/select.js"></script>
  </body>
</html>