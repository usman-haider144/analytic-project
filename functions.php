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
   add_image_size( 'small-size', 360, 360, true);
   add_theme_support( 'comment' );
   
   function theme_setup() {
       // Hard crop: The image will be exactly the specified size
       add_image_size('Blog Thumbnail 1', 300, 200, true);
   
       // Soft crop: Preserves the aspect ratio, the image may end up taller than 200px
       add_image_size('Blog Thumbnail 2', 300, 200);
   }
   
   add_action('after_setup_theme', 'theme_setup');;
   
   
   
   
   
   function analytic_custom_styles()
   {
   	wp_enqueue_style( 'parent_style', get_template_directory_uri() . '/style.css' );
   	wp_enqueue_style('style.css', get_template_directory_uri(). '/css/style.css');
   	wp_enqueue_style('preset3',get_template_directory_uri(). '/css/bootstrap.min.css');
   	wp_enqueue_style('gfont','https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');
   	wp_enqueue_style('font','https://use.fontawesome.com/releases/v5.7.1/css/all.css');
   	wp_enqueue_style('carousel', get_template_directory_uri(). '/owl-carousel/assets/owl.carousel.min.css');
   
   
   		wp_enqueue_script('jquerymain', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
   		wp_enqueue_script('carousel', get_template_directory_uri(). '/owl-carousel/owl.carousel.min.js', array(), null, true);
   		wp_enqueue_script('crousel', get_template_directory_uri(). '/js/crousel.js', array(), null, true);
   		wp_enqueue_script('isotop', get_template_directory_uri(). '/js/isotope.js', array(), null, true);
   		wp_enqueue_script('isotopdoc', get_template_directory_uri(). '/js/isotope-docs.min.js', array(), null, true);
   
   
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
   
   	register_sidebar([
   	'name' =>esc_html__( 'Sidebar Blog', 'basic theme' ),
   	'id'   =>'sidebar-blog',
   	'description' => esc_html__( 'Add Widget for footer Icon here', 'analytic theme' ),
   	'before_widget' => '<section class="widget">',
   	'after_weidget' => '</section>',
   	'before_title' => '<h2 class="widget-title">',
   	'after_title' => '</h2>'
   
   ]);
   }
   add_action( 'widgets_init', 'basic_widget_init' );
   
   //Read More Button
   function new_excerpt_more($more) {
      global $post;
      return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
      }
      add_filter('excerpt_more', 'new_excerpt_more');
   
      //Shorth Length
   
      function my_excerpt_length($length)
      {
   		return 30;
   	}
   	add_filter('excerpt_length', 'my_excerpt_length');
   
   // include file separately
   //include costume
   
   require get_template_directory().'/inc/custom-post.php';
   
   // include carousel
   require get_template_directory().'/inc/project.php';
   
   // include metabox
   require get_template_directory().'/inc/metabox.php';
   
   //include breadcrumb 
   
   require get_template_directory().'/inc/breadcrumb.php';
   
   //include Comments 
   
   // require get_template_directory().'/inc/comments.php';
   
   
    ?>