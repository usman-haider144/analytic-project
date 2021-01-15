<!DOCTYPE html>
<html lang="en">
  <head>
    <title> 
      <?php echo get_bloginfo('name');?> | 
      <?php echo get_bloginfo( 'description' ); ?> 
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <!-- CSS only -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <?php wp_head(); ?>
  </head>
  <body 
        <?php body_class(); ?>>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bgnav static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <!-- <img src="" alt="logo"> -->
          <?php the_custom_logo(); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <!-- ml-auto -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php
$args = [
'theme_location' => 'header-menu',
'menu_class'     => 'navbar-nav',
// 'before'            => '<li class="nav-item">',
// 'after'            => '</li>',
'list_item_class'  => 'nav-item',
'link_before'       =>'<span class="nav-link">',
'link_after' => '</span>',
];
wp_nav_menu( $args );
?>
          <!-- <ul class="navbar-nav ">
<li class="nav-item">
<a class="nav-link" href="#">Products
<span class="active sr-only">(current)</span> 
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Pricing</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">FAQ</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Blog</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Blog</a>
</li>
</ul> -->
          <div class="mbshow">
            <?php
$args = [
'theme_location' => 'login-mobile',
];
wp_nav_menu( $args );
?>
            <!-- <a class="sign" href="http://localhost/analytic/login/">Sign in</a>
<a class="sinupmb" href="">Sign Up</a> -->
          </div> 
        </div>
        <span class="dsktopshow">
          <?php
$args = [
'theme_location' => 'login-menu',
// 'menu_class'     => 'mbshow',
// 'before'            => '<a class="sign">',
// 'after'            => '</a>',
//  'link_before'       =>'<a class="sign">',
// 'link_after' => '</a>',
];
wp_nav_menu( $args );
?>
          <!-- <a class="sign" href="http://localhost/analytic/login/">Sign in</a>
<button class="sinup">Sign Up</button>  -->
        </span>
      </div>
    </nav>
  </header>
