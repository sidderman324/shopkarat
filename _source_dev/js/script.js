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






  // Открытие ярлычка
  $('.js-label-open').on('click',function(e){
    e.preventDefault();
    var label_class = $(this).attr('data-label-name');

    var posX = $(this).offset().left + $(this).width() - $('.' + label_class).width() / 2;
    var posY = $(this).offset().top + $(this).height() + 10;

    $('.' + label_class).css({ 'top': posY + 'px', 'left': posX + 'px' });
    $('.' + label_class).addClass('visible');

    setTimeout(function () {
      $('.' + label_class).removeClass('visible');
    }, 2000)

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






  // Открытие попап окна
  $('.js-filters-show').on('click',function(e){
    e.preventDefault();

    $('.filter_block').addClass('visible');
  });

  // Закрытие попап окна
  $('.js-filters-hide').on('click',function(e){
    e.preventDefault();

    $('.filter_block').removeClass('visible');
  });





  $(".checkout_type").on('change', function(){
    var name = $(this).attr('name');
    var id = $(this).attr('id');

    if(name == 'order_type') {
      $('.order_type').removeClass('visible');
      $('#content_'+id).addClass('visible');
    } else if (name == 'delivery_type') {
      $('.delivery_type').removeClass('visible');
      $('#content_'+id).addClass('visible');
    }
  });










  // Валидация телефона

  $('.js-phone-validate').on('input', function() {

    var phone = $(this).val();

    var parent = $(this).parents('.input_box');
    var re = /^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm;

    console.log(re.test(phone));

    if(!re.test(phone)) {
      parent.addClass('warning');
    } if (re.test(phone)) {
      parent.removeClass('warning');
    }


  });


  // валидация почты
  $('.js-email-validate').on('input', function() {

    var mail = $(this).val();
    console.log(mail)

    if(mail.length > 5) {
      var parent = $(this).parents('.input_box');
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      if(!re.test(mail)) {
        parent.addClass('warning');
      } if (re.test(mail)) {
        parent.removeClass('warning');
      }
    }


  });





  // залипание общей инфо о заказе
  function result_block_pos() {
    var scroll = parseInt($(window).scrollTop());
    var winwidth = $(window).width();
    var winheight = $(window).height();
    if($('section').hasClass('ordering')) {
      var start_point = $('.ordering .title').offset().top;
      var delta = 0;

      if ((scroll > start_point)) {
        delta = scroll - start_point;
      } else {
        delta = 0;
      }

      $('.odrer_summary').css('transform','translateY('+ delta +'px)');

      //
      // var fixed_point = $('.calc_block').offset().top + $('.calc_block').height();
      // if(winwidth < 900) {
      //
      //   if((scroll + winheight) > fixed_point) {
      //     $('.odrer_summary').removeClass('fixed');
      //   } else {
      //     $('.odrer_summary').addClass('fixed');
      //   }
      // }

    }
  }
  $(document).ready(result_block_pos);
  $(window).scroll(result_block_pos);
  $(window).resize(result_block_pos);





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
    $(this).parent().prev().prev().val($(this).attr('data-value'));
  });

  $(document).click(function (e) {
    if (!$(e.target).closest('.select').length) {
      $('.select_head').removeClass('open');
      $('.select_list').fadeOut(100);
    }
  });






  $('.js-menu-toggle').on('click',function(e){
    e.preventDefault();
    $('.top_menu_block nav').slideToggle(200);
    $('.top_menu_block nav').toggleClass('opened');
    $('.burger').toggleClass('active');
    $('.page-header').toggleClass('opened');
  });

  function menuShow() {
    winWidth = $(window).width()

    if (winWidth > 680) {
      $('.burger').removeClass('active');
      $('.top_menu_block nav').removeClass('opened');
      $('.page-header').removeClass('opened');
      $('.top_menu_block nav').fadeIn(200);
    }
  }
  $(window).resize(menuShow);



  $('.menu_section_link').on('click',function(e){
    winWidth = $(window).width()

    if (winWidth < 680) {
      e.preventDefault();
      $(this).parents('.menu_link_box').toggleClass('opened');
    }
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

    breakpoints: {
      680: {
        slidesPerView: 1,
        spaceBetween: 20
      }
    }

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

    breakpoints: {
      680: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }

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
