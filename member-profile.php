<?php get_header(); ?>
<?php 
 //Template Name: Member Profile
 // Template Post Type: page

 ?>
 <div class="container mt-5">
 		 	 	<?php ah_breadcrumb(); ?>
 	 <span class="bread"><h1>Membership Profile</h1></span>
 	<?php  echo do_shortcode("[pmpro_member_profile_edit]");  ?>
 </div>
  <?php get_footer(); ?>