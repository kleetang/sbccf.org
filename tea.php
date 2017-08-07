<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>福音茶座</title>
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
                <div class="title1"><h2>福音茶座</h2></div>
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
                    <div class="teadetail">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 teainside">
                <div class="insidetitle">
                  <h1>Tea Time</h1>
                </div>
              </div>
            </div>
            <!-- line -->
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 topline"></div>
            </div>
            <!-- content, second pic -->
            <div class="row teaback2">
              <div class="col-xs-12 col-md-6 col-md-push-6 gospelcontent">
                <p>
                  Small group meetings usually hold on Wednesday from eight PM until ten PM. The location of the meeting shall be decided at the beginning of the semester and it is subjected to change. The purpose of such meeting is to provide an opportunity for anyone who wants to participate in group-discussions with topics pertains to biblical references and Christian doctrine. Therefore, members or non-members may choose to participate in these activities at their own discretion.  The group leaders are volunteers chosen from the CCF members by the members, under general supervision and discretion of the CCF committee
                </p>
              </div>
              <div class="col-xs-12 col-md-6 col-md-pull-6 teapic2 margin_t_160">
                <div class="teadetail2">
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


