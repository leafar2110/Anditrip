$(function () {
  $('.carrousel-destino_desktop').slick({
    arrows: true,
    autoplay: false,
    infinite: false,
   
    dots: false,
    vertical: true,
    verticalSwiping: true,
    slidesPerRow: 2,
    rows: 2,
    prevArrow: $('.arrow-top'),
    nextArrow: $('.arrow-bottom'),
    speed: 1500,
   


  });
});
$(function () {
  $('.carrousel-destino_mobile').slick({

    mobileFirst: true,
    vertical: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    verticalSwiping: false,
    adaptiveHeight: false,
    centerMode: false,

    arrows: true,
    autoplay: false,
    infinite: false,
    dots: false,
    // slidesPerRow: 1,
    // rows: 1,
    prevArrow: $('.arrow-top'),
    nextArrow: $('.arrow-bottom'),

  });
});





$(document).ready(function () {

  $('.galery').slick({
    infinite: true,
    //initialSlide: 1,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    //centerMode: true,
    dots: false,
  });
  //       if ($(window).width() > 767) {
  //         $('.carrousel-destino').slick({
  //           arrows: !0,
  //           autoplay: !1,
  //           infinite: !1,
  //           dots: !1,
  //           vertical: !0,
  //           verticalSwiping: !0,
  //           slidesPerRow: 2,
  //           rows: 2,
  //           prevArrow: $('.arrow-top'),
  //           nextArrow: $('.arrow-bottom'),
  //           speed: 1500,
  //         })
  //       } else {
  //         $('.carrousel-destino').slick({
  //           arrows: !0,
  //           autoplay: !1,
  //           infinite: !1,
  //           dots: !1,
  //           vertical: !0,
  //           verticalSwiping: !0,
  //           slidesPerRow: 1,
  //           rows: 2,
  //           prevArrow: $('.arrow-top'),
  //           nextArrow: $('.arrow-bottom'),
  //           speed: 1500,
  //         })
  // }



  /* 
  $(document).ready(function () {
    $('.ejem').slick({
      dots: false,
      autoplay: false,
      infinite: false,
      speed: 800,
      //  fade: true,
      // cssEase: 'linear',
      mobileFirst: true,
      lazyLoad: 'ondemand',
      vertical: true,
      verticalSwiping: true,
      slidesPerRow: 2,
      rows: 2,
      prevArrow: $('.arrow-top'),
      nextArrow: $('.arrow-bottom'),
      // adaptiveHeight: true,
      // adaptiveWidth: true,
      // centerMode: true,

      responsive: [{
          breakpoint: 3000,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 3,
          
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            slidesPerRow: 1,
          }
        }
      ]


    });
    $('.responsive').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
          breakpoint: 1024,
          settings: {
            unslick: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    }); */

  // $("#banner-img").slick({
  //   dots: true,
  //   slidesToShow: 5,
  //   slidesToScroll: 1,
  //   autoplay: false,
  //   autoplaySpeed: 2000,
  //   responsive: [{
  //       breakpoint: 3000,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 3,
  //       }
  //     },
  //     {
  //       breakpoint: 600,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 2
  //       }
  //     },
  //     {
  //       breakpoint: 480,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1
  //       }
  //     }
  //   ]
  // });
  $('#banner-img').slick({
    dots: false,
    autoplay: false,
    infinite: true,
    speed: 800,
    fade: true,
    cssEase: 'linear',
    mobileFirst: true,
    lazyLoad: 'ondemand',


    //  arrows: true,
    //  adaptiveHeight: true,

    //  adaptiveHeight: true,
    //  adaptiveWidth: true,
    //  arrows: true,
    //  centerMode: true,
    //  autoplay: false,
    //  infinite: true,
    //  speed: 500,

    //  centerPadding: false,

  });
});