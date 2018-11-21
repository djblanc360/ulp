jQuery(window).load(function() {

  /* Masonry */
  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });


});


//Slick Slider
$(document).ready(function(){
  $('.news-slider').slick({
    setting-name: setting-value
  });
});
