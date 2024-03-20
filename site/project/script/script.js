var carousalConfig = {
  btnNext: ".default .next",
  btnPrev: ".default .prev",
  btnGo: [],
  visible: 2,
  start: 0,
  afterEnd: function(a) {
  // add a class to next element so we can attach click events
    a.next().css({
      opacity: .50
    }).addClass("blurred");
    
    // remove class to remove event attachment
    a.prev().css({
      opacity: 1
    }).removeClass("blurred");
  }
};

$(document).ready(function() {
  let carousel = $('.custom-container');
  carousel.jCarouselLite(carousalConfig);
  // Carousel is initatied so attach click event handler to `.blurred` class
  carousel.on("click", ".blurred", function() {
    carousel.trigger('go');
  })
});