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
<input type="search" class="form-control" id="pickup" placeholder="Enter pickup location">
<br>
<label for="destination">Drop Off Location</label>
<input type="search" class="form-control" id="destination" placeholder="Enter drop off location">
<br>
<button type="submit" class="btn btn-primary" name="request">Request a Courier</button>
</div>
</form>
</div>
<div class="col-9" id="googleMap" style="width:80%; height: 500px; float: right; margin: auto;">
</div>

<!-- Footer -->
<footer class="page-footer font-small pt-4 fixed-bottom">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Tumia - Courier Request Application</a>
    </div>
  </footer>

<script>
    function myMap() {
    var mapProp= {
        center:new google.maps.LatLng(-1.28333 , 36.81667),
        zoom:12,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AlzaSyDe5KsP-PnNA3aA-C35aug46P8_2P6_uDA&callback=myMap"></script>

</body>
</html>
