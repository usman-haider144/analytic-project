<?php get_header(); ?>
<?php 
//Template Name: Contect us
// Template Post Type: page
?>
<!-- 
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> -->
<div class="container-fluid px-2 px-md-4 py-5 mx-auto contact">
  <div class="card card0 border-0">
    <div class="row d-flex">
      <div class="col-lg-5">
        <div class="card1 pb-5">
          <div class="row px-3">
            <h5 class="logo">
              <u>izylearning
              </u>
            </h5>
          </div>
          <div class="row px-3 justify-content-center mt-4 mb-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">

                <?php 

$args = array(
'post_type' =>   'testimonial',
'orderby' => 'date',
'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
while ($the_query->have_posts() ) : $the_query->the_post();



        // print_r($term_obj_list);
      
?>
                <li data-target="#carouselExampleIndicators" data-slide-to="0" id=""  style="background:url( <?php the_post_thumbnail_url('medium-large'); ?>); background-size: cover !important;">
                </li>
<?php
                endwhile;
wp_reset_postdata();
endif;
?>
              </ol>
              <div class="carousel-inner">
                <?php 

$args = array(
'post_type' =>   'testimonial',
'orderby' => 'date',
'posts_per_page' => -1
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
while ($the_query->have_posts() ) : $the_query->the_post();


   $c++;

        $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
        $url = $thumb['0'];
        $class = ($c == 1) ? 'active' : '';


      
?>

                <div class="carousel-item <?php echo $class; ?> card border-0 card-0">
                  <div class="text-center"> 
                    <img src="<?php the_post_thumbnail_url('medium-large'); ?>" class="img-fluid profile-pic"> 
                  </div>
                  <h6 class="font-weight-bold mt-5"> 
                    <?php echo get_the_title(); ?>
                  </h6> 
                  <small class="mb-2">
                    
<?php 

$term_list = get_the_terms($post->ID, 'testimonial-tags');
$types ='';
foreach($term_list as $term_single) {
     $types .= ucfirst($term_single->slug).', ';
}
$typesz = rtrim($types, ', ');
echo $typesz;
     ?>
                      
                  </small>
                  <hr width="50%">
                  <p class="content mt-2 mb-0">
                    <?php echo get_the_content(); ?>
                  </p>
                </div>
                <?php
endwhile;
wp_reset_postdata();
endif;
?>
              
              </div>
            </div>
          </div>
          <div class="row px-3 text-center justify-content-center mb-0 social"> 
            <span class="fab fa-facebook-square mx-2">
            </span> 
            <span class="fab fa-twitter mx-2">
            </span>
            <span class="fab fa-instagram mx-2">
            </span> 
            <span class="fab fa-youtube-play mx-2">
            </span>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card2 card border-0 px-4 px-sm-5 py-5"> 
          <small class="text-right mb-3">
            <a href="">
              <u>I already have an account
              </u>
            </a>
          </small>
          <h3 class="mb-1">Sign up to izylearning
          </h3>
          <p class="mb-4 text-sm">Create our account and start learning with thousands of courses
          </p>
          <div class="row mt-3">
            <div class="col-md-6"> 
              <label class="mb-0">
                <h6 class="mb-0 text-sm">Full Name
                </h6>
              </label> 
              <input type="text" name="fname" placeholder="John Doe"> 
            </div>
            <div class="col-md-6"> 
              <label class="mb-0">
                <h6 class="mb-0 text-sm">Username
                </h6>
              </label> 
              <input type="text" name="uname" placeholder="johndoe123"> 
            </div>
          </div>
          <div class="row px-3"> 
            <label class="mb-0">
              <h6 class="mb-0 text-sm">Email Address
              </h6>
            </label> 
            <input type="text" name="email" placeholder="john.doe@email.com"> 
          </div>
          <div class="row px-3"> 
            <label class="mb-0">
              <h6 class="mb-0 text-sm">Password
              </h6>
            </label> 
            <input type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"> 
          </div>
          <div class="row px-3 mb-3"> 
            <small class="text-muted">By signing up, you agree our 
              <a href="" class="text-primary">Terms of services
              </a> and 
              <a href="" class="text-primary">Privacy Policy
              </a>
            </small> 
          </div>
          <div class="row mb-4">
            <div class="col-md-6"> 
              <button class="btn btn-blue text-center mb-1 py-2">Create Account
              </button> 
            </div>
          </div>
          <div class="row px-3 mb-4">
            <div class="line">
            </div> 
            <small class="text-muted or text-center">OR
            </small>
            <div class="line">
            </div>
          </div>
          <div class="row text-center">
            <div class="col-sm-6">
              <p class="social-connect">
                <span class="fab fa-facebook-square">
                </span>
                <small class="pl-3 pr-1">Sign up with facebook
                </small>
              </p>
            </div>
            <div class="col-sm-6">
              <p class="social-connect">
                <span class="fab fa-google-plus">
                </span>
                <small class="pl-3 pr-1">Sign up with google+
                </small>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
