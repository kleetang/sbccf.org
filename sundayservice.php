<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sunday Service</title>
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
                <div class="title1"><h2>主日崇拜</h2></div>
              </div>
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
          </div>
          <div class="sundayserviceback">
            <!-- two pic -->
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="row">
                  <div class="col-xs-12 time">
                    <div class="timedetail">
                      <h4><strong>Meeting Time:</strong></h4>
                      <p>Every Sunday 5pm - 7pm</p>
                      <h4><strong>Location:</strong></h4>
                      <p>長島基督福音教會（CCGC）</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-9 inside">
                <div class="insidetitle">
                  <h1>Sunday Service</h1>
                </div>
              </div>
            </div>
            <!-- line -->
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 topline"></div>
            </div>
            <!-- content -->
            <div class="row">
              <div class="col-md-7 col-md-offset-4 content">
                <p>
                  Sunday service is a general meeting similar to Church Sunday meetings, and usually the CCF advisor (pastor) is invited to give sermons.  The service is hold on Sunday from five PM to seven PM.  The location of the meeting is in the CCGC.  Also the Holy Communion is served for baptized Christians monthly in the Sunday Service.  This Church type Sunday Service can also help to prepare members, so that they can easily adapt to Church Life after they graduate. </p>
                  <p>周日礼拜是个类似于教会主日崇拜的全员聚会，通常我们的團契牧师负责讲道。礼拜的时间是在周日下午五点到七点，地点会在長島基督福音教會（CCGC）。 同时礼拜中会有给受浸基督徒每个月一次的擘饼聚会时间。  这种类似教会的礼拜聚会也能够帮助成员预备他们毕业后进入教会的生活。</p>
                  <!--<p>Each week the speaking pastor Huang brings insight and perspective that cause the scripture to come alive.</p>
                  <p>Everyone is welcome to join us to worship our God. New friends will have free dinner.
                </p>-->
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 col-md-offset-4">
                <div class="sundayservice1">
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

