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

  $("#priceIntervalMin").on('change', function(){
    updateSlider();
  })
  $("#priceIntervalMax").on('change', function(){
    updateSlider();
  })

  function updateSlider() {
    var min = parseInt($('#priceIntervalMin').val());
    var max = parseInt($('#priceIntervalMax').val());

    var minPrice = parseInt($('#priceIntervalMin').attr('data-price-start'));
    var maxPrice = parseInt($('#priceIntervalMax').attr('data-price-end'));

    if (max > maxPrice) { max = maxPrice }
    if (min < minPrice) { min = minPrice }

    if(min < max) {
      $("#currentStart").text(min);
      $("#currentEnd").text(max);
      $("#priceIntervalSlider").slider( "values", [ min, max ] );

      $('#priceIntervalMin').val(min);
      $('#priceIntervalMax').val(max);
    } else if (max < min) {
      $("#currentStart").text(max);
      $("#currentEnd").text(min);
      $("#priceIntervalSlider").slider( "values", [ max, min ] );

      $('#priceIntervalMin').val(max);
      $('#priceIntervalMax').val(min);
    }
  }





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


  // Закрытие попап окна
  $('.js-order-more-label').on('click',function(e){
    e.preventDefault();

    $('.more_info_label').removeClass('visible');
    var label = $(this).parents('td').find('.more_info_label');
    label.addClass('visible');
  });


  // Открытие меню

  $('.js-show-catalog-menu').on('click',function(e){
    e.preventDefault();

    $(this).toggleClass('active');
    $('.hover_menu_block').toggleClass('visible');
  });

  $('.bottom_menu_block, .middle_menu_block, section').on('click', function(){
    if($('.hover_menu_block').hasClass('visible')) {
      $('.js-show-catalog-menu').removeClass('active');
      $('.hover_menu_block').removeClass('visible');
    }
  })




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

  $('.tabs_head_item').on('click',function(e){
    e.preventDefault();

    var index = $(this).index();
    $('.tabs_head_item').removeClass('active');
    $('.tabs_body_item').removeClass('active');
    $(this).addClass('active');
    $('.tabs_body_item').eq(index).addClass('active');

  });




  $('.select').on('click', '.select_head', function () {
    $('.select_head').addClass('open');
    $('.select_list').fadeIn(100);
    $(this).addClass('open');
    $(this).next().fadeIn(100);
  });

  $('.select').on('click', '.select_item', function () {
    $('.select_head').removeClass('open');
    $(this).parent().fadeOut(100);
    $(this).parent().prev().text($(this).text());
    $(this).parent().prev().prev().val($(this).text());
  });

  $(document).click(function (e) {
    if (!$(e.target).closest('.select').length) {
      $('.select_head').removeClass('open');
      $('.select_list').fadeOut(100);
    }
  });



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
    breakpoints: {
    1480: {
      slidesPerView: 6,
      spaceBetween: 20
    }
  }

  })

});
