jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

  //
	//  // Makes sure last grid item floats left
	// jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");

	// Google Analytics tracking
	// ga('send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue], [fieldsObject]);

	// newsletter signup
	jQuery('.js-newsletter-signup').on( "click", function() {
	  ga('send', 'event', 'Newsletter', 'signup');
	});

	// contact email
	jQuery('.js-contact-email').children('a').on( "click", function() {
	  ga('send', 'event', 'Contact', 'email');
	});

	// contact facebook
	jQuery('.js-contact-facebook').children('a').on( "click", function() {
	  ga('send', 'event', 'Contact', 'facebook');
	});

	// application submit
	jQuery('.js-application-submit').on( "click", function() {
	  ga('send', 'event', 'Application', 'submit');
	});

});
