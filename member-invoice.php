
<?php get_header(); ?>
<?php 
 //Template Name: Membership invoice
 // Template Post Type: page
 ?>
 
 <div class="container mt-5">
 	 	 	<?php ah_breadcrumb(); ?>
 	 <span class="bread"><h1>Membership Invoice</h1></span>
 	<?php  echo do_shortcode("[pmpro_invoice]"); ?>
 </div>
 

  <?php get_footer(); ?>