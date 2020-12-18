<?php 

// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'Services', 'Post Type General Name', 'basic' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'basic' ),
		'menu_name' => _x( 'Services', 'Admin Menu text', 'basic' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'basic' ),
		'archives' => __( 'Service Archives', 'basic' ),
		'attributes' => __( 'Service Attributes', 'basic' ),
		'parent_item_colon' => __( 'Parent Service:', 'basic' ),
		'all_items' => __( 'All Services', 'basic' ),
		'add_new_item' => __( 'Add New Service', 'basic' ),
		'add_new' => __( 'Add New', 'basic' ),
		'new_item' => __( 'New Service', 'basic' ),
		'edit_item' => __( 'Edit Service', 'basic' ),
		'update_item' => __( 'Update Service', 'basic' ),
		'view_item' => __( 'View Service', 'basic' ),
		'view_items' => __( 'View Services', 'basic' ),
		'search_items' => __( 'Search Service', 'basic' ),
		'not_found' => __( 'Not found', 'basic' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'basic' ),
		'featured_image' => __( 'Featured Image', 'basic' ),
		'set_featured_image' => __( 'Set featured image', 'basic' ),
		'remove_featured_image' => __( 'Remove featured image', 'basic' ),
		'use_featured_image' => __( 'Use as featured image', 'basic' ),
		'insert_into_item' => __( 'Insert into Service', 'basic' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'basic' ),
		'items_list' => __( 'Services list', 'basic' ),
		'items_list_navigation' => __( 'Services list navigation', 'basic' ),
		'filter_items_list' => __( 'Filter Services list', 'basic' ),
	);
	$args = array(
		'label' => __( 'Service', 'basic' ),
		'description' => __( 'Custom post type ', 'basic' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-topics',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'comments', 'post-formats'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );



 ?>