jQuery(window).load(function() {

  /* Masonry */
  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });

  //Slick Slider
  $('.news-slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: false,
      arrows: false
  });
  $('.leftArrow').on('click', function(){
      $('.news-slider').slick("slickPrev");
  });
  $('.rightArrow').on('click', function(){
      $('.news-slider').slick("slickNext");
  });

});
