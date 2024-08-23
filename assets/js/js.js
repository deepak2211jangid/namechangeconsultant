$(window).on("load", function () {
  $(".loader").fadeOut();
  $(".pre-loader").delay(500).fadeOut("slow");
});
$(document).ready(function () {
  var showHeaderAt = 150;
  var win = $(window),
    body = $("body");
  if (win.width() > 400) {
    win.on("scroll", function (e) {
      if (win.scrollTop() > showHeaderAt) {
        body.addClass("fixed");
      } else {
        body.removeClass("fixed");
      }
    });
  }
});
$(document).ready(function () {
  var owl = $(".owl-carousel");
  owl.owlCarousel({
    margin: 10,
    nav: false,
    dots: false,
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

$(document).ready(function () { 
  var owl = $(".owl-carousel-review");
  owl.owlCarousel({
    margin: 10,
    nav: false,
    dots: false,
    loop: true,
    autoplay: true,
    margin:20,
    autoplayTimeout: 4000,
    responsive: {
      375: {
        items: 1,
      },
      900: {
        items: 2,
      },
      1000: {
        items: 2,
      },
      1250: {
        items: 2,
      },
    },
  });
});

feather.replace();

const stepButtons = document.querySelectorAll(".step-button");
const progress = document.querySelector("#progress");

Array.from(stepButtons).forEach((button, index) => {
  button.addEventListener("click", () => {
    progress.setAttribute("value", (index * 100) / (stepButtons.length - 1)); //there are 3 buttons. 2 spaces.

    stepButtons.forEach((item, secindex) => {
      if (index > secindex) {
        item.classList.add("done");
      }
      if (index < secindex) {
        item.classList.remove("done");
      }
    });
  });
});
