var isMobile = navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad|android|blackberry|opera mini|iemobile|kindle|silk|mobile)/);

$(function() {

	//== add class to html based on whether device is mobile or not
	if (isMobile) {
		$('html').addClass('mobile');
	} else {
		$('html').addClass('no-mobile');
	}

	//== disable tel links on non-touch devices
	$('.no-touch a[href^="tel:"],.no-mobile a[href^="tel:"]').on('click tap', function (e) {
		e.preventDefault();
	});

});