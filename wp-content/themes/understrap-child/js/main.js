jQuery(document).ready(function($) {
	$('.our-services-single .cta-button').on('click', function() {
		event.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 1000);
	});
});