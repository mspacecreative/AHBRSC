$(function () {

	function viewportHeight() {
		$(".owl-carousel .hero-bg").height($(window).height());
	}

	$(document).ready(function(){
	  $(".owl-carousel").owlCarousel({
	  items:1,
	  loop:true,
	  nav:true,
	  autoplay: true,
	  smartSpeed: 750,
	  });
	  
	  viewportHeight();
	});
	
	$(window).resize(function () {
		viewportHeight();
	});
});