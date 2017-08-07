<?php
require('connect.php');
$name=$_POST['name'];
$pray=$_POST['pray'];
$submit=$_POST['submit'];    

if($submit) {
  if($name && $pray) {
    $query = "INSERT INTO praylist (name,pray) VALUES ('$name', '$pray')";

    $result = $link -> query($query);

    header("location: alumni.php");
    exit;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni</title>
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
                <div class="title1"><h2>代祷事项</h2></div>
              </div>
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
          </div>

          <!-- Large modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">點擊這裏輸入您需要的代禱事項!</button>

          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myLargeModalLabel">Pray Request: <a class="anchorjs-link" href="#myLargeModalLabel"><span class="anchorjs-icon"></span></a></h4>
                      </div>
                      <div class="modal-body">

                        <form class="form-horizontal" action="alumni.php" method="POST">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Name:</label>
                            <div class="col-sm-10">
                              <input type="text" id="name" class="form-control required" name="name" placeholder="name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Pray Request:</label>
                            <div class="col-sm-10">
                              <textarea type="text" id="pray" class="form-control praybox required" rows="3" name="pray" placeholder="Your Pray Request"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <!-- <div class="alert alert-danger" role="alert" <?php echo $prayrequest;?>>Please fill out all the fields. </div> -->
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <input id="btnSubmit" class="btn btn-default" type="submit" value="Submit" name="submit">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div><!-- /.modal-content -->
                  </div>  
          </div>

          

          <nav>
            <ul class="pager">
              <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span> Older</a></li>
              <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
          </nav>

          <div class="row margin_26_10">
            <div class="col-xs-12 content2">
              <div class="panel panel-info">

              <?php
                $query = "SELECT * FROM praylist ORDER BY id DESC";
                
                $result = $link -> query($query);

                while($row = mysqli_fetch_array($result)){
              ?>

                  <div class="panel-heading">
                    <h3 class="panel-title" id="panel-title"><?=$row["name"]?></br><small><?=$row["date"]?></small><a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
                  </div>
                  <div class="panel-body">
                    <?php echo $row["pray"];?>
                  </div>
              <?php  
                }
              ?>
              </div>
            </div>
          </div>

      </div>
    </div><!--main wrapper -->


    <!-- footer -->
    <?php 
      include("./share/footer.php");
    ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="./js/jquery-1.11.1.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
    <script type="text/JavaScript" src="./js/general.js"></script>
  </body>
</html>