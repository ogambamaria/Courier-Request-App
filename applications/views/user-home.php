<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    Tumia | Home
  </title>
    <link rel="icon" href="<?php echo base_url();?>../assets/images/tumia-logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>

      #logo {
        height: 30px;
        width: 30px;
      }

      #location-icon {
        width: 5px;
        height: 5px;
      }
      /*
      input[type=text] {
        width: 130px;
        -webkit-transition: width 0.4s ease-in-out;
        transition: width 0.4s ease-in-out;
      }

      //When the input field gets focus, change its width to 100% */
      /*
      input[type=text]:focus {
        width: 50%;
      }
      */

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>../assets/images/tumia-logo.png" alt="Tumia" id="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>request">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>payment">Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>history">Order History</a>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>profile">User Profile</a>
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
            <span class="glyphicon"><img src="<?php echo base_url();?>../assets/images/motorcycle-icon.png" alt="Tumia" id="logo"></span>
            <input type="radio" name="rider-type" value="bike" checked>Motorbike
        </div>
        <div class="col">
            <span class="glyphicon"><img src="<?php echo base_url();?>../assets/images/car-icon.png" alt="Tumia" id="logo"></span>
            <input type="radio" name="rider-type" value="car">Car
        </div>
        <div class="col">
            <span class="glyphicon"><img src="<?php echo base_url();?>../assets/images/van-icon.png" alt="Tumia" id="logo"></span>
            <input type="radio" name="rider-type" value="van">Van
        </div>
        <div class="col">
            <span class="glyphicon"><img src="<?php echo base_url();?>../assets/images/truck-icon.png" alt="Tumia" id="logo"></span>
            <input type="radio" name="rider-type" value="truck">Truck
        </div>
  </div>
</div>
  <br>
  <div class="form-group">
<label for="pickup">Pickup Location</label><a href="" id="location-icon" onclick="getLocation()" ><img src="<?php echo base_url();?>../assets/images/location-icon.png"></a><br>
<input type="text" class="form-control" id="origin-input" name="pickup" placeholder="Enter a pickup location" style="width:300px;">
<label for="destination">Drop Off Location</label>
<input type="text" class="form-control" id="destination-input" name="destination" placeholder="Enter a drop off location" style="width:300px;">
<label for="consignee-name">Consignee Name</label>
<input type="text" class="form-control" id="consignee-name" name="name-con" placeholder="Enter the consignee's name" style="width:300px;">
<label for="consignee-number">Consignee Number</label>
<input type="text" class="form-control" id="consignee-number" name="phone-con" placeholder="Enter the consignee's phone number" style="width:300px;">

<input type="hidden" id= "lat-pickup" name="lat-pickup" value="">
<input type="hidden" id= "lng-pickup" name="lng-pickup" value="">
<input type="hidden" id= "lat-dropoff" name="lat-dropoff" value="">
<input type="hidden" id= "lng-dropoff" name="lng-dropoff" value="">
</div>
<br>
<button type="submit" class="btn btn-primary" name="request">Request a Courier</button>

</form>
</div>

<div class="col-9" id="map" style="width:80%; height: 600px; float: right; margin: auto;"></div>

<!-- Footer -->
<footer class="page-footer font-small pt-4 fixed-bottom">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Tumia - Courier Request Application</a>
    </div>
  </footer>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcM_n70Tmi9V87FRnw0AesYjqz2qUVdbI&libraries=places&callback=initMap"
      async defer></script>
    <script src="<?php echo base_url();?>../assets/js/request.js"></script>

</body>
</html>
