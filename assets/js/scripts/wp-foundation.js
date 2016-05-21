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

});
