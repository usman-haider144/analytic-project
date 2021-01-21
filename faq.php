<?php get_header(); ?>
<?php
//Template Name: faq
// Template Post Type: page
?>
<div class="">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
      </li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1">
      </li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2">
      </li>
    </ol>
    <div class="carousel-inner">
         
      <?php
      $args = array(
      'post_type' => array('slider'),
      'orderby' => 'ASC',
      'posts_per_page' => 6
      );
      $the_query = new WP_Query($args); 
       $the_query = new WP_Query($args); 
       if ($the_query->have_posts()):
      while ($the_query->have_posts()):
      $the_query->the_post(); 

    $c++;

        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
        $url = $thumb['0'];

        $class = ($c == 1) ? 'active' : '';
      ?>


     <div class="carousel-item backgroundImage <?php echo $class; ?>" style="background-image: linear-gradient(0deg, rgba(7, 7, 7, 0.3), rgba(155, 155, 150, 0.3)),url(<?php echo get_the_post_thumbnail_url(); ?>);height: 70vh;">
        <!-- <img class="d-block w-100"  src="<?php the_post_thumbnail(); ?>" > -->
        <div class="carousel-caption d-none d-md-block widthtext">
            <h1><?php the_title(); ?></h1>
            <p><?php the_excerpt(); ?></p>
        </div>
       </div>    
         <?php
endwhile;
wp_reset_postdata();
endif;

?>    
   
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true">
      </span>
      <span class="sr-only">Previous
      </span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true">
      </span>
      <span class="sr-only">Next
      </span>
    </a>
  </div>
</div>
<div class="container mt-5">
  <!-- Set up your HTML -->
  <?php ah_breadcrumb(); ?>
  <span class="bread">
    <h1>FAQ
    </h1>
  </span>
  <div class="row home-carousel">
    <div class="owl-carousel">
      <?php
$args = array(
'post_type' => array('project'),
'orderby' => 'ASC',
'posts_per_page' => 6
);
$the_query = new WP_Query($args); ?>
      <?php $the_query = new WP_Query($args); ?>
      <?php if ($the_query->have_posts())
{
while ($the_query->have_posts())
{
$the_query->the_post(); ?>
      <div class="">
        <a href="<?php the_permalink(); ?>">
          <img src="<?php the_post_thumbnail_url('medium-large'); ?>" class=" img-fluid" alt="Automated reports"> 
        </a>  
      </div>
      <?php
}
wp_reset_postdata();
}
else
{
}
?>    
    </div>  
  </div>
  <div class="accordianmain">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <?php the_field('faq_heading'); ?>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>
              <?php the_field('faq_text'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <?php the_field('faq_heading'); ?>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>
              <?php the_field('faq_text'); ?>
            </p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <?php the_field('faq_heading'); ?>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <p>
              <?php the_field('faq_text'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
