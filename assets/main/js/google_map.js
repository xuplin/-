
var google;

function initMap() {
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    
    var myLatlng = new google.maps.LatLng(23.5619403, 120.47755);

    var mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 17,

        // The latitude and longitude to center the map (always required)
        center: myLatlng,

        scrollwheel: false,
        
        mapTypeId: google.maps.MapTypeId.ROADMAP

    };

    

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using out element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);
    
    var addresses = ['Brooklyn'];

    for (var x = 0; x < addresses.length; x++) {
        $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&sensor=false', null, function (data) {
            var p = data.results[0].geometry.location
            var latlng = new google.maps.LatLng(23.5619403, 120.47755);
            new google.maps.Marker({
                position: latlng,
                map: map
            });

        });
    }
    
}
google.maps.event.addDomListener(window, 'load', initMap);