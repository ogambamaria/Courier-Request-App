<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    Tumia | Home
  </title>
    <link rel="icon" href="<?php echo base_url()?>../assets/images/tumia-logo-2.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>
        #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }
    </style>
</head>
<body>

<div class="col-9" id="map" style="width:80%; height: 500px; float: right; margin: auto;">
</div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>

<!-- Footer -->
<footer class="page-footer font-small pt-4 fixed-bottom">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Tumia - Courier Request Application</a>
    </div>
  </footer>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcM_n70Tmi9V87FRnw0AesYjqz2qUVdbI&libraries=places&callback=initMap" async defer></script>
    <script src="<?php echo base_url();?>../assets/js/request.js"></script>

</body>
</html>
