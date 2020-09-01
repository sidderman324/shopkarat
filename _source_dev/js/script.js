$(document).ready(function(){


  // Функция открывания спойлеров в фильтре
  $('.filter_spoiler_title').on('click', function(){
    $(this).parents('.filter_spoiler').toggleClass('opened');
  });



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

        $("#priceIntervalMin").val(ui.values[0]);
        $("#priceIntervalMax").val(ui.values[1]);
      }
    });

    $("#currentStart").text(min);
    $("#currentEnd").text(max);

    $("#priceIntervalMin").val(min);
    $("#priceIntervalMax").val(max);
  });


  // Открытие попап окна
  $('.js-popup-open').on('click',function(e){
    e.preventDefault();

    var popup_class = $(this).attr('data-popup-name');

    $('.popup_bgr').addClass('visible');
    $('.' + popup_class).addClass('visible');

  });

  // Закрытие попап окна
  $('.js-popup-close').on('click',function(e){
    e.preventDefault();

    $('.popup_bgr').removeClass('visible');
    $('.popup_block').removeClass('visible');
  });




  var stars;

  $('#js-rating-review').mousemove(function(evt) {
    var x = evt.pageX - $('#js-rating-review').offset().left;
    var elWidth = $('#js-rating-review').width();
    var percent = null;

    if ((x > 0) && (x < elWidth)) {
      percent = x / elWidth * 100;
    } else {
      $('#js-rating-review').find('.rating_star').removeClass('rating_star--full').addClass('rating_star--empty');
    }

    $('#js-rating-review').find('.rating_star').removeClass('rating_star--full').addClass('rating_star--empty');

    stars = Math.floor(percent / 20) + 1;

    for (var i = 0; i < stars; i++) {
      $('#js-rating-review').find('.rating_star').eq(i).removeClass('rating_star--empty').addClass('rating_star--full');
    }

  });

  $('#js-rating-review').mouseleave(function(e) {
    var selectedRating = parseInt($('#selected_rating').attr('value'));

    if(selectedRating) {
      for (var i = 0; i < selectedRating; i++) {
        $('#js-rating-review').find('.rating_star').eq(i).removeClass('rating_star--empty').addClass('rating_star--full');
      }
    } else {
      $('#js-rating-review').find('.rating_star').removeClass('rating_star--full').addClass('rating_star--empty');
    }
  });

  $('#js-rating-review').on('click', function(){
    $('#selected_rating').attr('value',stars);
  });



  // Переключение табов в характеристиках

  $('.product_tabs_head_item').on('click',function(e){
    e.preventDefault();

    var index = $(this).index();
    $('.product_tabs_head_item').removeClass('active');
    $('.product_tabs_body_item').removeClass('active');
    $(this).addClass('active');
    $('.product_tabs_body_item').eq(index).addClass('active');

  })



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
      nextEl: '.partnersSlider-next',
      prevEl: '.partnersSlider-prev',
    },

  })


  var watchBeforeSlider = new Swiper ('#watchBeforeSlider', {
    direction: 'horizontal',
    slidesPerView: 8,
    loop: true,
    spaceBetween: 20,
    speed: 300,

    navigation: {
      nextEl: '.partnersSlider-next',
      prevEl: '.partnersSlider-prev',
    },

  })

});
