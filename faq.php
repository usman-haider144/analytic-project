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
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php the_field('first_images'); ?>" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>
            <?php the_field('images_text_'); ?>
          </h5>
          <p>
            <?php the_field('images_peragraph'); ?>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php the_field('second-images'); ?>" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>
            <?php the_field('images_text_'); ?>
          </h5>
          <p>
            <?php the_field('images_peragraph'); ?>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php the_field('images_third'); ?>" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>
            <?php the_field('images_text_'); ?>
          </h5>
          <p>
            <?php the_field('images_peragraph'); ?>
          </p>
        </div>
      </div>
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
'post_type' => array(
'project'
) ,
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
