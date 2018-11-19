jQuery(window).load(function() {

  /* Masonry */
  var container = document.querySelector('#ms-container');
  var msnry = new Masonry( container, {
    itemSelector: '.ms-item',
    columnWidth: '.ms-item',
  });

  /* News SLider For Gallery Posts */


  var triggers = $('ul.triggers li');
  var images = $('ul.news-slider li');
  var lastElem = triggers.length-1;
  var target;

  triggers.first().addClass('active');
  images.hide().first().show();

  function sliderResponse(target) {
      images.fadeOut(300).eq(target).fadeIn(300);
      triggers.removeClass('active').eq(target).addClass('active');
  }

  triggers.click(function() {
      if ( !$(this).hasClass('active') ) {
          target = $(this).index();
          sliderResponse(target);
          resetTiming();
      }
  });

  $('.next').click(function() {
      target = $('ul.triggers li.active').index();
      target === lastElem ? target = 0 : target = target+1;
      sliderResponse(target);
      resetTiming();
  });
  $('.prev').click(function() {
      target = $('ul.triggers li.active').index();
      lastElem = triggers.length-1;
      target === 0 ? target = lastElem : target = target-1;
      sliderResponse(target);
      resetTiming();
  });

  function sliderTiming() {
      target = $('ul.triggers li.active').index();
      target === lastElem ? target = 0 : target = target+1;
      sliderResponse(target);
  }

  var timingRun = setInterval(function() { sliderTiming(); },5000);
  function resetTiming() {
      clearInterval(timingRun);
      timingRun = setInterval(function() { sliderTiming(); },5000);
  }
});
