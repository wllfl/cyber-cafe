
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
	    autoPlay: false,
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
    infowindow.setContent('Cyber Café 24H');

    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });

    infowindow.open(map, marker);
}