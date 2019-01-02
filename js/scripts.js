$( document ).ready(function() {

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

  $(window).scroll(function(event){
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    player1 = $('player').offset().top;
    if (scrollTop > player1){
      
    }
    // console.log(scrollTop);
    // console.log($('player').offset().top);
  });

  

  

  //VIDEO
//   const player = new Plyr('.js-player', {
//     "autoplay": true
// });
//   const players = Array.from(document.querySelectorAll('.player')).map(p => new Plyr(p));
//   $.each( players, function(key) {
//     const playPromise = players[key].play();
//     if (playPromise !== null){
//       playPromise.catch(() => { players[key].play(); })
//     }
//   });
//   var media = document.getElementById("YourVideo");
// const playPromise = media.play();
// if (playPromise !== null){
//     playPromise.catch(() => { media.play(); })
// }
//   setTimeout(function() {
//     $.each( players, function(key) {
//     players[key].pause();
// players[key].play();
//     console.log(players[key].play());
//   });
// }, 0);

});