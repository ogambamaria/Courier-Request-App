function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -1.28333 , lng: 36.81667},
          zoom: 12
        });
        var card = document.getElementById('pac-card');
        var loc_input = document.getElementById('pickup-input');
        var dest_input = document.getElementById('destination-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');

        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(loc_input);
        var autocomplete = new google.maps.places.Autocomplete(dest_input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        
      }
