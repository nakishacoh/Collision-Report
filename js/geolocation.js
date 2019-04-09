var map, service, infowindow;
function initMap() {
    // set location if current location cannot be found
    var toronto = new google.maps.LatLng(43.654, -79.384);
    // create map
    map = new google.maps.Map(document.getElementById('map'), {
        center: toronto,
        zoom: 9
    });
    // set text search query
    var request = {query: 'ontario collision reporting centre'};
    // perform search
    service = new google.maps.places.PlacesService(map);
    service.textSearch(request, function(results, status) {
        // loop to create markers for text search
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
        }
        // center map over first result
        // map.setCenter(results[0].geometry.location);
        }
    });
    // infowindow if there is an error with geolocation
    infowindow = new google.maps.InfoWindow();
    // HTML5 geolocation
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            map.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    // Browser doesn't support geolocation
    } else {
        handleLocationError(false, infoWindow, map.getCenter());
    }
}
// function to create popup when geolocation fails with error message
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.'
    );
    infoWindow.open(map);
}
// function to create markers on map
// ***** need to create a marker to show user their current location
function createMarker(place) {
    // markers are put on map
    var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
    });
    // click on marker and get details
    // ***** we should set some more things to be populated in window 
    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(place.name);
        infowindow.open(map, this);
    });
}
