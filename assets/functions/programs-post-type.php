<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function programs() { 
	// creating (registering) the custom type 
	register_post_type( 'programs', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Programs', 'reneewp'), /* This is the Title of the Group */
			'singular_name' => __('Program', 'reneewp'), /* This is the individual type */
			'all_items' => __('All Programs', 'reneewp'), /* the all items menu item */
			'add_new' => __('Add New', 'reneewp'), /* The add new menu item */
			'add_new_item' => __('Add New Program', 'reneewp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'reneewp' ), /* Edit Dialog */
			'edit_item' => __('Edit Programs', 'reneewp'), /* Edit Display Title */
			'new_item' => __('New Program', 'reneewp'), /* New Display Title */
			'view_item' => __('View Program', 'reneewp'), /* View Display Title */
			'search_items' => __('Search Programs', 'reneewp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'reneewp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'reneewp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the programs directory', 'reneewp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'programs', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'programs', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'programs');
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */