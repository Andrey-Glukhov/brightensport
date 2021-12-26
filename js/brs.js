jQuery(document).ready(function($) {
   
    var owl = $('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    navText: ['',''],
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
            items:3,
            loop:false
        },
        1200:{
            items:4,
            loop:false
        }
    },
    onInitialized: function(event) {
        var linkElement = '<a href="#" class="book-pro-link">Book your Pro</a>';
        $('.green-back-1 .owl-carousel .owl-nav button.owl-prev').after(linkElement);
    }
});
});

