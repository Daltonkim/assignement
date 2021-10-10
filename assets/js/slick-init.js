jQuery(function ($) {
  $('.people__slider').slick({
      autoplay: false,
      fade: false,
      speed: 1000,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
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
          }
      },
      {
          breakpoint: 1024,
          settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
          }
      }
      ]
  });
});
