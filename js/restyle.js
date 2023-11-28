$(document).ready(function () {
  $(".newsindex__slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    nextArrow: $(".slider-arrow_news .slider-next"),
    prevArrow: $(".slider-arrow_news .slider-prev"),
    dots: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  })
  $('[data-slider="career"]').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    nextArrow: $(this).find(".slider-next"),
    prevArrow: $(this).find(".slider-next"),
    dots: true,
  })
  $('[data-slider="imgblock_1"]').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
  })

  if ($(window).width() < 960) {
    $(`[data-tabsheader]`).removeClass("active")
    $(`[data-tabscontent]`).removeClass("active")
  }

  $(function () {
    $("[data-tabsblock]").on("click", "[data-tabsheader]", function () {
      console.log($(this).hasClass("active"))
      if ($(this).hasClass("active")) {
        $(this).removeClass("active")
        let item = $(this).data("tabsheader")
        $(`[data-tabscontent=${item}]`).removeClass("active")
      } else {
        let wrapper = $(this).closest(".tabsblock__row")
        $(`[data-tabsheader]`).removeClass("active").removeClass("prev")

        wrapper.find("[data-tabsheader]").addClass("prev")
        $(this).addClass("active")
        let item = $(this).data("tabsheader")
        $(`[data-tabscontent]`).removeClass("active")
        $(`[data-tabscontent=${item}]`).addClass("active")
        $(`[data-tabscontent=${item}]`).prevAll().addClass("prev")
      }
    })
  })
})
