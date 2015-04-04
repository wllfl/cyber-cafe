
$(document).ready(function() {

    /* Validação envio de email */
    $('#submit').click(function(event) {
        var dados = $('#form-contato').serialize();

        $.ajax({
            url: 'envia_email.php',
            type: 'POST',
            data: dados,
            dataType: "json",
            success: function(data) {
                if(data.erro == "0"){
                    $('.msg').html(data.mensagem).removeClass('erro').removeClass('alerta').addClass('sucesso');
                    $('#form-contato').each (function(){
                      this.reset();
                    });
                }else{
                    if(data.erro == "1"){
                        $('.msg').html(data.mensagem).removeClass('sucesso').removeClass('alerta').addClass('erro');
                    }else{
                        $('.msg').html(data.mensagem).removeClass('sucesso').removeClass('erro').addClass('alerta');
                    }
                }
            }
        });
    }); 

	// Slider Height
    var slideHeight = $(window).height();
    $('.item, .slide-caption').css('height',slideHeight);
    $(window).resize(function(){'use strict',
        $('.item, .slide-caption').css('height',slideHeight);
    });
    

	/* Carrossel da Home*/
	$("#slider").owlCarousel({
	    slideSpeed : 500,
	    paginationSpeed : 500,
	    pagination : true,
	    singleItem : true,
	    navigation : true,
	    itemsDesktop : [1199,1],
		itemsDesktopSmall : [980,1],
		navigationText: [
			"<i class='fa fa-angle-left'></i>",
			"<i class='fa fa-angle-right'></i>"
			],
	    autoPlay: true,
	    responsive: true
    });

});

function initializeMap() {

    var lat = '-23.547750'; //Set your latitude.
    var lon = '-47.184600'; //Set your longitude.

    var myOptions = {
        disableDefaultUI: true,
        center: new google.maps.LatLng(lat, lon),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true
    };

    //Bind map to elemet with id map-canvas
    var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
    var marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat, lon),
        animation: google.maps.Animation.DROP
    });

    var infowindow = new google.maps.InfoWindow();
    infowindow.setContent('<b>CyberCafe24H - INTERNET</b>');

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

    infowindow.open(map, marker);
}