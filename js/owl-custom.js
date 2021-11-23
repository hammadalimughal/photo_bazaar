$('#title-slider-1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    autoplay: false,
    margin: 10,
    navText: [
        '<i class="far fa-chevron-up" aria-hidden="true"></i>',
        '<i class="far fa-chevron-down" aria-hidden="true"></i>'
    ],
	responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('#testimonial-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    autoplay: false,
    center: true,
    margin: 10,
    navText: [
        '<i class="far fa-chevron-left" aria-hidden="true"></i>',
        '<i class="far fa-chevron-right" aria-hidden="true"></i>'
    ],
	responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});