jQuery(function($){

    $('.js-mv-slider').slick({
        arrows:false,
        slidesToShow:1,
        dots:true,
        arrow:true,
        autoplay:true,
        autoplaySpeed: 5000,
        speed: 1500,
        fade:true,
        dotsClass: 'slider-dots',
        responsive: [
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1, 
                arrows:false,
                autoplaySpeed: 4000,
              }
            }
        ]
    });

    $('.js-tab').click(function(){
      $('.js-tab').removeClass('is-active');
      $(this).toggleClass('is-active');
      let index = $(this).index();
      $('.p-topNews__block').addClass('u-hide');
      $('.p-topNews__block').eq(index).removeClass('u-hide');
    });

    $(window).scroll(function () {
      if ($(this).scrollTop() > 70) {
        $('.p-sub-header').addClass('is-active');
      } else {
        $('.p-sub-header').removeClass('is-active');
      }
    });
});