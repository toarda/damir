$(document).ready(function() {
    // Initialize the carousel
    $('#heroCarousel').carousel();
  
    // Enable the indicators to control the carousel
    $('.carousel-indicators li').click(function() {
      var slideTo = $(this).attr('data-slide-to');
      $('#heroCarousel').carousel(parseInt(slideTo));
    });
  
    // Enable the controls to move the carousel left and right
    $('.carousel-control-prev').click(function() {
      $('#heroCarousel').carousel('prev');
    });
    $('.carousel-control-next').click(function() {
      $('#heroCarousel').carousel('next');
    });
  });
  