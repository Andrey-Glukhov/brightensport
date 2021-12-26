jQuery(document).ready(function($) {
   
    var owl = $('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    //navText: ['',''],
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    dots: false,
    margin:10,
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
        },
        1200:{
            items:4            
        }
    },
    // onInitialized: function(event) {
    //     var linkElement = '<a href="#" class="book-pro-link">Book your Pro</a>';
    //     $('.green-back-1 .owl-carousel .owl-nav button.owl-prev').after(linkElement);
    // }
});
});

