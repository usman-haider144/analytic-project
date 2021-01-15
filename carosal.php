<?php get_header();?>

<?php
//Template Name: Carousel
// Template Post Type: page

?>



    <style>

.carousel-item{
    text-align: center;
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
</style>
<div class="">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://localhost/analytic/wp-content/uploads/2021/01/016.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>usman</h5>
    <p>Haider</p>
  </div>
    </div>
    <div class="carousel-item">

      <img class="d-block w-100" src="http://localhost/analytic/wp-content/uploads/2021/01/014.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://localhost/analytic/wp-content/uploads/2021/01/011.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
    <!-- #endregion Jssor Slider End -->
<?php get_footer();?>