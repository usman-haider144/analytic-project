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

<?php wp_footer(); ?>

</body>
</html>