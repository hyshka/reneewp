<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Programs post type
require_once(get_template_directory().'/assets/functions/programs-post-type.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

if ( ! isset( $content_width ) ) $content_width = 720;

/**
 * Disable Post Tags
 */
add_action('init', 'remove_tags');

function remove_tags(){
    register_taxonomy('post_tag', array());
}

// Thumbnail sizes
add_image_size( 'featured', 720, 350, true );

// add to media manager
add_filter( 'image_size_names_choose', 'my_custom_image_sizes' );

function my_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'featured' => __('720px by 350px'),
    ) );
}

// add data-open attribute to contact link in main menu
add_filter( 'nav_menu_link_attributes', 'my_contact_menu_atts', 10, 3 );
function my_contact_menu_atts( $atts, $item, $args )
{
  // The ID of the target menu item
  $menu_target = 29;

  // inspect $item
  if ($item->ID == $menu_target) {
    $atts['data-open'] = 'contactModal';
  }
  return $atts;
}

// Add Shortcode
function do_breakthrough_cta() {

  $coaching_page = the_post();

  $hero_title = get_field('hero_title', $coaching_page );
  $hero_subtitle = get_field('hero_subtitle', $coaching_page);
  $hero_paragraph_text = get_field('hero_paragraph_text', $coaching_page);
  $hero_button_link = get_field('hero_button_link', $coaching_page);
  $hero_button_text = get_field('hero_button_text', $coaching_page);

  if ($hero_title) {
    return '<div class="row expanded callout hero"><div class="column"><h1>'.$hero_title.'<br><span>'.$hero_subtitle.'</span></h1>'.$hero_paragraph_text.'<a href="'.$hero_button_link.'" class="button">'.$hero_button_text.'</a></div></div>';
  }
  return false;
}
add_shortcode( 'breakthrough_cta', 'do_breakthrough_cta' );

// dont wrap img tags with p tags
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


// override default options framework location
add_filter('options_framework_location','options_framework_location_override');

function options_framework_location_override() {
	return array('/assets/functions/options.php');
}

/*
 * Helper function to return the theme option value. If no value has been saved, it returns $default.
 * Needed because options are saved as serialized strings.
 *
 * This code allows the theme to work without errors if the Options Framework plugin has been disabled.
 */

if ( !function_exists( 'of_get_option' ) ) {
  function of_get_option($name, $default = false) {

  	$optionsframework_settings = get_option('optionsframework');

  	// Gets the unique option id
  	$option_name = $optionsframework_settings['id'];

  	if ( get_option($option_name) ) {
  		$options = get_option($option_name);
  	}

  	if ( isset($options[$name]) ) {
  		return $options[$name];
  	} else {
  		return $default;
  	}
  }
}


?>
