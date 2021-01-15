<?php get_header(); ?>
<?php 
//Template Name: Pricing
// Template Post Type: page
?>
<section>
  <div class="container">
    <div class="price">
      <?php ah_breadcrumb(); ?>
      <span class="bread">
        <h1>Pricing
        </h1>
      </span>
      <h1>
        <?php the_field('main_heading'); ?>
      </h1>
      <h6>
        <?php the_field('text_main'); ?>
      </h6>
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
  <div class="container mt-4">
    <?php  //echo do_shortcode("[pmpro_levels]"); ?>
  </div> 
  <?php get_footer(); ?>
