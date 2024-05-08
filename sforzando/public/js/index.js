const Hello = function () {
  console.log("Hello World!");
};

const multipleItemCarousel = document.getElementById("categoriesCarousel");

if (window.matchMedia('(min-width: 768px)').matches) {
  const carousel = new bootstrap.Carousel(multipleItemCarousel, {
    interval: false,
  });

  var carouselWidth = $(".carousel-inner").prop('scrollWidth');
  var cardWidth = $(".carousel-item").width();

  var scrollPosition = 0;

  $(".carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - (cardWidth * 3)) {
      console.log("next");
      scrollPosition += cardWidth;  //update scroll position
      $(".carousel-inner").animate({ scrollLeft: scrollPosition },
        300); //scroll left
    }
  });

  $(".carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      console.log("prev");
      scrollPosition -= cardWidth;  //update scroll position
      $(".carousel-inner").animate({ scrollLeft: scrollPosition },
        300); //scroll right 
    }
  });
} else {
  multipleItemCarousel.classList.add("slide");
}
