<!DOCTYPE html>
<html>
    <head>
        <title>Home | Tumia</title>
        <link rel="icon" href="project/images/icons8_Stork_With_Bundle_96px_1.png">

        <style>
            body {
                font-family: sans-serif;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 5px 10px;
                overflow: hidden;
            }

            li {
                float: right;
                border: 2px black;
            }

            li a, .dropbtn {
                display: block;
                color: black;
                text-align: center;
                padding: 5px 15px;
                text-decoration: none;
            }

            li a:hover, .dropdown:hover .dropbtn {
                background-color: skyblue;
            }

            li.dropdown {
                display: inline-block;
                color: black;
                font-size: 16px;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {background-color: skyblue}

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .googleMap {
                position: absolute;
            }


.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}



        </style>

    </head>

    <body>
        <div class="nav-bar">
            <ul>
                <li><a href="#"><p>HI @Username</p></a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">MENU</a>
                    <div class="dropdown-content">
                        <a href="#">Account Details</a>
                        <a href="#"> History</a>
                        <a href="#">waybill</a>
                        <a href="#">Earnings</a>
                        <a href="#">Weekly Ratings Report</a>
                        <a href="#">Documents</a>
                        <a href="#">Invites</a>




                    </div>
                </li>
            </ul>
        </div>



<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>

        <div class="container">
            <div id="map" style="width:100%; height: 750px;"></div>





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
                  <h4 class="modal-title">Pick up requests</h4>
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

        <script>
            function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(-1.28333 , 36.81667),
                zoom:12,
            };
            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcM_n70Tmi9V87FRnw0AesYjqz2qUVdbI&libraries=places&callback=initMap"
            async defer></script>
          <script src="<?php echo base_url();?>../assets/js/request.js"></script>


    </body>

</html>
