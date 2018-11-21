jQuery(window).load(function() {

  //Slick Slider
  $('.news-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      arrows: false
  });
  $('.left-news-slider-arrow').on('click', function(){
      $('.news-slider').slick("slickPrev");
  });
  $('.right-news-slider-arrow').on('click', function(){
      $('.news-slider').slick("slickNext");
  });

  /* Masonry */
  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });

});
