
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.page-top');
  topBtn.hide();

  

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  
  $(document).on('click', 'a[href*="#"]', function () {
    var time = 400;
    var header = $('.p-sub-header').innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top  - header;
    $('html,body').animate({
      scrollTop: targetY
    }, time, 'swing');

    return false;
  });

  var header = $('.p-sub-header').outerHeight();
  var urlHash = location.hash;
  if(urlHash) {
      $('body,html').stop().scrollTop(0);
      setTimeout(function(){
          var target = $(urlHash);
          var position = target.offset().top - header;
          $('body,html').stop().animate({scrollTop:position}, 500);
      }, 100);
  }

  $('.js-hamburger').click(function(){
    $(this).toggleClass('is-active');
    $(this).parents().next().find('.p-drawer').toggleClass('is-active');
    $('html').toggleClass('is-fixed');
  });

  $('.p-drawer__link a').click(function(){
    $('.js-hamburger').removeClass('is-active');
    $('.p-drawer').removeClass('is-active');
    $('html').removeClass('is-fixed');
  });

  function fadeInView() {
    var windowTop = $(window).scrollTop();
    var windowBottom = windowTop + $(window).height();
  
    $('.js-animation, .js-fade').each(function() {
        var elementTop = $(this).offset().top + 100;
        var elementBottom = elementTop + $(this).outerHeight();
  
        if ((elementBottom >= windowTop) && (elementTop <= windowBottom)) {
            $(this).addClass('is-active');
        }
    });
  }
  
  $(document).ready(function() {
      fadeInView();
  });
  
  $(window).scroll(function() {
      fadeInView();
  });


  $('.c-card__title p').each(function(){
    var text = $(this).text(); // テキストを取得
    if (text.length > 15) {
        var truncatedText = text.substring(0, 12) + '...'; // 12文字まで取得し、3点リーダーを追加
        $(this).text(truncatedText); // テキストを更新
    }
});



});
