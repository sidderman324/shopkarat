$(document).ready(function(){


  // Функция открывания спойлеров в фильтре
  $('.filter_spoiler_title').on('click', function(){
    $(this).parents('.filter_spoiler').toggleClass('opened');
  })



  $( function() {
    var min = parseInt($('#priceIntervalMin').attr('data-price-start'));
    var max = parseInt($('#priceIntervalMax').attr('data-price-end'));


    $( "#priceIntervalSlider" ).slider({
      range: true,
      step: 10,
      min: min,
      max: max,
      values: [ min, max ],
      slide: function( event, ui ) {
        $("#currentStart").text(ui.values[0]);
        $("#currentEnd").text(ui.values[1]);
      }
    });

    $("#currentStart").text(min);
    $("#currentEnd").text(max);
  } );



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
