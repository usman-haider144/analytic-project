<?php 



// function pagelink() {

// 	$prefix = '_cmb_';

// 	$cmb = new_cmb2_box( array(
// 		'id'           => $prefix . 'metabox',
// 		'title'        => __( 'page', 'page' ),
// 		'object_types' => array( 'page' ),
// 		'context'      => 'normal',
// 		'priority'     => 'low',
// 	) );

// 	$cmb->add_field( array(
// 		'name' => __( 'Meta box', 'page' ),
// 		'id' => $prefix . '1233asd',
// 		'type' => 'select_timezone',
// 		'default' => 'google.com',
// 	) );

// }

// add_action( "admin_init", "pagelink" );




add_action( "admin_init", "custom_metabox" );


function custom_metabox()
{
	add_meta_box( "custom_metabox_01", "Custom Metabox", "custom_metabox_field", "project", "normal", "low");
}
function custom_metabox_field()
{
	global $post;

	$data = get_post_custom($post->ID);
	$val = isset($data['custom_input']) ? esc_attr($data['custom_input'][0]) : 'no value';

	echo '<input type="text" name="custom_input" id="custom_input" value="'.$val.'"/>';
}


 ?>