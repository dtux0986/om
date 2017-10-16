/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and
 * then make any necessary changes to the page using jQuery.
 */

(function ($) {

	console.log(wp);

	wp.customize('header_background_color', function(value){
		value.bind(function (newval){
			$('.site-header').css('background-color', newval);
		});
	});

})(jQuery);