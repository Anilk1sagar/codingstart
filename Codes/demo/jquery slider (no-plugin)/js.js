$(document).ready(function(){

  //configuration
  var currentSlide = 1;

  //cache DOM
  var $slider = $('#slider');
  var $slideContainer = $slider.find('.slides');
  var $slides = $slideContainer.find('.slide');

  var interval;

  //start slider

  function startSlider(){
    interval = setInterval(function(){
        $slideContainer.animate({'margin-left': '-=' + 700}, 1000, function(){
            currentSlide++;
            if (currentSlide === $slides.length) {
              currentSlide = 1;
              $slideContainer.css('margin-left', 0);
            }
        });
    }, 3000);
  }

  //for stoping the slider when mouse hover function
  function stopSlider() {
    clearInterval(interval);
  }

  startSlider();

  $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);

});