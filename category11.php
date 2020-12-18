<?php get_header(); ?>


<div class="container mt-5">
	<div class="row pt-4">

		<div class="col-md-12">
			
			<h1> Categories : <?php wp_title( '' ); ?></h1>
    <p><?php echo category_description(); ?></p>

    <hr class="hr-border">
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <?php the_title(); ?>

      <?php endwhile; else : ?>

      <?php endif; ?>

      <?php echo paginate_links(); ?>

		</div>

	</div>
</div>


       
    



<?php get_footer(); ?>