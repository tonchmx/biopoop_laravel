$(document).ready(function(){


	$('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
	    $('html,body').animate({
	      scrollTop: target.offset().top
	    }, 1000);
	    return false;
	  }
	}
	});

	// Galeria
	$(".fancybox").fancybox({
		helpers : {
			title : {
				type: 'inside'
			},
			overlay : {
				locked: false
			}
		}
	});

	// Contacto
	$("#contactar").on("click", function(){
		var nombre = $("#contactoNombre").val(),
			email = $("#contactoEmail").val(),
			asunto = $("#contactoAsunto").val(),
			mensaje = $("#contactoMensaje").val();
		var data = {
			name: nombre,
			email: email,
			subject: asunto,
			message: mensaje
		};
		// Enviamos la forma
		$.ajax({
			"url": "/contact",
			"type": "POST",
			"data": data,
			"dataType": "json"
		})
			.done(function(response){
				if(response.success){
					$("#exito").fadeIn("slow");
					$("#contactoNombre").val("");
					$("#contactoEmail").val("");
					$("#contactoAsunto").val("");
					$("#contactoMensaje").val("");
				}
			});
	});

	/* fix vertical when not overflow
	call fullscreenFix() if .fullscreen content changes */
	function fullscreenFix(){
	    var h = $('body').height();
	    // set .fullscreen height
	    $(".content-b").each(function(i){
	        if($(this).innerHeight() <= h){
	            $(this).closest(".fullscreen").addClass("not-overflow");
	        }
	    });
	}
	$(window).resize(fullscreenFix);
	fullscreenFix();

	/* resize background images */
	function backgroundResize(){
	    var windowH = $(window).height();
	    $(".background").each(function(i){
	        var path = $(this);
	        // variables
	        var contW = path.width();
	        var contH = path.height();
	        var imgW = path.attr("data-img-width");
	        var imgH = path.attr("data-img-height");
	        var ratio = imgW / imgH;
	        // overflowing difference
	        var diff = parseFloat(path.attr("data-diff"));
	        diff = diff ? diff : 0;
	        // remaining height to have fullscreen image only on parallax
	        var remainingH = 0;
	        if(path.hasClass("parallax")){
	            var maxH = contH > windowH ? contH : windowH;
	            remainingH = windowH - contH;
	        }
	        // set img values depending on cont
	        imgH = contH + remainingH + diff;
	        imgW = imgH * ratio;
	        // fix when too large
	        if(contW > imgW){
	            imgW = contW;
	            imgH = imgW / ratio;
	        }
	        //
	        path.data("resized-imgW", imgW);
	        path.data("resized-imgH", imgH);
	        path.css("background-size", imgW + "px " + imgH + "px");
	    });
	}
	$(window).resize(backgroundResize);
	$(window).focus(backgroundResize);
	backgroundResize();

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
					var hNoticia = "<span class='periodico'>";
					if(noticia.logo){
						hNoticia += "<img src='/img/noticias/" + noticia.logo + "'>";
					} else {hNoticia += noticia.nombre;}
					hNoticia += "</span>"
					$("#notasPeriodisticas").append(hNoticia);
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