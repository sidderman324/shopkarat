$(document).ready(function(){

  var mainBannerSlider = new Swiper ('#mainPagePromoSlider', {
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    speed: 300,
    autoplay: {
      delay: 4000,
    },

    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  })


  var catalogPopularSlider = new Swiper ('#catalogPopularSlider', {
    direction: 'horizontal',
    slidesPerView: 4,
    loop: true,
    spaceBetween: 20,
    speed: 300,

    navigation: {
      nextEl: '.catalogPopularSlider-next',
      prevEl: '.catalogPopularSlider-prev',
    },

  })


  var partnersSlider = new Swiper ('#partnersSlider', {
    direction: 'horizontal',
    slidesPerView: 6,
    loop: true,
    spaceBetween: 20,
    speed: 300,

    navigation: {
      nextEl: '.w',
      prevEl: '.partnersSlider-prev',
    },

  })

});
