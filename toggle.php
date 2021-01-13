<?php get_header();

//Template Name: Toggle



?>
<div class="container mt-5">
            <?php ah_breadcrumb(); ?>
            <span class="bread"><h1>Toggle</h1></span>
            
            <div class="row">
                <div class="col-md-8 bg-bord">
                    <div class="row">
                <?php 
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        // 'post_type' =>   array('service', ''),
                        'orderby' => 'date',
                        'posts_per_page' => 2,
                        'paged' => $paged
                    );
            
                    $the_query = new WP_Query( $args );

                    if ( $the_query->have_posts() ) :
                        while ($the_query->have_posts() ) : $the_query->the_post();
                        ?>
                            <div class="col-md-6 col-sm-12 bg-post">
                                <div class="blog-post">
                                    <img src="<?php the_post_thumbnail_url('medium-large'); ?>" class="polyg img-fluid" alt="Automated reports"> 
                                    <div class="pad-text">
                                        <h3><a href="<?php the_permalink(); ?> "> <?php echo get_the_title() ; ?></a> </h3>
                                        <p><?php the_excerpt(); ?></p>
                                        <p class="byline">
                                          Author :
                                          <a href="<?php echo get_author_posts_url( $post->post_author ); ?>"><?php the_author(); ?></a> |
                                          Categories : <?php the_category( ',' ); ?>
                                        </p>
                                     </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                        


                            <!-- pagination code -->
                            
                        <div class="pagination col-md-12">
                            <!-- <?php 
                                $big = 999999999; // need an unlikely integer
                                 
                                echo paginate_links( array(
                                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                    'format' => '?paged=%#%',
                                    'current' => max( 1, get_query_var('paged') ),
                                    'total' => $the_query->max_num_pages,
                                    'prev_text' => '«',
                                    'next_text' => ' »'
                                ) );
                            ?> -->
                        </div> 
                        <?php
                    endif;

                ?>
                            <?php
                            // global $wp_query; // you can remove this line if everything works for you
                            // don't display the button if there are not enough posts
                            if ($the_query->max_num_pages > 1) echo '<div class="misha_loadmore">More posts</div>'; // you can use <a> as well

                            ?>
            </div> 
            
            </div>
            <div class="col-md-4 mt-4 pt-2">
                    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                    
                </div>
            </div>
                    
    </div>
<div>
    
    
</div>



    <?php get_footer();?>