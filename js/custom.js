"use strict";

$(document).ready(function () {
  // grab the initial top offset of the navigation 
  var stickyNavTop = $('#masthead').offset().top; // our function that decides weather the navigation bar should have "fixed" css position or not.

  var stickyNav = function stickyNav() {
    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
    // otherwise change it back to relative

    if (scrollTop > stickyNavTop) {
      $('#masthead').addClass('sticky');
    } else {
      $('#masthead').removeClass('sticky');
    }
  };

  stickyNav(); // and run it again every time you scroll

  $(window).scroll(function () {
    stickyNav();
  });
}); // Slick sliders

$(document).ready(function () {
  $('.homeTestiSlider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: false,
    infinite: true
  });
  $('.homeSponsorsSlider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    arrows: false,
    infinite: true
  });
  $('.ulpCommSlider').slick({
    dots: true,
    arrows: false,
    infinite: true
  });
  $('.facilityItemNavContainer').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows: false,
    focusOnSelect: true,
    asNavFor: '.facilityItemContainerSlider'
  });
  $('.facilityItemContainerSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.facilityItemNavContainer',
    centerMode: true,
    arrows: false,
    speed: 1500
  });
  $('.facilityItemGallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
    fade: true,
    cssEase: 'linear'
  });
  $('.addServicesSlider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    arrows: true,
    prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-next"></i>'
  });
  $('.eventItemGallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    asNavFor: '.eventItemGalleryNav',
    prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
    fade: true,
    cssEase: 'linear'
  });
  $('.eventItemGalleryNav').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    dots: false,
    arrows: true,
    infinite: true,
    asNavFor: '.eventItemGallery',
    prevArrow: '<i class="fas fa-chevron-left slick-prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right slick-next"></i>',
    focusOnSelect: true
  });
});