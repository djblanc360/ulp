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
  $('.aboutIntroSlider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: false,
    cssEase: 'linear'
  });
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
}); // Smooth srolling
// Select all links with hashes

$('a[href*="#"]') // Remove links that don't actually link to anything
.not('[href="#"]').not('[href="#0"]').click(function (event) {
  // On-page links
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); // Does a scroll target exist?

    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top - 170
      }, 1000, function () {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();

        if ($target.is(":focus")) {
          // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable

          $target.focus(); // Set focus again
        }

        ;
      });
    }
  }
}); // Google Map

function initialize() {
  var mapOptions = {
    center: {
      lat: 33.6381195,
      lng: -117.8513538
    },
    zoom: 14
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  var contentString = '<div id="content">' + '<div class="row">' + '<div class="col-6">' + '<img src="/ulp/wp-content/uploads/2018/11/oc_Vine-Park-Aerial_irvine-820x510.jpg" alt="" />' + '</div>' + '<div class="col-6 pt-2">' + '<h3>University Lab Partners</h3>' + '<div id="bodyContent">' + '<p>UCI Research Park - Suite 300<br/>5270 California Ave., Irvine CA 92617<br/><a href="tel:+19497186340">+1 949 718 6340</a><br/><a href="mailto:info@universitylabpartners.org" target="_blank">info@universitylabpartners.org</a></p>' + '<p><a href="https://www.google.com/maps/place/5270+California+Ave+%23300,+Irvine,+CA+92617/data=!4m2!3m1!1s0x80dcde1935bfb99b:0xb488c218a242c800?ved=2ahUKEwi93OXN7_XeAhXD64MKHdYyDasQ8gEwAHoECAAQAQ" target="_blank" class="button">Get Directions</a></p>' + '</div>' + '</div>' + '</div>' + '</div>';
  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
  var marker = new google.maps.Marker({
    position: {
      lat: 33.6381195,
      lng: -117.8513538
    },
    map: map,
    icon: 'https://nickiandkaren.com/images/nk-pin.png',
    animation: google.maps.Animation.DROP,
    title: 'University Lab Partners'
  });
  marker.addListener('click', function () {
    infowindow.open(map, marker);
  });
  infowindow.open(map, marker);
  setTimeout(moveMap, 10);

  function moveMap() {
    map.panBy(0, 0);
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
"use strict";

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

!function (a, n) {
  "function" == typeof define && define.amd ? define(n) : "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) ? module.exports = n(require, exports, module) : a.CountUp = n();
}(void 0, function (a, n, t) {
  return function (a, n, t, e, i, r) {
    var u = this;
    if (u.version = function () {
      return "1.9.3";
    }, u.options = {
      useEasing: !0,
      useGrouping: !0,
      separator: ",",
      decimal: ".",
      easingFn: function easingFn(a, n, t, e) {
        return t * (1 - Math.pow(2, -10 * a / e)) * 1024 / 1023 + n;
      },
      formattingFn: function formattingFn(a) {
        var n,
            t,
            e,
            i,
            r,
            o,
            s = a < 0;

        if (a = Math.abs(a).toFixed(u.decimals), n = (a += "").split("."), t = n[0], e = 1 < n.length ? u.options.decimal + n[1] : "", u.options.useGrouping) {
          for (i = "", r = 0, o = t.length; r < o; ++r) {
            0 !== r && r % 3 == 0 && (i = u.options.separator + i), i = t[o - r - 1] + i;
          }

          t = i;
        }

        return u.options.numerals.length && (t = t.replace(/[0-9]/g, function (a) {
          return u.options.numerals[+a];
        }), e = e.replace(/[0-9]/g, function (a) {
          return u.options.numerals[+a];
        })), (s ? "-" : "") + u.options.prefix + t + e + u.options.suffix;
      },
      prefix: "",
      suffix: "",
      numerals: []
    }, r && "object" == _typeof(r)) for (var o in u.options) {
      r.hasOwnProperty(o) && null !== r[o] && (u.options[o] = r[o]);
    }
    "" === u.options.separator ? u.options.useGrouping = !1 : u.options.separator = "" + u.options.separator;

    for (var s = 0, l = ["webkit", "moz", "ms", "o"], m = 0; m < l.length && !window.requestAnimationFrame; ++m) {
      window.requestAnimationFrame = window[l[m] + "RequestAnimationFrame"], window.cancelAnimationFrame = window[l[m] + "CancelAnimationFrame"] || window[l[m] + "CancelRequestAnimationFrame"];
    }

    function d(a) {
      return "number" == typeof a && !isNaN(a);
    }

    window.requestAnimationFrame || (window.requestAnimationFrame = function (a, n) {
      var t = new Date().getTime(),
          e = Math.max(0, 16 - (t - s)),
          i = window.setTimeout(function () {
        a(t + e);
      }, e);
      return s = t + e, i;
    }), window.cancelAnimationFrame || (window.cancelAnimationFrame = function (a) {
      clearTimeout(a);
    }), u.initialize = function () {
      return !!u.initialized || (u.error = "", u.d = "string" == typeof a ? document.getElementById(a) : a, u.d ? (u.startVal = Number(n), u.endVal = Number(t), d(u.startVal) && d(u.endVal) ? (u.decimals = Math.max(0, e || 0), u.dec = Math.pow(10, u.decimals), u.duration = 1e3 * Number(i) || 2e3, u.countDown = u.startVal > u.endVal, u.frameVal = u.startVal, u.initialized = !0) : (u.error = "[CountUp] startVal (" + n + ") or endVal (" + t + ") is not a number", !1)) : !(u.error = "[CountUp] target is null or undefined"));
    }, u.printValue = function (a) {
      var n = u.options.formattingFn(a);
      "INPUT" === u.d.tagName ? this.d.value = n : "text" === u.d.tagName || "tspan" === u.d.tagName ? this.d.textContent = n : this.d.innerHTML = n;
    }, u.count = function (a) {
      u.startTime || (u.startTime = a);
      var n = (u.timestamp = a) - u.startTime;
      u.remaining = u.duration - n, u.options.useEasing ? u.countDown ? u.frameVal = u.startVal - u.options.easingFn(n, 0, u.startVal - u.endVal, u.duration) : u.frameVal = u.options.easingFn(n, u.startVal, u.endVal - u.startVal, u.duration) : u.countDown ? u.frameVal = u.startVal - (u.startVal - u.endVal) * (n / u.duration) : u.frameVal = u.startVal + (u.endVal - u.startVal) * (n / u.duration), u.countDown ? u.frameVal = u.frameVal < u.endVal ? u.endVal : u.frameVal : u.frameVal = u.frameVal > u.endVal ? u.endVal : u.frameVal, u.frameVal = Math.round(u.frameVal * u.dec) / u.dec, u.printValue(u.frameVal), n < u.duration ? u.rAF = requestAnimationFrame(u.count) : u.callback && u.callback();
    }, u.start = function (a) {
      u.initialize() && (u.callback = a, u.rAF = requestAnimationFrame(u.count));
    }, u.pauseResume = function () {
      u.paused ? (u.paused = !1, delete u.startTime, u.duration = u.remaining, u.startVal = u.frameVal, requestAnimationFrame(u.count)) : (u.paused = !0, cancelAnimationFrame(u.rAF));
    }, u.reset = function () {
      u.paused = !1, delete u.startTime, u.initialized = !1, u.initialize() && (cancelAnimationFrame(u.rAF), u.printValue(u.startVal));
    }, u.update = function (a) {
      u.initialize() && (d(a = Number(a)) ? (u.error = "", a !== u.frameVal && (cancelAnimationFrame(u.rAF), u.paused = !1, delete u.startTime, u.startVal = u.frameVal, u.endVal = a, u.countDown = u.startVal > u.endVal, u.rAF = requestAnimationFrame(u.count))) : u.error = "[CountUp] update() - new endVal is not a number: " + a);
    }, u.initialize() && u.printValue(u.startVal);
  };
});