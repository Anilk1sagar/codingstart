$(document).ready(function(){

  $('.ripple').materialripple();
  
  //inputs 
  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });


  //this is for nice scrolling the whole body
  $("html").niceScroll({
    scrollspeed: 100,
    mousescrollstep: 38,
    cursorwidth: 5,
    cursorborder: 0,
    cursorcolor: '#01bbd4',
    autohidemode: true,
    zindex: 999999999,
    horizrailenabled: false,
    cursorborderradius: 4,
  });

  //Scroll to top aimation
  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 140) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });

  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

});

var navbar = document.getElementById('my-navbar');

function openNav() {
  navbar.style.left = '0px';
  document.getElementById('overlay').style.display = 'block';
}

function closeNav() {
  navbar.style.left = '-250px';
  document.getElementById('overlay').style.display = 'none';
}

