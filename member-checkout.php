<?php get_header(); ?>
<?php 
 //Template Name: Membership Checkout
 // Template Post Type: page
 ?>

 <div class="container">
 	<?php ah_breadcrumb(); ?>
 	 <span class="bread"><h1>Membership Checkout</h1></span>
 	 
 	<?php  echo do_shortcode("[pmpro_checkout]"); ?>
 </div>

  <?php get_footer(); ?>