function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center: {lat: -1.28333, lng: 36.81667},
          zoom: 12
        });

        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor
       */
      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'DRIVING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput);

        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput);

            this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
            this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

            var pickup_lat = NULL;
            var pickup_lng = NULL;
            var dropoff_lat = NULL;
            var dropoff_lng = NULL;

            var pickup_lat = originAutocomplete.geometry.location.lat();
            var pickup_lng = originAutocomplete.geometry.location.lng();

            var pickup_lat = document.getElementById('lat-pickup');
            var pickup_lng = document.getElementById('lng-pickup');
            var dropoff_lat = destinationAutocomplete.geometry.location.lat();
            var dropoff_lng = destinationAutocomplete.geometry.location.lng();
            var dropoff_lat = document.getElementById('lat-dropoff');
            var dropoff_lng = document.getElementById('lng-dropoff');

            console.log(pickup_lat);
            console.log(dropoff_lat);



        /*this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        */
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

      function getLocation() {
        var x =  document.getElementById('error');

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
          position.coords.latitude = document.getElementById('lat-pickup');
          position.coords.longitude = document.getElementById('lng-pickup');


        }
      }
