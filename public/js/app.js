$(document).ready(function(){
	var attribution = "<a href='http://www.onmymind.com'>On My Mind®</a>"

	var urlLogo = $(document).find("#hLogo").val();
	if(urlLogo != null && urlLogo != ''){
		$("#logo").fileinput({
			showUpload: false,
			initialPreview: "<img src='/img/sponsors/" + urlLogo + "' class='file-preview-image'>",
			initialCaption: urlLogo,
			overwriteInitial: true
		});
	} else {
		$("#logo").fileinput({'showUpload':false});	
	}
	
	if(window.location.pathname === '/'){
		var map = L.map('mapa');

		function success(pos) {
		  var crd = pos.coords;
		  map.setView([crd.latitude, crd.longitude], 7);
		};
		function error(err) {
			alert('No pudimos encontrar tu ubicación :( ¡Te pondremos en un lugar central!');
			map.setView([19.42, -99.13], 5);
		  	console.warn('ERROR(' + err.code + '): ' + err.message);
		};
		var options = {
		  enableHighAccuracy: true,
		  timeout: 10000,
		  maximumAge: 0
		};
		
		navigator.geolocation.getCurrentPosition(success, error, options);
		L.tileLayer(
			'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
			{
				attribution: attribution
			})
		.addTo(map);

		$.ajax({
			url: '/api/comercializadoras',
			type: 'GET',
			dataType: 'json'
		})
			.done(function(response){
				$.each(response, function(i, comercializadora){
					var marker = L.marker([comercializadora.lat, comercializadora.log]).addTo(map);
					var mensaje = "<b>" + comercializadora.nombre +
									"</b></br>" + comercializadora.direccion + 
									"</br>" + comercializadora.ciudad + 
									", " + comercializadora.estado;
					if(comercializadora.url_compra != ""){
						mensaje += "</br><a href='http://" + comercializadora.url_compra + "'>¡Compra directa!</a>"
					}
					marker.bindPopup(mensaje).openPopup();
				});
			});

		$.ajax({
			url: '/api/noticias',
			type: 'GET',
			dataType: 'json'
		})
			.done(function(response){
				$.each(response, function(i, noticia){
					$("#notasPeriodisticas").append(noticia.nombre);
				});
			});
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
	}
	
});