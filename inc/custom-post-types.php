<?php
/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Sermons', 'Post Type General Name', 'eg-kerk' ),
		'singular_name'       => _x( 'Sermon', 'Post Type Singular Name', 'eg-kerk' ),
		'menu_name'           => __( 'Sermons', 'eg-kerk' ),
		'parent_item_colon'   => __( 'Parent Sermon', 'eg-kerk' ),
		'all_items'           => __( 'All Sermons', 'eg-kerk' ),
		'view_item'           => __( 'View Sermon', 'eg-kerk' ),
		'add_new_item'        => __( 'Add New Sermon', 'eg-kerk' ),
		'add_new'             => __( 'Add New', 'eg-kerk' ),
		'edit_item'           => __( 'Edit Sermon', 'eg-kerk' ),
		'update_item'         => __( 'Update Sermon', 'eg-kerk' ),
		'search_items'        => __( 'Search Sermon', 'eg-kerk' ),
		'not_found'           => __( 'Not Found', 'eg-kerk' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'eg-kerk' ),
	);

// Set other options for Custom Post Type

	$args = array(
		'label'               => __( 'sermons', 'eg-kerk' ),
		'description'         => __( 'Sermon news and reviews', 'eg-kerk' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array( 'genres' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,

	);

	// Registering your Custom Post Type
	register_post_type( 'sermons', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );