jQuery(document).ready(function ($) {
  if ($(".home").length > 0) {
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
      //margin: 10,
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
      autoplay: false,
      mouseDrag: false,
      nav: true,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>',
      ],
      dots: false,
      //margin: 10,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          dots: true,
          nav: false,
        },
        600: {
          items: 2,
        },
        1000: {
          items: 3,
        },
        1400: {
          items: 4,
        },
      },
    });
    
    $(' .white-back-3 .owl-carousel .owl-item').addClass('item-aligned');

    $('#owl-testimonial').on('click', '.card-body', function() {
      var card = $(this).find('.card-text.card-content.fold');
      if (card.length <= 0) {
        return;
      }
      $(' .white-back-3 .owl-carousel .owl-item').addClass('item-aligned');
      if (card.hasClass('content-hidden')) {
        $('#owl-testimonial .card-body .card-text.card-content.fold').addClass('content-hidden');
        $('.white-back-3 .owl-carousel .owl-item .card-body').each(function() {
          this.style.height = '';
        });
        $('.point_down').show();
        var that = this;
        var height;
        $(' .white-back-3 .owl-carousel .owl-item').each(function() {
          if ($(this).find('.card-body')[0] != that) {
            height = $(this).find('.card-body').css('height');
            $(this).find('.card-body')[0].style.height = height;
            $(this).removeClass('item-aligned');
          }
        });
        $(this).find('.card-text.card-content.fold').removeClass('content-hidden');
        $(this).find('.point_down').hide();
      } else {
        $(this).find('.card-text.card-content.fold').addClass('content-hidden');
        $('.white-back-3 .owl-carousel .owl-item .card-body').each(function() {
          this.style.height = '';
        });
        $(this).find('.point_down').show();
      }
    }); 
    setLineSize();
    window.addEventListener("resize", setLineSize);
    var controller = new ScrollMagic.Controller();
    var parents;
   
    parents = $(".sline_block");
    parents.each(function () {
      if ($(this).css("display") == "block") {
        var line = $(this).find(".sline");
        var lineLength_1 = line[0].getTotalLength(); // for Safari
        pathPrepare(line);
        var scene = new ScrollMagic.Scene({
          triggerElement: this,
          duration: "80%",
          reverse: false,
          triggerHook: 0.8,
        })
          .setTween(
            gsap.to(line, { strokeDashoffset: 0, ease: Linear.easeNone })
          )
          //.addIndicators() // add indicators (requires plugin)
          .addTo(controller);
      }
    });
  }
  $(".navbar-collapse .menu-item").on("click", function () {
    var myCollapse = $(".navbar-collapse.show");
    if (myCollapse.length > 0) {
      var bsCollapse = new bootstrap.Collapse(myCollapse, {
        //toggle: false
      });
      bsCollapse.hide();
    }
  });
  function pathPrepare($el) {
    var lineLength = $el[0].getTotalLength(); // for Safari
    $el.css("stroke-dasharray", lineLength);
    $el.css("stroke-dashoffset", lineLength);
  }

  
});

function showPoup() {
  var mailPopup = document.querySelector('.mc4wp-response');
  if (mailPopup.innerHTML == '') {
    return
  }  
  mailPopup.style.display = "block";
  setTimeout(function() {
  mailPopup.style.display = "none";
  },3000);
}


function setLineSize() {
  var line = document.querySelector(".ln-12");
  var svgObj = document.querySelector("#f_line");
  var block = document.querySelector(".line-opener-topper");
  if (! block ) {
    return
  }
  if (svgObj.getBoundingClientRect().height > 0) {
    var rate =
      block.getBoundingClientRect().height /
      svgObj.getBoundingClientRect().height;
    var boxStr = svgObj.getAttribute("viewBox");
    var indStr = boxStr.lastIndexOf(" ");
    boxStr =
      boxStr.slice(0, indStr + 1) +
      " " +
      Math.round(Number(boxStr.slice(indStr + 1)) * rate);
    document.querySelector("#f_line").setAttribute("viewBox", boxStr);
    var lineStr = document.querySelector(".ln-12").getAttribute("d");
    var indStr = lineStr.lastIndexOf("V");
    lineStr =
      lineStr.slice(0, indStr + 1) +
      Math.round(Number(lineStr.slice(indStr + 1)) * rate + 2);
    document.querySelector(".ln-12").setAttribute("d", lineStr);
  }
}
