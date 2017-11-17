// CONTACT MAP

var PageContact = function() {

	var _init = function() {

		var mapbg = new GMaps({
			div: '#gmapbg',
			lat: -12.113555,
			lng: -77.012000,
                        zoom: 16,
			scrollwheel: false,
		});


		mapbg.addMarker({
			lat: -12.113555,
			lng: -77.012000,
			title: 'Oficina Central',
			infoWindow: {
				content: '<h3>CamiflexKids.</h3><p>Surquillo, Lima - Peru</p>'
			}
		});
	}

    return {
        //main function to initiate the module
        init: function() {

            _init();

        }

    };
}();

$(document).ready(function() {
    PageContact.init();
    $( window ).resize(function() {
		PageContact.init();
	});
});