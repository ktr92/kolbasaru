$(document).ready(function() {
  $('.newsindex__slider').slick({
    slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  nextArrow: $('.slider-arrow_news .slider-next'),
  prevArrow: $('.slider-arrow_news .slider-prev'),
  dots: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
       
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
       
      }
    },
  ]
  })
})