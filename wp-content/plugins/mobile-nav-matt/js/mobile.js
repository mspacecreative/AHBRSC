// MOBILE NAVIGATION
$('.mobile-nav li.menu-item-has-children').prepend('<span class="sub-toggle"><i class="fa fa-angle-down"></i></span>');
$('span.sub-toggle').click(function (){
  $(this).siblings(".sub-menu").slideToggle();
});
$('span.sub-toggle').click(function (){
$(this).children().toggleClass('fa-angle-down fa-angle-up');
});

// HAMBURGER ICON ANIMATION
$('.hamburger').click(function() {
	$('.hamburger, body').toggleClass('is-active');
});

$('.body-overlay').click(function() {
	$('.hamburger, body').toggleClass('is-active');
});

// CLOSE PANEL UPON LINK CLICK
$('.mobile-nav li > a').click(function() {
	$('.hamburger, body').toggleClass('is-active');
});

//$('.hamburger').css('top', $('#mobile-buttons').outerHeight() + 10);

// HAMBURGER VERTICAL ALIGN
function hamburgerIcon() {
	$('.hamburger').css('height', $('#logo-container').height());
}

$(document).ready(function () {
	hamburgerIcon();
});

$(window).resize(function () {
	hamburgerIcon();
});