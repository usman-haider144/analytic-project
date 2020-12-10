							
					<!--============== 2nd section start ==================== -->
<?php get_header(); ?>

<div class="bghero">	
	<section class="outer">

			<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 imgbf">
					<div class="heading">
						<h1><!--  --><?php the_field('heading'); ?></h1>
						<p><?php the_field('subheading'); ?></p>

						 <!-- <button class="btnn"><a href="<?php the_field('link'); ?>">Try for free</a></button>  -->
						<div class="marpd">
						<a href="<?php the_field('link'); ?>" class="btnnn">Try for free</a>
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
				<h2>Main Features</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet. Id vel in nam malesuada.</p>
			</div>

			<div class="row tabpad">
					<div class="col-md-4 single">
		
						<span class="clock"><img src="<?php the_field('image'); ?>" class="img-fluid" alt="icon"></span>
						
						
						<h5 class="monit"><?php the_field('iconheading'); ?></h5>
							<p class="itext"><?php the_field('text'); ?></p>
					</div>

					<div class="col-md-4 single">
						<span class="clock"><img src="<?php the_field('images2'); ?>" alt="icon"></span>
						<h5 class="monit"><?php the_field('secondiconheading'); ?></h5>
							<p class="itext"><?php the_field('secondtext'); ?></p>
					</div>

					<div class="col-md-4 single">
						<span class="clock"><img src="<?php the_field('icon3'); ?>" alt="icon"></span>
						<h5 class="monit"><?php the_field('iconheading3'); ?></h5>
							<p class="itext"><?php the_field('icontext'); ?></p>
					</div>

			</div>
	


										<!-- 3rd section -->
	
		<div class="row gaptop">
			
			<?php 
					$args = array(

						'cat' => 1

					);


			 ?>
 <?php

$the_query = new WP_Query( $args );
 

if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        // echo get_the_title() ;
   
    ?>

			
			<div class="col-md-6 col-sm-12">
				<div class="automated">
					<h3><a href="<?php the_permalink(); ?> "> <?php echo get_the_title() ; ?></a> </h3>
					<p><?php the_excerpt(); ?></p>
					<h5><?php the_category(', '); ?></h5>
					
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				

				 <div>
					
				 <img src="<?php the_post_thumbnail_url(); ?>" class="polyg img-fluid" alt="Automated reports"> 
				 </div> 
			</div>
			
				<?php  
		 }

		} else {

}

wp_reset_postdata();
?>
		</div>
	
								<!-- 4th -->

	
		<div class="row change gaptop">
			<div class="col-md-6 col-sm-12">
				<div >
					<img src="http://localhost/analytic/wp-content/uploads/2020/12/recahrtCapture.png" class="polyg2 img-fluid" alt="chart">
				</div>
			</div>
			<div class="col-md-6 col-sm-12 padd">
				<div class="automated fully">
					<h3><?php echo get_the_title() ; ?> <!-- Fully customizable to address your needs --> </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
				</div>
				
			</div>
			
		</div>
	

		<div class="row gaptop">
			<div class="col-md-6 col-sm-12">
				<div class="automated built">
					<h3><?php echo get_the_title() ; ?><!-- Pre-built Dashboard Templates --></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div >
					<img src="http://localhost/analytic/wp-content/uploads/2020/12/recalender.png" class="calender img-fluid" alt="calender">
				</div>
			</div>
			
		</div>


</div>
</section>

<!-- //pricing plan -->
<div class="bgbottom">

<section >
		<div class="container">
			<div class="bottomtxt">
				<h3>Pricing Plans</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet<br> volutpat pellentesque volutpat est. </p>
			</div>
			<div class="row mobpadd">
				<div class="col-md-4 colpad">
					<div class="cardbotom">
						<h3>Starter</h3>
						<p>up to 3 users</p>
						<hr class="seprat">
						<h4><span class="dolar">$</span>29</h4>
						<p>per month</p>
						<a href="http://localhost/analytic/membership-account/membership-checkout/?level=1"><button class="order">Order</button></a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="cardbotom">
						<h3>Standard</h3>
						<p>up to 3 users</p>
						<hr class="seprat">
						<h4><span class="dolar">$</span>99</h4>
						<p>per month</p>

						<a href="http://localhost/analytic/membership-account/membership-checkout/?level=2"><button class="order">Order</button></a>
					</div>		
				</div>

					<div class="col-md-4 ">
						<div class="cardbotom colpad2">
							<h3>Premium</h3>
							<p>up to 3 users</p>
							<hr class="seprat">
							<h4><span class="dolar">$</span>299</h4>
							<p>per month</p>
							<a href="http://localhost/analytic/membership-account/membership-checkout/?level=3"><button class="order">Order</button></a>
						</div>
					</div>
			</div>
</section>
<?php get_footer(); ?>