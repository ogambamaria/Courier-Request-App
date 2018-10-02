<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    Tumia | Home
  </title>
    <link rel="icon" href="images/tumia-logo-2.png">
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
  <a class="navbar-brand" href="#"><img src="images/tumia-logo.png" alt="Tumia"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="user-home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user-payment.php">Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order-history.php">Order History</a>
      <li class="nav-item">
        <a class="nav-link" href="user-profile.php">User Profile</a>
      </li>
    </ul>
  </div>
</nav>

<div class="col-3" style="float: left">
    <form>
      <div class="form-group">
      <label for="vehicle">Select a vehicle type</label>
      <div class="row">
          <div class="col">
              <span class="glyphicon glyphicon-search"></span>
              <input type="radio" value="bike">Motorbike
          </div>
          <div class="col">
              <span class="glyphicon glyphicon-search"></span>
              <input type="radio" value="car">Car
          </div>
          <div class="col">
              <span class="glyphicon glyphicon-search"></span>
              <input type="radio" value="van">Van
          </div>
          <div class="col">
              <span class="glyphicon glyphicon-search"></span>
              <input type="radio" value="truck">Truck
          </div>
    </div>
    <br>
<label for="pickup">Pickup Location</label>
<input type="text" class="form-control" id="pickup-input" placeholder="Enter pickup location">
<br>
<label for="destination">Drop Off Location</label>
<input type="text" class="form-control" id="destination-input" placeholder="Enter drop off location">
<br>
<button type="submit" class="btn btn-primary" name="request">Request a Courier</button>
</div>
</form>
</div>
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
    <script src="http://localhost/Courier-Request-App\assets\js\request.js"></script>

</body>
</html>