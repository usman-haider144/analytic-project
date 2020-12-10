<?php 


add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails');
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );




function analytic_custom_styles()
{
	
	wp_enqueue_style('style.css', get_template_directory_uri(). '/css/style.css');
	wp_enqueue_style('preset3',get_template_directory_uri(). '/css/bootstrap.min.css');
	// wp_enqueue_style('bootstrap.min',get_template_directory_uri(). '/css/all.min.css');


}


add_action('wp_enqueue_scripts', 'analytic_custom_styles');

// register nav

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'footer Menu' ),
      'login-menu' => __( 'Login' ),
      'login-mobile' => __( 'Mobile Login' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

function basic_widget_init(){
	register_sidebar([
	'name' =>esc_html__( 'footer logo', 'basic theme' ),
	'id'   =>'logo-footer',
	'description' => esc_html__( 'Add Widget for logo footer here', 'analytic theme' ),
	'before_widget' => '<section class="navbar-brand">',
	'after_weidget' => '</section>',
	

]);
	
	register_sidebar([
	'name' =>esc_html__( 'Footer Icon', 'basic theme' ),
	'id'   =>'footer-icon',
	'description' => esc_html__( 'Add Widget for footer Icon here', 'analytic theme' ),
	'before_widget' => '<section class="widget">',
	'after_weidget' => '</section>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>'

]);
}
add_action( 'widgets_init', 'basic_widget_init' );

 ?>