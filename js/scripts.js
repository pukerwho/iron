$(function(){

  $('.toogle-menu').on('click', function(e) {
    e.preventDefault;
    $(this).toggleClass('toogle-menu_active');
    $('.slide-menu').toggleClass('slide-menu_active');
    $('.menu li').toggleClass('animate-left');
  });

  $(window).scroll(function(){
    var h_scroll = $(this).scrollTop();
    if (h_scroll > 50) {
      $('header').addClass('header-scroll')
    } else {
      $('header').removeClass('header-scroll')
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
  //SWIPER STEPS
  if ($(document).width() < 960) {
    var mySwiperVideoMobile = new Swiper ('.swiper-steps', {
      slidesPerView: 1,
      spaceBetween: 30,
      simulateTouch: true,
      loop: false,
    });
  };
});