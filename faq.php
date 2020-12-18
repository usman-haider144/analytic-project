<?php get_header(); ?>
<?php 
 //Template Name: faq
 // Template Post Type: page
 ?>

 	<?php 

 	 ?>
 	 
 	 	<div class="container mt-5">
 	 		<!-- Set up your HTML -->
 	 		<?php ah_breadcrumb(); ?>
 	 		<span class="bread"><h1>FAQ</h1></span>
		 	
 	 		<div class="row home-carousel">
 	 			<div class="owl-carousel">
 	 			<?php 
					$args = array(
						'post_type' => 	array('project'),
						'orderby' => 'ASC',
						'posts_per_page' => 6
					);
			
		$the_query = new WP_Query( $args );?>

		 <?php $the_query = new WP_Query( $args ); ?>
		 <?php if ($the_query->have_posts() ) { 
		 	while ($the_query->have_posts() ) {
		 		$the_query->the_post();?>
 	 			
		 		
 	 				<div class="">
	 	 				<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('medium-large'); ?>" class=" img-fluid" alt="Automated reports"> </a>	
 	 				</div>
							<?php 
								 }

									} 
									else 
									{
									}
									wp_reset_postdata();		 	
		  						?>   	
		  	</div>	
 	 		</div>
 	 		</div>
 	 	
			 		
 	</div>





  <?php get_footer(); ?>