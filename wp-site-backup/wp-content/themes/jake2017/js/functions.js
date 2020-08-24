$(document).ready(function() {
    
    $("#mobile-menu").mmenu();

	$('iframe[src*="youtube.com"]').addClass("youtube-video");
	$('iframe[src*="soundcloud.com"]').addClass("soundcloud");
	$('iframe[src*="vimeo.com"]').addClass("vimeo");

	$('p:has(iframe)').addClass('iframe-holder');

   });