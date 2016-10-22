$(document).ready(function() {
	window.initMap = function() {
		var center = {lat: -34.397, lng: 150.644};
  		window.map = new google.maps.Map(document.getElementById('map'), {
    		center: center,
	    	zoom: 8
	  	});
	  	navigator.geolocation.getCurrentPosition(function(pos) {
	  		var coords = pos.coords;
	  		center = { lat: coords.latitude, lng: coords.longitude };
	  		window.map.setCenter(center);
	  	}, function(error) {
	  		console.log('Google Maps Error - ' + error);
	  	}, {
	  		timeout: 1000
	  	});
	  	var marker = new google.maps.Marker({
    		map: map,
    		draggable: true,
    		animation: google.maps.Animation.DROP,
    		position: center
  		});
	}
	$('#googleMaps').prop('src', 'https://maps.googleapis.com/maps/api/js?key=' + Laravel.googleMapsKey + '&callback=initMap');
});