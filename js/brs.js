jQuery(document).ready(function($) {
   
            $('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1            
        },
        600:{
            items:3
         },
        1000:{
            items:3,
            loop:false
        }
    }
})
});

