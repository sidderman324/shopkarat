$(document).ready(function(){


  // Функция открывания спойлеров в фильтре
  $(document).on('click', '.filter_spoiler_title', function(e) {
    $(this).parents('.filter_spoiler').toggleClass('opened');
  });


  $( function() {

    $('.filter_spoiler_price_interval').each(function(){

      var inputMin = $(this).find('.input_box').eq(0).find('.input_text');
      var inputMax = $(this).find('.input_box').eq(1).find('.input_text');

      var textMin = $(this).find('.blackoutLeft');
      var textMax = $(this).find('.blackoutRight');

      var min = parseInt(inputMin.attr('data-val'));
      var max = parseInt(inputMax.attr('data-val'));


      $(this).find('.slider').slider({
        range: true,
        step: 10,
        min: min,
        max: max,
        values: [ min, max ],
        slide: function( event, ui ) {
          textMin.text(ui.values[0]);
          textMax.text(ui.values[1]);

          inputMin.val(ui.values[0]);
          inputMax.val(ui.values[1]);
        },
        change: function() {
          smartFilter.keyup(this);
        }
      });


      textMin.text(min);
      textMax.text(max);

      inputMin.val(min);
      inputMax.val(max);



      inputMin.on('input', function(){
        updateSlider();
      });
      inputMax.on('input', function(){
        updateSlider();
      });
    });
  });


  function updateSlider() {
    $('.filter_spoiler_price_interval').each(function(){

      var inputMin = $(this).find('.input_box').eq(0).find('.input_text');
      var inputMax = $(this).find('.input_box').eq(1).find('.input_text');

      var textMin = $(this).find('.blackoutLeft');
      var textMax = $(this).find('.blackoutRight');

      var minPrice = parseInt(inputMin.attr('data-val'));
      var maxPrice = parseInt(inputMax.attr('data-val'));

      var min = parseInt(inputMin.val());
      var max = parseInt(inputMax.val());

      if (max > maxPrice) { max = maxPrice }
      if (min < minPrice) { min = minPrice }

      if(min < max) {
        textMin.text(min);
        textMax.text(max);
        $(this).find('.slider').slider( "values", [ min, max ] );

        inputMin.val(min);
        inputMax.val(max);
      } else if (max < min) {
        textMin.text(max);
        textMax.text(min);
        $(this).find('.slider').slider( "values", [ max, min ] );

        inputMin.val(max);
        inputMax.val(min);
      }



    });

  }






  // Открытие ярлычка
  $(document).on('click', '.js-label-open', function(e) {
    e.preventDefault();
    var label_class = $(this).attr('data-label-name');

    var posX = $(this).offset().left + $(this).width();
    var posY = $(this).offset().top + $(this).height() + 10;

    $('.' + label_class).css({ 'top': posY + 'px', 'left': posX + 'px' });
    $('.' + label_class).addClass('visible');

    setTimeout(function () {
      $('.' + label_class).removeClass('visible');
    }, 4000)

  });




  function getWidthTabCompare() {
    var cw = $('.left_block').width();

    $('.comparing_tabs_body_item').each(function(){
      var amount = $(this).find('.product_item').length;
      $(this).find('.product_item').css('width', cw);
      $(this).find('.scroll_block_inner').css('width', cw * amount);
    });

  };
  getWidthTabCompare();





  $(document).on('click', '.catalog_card_amount_btn', function(e) {
    var input = $(this).parents('.catalog_card_amount_block').find('.amount_input');
    var current = parseInt(input.val());

    if ($(this).hasClass('catalog_card_amount_btn--minus')) {
      if (current > 1) {
        current = current - 1;
      } else {
        current = 1;
      }

    } else if ($(this).hasClass('catalog_card_amount_btn--plus')) {
      current = current + 1;
    }

    input.val(current)

  })




  // Открытие попап окна
  $(document).on('click', '.js-popup-open', function(e) {
    e.preventDefault();

    var popup_class = $(this).attr('data-popup-name');

    $('.popup_bgr').addClass('visible');
    $('.' + popup_class).addClass('visible');

  });

  // Закрытие попап окна
  $(document).on('click', '.js-popup-close', function(e) {
    e.preventDefault();

    $('.popup_bgr').removeClass('visible');
    $('.popup_block').removeClass('visible');
  });


  // Закрытие попап окна
  $(document).on('click', '.js-order-more-label', function(e) {
    e.preventDefault();

    $('.more_info_label').removeClass('visible');
    var label = $(this).parents('td').find('.more_info_label');
    label.addClass('visible');
  });


  // Открытие меню

  $(document).on('click', '.js-show-catalog-menu', function(e) {
    e.preventDefault();

    $(this).toggleClass('active');
    $('.hover_menu_block').toggleClass('visible');
  });


  $(document).on('click', '.js-submenu-toggle', function(e) {
    e.preventDefault();

    $(this).toggleClass('active');
    $(this).parents('li').find('.spoiler_level').toggleClass('visible');
  });

  $(document).on('click', '.bottom_menu_block, .middle_menu_block, section', function(e) {
    if($('.hover_menu_block').hasClass('visible')) {
      $('.js-show-catalog-menu').removeClass('active');
      $('.hover_menu_block').removeClass('visible');
    }
  })






  // Открытие попап окна
  $(document).on('click', '.js-filters-show', function(e) {
    e.preventDefault();

    $('.filter_block').addClass('visible');
  });

  // Закрытие попап окна
  $(document).on('click', '.js-filters-hide', function(e) {
    e.preventDefault();

    $('.filter_block').removeClass('visible');
  });



  function disabledInputs() {
    if($('.ordering')) {

      $('.input_text').each(function(){
        $(this).attr('disabled',true)

        var parent = $(this).parents('.hidden_block');
        if(parent.hasClass('visible')) {
          $(this).removeAttr('disabled');
        }
      })
    }
  }

  // disabledInputs();



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

    disabledInputs();
  });










  // Валидация телефона

  $('.js-phone-validate').on('input', function() {

    var phone = $(this).val();

    var parent = $(this).parents('.input_box');
    var re = /^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm;

    if(!re.test(phone)) {
      parent.addClass('warning');
    } if (re.test(phone)) {
      parent.removeClass('warning');
    }


  });


  // валидация почты
  $('.js-email-validate').on('input', function() {

    var mail = $(this).val();

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


      if(winwidth < 680) {

      } else {
        // $('.odrer_summary').css('transform','translateY('+ delta +'px)');
      }

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

  $(document).on('click', '#js-rating-review', function(e) {
    $('#selected_rating').attr('value',stars);
  });



  function getBasketTabs() {
    if($('section').hasClass('basket')) {
      var url = document.location.hash;
      var ind = null;
      if(url == '#basket') {
        ind = 0;
      } else if(url == '#favorite') {
        ind = 1;
      }

      $('.tabs_head_item').removeClass('active');
      $('.tabs_head_item').eq(ind).addClass('active');

      $('.tabs_body_item').removeClass('active');
      $('.tabs_body_item').eq(ind).addClass('active');
    }
  };

  getBasketTabs();





  // Переключение табов в характеристиках

  $(document).on('click', '.tabs_head_item', function(e) {
    e.preventDefault();

    var index = $(this).index();
    $('.tabs_head_item').removeClass('active');
    $('.tabs_body_item').removeClass('active');
    $(this).addClass('active');
    $('.tabs_body_item').eq(index).addClass('active');

  });




  $('.select').on('click','.select_head', function () {
    $('.select_head').addClass('open');
    $('.select_list').fadeIn(100);
    $(this).addClass('open');
    $(this).next().fadeIn(100);
  });

  $('.select').on('click','.select_item', function () {
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






  $(document).on('click', '.js-menu-toggle', function(e) {
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



  $(document).on('click', '.menu_section_link', function(e) {
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
    touchEventsTarget: false,
    allowTouchMove: false,

    navigation: {
      nextEl: '.catalogPopularSlider-next',
      prevEl: '.catalogPopularSlider-prev',
    },

    breakpoints: {
      1024: {
        slidesPerView: 3,
        spaceBetween: 20
      },
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
      1024: {
        slidesPerView: 4,
        spaceBetween: 20
      },
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
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 20
      },
      680: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }

  })




  function getMapsContacts() {
    if($('section').hasClass('contacts')) {

      // Карта
      ymaps.ready(function()
      {
        var center = [45.070708, 38.918971];
        var map = new ymaps.Map('krasnodar_map', {
          center: center,
          zoom: 15,
          controls: ['zoomControl', 'typeSelector'],
        }, {
          suppressMapOpenBlock: true,
        });

        map.behaviors.disable('scrollZoom');

        map.geoObjects.add(new ymaps.Placemark(center, {}, {
          iconLayout: 'default#image',
        }));
      });


      ymaps.ready(function()
      {
        var center = [44.989949, 41.110087];
        var map = new ymaps.Map('armavir_map', {
          center: center,
          zoom: 15,
          controls: ['zoomControl', 'typeSelector'],
        }, {
          suppressMapOpenBlock: true,
        });

        map.behaviors.disable('scrollZoom');

        map.geoObjects.add(new ymaps.Placemark(center, {}, {
          iconLayout: 'default#image',
        }));
      });


      ymaps.ready(function()
      {
        var center = [43.602024, 39.736698];
        var map = new ymaps.Map('sochi_map', {
          center: center,
          zoom: 15,
          controls: ['zoomControl', 'typeSelector'],
        }, {
          suppressMapOpenBlock: true,
        });

        map.behaviors.disable('scrollZoom');

        map.geoObjects.add(new ymaps.Placemark(center, {}, {
          iconLayout: 'default#image',
        }));
      });


      ymaps.ready(function()
      {
        var center = [44.959240, 34.131166];
        var map = new ymaps.Map('simferopol_map', {
          center: center,
          zoom: 15,
          controls: ['zoomControl', 'typeSelector'],
        }, {
          suppressMapOpenBlock: true,
        });

        map.behaviors.disable('scrollZoom');

        map.geoObjects.add(new ymaps.Placemark(center, {}, {
          iconLayout: 'default#image',
        }));
      });

    }
  }


  getMapsContacts();



});
