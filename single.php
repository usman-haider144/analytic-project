<?php get_header(); ?>

<section class="backcolor">
<div class="container mt-5">
	<div class="row pt-5">

		<div class="col-md-12 col-sm-12 d-flex justify-content-center">
			<img src="<?php the_post_thumbnail_url(); ?>" class="polyg img-fluid" alt="Automated reports"> 
		</div>


		<div class="col-md-12 col-sm-12">
			<div class="singlepge">
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				<p class="byline">
	              Author:
	              <a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php the_author(); ?></a> |
	              Date: <?php the_time( 'M. j, Y' ); ?> |
	              Categories: <?php the_category( ',' ); ?> |
	              Tags: <?php the_tags( '', ',', '' ); ?>
            	</p>
			</div>
		</div>
		

	</div>
</div>
</section>

<?php get_footer(); ?>