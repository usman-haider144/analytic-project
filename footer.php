<!-- footer start -->

<section class="footcolr">
	<div class="container">
		<hr class="bottom footcolr">	
			<div class="row padbtm">	
				<div class="col-md-3 col-sm-12">
					<!-- <a class="navbar-brand" href="#"> -->
          			<!-- <img src="http://localhost/analytic/wp-content/uploads/2020/12/logo-2.png" alt="logo"> -->
          			<?php dynamic_sidebar( 'logo-footer' ); ?>
          			<!-- <?php //the_widget( 'logo-footer' ); ?> -->
          		<!-- 	<img src="http://localhost/analytic/wp-content/uploads/2020/12/analytics-bottom.png" alt="analytics"> -->
       				 <!-- </a> -->
				</div>
				<div class="col-md-6 col-sm-12">
					<?php
            $args = [
              'theme_location' => 'extra-menu',
              'menu_class'     => 'fotr',
            ];
            wp_nav_menu( $args );
          ?>
					<!-- <ul class="fotr">
						<li><a href="">Product</a></li>
						<li><a href="">Pricing Plans</a></li>
						<li><a href="">FAQ</a></li>
						<li><a href="">Blog</a></li>

					</ul> -->
				</div>
				<div class="col-md-3 col-sm-12">
					<div class="footicon">
						<?php dynamic_sidebar( 'footer-icon' ); ?>
						
					</div>
				</div>
			</div>
		</div>

</section>
</div>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

<!-- 
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>

  	<script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script> -->
 <?php wp_footer(); ?> 
  </body>
</html>

