AOS.init({
  once: true
});

$('.stock_images').masonry({
  // options...
});

$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 300) {
    $(".backToTop").addClass("opac_1");
  } else {
    $(".backToTop").removeClass("opac_1");
  }
});

$(document).ready(function () {
  $('.container-fluid .active-box').click(function () {
    $('.container-fluid .active-box').removeClass("active");
    $(this).addClass("active");
  });
});


var swiper = new Swiper('.digitalFilterSlider', {
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  loop: true,
  coverflowEffect: {
    rotate: 35,
    stretch: 0,
    depth: 50,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: '.swiper-pagination',
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

// layout Masonry after each image loads
$(".share_btn").click(function () {
  $(this).next().slideToggle()
})

$(".option").click(function () {
  $(".option").removeClass("active");
  $(this).addClass("active");

});

$('#banner_home').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false
});

$('#testimonial_slider').slick({
  dots: false,
  arrows: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// bilal js 
$('.slider_logo').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 2,
  focusOnSelect: true,
  dots: false,
  arrows: false
});

$('.slider-for').slick({
  slidesToShow: 1,
  autoplay: false,
  slidesToScroll: 1,
  arrows: false,
  pauseOnFocus: true,
  pauseOnHover: true,
  fade: true,
  asNavFor: '.slider-nav'
});

$('.slider-nav').slick({
  slidesToShow: 7,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows: false,
  centerMode: true,  
  pauseOnFocus: true,
  pauseOnHover: true,
  centerPadding: '0px',
  focusOnSelect: true,
  autoplay: true
});

$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
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
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$(".filter_btn").click(function(){
  $(this).parent().parent().children().children().removeClass('active');
  $(this).addClass('active');
});