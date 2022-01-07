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
      1400: {
        items: 4,
      },
    },
  });
  $(".navbar-collapse .menu-item").on("click", function () {
    var myCollapse = $(".navbar-collapse.show");
    if (myCollapse.length > 0) {
      var bsCollapse = new bootstrap.Collapse(myCollapse, {
        //toggle: false
      });
      bsCollapse.hide();
    }
  });
  setLineSize();
});

window.addEventListener("resize", setLineSize);

function setLineSize() {
  var line = document.querySelector(".ln-12");
  var svgObj = document.querySelector("#f_line");
  var block = document.querySelector(".line-opener-topper");
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
      Math.round(Number(lineStr.slice(indStr + 1)) * rate+2);
    document.querySelector(".ln-12").setAttribute("d", lineStr);
  }
}
