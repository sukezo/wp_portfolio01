$(function () {
  var page_top = $('#js-scroll-top')
  $(window).scroll(function () {
    //ここの > 100 の数字がどれくらいスクロールしたら出現させるか数字変えてみて確認してみてね！
    if ($(this).scrollTop() > 100) {
      page_top.addClass('is-fadein')
    } else {
      page_top.removeClass('is-fadein')
    }
  })
  page_top.on('click', function () {
    $('body,html').animate({
      scrollTop: 0,
    }, 500)
    return false
  })
})

// スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動。ヘッダーの高さ考慮。)
$(document).on('click', 'a[href*="#"]', function () {
  let time = 400;
  let header = $('header').innerHeight();
  let target = $(this.hash);
  if (!target.length) return;
  let targetY = target.offset().top - header;
  $('html,body').animate({ scrollTop: targetY }, time, 'swing');
  return false;
});

// スクロールしたらヘッダーの色が変わる
$(function () {
  $(window).on('scroll', function () {
    if ($('.p-header').height()  < $(this).scrollTop()) {
        $('.js-header').addClass('color-change');
    } else {
        $('.js-header').removeClass('color-change');
    }
  });
  
});

// swiper
let worksSwiper = new Swiper ('.js-top-works__slider', {
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  
  loop: true,
  
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  }
});

  // ハンバーガーメニュー
  $('.js-hamburger-btn').click(function () {
    $(this).toggleClass('open');
    if($(this).hasClass('open')){
      $('.js-drawer').fadeIn();
    }else{
      $('.js-drawer').fadeOut();
    }
  })

  $(window).on('load resize', function(){
    var wid = $(window).width();
    if (wid >= 768) {
      $('.js-drawer').css('display','block');
    } else {
      $('.js-drawer').css('display','none');
    }
  });