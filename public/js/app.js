$(document).ready(function(){

	// Menu
	$("#menu").on("click", "a", null, function () {
		if($("#menu").hasClass("in")){
	    	$("#menu").collapse('hide');
	    }
	});	
	
	// Enlaces
	$("#go_to_how").click(function(){
		$.scrollTo($("#como"), 800, {offset:{top:-51}});
	});
	$("#go_to_people").click(function(){
		$.scrollTo($("#gente"), 800, {offset:{top:-51}});
	});
	$("#go_to_buy").click(function(){
		$.scrollTo($("#donde_comprar"), 800, {offset:{top:-51}});
	});
	$("#go_to_contact").click(function(){
		$.scrollTo($("#contacto"), 800, {offset:{top:-51}})
	});
	$("#btn-contacto").click(function(){
		$.scrollTo($("#contacto"), 800, {offset:{top:-51}})
	});
	// Cursor
	$(".navbar-right")
		.mouseenter(function(){
            $("body").css({"cursor":"pointer"});
        })
        .mouseleave(function(){
            $("body").css({"cursor":"default"});
        });

    // Botones del splash
    $("#splash_go_to_buy").click(function(){
    	$.scrollTo($("#donde_comprar"), 800, {offset:{top:-51}});
    });

    $("#splash_go_to_how").click(function(){
    	$.scrollTo($("#como"), 800, {offset:{top:-51}});
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
			apellido = $("#contactoApellido").val(),
			email = $("#contactoEmail").val(),
			telefono = $("#contactoTelefono").val(),
			asunto = $("#contactoAsunto").val(),
			mensaje = $("#contactoMensaje").val(),
			error = false;

		// Validaciones
		if(!nombre){$("#contactoNombreError").css('display', 'block');error=true;}else{$("#contactoNombreError").css('display', 'none');}
		if(!apellido){$("#contactoApellidoError").css('display', 'block');error=true;}else{$("#contactoApellidoError").css('display', 'none');}
		if(!email){$("#contactoEmailError").css('display', 'block');error=true;}else{$("#contactoEmailError").css('display', 'none');}
		if(asunto == '0'){$("#contactoAsuntoError").css('display', 'block');error=true;}else{$("#contactoAsuntoError").css('display', 'none');}
		if(!mensaje){$("#contactoMensajeError").css('display', 'block');error=true;}else{$("#contactoMensajeError").css('display', 'none');}

		var data = {
			firstname: nombre,
			lastname: apellido,
			email: email,
			telephone: telefono,
			subject: asunto,
			message: mensaje
		};

		// Enviamos la forma
		if(!error){
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
						$("#contactoApellido").val("");
						$("#contactoEmail").val("");
						$("#contactoTelefono").val("");
						$("#contactoAsunto").val("0");
						$("#contactoMensaje").val("");
						$("#contactoNombreError").css('display', 'none');
						$("#contactoApellidoError").css('display', 'none');
						$("#contactoEmailError").css('display', 'none');
						$("#contactoAsuntoError").css('display', 'none');
						$("#contactoMensajeError").css('display', 'none');
						error=false;
					}
				});
		}
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
		var map = L.map('mapa',{
			scrollWheelZoom: false
		});

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
					marker.bindPopup(mensaje);
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