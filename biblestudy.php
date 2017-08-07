<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bible Study</title>
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
                <div class="title1"><h2>小組查經</h2></div>
              </div>
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
          </div>
          <div class="biblestudyback">
            <!-- two pic -->
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="row">
                  <div class="col-xs-12 time">
                    <div class="timedetail">
                      <h4><strong>Meeting Time:</strong></h4>
                      <p>Every Wednesday 8pm - 10pm</p>
                      <h4><strong>Location:</strong></h4>
                      <p>Library N5560</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-9 inside">
                <div class="insidetitle">
                  <h1>Bible Study</h1>
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
                  Small group meetings usually hold on Wednesday from eight PM until ten PM. The location of the meeting shall be decided at the beginning of the semester and it is subjected to change. The purpose of such meeting is to provide an opportunity for anyone who wants to participate in group-discussions with topics pertains to biblical references and Christian doctrine. Therefore, members or non-members may choose to participate in these activities at their own discretion.  The group leaders are volunteers chosen from the CCF members by the members, under general supervision and discretion of the CCF committee
                </p>
                <p>
                  小組聚會通常會在週三晚上八點到十點舉行。聚會地點可能有所变化，並會在每個學期初決定每學期的聚會地點。聚會是提供機會給任何想要參與涉及到聖經引用和基督教義小組討論的同學。因此，成員與非成員可自行選擇決定參加這些适合自己的聚會。小組長是成員在CCF委員會的監察和酌量下，從CCF成員中挑選出來的志願者。
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 col-md-offset-4">
                <div align="center"><img src="./img/Biblestudy.jpg" alt="Bible Study" width="auto" height="400">
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

