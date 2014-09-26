$(document).ready(function(){
	
	var map = L.map('mapa');
	
	navigator.geolocation.getCurrentPosition(success, error, options);

	function success(pos) {
	  var crd = pos.coords;
	  map.setView([crd.latitude, crd.longitude], 7);
	  L.marker([crd.latitude, crd.longitude]).addTo(map);
	};
	function error(err) {
	  console.warn('ERROR(' + err.code + '): ' + err.message);
	};
	var options = {
	  enableHighAccuracy: true,
	  timeout: 5000,
	  maximumAge: 0
	};
	var attribution = "<a href='http://www.onmymind.com'>On My Mind®</a>"
	L.tileLayer(
		'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
		{
			attribution: attribution
		})
	.addTo(map);

});