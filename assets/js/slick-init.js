jQuery(function ($) {
  var btn = $('#lets_talk');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 1000) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });
  $('.people__slider').slick({
    autoplay: false,
    fade: false,
    speed: 1000,
    prevArrow: '<button type="button" class="slick-prev slick-arrow"></i></button>',
    nextArrow: '<button type="button" class="slick-next slick-arrow"></i></button>',
    autoplaySpeed: 10000,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        prevArrow: '',
        nextArrow: '',
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        prevArrow: '',
        nextArrow: '',
      }
    }
    ]
  });
});



