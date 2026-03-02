$(window).on("load", function () {

  // Initialize SAL safely
  if (typeof sal === "function") {
    sal();
  }

  // Initialize Slick only if element exists
  if ($(".route-slider").length) {
    $(".route-slider").slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 6,
      slidesToScroll: 1,
      accessibility: false,
      responsive: [
        // {
        //   breakpoint: 992,
        //   settings: { slidesToShow: 3 }
        // },
        {
          breakpoint: 768,
          settings: { slidesToShow: 2 }
        },
        // {
        //   breakpoint: 480,
        //   settings: { slidesToShow: 1 }
        // }
      ]
    });
  }

});