jQuery(document).ready(function ($) {
  var one = $("#owl-carousel");

  one.owlCarousel({
    loop: true,
    nav: true,
    //navText: ['',''],
    navText: [
      '<i class="fa fa-angle-left" aria-hidden="true"></i>',
      '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    dots: false,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });

  var two = $("#owl-testimonial");
    two.owlCarousel({
      loop: true,
      nav: true,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      ],
      dots: false,
      margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
        1200: {
          items: 4,
        },
      },
    });
  $('.navbar-collapse .menu-item').on('click',function () {
    var myCollapse =$('.navbar-collapse.show');
    //$('.navbar-toggler').addClass('collapsed');
    var bsCollapse = new bootstrap.Collapse(myCollapse, {
      //toggle: false
    });
    bsCollapse.hide();  
  });  
 
  });

