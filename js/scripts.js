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

  //Плавный скролл
  $(document).on('click', '.left-menu a[href^="#"]', function (event) {
    event.preventDefault();
    var target = $($.attr(this, 'href'));
    var targetScroll =  target.offset().top - 50
    $('html, body').animate({
        scrollTop: targetScroll
    }, 500);
  });

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

  var mySwiperProductPrice = new Swiper ('.swiper-product_price', {
    slidesPerView: 1,
    loop: true,
    autoHeight: true,
    navigation: {
      nextEl: '.swiper-product-price-button-next',
      prevEl: '.swiper-product-price-button-prev',
    },
  });

  console.log($('.playerone').height());

  $(window).scroll(function(event){
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    playerOneTop = $('.playerone').offset().top - 195;
    playerTwoTop = $('.playertwo').offset().top - 195;
    playerThreeTop = $('.playerthree').offset().top - 195;
    playerFourTop = $('.playerfour').offset().top - 195;
    playerFiveTop = $('.playerfive').offset().top - 195;
    playerSixTop = $('.playersix').offset().top - 195;
    if (scrollTop > playerOneTop && scrollTop < (playerOneTop + $('.playerone').height())){
      $('.playerone>video').get(0).play();
    } else {
      $('.playerone video').get(0).pause();
    }
    if (scrollTop > playerTwoTop  && scrollTop < (playerTwoTop + $('.playertwo').height())){
      $('.playertwo>video').get(0).play();
    } else {
      $('.playertwo video').get(0).pause();
    }
    if (scrollTop > playerThreeTop && scrollTop < (playerThreeTop + $('.playerthree').height())){
      $('.playerthree>video').get(0).play();
    } else {
      $('.playerthree video').get(0).pause();
    }
    if (scrollTop > playerFourTop && scrollTop < (playerFourTop + $('.playerfour').height())){
      $('.playerfour>video').get(0).play();
    } else {
      $('.playerfour video').get(0).pause();
    }
    if (scrollTop > playerFiveTop && scrollTop < (playerFiveTop + $('.playerfive').height())){
      $('.playerfive>video').get(0).play();
    } else {
      $('.playerfive video').get(0).pause();
    }
    if (scrollTop > playerSixTop && scrollTop < (playerSixTop + $('.playersix').height())){
      $('.playersix>video').get(0).play();
    } else {
      $('.playersix video').get(0).pause();
    }
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