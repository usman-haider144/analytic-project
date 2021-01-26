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

<!-- Tabs -->
<div class="container">
              <div class="row mt-5">
                <div class="col-xs-12 ">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">About</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                      Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                    </div>
                  </div>
                
                </div>
              </div>
        </div>
      </div>
</div>
<?php get_footer(); ?>
