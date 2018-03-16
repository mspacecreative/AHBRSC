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
	
	function menuHeight() {
		$("#et-top-navigation").height($('#logo').height());
	}
	
	$('.hero-next img').css('bottom', $('.tagline').outerHeight() + 25);
	
	$('#cover').fadeOut(1250);
	
	// DOCUMENT READY
	$(function () {
		viewportHeight();
		menuHeight();
		footerHeight();
		
		// OWL CAROUSEL
		$(".owl-carousel").owlCarousel({
		items:1,
		loop:true,
		nav:true,
		autoplay: true,
		smartSpeed: 750,
		});
	});
	
	// WINDOW RESIZING
	$(window).resize(function () {
		
		viewportHeight();
		menuHeight();
		footerHeight();
		
	});
	
});