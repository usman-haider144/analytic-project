<?php get_header();?>
 
<div class="container mt-5 archive-page">
	<?php ah_breadcrumb(); ?>
	<h1>Archive</h1>
	<div class="row">
		<div class="col-md-8 col-sm-12 bg-bord">	
			<?php 
				
				if ( have_posts() ) :
				?>
			    <h2><?php
					if ( is_category() ) {
						echo 'Category Archive';
					}
					?></h2>

					<?php 
					
 	 				$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
					$args = array(
						// 'post_type' => 	array('service', ''),
						'orderby' => 'date',
						'posts_per_page' => 3,
						// 'paged' => $paged,
						'page' => $paged,
						
					);
					$the_query = new WP_Query( $args );
					?>

				<?php
				while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			 
			        <article class="post">
			        	<div class="arc-main">
			        		<div class="arc-img">
			        			<?php the_post_thumbnail('small-size'); ?>
			        		</div>
			        	<div class="arc-text">
			            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
			            <p class="post-meta"><?php the_time( 'F jS, Y' ); ?> | <a
			                        href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
			                | <?php
							$categories = get_the_category();
							$comma      = ', ';
							$output     = '';
							
							if ( $categories ) {
								foreach ( $categories as $category ) {
									$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
								}
								echo trim( $output, $comma );
							} ?>
			            </p>
			            <?php the_excerpt(); ?>
						<!-- <?php the_content('Read on...') ?> -->
						</div>
						</div>
			        </article>
				
				<?php endwhile;
				wp_reset_postdata();
				?>

						 <div class="pagination col-md-12">
						    <?php 
								$big = 999999999; // need an unlikely integer
								 
								echo paginate_links( array(
								    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								    'format' => '?paged=%#%',
								    'current' => max( 1, get_query_var('page') ),
								    'total' => $the_query->max_num_pages,
								    'prev_text' => '«',
								    'next_text' => ' »'
								) );
						    ?>
						</div> 

<!-- new file -->
				<?php
			 
			else :
				echo '<p>There are no posts!</p>';
			 
			endif;  ?>
		</div>
				<div class="col-md-4 col-sm-12 mt-4 pt-1">
		  			<?php dynamic_sidebar( 'sidebar-blog' ); ?>
		  			
		  		</div>
	</div>
</div>


 
<?php get_footer();?>




