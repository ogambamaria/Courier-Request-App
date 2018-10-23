<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    Tumia | Courier
  </title>
    <link rel="icon" href="<?php echo base_url();?>../assets/images/tumia-logo-2.png">
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>../assets/images/tumia-logo.png" alt="Tumia"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Account details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Order History</a>
      <li class="nav-item">
        <a class="nav-link" href="#">waybill</a>
        <li class="nav-item">
          <a class="nav-link" href="#">earnings</a>
      

      </li>
    </ul>
  </div>
</nav>

<div class="col-3" style="float: left">
<!---some code here--->
<!-- Rounded switch -->
<label class="switch">
  <input type="checkbox">
  <span class="slider round">
    <!---code for online/offline switch--->
    Online
  </span>
</label>
</div>
</form>
</div>
<div id="infowindow-content">
      <img src="" width="20" height="20" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
      <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">show requests</button>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ride requests</h4>
        </div>
        <div class="modal-body">
          <p>You have no new requests.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
<div class="col-9" id="map" style="width:80%; height: 500px; float: right; margin: auto;">
</div>
    <div id="infowindow-content">
      <img src="" width="20" height="20" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
      <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">show requests</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ride requests</h4>
        </div>
        <div class="modal-body">
          <p>You have no new requests.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>


<!-- Footer -->
<footer class="page-footer font-small pt-4 fixed-bottom">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Tumia - Courier Request Application</a>
    </div>
  </footer>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcM_n70Tmi9V87FRnw0AesYjqz2qUVdbI&libraries=places&callback=initMap" async defer></script>

</body>
</html>
