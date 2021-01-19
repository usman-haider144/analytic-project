<!--============== 2nd section start ==================== -->
<?php get_header(); ?>
<div class="bghero">	
  <section class="outer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12 imgbf">
          <div class="heading">
            <h1>
              <?php the_field('heading'); ?>
            </h1>
            <p>
              <?php the_field('subheading'); ?>
            </p>
            <div class="marpd">
              <a href="<?php the_field('link'); ?>" class="btnnn">Try for free
              </a>
            </div>
          </div>
        </div>
        <div class="">
          <div class="imge">
            <img src="<?php the_field('mainimage'); ?>" class="img-fluid" alt="main-screen">
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- <?php echo get_bloginfo( 'template_url' ); ?>/images/main-screen.png -->
<section class="mt-4">
  <div class="container">
    <div class="feature">
      <h2>
        <?php the_field('feature_heading'); ?>
      </h2>
      <p>
        <?php the_field('feature_sub_heading'); ?>
      </p>
    </div>
    <div class="row tabpad">
      <div class="col-md-4 single">
        <span class="clock">
          <img src="<?php the_field('image'); ?>" class="img-fluid" alt="icon">
        </span>
        <h5 class="monit">
          <?php the_field('iconheading'); ?>
        </h5>
        <p class="itext">
          <?php the_field('text'); ?>
        </p>
      </div>
      <div class="col-md-4 single">
        <span class="clock">
          <img src="<?php the_field('images2'); ?>" alt="icon">
        </span>
        <h5 class="monit">
          <?php the_field('secondiconheading'); ?>
        </h5>
        <p class="itext">
          <?php the_field('secondtext'); ?>
        </p>
      </div>
      <div class="col-md-4 single">
        <span class="clock">
          <img src="<?php the_field('icon3'); ?>" alt="icon">
        </span>
        <h5 class="monit">
          <?php the_field('iconheading3'); ?>
        </h5>
        <p class="itext">
          <?php the_field('icontext'); ?>
        </p>
      </div>
    </div>
    <!-- <div class="row gaptop"> -->
    <?php 
$args = array(
'posts_per_page' => 3
);
?>
    <?php
$the_query = new WP_Query( $args );
$i = 1;
while(  $the_query->have_posts() ){ ?>
    <?php	$the_query->the_post(); ?>
    <?php  if( $i % 2 == false ){ ?>
    <div class="row gaptop">
      <div class="col-md-6 col-sm-12">
        <div>	
          <img src="<?php the_post_thumbnail_url('small-size'); ?>" class="polyg img-fluid" alt="Automated reports"> 
          <!-- <?php the_post_thumbnail( 'Blog Thumbnail 1' ) ?> -->
        </div> 
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="automated padleft">
          <h3>
            <a href="<?php the_permalink(); ?> "> 
              <?php echo get_the_title() ; ?>
            </a> 
          </h3>
          <p>
            <?php the_excerpt(); ?>
          </p>
        </div>
      </div>
    </div>
    <?php 
}
else
{
?>
    <div class="row gaptop">   
      <div class="col-md-6 col-sm-12">
        <div class="automated">
          <h3>
            <a href="<?php the_permalink(); ?> "> 
              <?php echo get_the_title() ; ?>
            </a> 
          </h3>
          <p>
            <?php the_excerpt(); ?>
          </p>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div>	
          <img src="<?php the_post_thumbnail_url(); ?>" class="polyg img-fluid" alt="Automated reports"> 
        </div> 
      </div>
    </div>
    <?php  
}
$i++;
}
wp_reset_postdata();
?>
  </div>
  <!-- </div> -->
</section>
<!-- pricing plan -->
<div class="bgbottom">
  <section>
    <div class="container">
      <div class="bottomtxt">
        <h3>
          <?php the_field('price_heading'); ?>
        </h3>
        <p>
          <?php the_field('text_main'); ?>
        </p>
      </div>
      <div class="row mobpadd">
        <div class="col-md-4 colpad">
          <div class="cardbotom">
            <h3>
              <?php the_field('starter'); ?>
            </h3>
            <p>
              <?php the_field('starter_user'); ?>
            </p>
            <hr class="seprat">
            <h4>
              <span class="dolar">
                <?php the_field('dollar'); ?>
              </span>
              <?php the_field('starter_price'); ?>
            </h4>
            <p>
              <?php the_field('starter_month'); ?>
            </p>
            <a href="<?php the_field('order'); ?>">
              <button class="order">Order
              </button>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cardbotom">
            <h3>
              <?php the_field('standard'); ?>
            </h3>
            <p>
              <?php the_field('standard_user'); ?>
            </p>
            <hr class="seprat">
            <h4>
              <span class="dolar">
                <?php the_field('dollar'); ?>
              </span>
              <?php the_field('standard_price'); ?>
            </h4>
            <p>
              <?php the_field('standard_month'); ?>
            </p>
            <a href="<?php the_field('standard_button_link'); ?>">
              <button class="order">Order
              </button>
            </a>
          </div>		
        </div>
        <div class="col-md-4 ">
          <div class="cardbotom colpad2">
            <h3>
              <?php the_field('premium'); ?>
            </h3>
            <p>
              <?php the_field('premium_user'); ?>
            </p>
            <hr class="seprat">
            <h4>
              <span class="dolar">
                <?php the_field('dollar'); ?>
              </span>
              <?php the_field('premium_price'); ?>
            </h4>
            <p>
              <?php the_field('premium_month'); ?>
            </p>
            <a href="<?php the_field('premium_button_link'); ?>">
              <button class="order">Order
              </button>
            </a>
          </div>
        </div>
      </div>
      </section>
    <?php get_footer(); ?>
