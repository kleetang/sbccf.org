<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
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

    <title>Simple styled maps</title>
    <style>
    html, body, #map-canvas {
      height: 400px;
      margin: 0px;
      padding: 0px
    }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
      var map;
      var sbunion = new google.maps.LatLng(40.917281,-73.122368);

      var MY_MAPTYPE_ID = 'custom_style';

      function initialize() {

        var featureOpts = [
        {
          stylers: [
          { hue: '#9ec5f7' },
          { visibility: 'simplified' },
          { gamma: 0.5 },
          { weight: 0.5 }
          ]
        },
        {
          elementType: 'labels',
          stylers: [
          { visibility: 'on' }
          ]
        },
        {
          featureType: 'water',
          stylers: [
          { color: '#9ec5f7' }
          ]
        }
        ];

        var mapOptions = {
          zoom: 13,
          center: sbunion,
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
          },
          mapTypeId: MY_MAPTYPE_ID
        };

        map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

        var styledMapOptions = {
          name: 'Custom Style'
        };

        var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

        map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

      }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>




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
                <div class="title1"><h2>聯繫方式</h2></div>
              </div>
              <div class="col-md-4">
                <div class="title-background"><br></div>
              </div>
          </div>
          <div class="row margin_26_10">
            <div class="col-xs-4 content2">
              <h1>
                  Our Office Hour:
              <p>Every Mon.-Thus. 11:00AM - 4:00PM</p>
              <h1>
                  Office Address:
              <p>Frank Melville Jr. Memorial Library <br>Room N5570<br>Stony Brook University<br>Stony Brook, NY 11790</p>
              <h1>
                  E-mail Us:
              <p>sbuccf@gmail.com
              <h1>
                  Wechat (QR Code):
              <p><img class="QRcode" src="img/QR.jpg"/></p>
            </div>
            <div class="col-xs-8">
              <div id="map-canvas"></div>
            </div>
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