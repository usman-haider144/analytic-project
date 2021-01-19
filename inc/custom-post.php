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

//Project cpt

function create_project_cpt() {

	$args = array(
		'label' => __( 'project', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-rest-api',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
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
	register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );


function create_slider_cpt() {
	$labels = array(
	'all_items'           => __( 'All Slider'),
);

	
	$args = array(
		'label' => __( 'Slider', 'basic' ),
		'description' => __( 'Custom post type ', 'basic' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-topics',
		'supports' => array( 'thumbnail'),
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
	register_post_type( 'slider', $args );

	// Now register the taxonomy
	  register_taxonomy('slider-categories',array('slider'),
	   array(
	    'hierarchical' => true,
	    'label'=> __( 'Categories', '' ),
	    'show_ui' => true,
	    'show_in_rest' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	  ));
	  register_taxonomy('slider-country',array('slider'), 
	  	array(
	    'hierarchical' => true,
	    'label'=> __( 'Tags', '' ),
	    'show_ui' => true,
	    'show_in_rest' => true,
	    'show_admin_column' => true,
	    'query_var' => true,
	  ));
	  
}
add_action( 'init', 'create_slider_cpt', 0 );
 ?>