// external js: isotope.pkgd.js

// init Isotope
var $grid = jQuery('.grid').isotope({
  itemSelector: '.element-item',
  layoutMode: 'fitRows'
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = jQuery(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
  },
  // show if name ends with -ium
  ium: function() {
    var name = jQuery(this).find('.name').text();
    return name.match( /ium$/ );
  }
};
// bind filter button click
jQuery('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = jQuery( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
jQuery('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = jQuery( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    jQuery( this ).addClass('is-checked');
  });
});
