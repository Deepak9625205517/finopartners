$(document).ready(function () {
  $(".mobile-code").intlTelInput({
    initialCountry: "us",
    separateDialCode: true,
    // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
  });

  setTimeout(function () {
    $(".banner--show-testimonial").css("display", "block");
    const userAgent = navigator.userAgent.toLowerCase();
    const isTablet =
      /(ipad|tablet|(android(?!.*mobile))|(windows(?!.*phone)(.*touch))|kindle|playbook|silk|(puffin(?!.*(IP|AP|WP))))/.test(
        userAgent
      );

    if (
      navigator.userAgent.match(/Android/i) ||
      navigator.userAgent.match(/webOS/i) ||
      navigator.userAgent.match(/iPhone/i) ||
      // || navigator.userAgent.match(/iPad/i)
      navigator.userAgent.match(/iPod/i) ||
      navigator.userAgent.match(/BlackBerry/i) ||
      navigator.userAgent.match(/Windows Phone/i)
    ) {
      $(".slick-slider-banner-rvw").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
        Boolean,
      });
    } else if (isTablet) {
      $(".slick-slider-banner-rvw").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
      });
    } else {
      $(".slick-slider-banner-rvw").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: false,
      });
    }
  }, 10);

  $(".nav-tabs-dropdown")
    .on("click", "li:not('.active') a", function (event) {
      $(this).closest("ul").removeClass("open");
    })
    .on("click", "li.active a", function (event) {
      $(this).closest("ul").toggleClass("open");
    });
  $(window).resize(function () {
    if ($(window).width() >= 980) {
      $(".navbar .dropdown-toggle").hover(function () {
        $(this).parent().toggleClass("show");
        $(this).parent().find(".dropdown-menu").toggleClass("show");
      });
      $(".navbar .dropdown-menu").mouseleave(function () {
        $(this).removeClass("show");
      });
    }
  });

  // $(".nav-item").mouseover(function () {
  //   $(".bs--show-navbar-link-section").show();
  // });

  // if ($(".bs--show-navbar-link-section").css("display") === "block") {
  //   $(document).click(function () {
  //     $(".bs--show-navbar-link-section").hide();
  //   });
  // }
  $(".carousel").carousel({
    pause: "false",
    interval: false,
  });
});

function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
