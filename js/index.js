/**Martin Podmanicky,
 * Dominik Tulach
 * 
 * WTECH - ESHOP
 * 
 * Hudobne Nastroje
 */

const Hello = function () {
    console.log("Hello World!");
};

var carouselWidth = $(".carousel-inner")[0].scrollWidth;
var cardWidth = $(".carousel-item").width();
var scrollPosition = 0;
$(".carousel-control-next").on("click", function () {
    if (scrollPosition < (carouselWidth - cardWidth * 4)) { //check if you can go any further
      scrollPosition += cardWidth;  //update scroll position
      $(".carousel-inner").animate({ scrollLeft: scrollPosition },600); //scroll left
    }
  });
