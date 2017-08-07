<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Faith</title>
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
          <!-- breadcrumb -->
          <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li class="active">Mission2</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="title-background"><br></div>
            </div>
            <div class="col-md-4 middle-title">
              <div class="title1"><h2>使命</h2></div>
            </div>
            <div class="col-md-4">
              <div class="title-background"><br></div>
            </div>
          </div>
          <div class="row margin_26_10">
          <div class="col-xs-12 content1">
            <p>The Chinese Christian Fellowship/ Asian Christian Campus Ministry’s (ACCM) mission is to provide a Christian witness on the Stony Brook University campus through quality worship, education, service, fellowship and programming. CCF/ACCM offers and supports Christianity, educational, and cultural activities that call students, faculties, and staffs to seek the manifest love of Christ, that challenge them to a deeper level of spiritual growth, wholeness and wellness and encourage them to enrich their lives.</p>

            <p><strong>Worship</strong> is the center of Christians’ faith-lives and the center of CCF/ACCM. CCF provides weekly worship opportunities for students and members of the Stony Brook community. Periodically, CCF provides leadership for worship in local church and the greater New York community.</p>

            <p><strong>Education</strong> is the focus of Stony Brook University and CCF/ACCM. Through Bible Study and relevant faith based discussion, CCF empowers members of the campus community to challenge their faith, expand their minds, and increase their senses of self-worth and ethical understandings. These are necessary for us to survive and flourish in a rapidly changing and culturally diverse society.</p>

            <p><strong>Fellowship</strong> opportunities are both provided and encouraged. The power of just being together is not overlooked by CCF/ACCM. Through various worships, education, and service functions, members are empowered in their senses of community. They are also encouraged to share their lives and faiths with others and upheld in times of joy or crisis.</p>

            <p><strong>Service</strong> is the nature of a true Christian living and CCF/ACCM provides both services to the students through pastoral care and counseling, and promotes services by the students through outreach. Therefore, it creates opportunities for the Stony Brook community to actively embody in the love of Christ in the world.</p>

          </div>
          </div>
        </div>
        <div class="back">
          <a href="#" class="back-to-top">Top</a>
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