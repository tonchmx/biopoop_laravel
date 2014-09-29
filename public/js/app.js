$(document).ready(function(){
	var attribution = "<a href='http://www.onmymind.com'>On My Mind®</a>"
	if(window.location.pathname == '/'){
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
		
		L.tileLayer(
			'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
			{
				attribution: attribution
			})
		.addTo(map);
	}

	if($("#main").has("#mapaComercializadora")){
		var map = L.map('mapaComercializadora');
		var lat = $("#lat").val();
		var log = $("#log").val();
		if(lat != '' || log != ''){
			map.setView([lat, log], 14);
			var marker = new L.marker([lat, log], {draggable:'true'});
			map.addLayer(marker);
		} else {
			map.setView([19.42, -99.13], 5);
			var marker = new L.marker([19.42, -99.13], {draggable:'true'});
			$("#lat").val('19.42');
			$("#log").val('-99.13');
			map.addLayer(marker);
		}
		
		L.tileLayer(
			'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
			{
				attribution: attribution
			})
		.addTo(map);
		
		marker.on('dragend', function(event){
			var mark = event.target;
			var position = mark.getLatLng();
			$("#lat").val(position.lat);
			$("#log").val(position.lng);
		});
		$("#logo").fileinput({'showUpload':false});
	}
	

});