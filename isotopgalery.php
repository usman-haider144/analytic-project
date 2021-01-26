<?php get_header(); ?>
<?php 
//Template Name: IsotopGalery
// Template Post Type: page
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center my-2">
      <h4>Isotope filter magical layouts with Bootstrap 4
      </h4>
    </div>
  </div>
  <div class="portfolio-menu mt-2 mb-4">
    <ul id="filters" >
      <li>
        <a href="#" data-filter="*" class="selected btn btn-outline-dark">All Posts
        </a>
      </li>
      <?php 
$terms = get_terms("category"); 
$count = count($terms); 
if ( $count > 0 ){  
foreach ( $terms as $term ) { 
echo "<li data-filter='.".$term->slug."'><a href='#'  class='btn btn-outline-dark'>" . $term->name . "</a></li>\n";

}
} 
?>
    </ul>
  </div>
  <div class="portfolio-item row">
    <?php $the_query = new WP_Query( 'posts_per_page=50' ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
    <!-- <div id="isotope-list"> -->

      
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
$termsArray = get_the_terms( $post->ID, "category" );  
$termsString = ""; 
foreach ( $termsArray as $term )
{ 
$termsString .= $term->slug.' '; 
}


?> 
     <div class="item col-lg-4 col-md-4 col-6 col-sm <?php echo $termsString; ?>" id="isotope-list">
        <a href="<?php the_permalink(); ?>" class="fancylight popup-btn" data-fancybox-group="light"> 
          <img class="img-fluid" src="<?php if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail_url();
                                      } ?>" >

        </a>
        <h4>
          <?php the_title(); ?>
        </h4>
        <a href=""><h6><?php echo $term->name; ?></h6></a>
      </div>
      <?php
endwhile;
wp_reset_postdata();
endif;
?>
     
    </div>
  </div>
</div>
<?php get_footer(); ?>
