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

  $(".fileupload input[type=file]").change(function () {
    if (this.files[0]) {
      var filename = $(this).val().replace(/.*\\/, "")
      /* $(this).siblings('span').empty(); */
      $(this).closest(".fileupload").find(".filename").remove()
      $(this)
        .closest(".fileupload")
        .append('<span class="filename"> ' + filename + " " + " </span>")
      $(".file-error").html("")
      $(".file-upload span").css("text-transform", "none")
      $(".changefile").css("display", "block")
    }
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


$(document).ready((function(){var e,t,s,n,l,i,c,o,a;for(n=(e=document.getElementsByClassName("selectbox")).length,t=0;t<n;t++){for(l=(i=e[t].getElementsByTagName("select")[0]).length,(c=document.createElement("DIV")).setAttribute("class","select-selected"),c.innerHTML=i.options[i.selectedIndex].innerHTML,e[t].appendChild(c),(o=document.createElement("DIV")).setAttribute("class","select-items select-hide"),s=1;s<l;s++)(a=document.createElement("DIV")).innerHTML=i.options[s].innerHTML,a.addEventListener("click",(function(e){var t,s,n,l,i,c,o;for(c=(l=this.parentNode.parentNode.getElementsByTagName("select")[0]).length,i=this.parentNode.previousSibling,s=0;s<c;s++)if(l.options[s].innerHTML==this.innerHTML){for(l.selectedIndex=s,i.innerHTML=this.innerHTML,o=(t=this.parentNode.getElementsByClassName("same-as-selected")).length,n=0;n<o;n++)t[n].removeAttribute("class");this.setAttribute("class","same-as-selected");break}i.click()})),o.appendChild(a);e[t].appendChild(o),c.addEventListener("click",(function(e){e.stopPropagation(),d(this),this.nextSibling.classList.toggle("select-hide"),this.classList.toggle("select-arrow-active")}))}function d(e){var t,s,n,l,i,c=[];for(t=document.getElementsByClassName("select-items"),s=document.getElementsByClassName("select-selected"),l=t.length,i=s.length,n=0;n<i;n++)e==s[n]?c.push(n):s[n].classList.remove("select-arrow-active");for(n=0;n<l;n++)c.indexOf(n)&&t[n].classList.add("select-hide")}document.addEventListener("click",d),$(document).on("click",".dropdown-select .dropdown-select__title",(function(){$(this).parent().toggleClass("active");var e=$(this).parent().find("> .dropdown-select__list");e.is(":visible");e.toggle()}))})),$(document).ready((function(){$("html, body").on("mousedown",(function(e){"string"==typeof e.target.className&&e.target.className.indexOf("adm")<0&&(e.stopPropagation(),$(e.target).closest(".dropdown-select").length||$(".dropdown-select .dropdown-select__title.opened").click())}))}));