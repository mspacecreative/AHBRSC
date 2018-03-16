$(function () {
	
	if ($('p').children('img.alignleft')) {
		$('img.alignleft').parent().next().css('clear', 'both');
	}
	
	// GENERAL FUNCTIONS
	function footerHeight() {
		if($(window).height() > $("#page-container").height()){
		   $('#main-footer').height($(window).height() - $('#page-container').height());
		}
	}
	
	function viewportHeight() {
		$(".hero-bg").height($(window).height()-($('.tagline').outerHeight()));
	}
	
	$('.hero-next img').css('bottom', $('.tagline').outerHeight() + 25);
	
	// FADING CONTENT ON PAGE TURN
	$('a[href*="#0"]').click(function () {
		$('#wrapper').fadeOut(1000);
	});
	
	$('#cover').fadeOut(1250);
	
	// DOCUMENT READY
	$(function () {
		viewportHeight();
		footerHeight();
		
		// OWL CAROUSEL
		$(".owl-carousel").owlCarousel({
		items:1,
		loop:true,
		nav:true,
		autoplay: true,
		smartSpeed: 750,
		dots: true,
		});
	});
	
	// WINDOW RESIZING
	$(window).resize(function () {
		
		viewportHeight();
		footerHeight();
		
	});
	
});