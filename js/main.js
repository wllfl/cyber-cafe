
$(document).ready(function() {

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

    var lat = '-23.549029'; //Set your latitude.
    var lon = '-47.181198'; //Set your longitude.

    var centerLon = lon - 0.0105;

    var myOptions = {
        scrollwheel: false,
        draggable: false,
        disableDefaultUI: true,
        center: new google.maps.LatLng(lat, centerLon),
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    //Bind map to elemet with id map-canvas
    var map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
    var marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat, lon),
    });

    var infowindow = new google.maps.InfoWindow();

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

    infowindow.open(map, marker);
}