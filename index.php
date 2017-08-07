c<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CCF石溪大學團契</title>
    <link rel="icon" href="img/logo2.png" type="image/png">
    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>

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
          <div class="row margin_lr_0">
            <!-- welcome -->
            <div class="col-md-4 welcome">
              <h4>最新通知</h4>
              <strong>2017 Retreat Coming! </strong>
              <hr>
              <p><br>時間：10/20/17 (Fri) - 10/22/17 (Sun) <br>地點：Pine Hill Retreat Center</p>
              <br>
              <p>在忙碌的生活和學習中, <br> 我們需要有沉澱的時刻, <br> 邀請大家放下手中的工作，心中的憂慮, <br> 讓我們用單獨的周末時間徜徉在神美好同在當中!!!
</p>
</p>
            </div>
            <!-- news banner -->
            <div class="col-md-8 banner padding_lr_0">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner banner-inner">
                  <div class="item active">
                    <a href="https://goo.gl/forms/qwSd0wn9puelBO7h2">
                      <img style = "height:auto;" src="./img/retreat/Retreat2017.jpg" alt="風暴人生">
                    </a>
                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                  <div class="item">
                    <img src="./img/retreat/GC2017.jpg" alt="Retreat 2017">
                    <div class="carousel-caption">
                      
                    </div>
                  </div>
                  ...
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
              </div>
            </div>
            
          </div>
          <div class="row margin_lr_0">
            <!-- news banner -->
            <div class="col-md-8 news padding_lr_0">
              <div class="event1">
                <a><div class="event1pic"></div></a>
              </div>
            </div>
            <!-- welcome -->
            <div class="col-md-4 general padding_lr_0">
              <div class="theme">
                <h4><strong>年度主題</strong></h4>
                <h3><b>擺在前面的喜樂</b></h3>
                <p>希伯來書12:2
                <br>仰望為我們信心創始成終的耶穌。他因那擺在前面的
                <br>喜樂，就輕看羞辱，忍受了十字架的苦難，便坐在神寶座的右邊。</p>
              </div>
              <div class="sundayservice">
                <h3><a href="sundayservice.php">主日崇拜</a></h3>
                <h4><b>週日 Sunday 5 PM - 7 PM</b></h4>
                <h5><b>@ 長島基督福音教會</b></h5>
                <h5>我們會有同工4:15/30/45pm在SAC後面停車場接送</h5>
                <h5>Will be picking up at 4:15/30/45pm in SAC parking lot</h5> 
              </div>
              <div class="fellowship">
                <h4><strong><u>聚會時間表</u></strong></h4>
                <h4><a href="biblestudy.php">小組查經</a></h4>
                <p>週三 Wednesday 8 PM - 10 PM</p>
                <p>@ Library N5560</p>

                <h4><a href="fellowship.php">團契聚會</a></h4>
                <p>週五 Friday 8 PM - 10 PM</p>
                <p>@ SAC 306</p>

                <h4><a href="prayermeeting.php">禱告會</a></h4>
                <p>週一至週五 Weekdays 1 PM - 2 PM</p>
                <p>@ CCF Office, Library N5570</p>
              </div>
            </div>
          </div>
        </div><!-- container -->
      </div><!-- main -->
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
    <script src="./js/jquery-1.11.1.js"></script>
  </body>
</html>