<?php 

// Register Custom Post Type Service
function create_service_cpt() {

	
	$args = array(
		'label' => __( 'Service', 'basic' ),
		'description' => __( 'Custom post type ', 'basic' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-topics',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'comments', 'post-formats'),
		// 'taxonomies' => array('category', 'post_tag'),
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