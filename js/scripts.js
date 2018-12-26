$(function(){

  $('.toogle-menu').on('click', function(e) {
    e.preventDefault;
    $(this).toggleClass('toogle-menu_active');
    $('.slide-menu').toggleClass('slide-menu_active');
    $('.menu li').toggleClass('animate-left');
  });

  $(window).scroll(function(){
    var h_scroll = $(this).scrollTop();
    if (h_scroll > 56) {
      $('header').addClass('header__fixed')
    } else {
      $('header').removeClass('header__fixed')
    }
  })

  //SWIPER STEPS
  if ($(document).width() > 960) {
    var mySwiperVideo = new Swiper ('.swiper-steps', {
      slidesPerView: 'auto',
      spaceBetween: 30,
      simulateTouch: true,
      loop: false,
    });
  };
});